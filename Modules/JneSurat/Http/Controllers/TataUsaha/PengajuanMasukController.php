<?php

namespace Modules\JneSurat\Http\Controllers\TataUsaha;

use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneSurat\Entities\Log;
use Modules\JneSurat\Entities\Pengajuan;
use Illuminate\Contracts\Support\Renderable;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Modules\JneSurat\Http\Requests\Tatausaha\TerimaSuratRequest;

class PengajuanMasukController extends Controller
{

    public function index()
    {
        $data['list_pengajuan'] = Pengajuan::all();
        return view('jnesurat::tatausaha.pengajuan-masuk.index', $data);
    }


    public function show(Pengajuan $pengajuan_masuk)
    {
        $data['pengajuan_masuk'] = $pengajuan_masuk;
        return view('jnesurat::tatausaha.pengajuan-masuk.show', $data);
    }

    public function update(Pengajuan $pengajuan_masuk, TerimaSuratRequest $request)
    {
        $pengajuan_masuk->nomor_surat = request('nomor_surat');
        $pengajuan_masuk->tanggal_surat = request('tanggal_surat');
        $pengajuan_masuk->perihal_surat = request('perihal_surat');
        $pengajuan_masuk->keterangan_surat = request('keterangan_surat');
        $pengajuan_masuk->status = 201;
        $pengajuan_masuk->keterangan = 'diterima oleh tatausaha';
        $pengajuan_masuk->save();
        $pengajuan_masuk->draftsurat();

        $log = new Log();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengajuan = $pengajuan_masuk->id;
        $log->keterangan = 'diterima oleh tatausaha, dan diteruskan ke direktur';
        $log->status = 201;
        $log->save();

        $filepath = $request->file('draft_surat');
        $data = [
            'nomor_surat' =>  request('nomor_surat'),
            'tanggal_surat' => request('tanggal_surat'),
            'perihal_surat' => request('perihal_surat'),
            'keterangan' => request('keterangan_surat'),
        ];
        $ttd = 'Uti ruslan';
        $output_file = $pengajuan_masuk->nama_pengajuan;
        $filename = "$pengajuan_masuk->nama_pengajuan .docx";

        // call function
        $qrlogo = $this->generateQrcode($output_file, $data, $ttd);
        $datasurat = $this->getDocument($filepath, $filename, $qrlogo);
        $pengajuan_masuk->draft_surat_ttd = $datasurat;
        $pengajuan_masuk->save();



        return redirect('jnesurat/tata-usaha/pengajuan-aktif')->with('success', 'pengajuan di teruskan');
    }
    public function tolakpengajuan(Pengajuan $pengajuan_masuk)
    {
        $pengajuan_masuk->status = 202;
        $pengajuan_masuk->keterangan = 'ditolak oleh tatausaha';
        $pengajuan_masuk->save();

        $log = new Log();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengajuan = $pengajuan_masuk->id;
        $log->keterangan = 'ditolak oleh tatausaha';
        $log->status = 202;
        $log->save();

        return redirect('jnesurat/tata-usaha/pengajuan-aktif')->with('warning', 'pengajuan di tolak');
    }

    function generateQrcode($output_file, $data, $ttd)
    {
        $logo =  public_path('/asset/logo/jne.png');
        $isi_text = "
        Memberikan Pengesahan Tanda tangan ke :
        nomor surat : " . $data['nomor_surat'] . "
        tanggal surat : " . $data['tanggal_surat'] . "
        perihal : " . $data['perihal_surat'] . "
        keterangan : " . $data['keterangan'];

        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create($isi_text)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create($logo)
            ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create($ttd)
            ->setTextColor(new Color(0, 0, 0));


        $result = $writer->write($qrCode, $logo, $label);
        $result->saveToFile(public_path("JneSurat/qr/$output_file.png"));

        return "JneSurat/qr/$output_file.png";
    }

    function getDocument($filepath, $filename,  $qrlogo)
    {
        $template = new TemplateProcessor($filepath);
        $qrdata = ['path' => $qrlogo, 'width' => 100, 'height' => 100];
        $template->setImageValue('qrcode', $qrdata);
        $template->saveAs(public_path("JneSurat/docx/draft-ttd/$filename"));

        return "JneSurat/docx/draft-ttd/$filename";
    }
}
