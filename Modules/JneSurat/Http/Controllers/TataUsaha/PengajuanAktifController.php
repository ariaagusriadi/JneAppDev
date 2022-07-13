<?php

namespace Modules\JneSurat\Http\Controllers\TataUsaha;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneSurat\Entities\Pengajuan;

class PengajuanAktifController extends Controller
{

    public function index()
    {
        $data['list_pengajuan'] = Pengajuan::all();
        return view('jnesurat::tatausaha.pengajuan-aktif.index', $data);
    }


    public function show(Pengajuan $pengajuan_aktif)
    {
        $data['pengajuan_aktif'] = $pengajuan_aktif;
        return view('jnesurat::tatausaha.pengajuan-aktif.show', $data);
    }


}
