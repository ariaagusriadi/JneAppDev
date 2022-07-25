<?php

namespace Modules\JneLembur\Http\Controllers\KordinatorBidang;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneLembur\Entities\Pengajuanlembur;

class PengajuanLemburSelesaiController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $data['list_laporan'] = $user->lembur;
        return view('jnelembur::kordinator-bidang.laporan-selesai.index', $data);
    }

    public function show(Pengajuanlembur $laporan)
    {
        $data['laporan'] = $laporan;
        return view('jnelembur::kordinator-bidang.laporan-selesai.show', $data);
    }


}
