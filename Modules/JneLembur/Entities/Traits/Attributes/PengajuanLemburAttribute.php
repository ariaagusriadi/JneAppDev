<?php


namespace Modules\JneLembur\Entities\Traits\Attributes;

use Illuminate\Support\Str;

use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use PhpOffice\PhpWord\TemplateProcessor;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\QrCode;

use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Label\Label;


// php world
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;


trait PengajuanLemburAttribute
{
    function filesurat()
    {
        $this->deletefilesurat();
        if (request()->hasFile('file_list_karyawan')) {
            $file_list_karyawan = request()->file('file_list_karyawan');
            $destination = "JneLembur/docx" . "/" . date("Y") . "/" . date('m');
            $randomStr = Str::random(5);

            $filename =  'surat' . '-' . time() . '-' . $randomStr . '.' . $file_list_karyawan->extension();
            $url = $file_list_karyawan->storeAs($destination, $filename);
            $this->file_list_karyawan =  $url;
            $this->save();
        }
    }
    function fileterima()
    {
        if (request()->hasFile('file_list_terima')) {
            $file_list_terima = request()->file('file_list_terima');
            $destination = "JneLembur/docx/karyawan" . "/" . date("Y") . "/" . date('m');
            $randomStr = Str::random(5);

            $filename =  'surat' . '-' . time() . '-' . $randomStr . '.' . $file_list_terima->extension();
            $url = $file_list_terima->storeAs($destination, $filename);
            $this->file_list_terima =  $url;
            $this->save();
        }
    }

    function deletefilesurat()
    {
        $file_list_karyawan = $this->file_list_karyawan;
        if ($file_list_karyawan) {
            $path = public_path($file_list_karyawan);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    public function status($status)
    {
        switch ($status) {
            case 111:
                echo "Menunggu persetujuan pengajuan oleh junior supervisor";
                break;
            case 112:
                echo "Update Menunggu persetujuan pengajuan oleh junior supervisor";
                break;
            case 221:
                echo "pengajuan lembur di setujui dan surat perintah sudah di terbitkan";
                break;
            case 222:
                echo "pengajuan lembur di tolak junior supervisor";
                break;
            case 331:
                echo "pengajuan lembur di ttd, dan di laporkan ke hrd";
                break;
            case 441:
                echo "pengajuan laporan di terima hrd";
                break;
            default:
                echo "Isi variabel tidak di temukan";
                break;
        }
    }

    // jne lembur kordinator

    function generateQrcode($output_file, $data, $ttd)
    {
        $logo =  public_path('/asset/logo/jne.png');

        $writer = new PngWriter();
        $isi_text = "
        Memberikan Pengesahan Tanda tangan ke :
        nama : " . $data['nama'] . "
        devisi : " . $data['devisi'] . "
        jabatan : " . $data['jabatan'] . "
        tanggal pengajuan : " . $data['tanggal_pengajuan'];

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
        $result->saveToFile(public_path("/JneLembur/qr/$output_file.png"));

        return "JneLembur/qr/$output_file.png";
    }

    function getDocument($filepath, $filename, $datadocument,  $qrlogo)
    {
        $template = new TemplateProcessor($filepath);
        $qrdata = ['path' => $qrlogo, 'width' => 100, 'height' => 100];
        foreach ($datadocument as $key => $value) {
            $template->setValue($key, $value);
        }
        $template->setImageValue('qrcode', $qrdata);
        $template->saveAs(public_path("JneLembur/docx/form/$filename.docx"));

        return "JneLembur/docx/form/$filename.docx";
    }

    // jnelembur jr

    function Qrcode($output_file, $data, $ttd)
    {
        $logo =  public_path('/asset/logo/jne.png');

        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create($data)
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
        $result->saveToFile(public_path("/JneLembur/qr/$output_file.png"));

        return "JneLembur/qr/$output_file.png";
    }

    function document($filepath, $filename, $datadocument,  $qrlogo)
    {
        $template = new TemplateProcessor($filepath);
        $qrdata = ['path' => $qrlogo, 'width' => 100, 'height' => 100];
        foreach ($datadocument as $key => $value) {
            $template->setValue($key, $value);
        }
        $template->setImageValue('qrjrsuper', $qrdata);
        $template->saveAs(public_path("JneLembur/docx/form/$filename.docx"));

        return "JneLembur/docx/form/$filename.docx";
    }

    // ttd qr kordinator bidang

    function documentttd($filepath, $filename, $qrlogo)
    {
        $template = new TemplateProcessor($filepath);
        $qrdata = ['path' => $qrlogo, 'width' => 100, 'height' => 100];
        $template->setImageValue('qrdevisi', $qrdata);
        $template->saveAs(public_path("JneLembur/docx/form/$filename.docx"));

        return "JneLembur/docx/form/$filename.docx";
    }
    function ttdhrd($filepath, $filename, $qrlogo)
    {
        $template = new TemplateProcessor($filepath);
        $qrdata = ['path' => $qrlogo, 'width' => 100, 'height' => 100];
        $template->setImageValue('qrhrd', $qrdata);
        $template->saveAs(public_path("JneLembur/docx/form/$filename.docx"));

        return "JneLembur/docx/form/$filename.docx";
    }
}
