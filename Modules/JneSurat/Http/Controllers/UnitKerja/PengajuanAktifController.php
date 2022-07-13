<?php

namespace Modules\JneSurat\Http\Controllers\UnitKerja;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneSurat\Entities\Pengajuan;

class PengajuanAktifController extends Controller
{

    public function index()
    {
        $data['list_pengajuan'] = auth()->user()->pengajuan;
        return view('jnesurat::.unitkerja.pengajuan-aktif.index', $data);
    }


    public function show(Pengajuan $pengajuan_aktif)
    {
        $data['pengajuan_aktif'] = $pengajuan_aktif;
        return view('jnesurat::.unitkerja.pengajuan-aktif.show', $data);
    }

}
