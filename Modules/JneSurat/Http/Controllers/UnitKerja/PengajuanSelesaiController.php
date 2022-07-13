<?php

namespace Modules\JneSurat\Http\Controllers\UnitKerja;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneSurat\Entities\Pengajuan;

class PengajuanSelesaiController extends Controller
{

    public function index()
    {
        $data['list_pengajuan'] = auth()->user()->pengajuan;
        return view('jnesurat::unitkerja.pengajuan-selesai.index', $data);
    }


    public function show(Pengajuan $pengajuan_selesai)
    {
        $data['pengajuan_selesai'] = $pengajuan_selesai;
        return view('jnesurat::unitkerja.pengajuan-selesai.show', $data);
    }

}
