<?php

namespace Modules\JneSurat\Http\Controllers\UnitKerja;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneSurat\Entities\Pengajuan;

class RiwayatPengajuanController extends Controller
{
    public function index()
    {
        $data['list_pengajuan'] = auth()->user()->pengajuan;
        return view('jnesurat::unitkerja.riwayat-pengajuan.index', $data);
    }
    public function show(Pengajuan $riwayat_pengajuan)
    {
        $data['riwayat_pengajuan'] = $riwayat_pengajuan ;
        return view('jnesurat::unitkerja.riwayat-pengajuan.show', $data);
    }

}
