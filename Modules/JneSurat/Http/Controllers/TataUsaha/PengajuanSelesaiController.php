<?php

namespace Modules\JneSurat\Http\Controllers\TataUsaha;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneSurat\Entities\Pengajuan;
use Illuminate\Contracts\Support\Renderable;

class PengajuanSelesaiController extends Controller
{

    public function index()
    {
        $data['list_pengajuan'] = Pengajuan::all();
        return view('jnesurat::tatausaha.pengajuan-selesai.index', $data);
    }


    public function show(Pengajuan $pengajuan_selesai)
    {
        $data['pengajuan_selesai'] = $pengajuan_selesai;
        return view('jnesurat::tatausaha.pengajuan-selesai.show', $data);
    }


}
