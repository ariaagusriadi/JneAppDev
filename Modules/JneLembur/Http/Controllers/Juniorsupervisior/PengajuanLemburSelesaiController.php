<?php

namespace Modules\JneLembur\Http\Controllers\Juniorsupervisior;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneLembur\Entities\pengajuanlembur;

class PengajuanLemburSelesaiController extends Controller
{

    public function index()
    {
        $data['list_laporan'] = pengajuanlembur::all();
        return view('jnelembur::junior-supervisior.laporan-selesai.index', $data);
    }


    public function show(pengajuanlembur $laporan)
    {
        $data['laporan'] = $laporan;
        return view('jnelembur::junior-supervisior.laporan-selesai.show', $data);
    }


}
