<?php

namespace Modules\JneLembur\Http\Controllers\kordinatorbidang;


use Illuminate\Support\Str;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\JneLembur\Entities\pengajuanlembur;
use Modules\JneLembur\Entities\logpengajuanlembur;
use Illuminate\Http\Request;
use Modules\JneLembur\Http\Requests\kordinatorbidang\StorePengajuanRequest;
use Illuminate\Support\Facades\File;
use Modules\JneLembur\Http\Requests\kordinatorbidang\editPengajuanRequest;

class PengajuanLemburBaruController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $data['list_lembur'] = $user->lembur;
        return view('jnelembur::kordinator-bidang.pengajuan-lembur.index', $data);
    }

    public function create()
    {
        return view('jnelembur::kordinator-bidang.pengajuan-lembur.create');
    }

    public function store(StorePengajuanRequest $request)
    {
        $pengajuanlembur = new pengajuanlembur();
        $pengajuanlembur->id_pegawai = auth()->user()->id;
        $pengajuanlembur->id_unitkerja = auth()->user()->unitkerja->id;
        $pengajuanlembur->status = 111;
        $pengajuanlembur->keterangan = 'pengajuan lembur di buat';
        $pengajuanlembur->jabatan = request('jabatan');
        $pengajuanlembur->tanggal_pengajuan = request('tanggal_pengajuan');
        $pengajuanlembur->save();
        $pengajuanlembur->filesurat();

        $log = new logpengajuanlembur();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengajuan = $pengajuanlembur->id;
        $log->status = $pengajuanlembur->status;
        $log->keterangan = $pengajuanlembur->keterangan;
        $log->save();

        // genrate ttd
        $randomStr = Str::random(5);
        $output_file = $randomStr;
        $data = [
            'nama' =>  auth()->user()->nama,
            'devisi' => auth()->user()->unitkerja->nama_unit,
            'jabatan' => request('jabatan'),
            'tanggal_pengajuan' => request('tanggal_pengajuan'),
        ];
        $ttd = auth()->user()->nama;
        $filepath = public_path('JneLembur/format/template.docx');
        $datadocument = [
            'nama' =>  auth()->user()->nama,
            'devisi' => auth()->user()->unitkerja->nama_unit,
            'jabatan' => request('jabatan'),
            'tanggal_pengajuan' => request('tanggal_pengajuan'),
            'hari_lembur' => request('hari_lembur'),
            'tanggal_lembur' => request('tanggal_lembur'),
            'jam_mulai_lembur' => request('jam_mulai_lembur'),
            'jam_selesai_lembur' => request('jam_selesai_lembur'),
            'jumlah_orang_lembur' => request('jumlah_orang_lembur'),
            'lokasi_kantor_lembur' => request('lokasi_kantor_lembur'),
            'lembur_pada_hari' => request('lembur_pada_hari'),
            'alasan_lembur' => request('alasan_lembur'),
        ];

        // call function
        $qrlogo = $pengajuanlembur->generateQrcode($output_file, $data, $ttd);
        $datasurat = $pengajuanlembur->getDocument($filepath, $output_file,  $datadocument, $qrlogo);
        $pengajuanlembur->file_formulir = $datasurat;
        $pengajuanlembur->save();
        File::delete($qrlogo);

        return redirect('jnelembur/kordinator-bidang/pengajuan-lembur-baru')->with('success', 'berhasil mengajukan pengajuan lembur baru');
    }



    public function show(pengajuanlembur $pengajuan_lembur_baru)
    {
        $data['pengajuan_lembur_baru'] = $pengajuan_lembur_baru;
        return view('jnelembur::kordinator-bidang.pengajuan-lembur.show', $data);
    }

    public function edit(pengajuanlembur $pengajuan_lembur_baru)
    {
        $data['pengajuan_lembur_baru'] = $pengajuan_lembur_baru;
        return view('jnelembur::kordinator-bidang.pengajuan-lembur.edit', $data);
    }


    public function update(pengajuanlembur $pengajuan_lembur_baru, editPengajuanRequest $request)
    {
        $pengajuan_lembur_baru->id_pegawai = auth()->user()->id;
        $pengajuan_lembur_baru->id_unitkerja = auth()->user()->unitkerja->id;
        $pengajuan_lembur_baru->status = 112;
        $pengajuan_lembur_baru->keterangan = 'pengajuan lembur di update';
        $pengajuan_lembur_baru->jabatan = request('jabatan');
        $pengajuan_lembur_baru->tanggal_pengajuan = request('tanggal_pengajuan');
        $pengajuan_lembur_baru->save();
        if (request('file_list_karayawan')) $pengajuan_lembur_baru->filesurat();

        $log = new logpengajuanlembur();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengajuan = $pengajuan_lembur_baru->id;
        $log->status = $pengajuan_lembur_baru->status;
        $log->keterangan = $pengajuan_lembur_baru->keterangan;
        $log->save();

        $filepathdelete = $pengajuan_lembur_baru->file_formulir;
        File::delete($filepathdelete);
        // genrate ttd
        $randomStr = Str::random(5);
        $output_file = $randomStr;
        $data = [
            'nama' =>  auth()->user()->nama,
            'devisi' => auth()->user()->unitkerja->nama_unit,
            'jabatan' => request('jabatan'),
            'tanggal_pengajuan' => request('tanggal_pengajuan'),
        ];
        $ttd = auth()->user()->nama;
        $filepath = public_path('JneLembur/format/template.docx');
        $datadocument = [
            'nama' =>  auth()->user()->nama,
            'devisi' => auth()->user()->unitkerja->nama_unit,
            'jabatan' => request('jabatan'),
            'tanggal_pengajuan' => request('tanggal_pengajuan'),
            'hari_lembur' => request('hari_lembur'),
            'tanggal_lembur' => request('tanggal_lembur'),
            'jam_mulai_lembur' => request('jam_mulai_lembur'),
            'jam_selesai_lembur' => request('jam_selesai_lembur'),
            'jumlah_orang_lembur' => request('jumlah_orang_lembur'),
            'lokasi_kantor_lembur' => request('lokasi_kantor_lembur'),
            'lembur_pada_hari' => request('lembur_pada_hari'),
            'alasan_lembur' => request('alasan_lembur'),
        ];

        // call function
        $qrlogo = $this->generateQrcode($output_file, $data, $ttd);
        $datasurat = $this->getDocument($filepath, $output_file,  $datadocument, $qrlogo);
        $pengajuan_lembur_baru->file_formulir = $datasurat;
        $pengajuan_lembur_baru->save();
        File::delete($qrlogo);

        return redirect('jnelembur/kordinator-bidang/pengajuan-lembur-baru')->with('warning', 'berhasil edit pengajuan lembur baru');
    }

    public function destroy(pengajuanlembur $pengajuan_lembur_baru)
    {
        $pengajuan_lembur_baru->delete();
        $pengajuan_lembur_baru->loglembur()->delete();
        $pengajuan_lembur_baru->deletefilesurat();
        $filepathdelete = $pengajuan_lembur_baru->file_formulir;
        File::delete($filepathdelete);
        return redirect('jnelembur/kordinator-bidang/pengajuan-lembur-baru')->with('delete', 'berhasil delete pengajuan lembur baru');
    }
}
