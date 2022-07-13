<?php

namespace Modules\JneArchives\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneArchives\Entities\Tatausaha\JneArchivesPengajuan;
use Modules\JneArchives\Entities\Tatausaha\JneArchivesPersetujuan;

class JneArchivesController extends Controller
{

    public function showpengajuan()
    {
        $data['list_pengajuan'] = JneArchivesPengajuan::all();
        return view('jnearchives::pegawai.pengajuan.index', $data);
    }
    public function showpersetujuan()
    {
        $data['list_persetujuan'] = JneArchivesPersetujuan::all();
        return view('jnearchives::pegawai.persetujuan.index', $data);
    }

}
