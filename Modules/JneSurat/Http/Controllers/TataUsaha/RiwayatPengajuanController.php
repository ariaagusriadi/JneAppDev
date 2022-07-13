<?php

namespace Modules\JneSurat\Http\Controllers\TataUsaha;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneSurat\Entities\Pengajuan;

class RiwayatPengajuanController extends Controller
{

    public function index()
    {
        $data['list_pengajuan'] = Pengajuan::all();
        return view('jnesurat::tatausaha.riwayat-pengajuan.index', $data);
    }


    public function show(Pengajuan $riwayat_pengajuan)
    {
        $data['riwayat_pengajuan'] = $riwayat_pengajuan;
        return view('jnesurat::tatausaha.riwayat-pengajuan.show', $data);
    }

}
