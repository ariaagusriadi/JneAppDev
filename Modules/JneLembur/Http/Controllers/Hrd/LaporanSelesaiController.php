<?php

namespace Modules\JneLembur\Http\Controllers\Hrd;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneLembur\Entities\Pengajuanlembur;

class LaporanSelesaiController extends Controller
{

    public function index()
    {
        $data['list_laporan'] = Pengajuanlembur::all();
        return view('jnelembur::hrd.laporan-selesai.index', $data);
    }

    public function show(Pengajuanlembur $laporan)
    {
        $data['laporan'] = $laporan;
        return view('jnelembur::hrd.laporan-selesai.show', $data);
    }
}
