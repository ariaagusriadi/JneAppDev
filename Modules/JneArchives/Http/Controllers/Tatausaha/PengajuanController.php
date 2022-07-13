<?php

namespace Modules\JneArchives\Http\Controllers\Tatausaha;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\JneArchives\Entities\Tatausaha\JneArchivesPengajuan;
use Modules\JneArchives\Http\Requests\Tatausaha\PengajuanStoreRequest;

class PengajuanController extends Controller
{
    public function index()
    {
        $data['list_pengajuan'] = JneArchivesPengajuan::all();
        return view('jnearchives::tatausaha.pengajuan.index', $data);
    }


    public function create()
    {
        return view('jnearchives::tatausaha.pengajuan.create');
    }

    public function store(PengajuanStoreRequest $request)
    {
        $pengajuan = new JneArchivesPengajuan;
        $pengajuan->nama_dokumen = request('nama_dokumen');
        $pengajuan->save();
        $pengajuan->filedokumen();

        return redirect('jnearchives/tata-usaha/format-pengajuan/')->with('success','berhasil menambahkan archives baru');
    }


    public function edit(JneArchivesPengajuan $format_pengajuan)
    {
       $data['format_pengajuan']= $format_pengajuan;
        return view('jnearchives::tatausaha.pengajuan.edit', $data);
    }

    public function update(JneArchivesPengajuan $format_pengajuan)
    {
        $format_pengajuan->nama_dokumen = request('nama_dokumen');
        $format_pengajuan->save();
        if(request('file_dokumen'))$format_pengajuan->filedokumen();

        return redirect('jnearchives/tata-usaha/format-pengajuan/')->with('warning','berhasil edit archives');
    }

    public function destroy(JneArchivesPengajuan $format_pengajuan)
    {
        $format_pengajuan->delete();
       $format_pengajuan->deletefiledokumen();

        return redirect('jnearchives/tata-usaha/format-pengajuan/')->with('danger','berhasil hapus archives');
    }
}
