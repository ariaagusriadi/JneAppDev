<?php

namespace Modules\JneLembur\Http\Controllers\Juniorsupervisior;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\JneLembur\Entities\pengajuanlembur;
use Modules\JneLembur\Entities\logpengajuanlembur;
use Modules\JneLembur\Http\Requests\Juniorsupervisior\UpdatePengajuanRequest;
use Illuminate\Support\Facades\File;


class PengajuanLemburMasukController extends Controller
{

    public function index()
    {
        $data['list_masuk'] = pengajuanlembur::all();
        return view('jnelembur::junior-supervisior.pengajuan-masuk.index', $data);
    }


    public function show(pengajuanlembur $lembur)
    {
        $data['lembur'] = $lembur;
        return view('jnelembur::junior-supervisior.pengajuan-masuk.show', $data);
    }


    public function update(UpdatePengajuanRequest $request, pengajuanlembur $lembur)
    {
        $lembur->status = 221;
        $lembur->keterangan = 'pengajuan lembur di terima, dan surat perintah';
        $lembur->save();
        $lembur->fileterima();


        $log = new logpengajuanlembur();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengajuan = $lembur->id;
        $log->status = $lembur->status;
        $log->keterangan = $lembur->keterangan;
        $log->save();

        // generate ttd
        $output_file = Str::random(5);
        $data = "
        memberikan surat perintah untuk lembur pada :
        tanggal spl : " . request('tanggal_spl') . "
        devisi : " . request('devisi') . "
        lokasi lembur : " . request('lokasi_lembur') . "
        tanggal lembur : " . request('tanggal_lembur');
        $ttd = auth()->user()->nama;

        $qrttd = $lembur->Qrcode($output_file, $data, $ttd);

        // genrate document formulir
        $filepath = public_path('JneLembur/format/suratperintah.docx');
        $datadocument = [
            'tgl_spl' =>  request('tanggal_spl'),
            'devisi' =>  request('devisi'),
            'lokasi' =>  request('lokasi_lembur'),
            'lemburpada' =>  request('lembur_pada_hari'),
            'alasan' =>  request('alasan_lembur'),
        ];
        $formulir = $lembur->document($filepath, $output_file, $datadocument,  $qrttd);
        $lembur->file_formulir_jr = $formulir;
        $lembur->save();
        File::delete($qrttd);

        return redirect('jnelembur/junior-supervisor/pengajuan-lembur-masuk/')->with('success','surat perintah sudah di terbitkan');

    }

    public function tolak(pengajuanlembur $lembur)
    {
        $lembur->status = 222;
        $lembur->keterangan = 'pengajuan lembur di tolak junior supervisor';
        $lembur->save();

        $log = new logpengajuanlembur();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengajuan = $lembur->id;
        $log->status = $lembur->status;
        $log->keterangan = $lembur->keterangan;
        $log->save();

        return redirect('jnelembur/junior-supervisor/pengajuan-lembur-masuk/')->with('danger','pengajuan di tolak');
    }
}
