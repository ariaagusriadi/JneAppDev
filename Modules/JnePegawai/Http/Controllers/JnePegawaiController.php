<?php

namespace Modules\JnePegawai\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneAdmin\Entities\Pegawai;
use Modules\JnePegawai\Http\Requests\UpdateRequest;

class JnePegawaiController extends Controller
{

    public function dashboard()
    {
        return view('jnepegawai::dashboard.index');
    }


    public function setting()
    {
        return view('jnepegawai::setting.index');
    }


    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('jnepegawai::setting.edit', $data);
    }
    public function update(UpdateRequest $request, Pegawai $pegawai)
    {
        $pegawai->nama = request('nama');
        $pegawai->nik = request('nik');
        $pegawai->email = request('email');
        if (request('password')) $pegawai->password = bcrypt(request('password'));
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->save();
        if (request('foto')) $pegawai->uploadFoto();

        return redirect('jnepegawai/setting')->with('warning', 'berhasil edit profile');
    }
}
