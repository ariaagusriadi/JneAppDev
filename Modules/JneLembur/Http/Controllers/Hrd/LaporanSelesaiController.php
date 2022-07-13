<?php

namespace Modules\JneLembur\Http\Controllers\hrd;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneLembur\Entities\pengajuanlembur;

class LaporanSelesaiController extends Controller
{

    public function index()
    {
        $data['list_laporan'] = pengajuanlembur::all();
        return view('jnelembur::hrd.laporan-selesai.index', $data);
    }

    public function show(pengajuanlembur $laporan)
    {
        $data['laporan'] = $laporan;
        return view('jnelembur::hrd.laporan-selesai.show', $data);
    }
}
