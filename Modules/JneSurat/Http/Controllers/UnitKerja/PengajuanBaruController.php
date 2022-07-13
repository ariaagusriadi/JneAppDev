<?php

namespace Modules\JneSurat\Http\Controllers\UnitKerja;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneSurat\Entities\Log;
use Modules\JneSurat\Entities\Pengajuan;
use Modules\JneSurat\Http\Requests\UnitKerja\StorePengajuanRequest;

class PengajuanBaruController extends Controller
{

    public function index()
    {
        $data['list_pengajuan'] = auth()->user()->pengajuan;
        return view('jnesurat::.unitkerja.pengajuan-baru.index', $data);
    }

    public function create()
    {
        return view('jnesurat::.unitkerja.pengajuan-baru.create');
    }

    public function store(StorePengajuanRequest $request)
    {
        $pengajuan = new Pengajuan();
        $pengajuan->id_pegawai = auth()->user()->id;
        $pengajuan->id_unitkerja = auth()->user()->unitkerja->id;
        $pengajuan->nama_pengajuan = request('nama_pengajuan');
        $pengajuan->keperluan_pengajuan = request('keperluan_pengajuan');
        $pengajuan->status = 101;
        $pengajuan->keterangan = 'pengajuan oleh unit';
        $pengajuan->save();
        if (request('file_pengantar')) $pengajuan->documentpengantar();
        if (request('file_lampiran')) $pengajuan->documentlampiran();


        $log = new Log();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengajuan = $pengajuan->id;
        $log->keterangan = 'pengajuan oleh unit';
        $log->status = 101;
        $log->save();

        return redirect('jnesurat/unit-kerja/pengajuan-baru')->with('success', 'berhasil mengajukan');
    }


    public function show(Pengajuan $pengajuan_baru)
    {
        $data['pengajuan_baru'] = $pengajuan_baru;
        return view('jnesurat::.unitkerja.pengajuan-baru.show', $data);
    }


    public function edit(Pengajuan $pengajuan_baru)
    {
        $data['pengajuan_baru'] = $pengajuan_baru;
        return view('jnesurat::.unitkerja.pengajuan-baru.edit', $data);
    }


    public function update(StorePengajuanRequest $request, Pengajuan $pengajuan_baru)
    {
        $pengajuan_baru->id_pegawai = auth()->user()->id;
        $pengajuan_baru->id_unitkerja = auth()->user()->unitkerja->id;
        $pengajuan_baru->nama_pengajuan = request('nama_pengajuan');
        $pengajuan_baru->keperluan_pengajuan = request('keperluan_pengajuan');
        $pengajuan_baru->status = 102;
        $pengajuan_baru->keterangan = 'pengajuan baru oleh unit';
        $pengajuan_baru->save();
        if (request('file_pengantar')) $pengajuan_baru->documentpengantar();
        if (request('file_lampiran')) $pengajuan_baru->documentlampiran();


        $log = new Log();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengajuan = $pengajuan_baru->id;
        $log->keterangan = 'pengajuan di edit oleh unit';
        $log->status = 102;
        $log->save();

        return redirect('jnesurat/unit-kerja/pengajuan-baru')->with('warning', 'berhasil edit mengajukan');
    }

    public function destroy(Pengajuan $pengajuan_baru)
    {
        $pengajuan_baru->delete();
        $pengajuan_baru->log()->delete();
        $pengajuan_baru->deletedocumentpengantar();
        $pengajuan_baru->deletedocumentlampiran();

        return redirect('jnesurat/unit-kerja/pengajuan-baru')->with('danger', 'berhasil Hapus');
    }
}
