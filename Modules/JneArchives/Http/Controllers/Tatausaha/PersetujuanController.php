<?php

namespace Modules\JneArchives\Http\Controllers\Tatausaha;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneArchives\Entities\Tatausaha\JneArchivesPersetujuan;
use Modules\JneArchives\Http\Requests\Tatausaha\PengajuanStoreRequest;

class PersetujuanController extends Controller
{

    public function index()
    {
        $data['list_persetujuan'] = JneArchivesPersetujuan::all();
        return view('jnearchives::tatausaha.persetujuan.index', $data);
    }


    public function create()
    {
        return view('jnearchives::tatausaha.persetujuan.create');
    }

    public function store(PengajuanStoreRequest $request)
    {
        $persetujuan = new JneArchivesPersetujuan();
        $persetujuan->nama_dokumen = request('nama_dokumen');
        $persetujuan->save();
        $persetujuan->filedokumen();

        return redirect('jnearchives/tata-usaha/format-persetujuan')->with('success', 'berhasil menambahkan archive baru');
    }


    public function edit(JneArchivesPersetujuan $format_persetujuan)
    {
        $data['format_persetujuan'] = $format_persetujuan;
        return view('jnearchives::tatausaha.persetujuan.edit', $data);
    }


    public function update(JneArchivesPersetujuan $format_persetujuan)
    {
        $format_persetujuan->nama_dokumen = request('nama_dokumen');
        $format_persetujuan->save();
        if (request('file_dokumen')) $format_persetujuan->filedokumen();

        return redirect('jnearchives/tata-usaha/format-persetujuan')->with('warning', 'berhasil edit archive baru');
    }

    public function destroy(JneArchivesPersetujuan $format_persetujuan)
    {

        $format_persetujuan->delete();
        $format_persetujuan->deletefiledokumen();

        return redirect('jnearchives/tata-usaha/format-persetujuan')->with('danger', 'berhasil hapus archive baru');
    }
}
