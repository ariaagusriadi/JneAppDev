<?php

namespace Modules\JneLembur\Http\Controllers\kordinatorbidang;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Support\Renderable;
use Modules\JneLembur\Entities\logpengajuanlembur;
use Modules\JneLembur\Entities\pengajuanlembur;

class PengajuanLemburAktifController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $data['list_lembur'] = $user->lembur;
        return view('jnelembur::kordinator-bidang.pengajuan-aktif.index', $data);
    }

    public function show(pengajuanlembur $lembur)
    {
        $data['lembur'] = $lembur;
        return view('jnelembur::kordinator-bidang.pengajuan-aktif.show', $data);
    }


    public function update(Request $request, pengajuanlembur $lembur)
    {
        $lembur->status = 331;
        $lembur->keterangan = 'pengajuan lembur di ttd, dan di laporkan ke hrd';
        $lembur->save();

        $log = new logpengajuanlembur();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengajuan = $lembur->id;
        $log->status = $lembur->status;
        $log->keterangan = $lembur->keterangan;
        $log->save();

        // generate ttd
        $output_file = Str::random(5);
        $data = "
        menyetujui dan mengetahui lembur pada :
        nama : " . auth()->user()->nama . "
        devisi : " .auth()->user()->unitkerja->nama_unit . "
        jabatan : " . $lembur->jabatan . "
        tanggal pengajuan : " . $lembur->tanggal_pengajuan;

        $ttd = auth()->user()->nama;

        $qrttd = $lembur->Qrcode($output_file, $data, $ttd);

        // generate document formulir
        $filepath = $lembur->file_formulir_jr;

        $formulir = $lembur->documentttd($filepath, $output_file , $qrttd);
        $lembur->file_formulir_v1 = $formulir;
        $lembur->save();
        File::delete($qrttd);

        return redirect('jnelembur/kordinator-bidang/pengajuan-lembur-aktif')->with('success', 'surat perintah sudah di ttd dan di laporkan ke hrd');
    }
}
