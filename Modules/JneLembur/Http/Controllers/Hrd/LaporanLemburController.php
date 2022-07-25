<?php

namespace Modules\JneLembur\Http\Controllers\Hrd;

use DateTime;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Support\Renderable;
use Modules\JneLembur\Entities\pengajuanlembur;
use Modules\JneLembur\Entities\logpengajuanlembur;

class LaporanLemburController extends Controller
{

    public function index()
    {
        $data['list_laporan'] = pengajuanlembur::all();
        return view('jnelembur::hrd.laporan-lembur.index', $data);
    }

    public function show(pengajuanlembur $laporan)
    {
        $data['laporan'] = $laporan;
        return view('jnelembur::hrd.laporan-lembur.show', $data);
    }

    public function update(pengajuanlembur $laporan)
    {
        $laporan->status = 441;
        $laporan->keterangan = 'pengajuan laporan di terima hrd';
        $laporan->save();

        $log = new logpengajuanlembur();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengajuan = $laporan->id;
        $log->status = $laporan->status;
        $log->keterangan = $laporan->keterangan;
        $log->save();

        // generate ttd
        $output_file = Str::random(5);
        $dt = new DateTime();
        $waktu = $dt->format('Y-m-d H:i:s');
        $data = "
        menyetujui dan mengetahui laporan kegiatan lembur :
        nama : " . auth()->user()->nama . "
        devisi : " . auth()->user()->unitkerja->nama_unit . "
        tanggal persetujuan : " . $waktu;

        $ttd = auth()->user()->nama;

        $qrttd = $laporan->Qrcode($output_file, $data, $ttd);

        // generate document formulir
        $filepath = $laporan->file_formulir_v1;

        $formulir = $laporan->ttdhrd($filepath, $output_file, $qrttd);
        $laporan->file_perintah = $formulir;
        $laporan->save();
        File::delete($qrttd);

        return redirect('jnelembur/hrd/laporan-selesai')->with('success', 'laporan di terima');
    }
}
