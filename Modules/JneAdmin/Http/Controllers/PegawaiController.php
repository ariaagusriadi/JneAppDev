<?php

namespace Modules\JneAdmin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneAdmin\Entities\Pegawai;
use Modules\JneAdmin\Entities\UnitKerja;
use Modules\JneAdmin\Http\Requests\StorePegawaiRequest;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('jneadmin::pegawai.index', $data);
    }

    public function create()
    {
        $data['list_unitkerja'] = UnitKerja::all();
        return view('jneadmin::pegawai.create', $data);
    }

    public function store(StorePegawaiRequest $request)
    {
        $pegawai = new Pegawai();
        $pegawai->nama = request('nama');
        $pegawai->nik = request('nik');
        $pegawai->email = request('email');
        $pegawai->password = bcrypt(request('password'));
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->unitkerja_id = request('unit_kerja');
        $pegawai->save();
        $pegawai->uploadFoto();

        return redirect('jneadmin/pegawai')->with('success', 'berhasil menambahkan data pegawai');
    }


    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('jneadmin::pegawai.show', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['list_unitkerja'] = UnitKerja::all();
        $data['pegawai'] = $pegawai;
        return view('jneadmin::pegawai.edit', $data);
    }


    public function update(Pegawai $pegawai)
    {
        $pegawai->nama = request('nama');
        $pegawai->nik = request('nik');
        $pegawai->email = request('email');
        if (request('password')) $pegawai->password = bcrypt(request('password'));
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->unitkerja_id = request('unit_kerja');
        $pegawai->save();
        if (request('foto')) $pegawai->uploadFoto();

        return redirect('jneadmin/pegawai')->with('warning', 'berhasil edit data pegawai');
    }


    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        $pegawai->deleteFoto();
        return redirect('jneadmin/pegawai')->with('danger', 'berhasil hapus data pegawai');
    }
}
