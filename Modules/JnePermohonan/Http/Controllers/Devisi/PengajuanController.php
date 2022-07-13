<?php

namespace Modules\JnePermohonan\Http\Controllers\Devisi;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PengajuanController extends Controller
{

    public function index()
    {
        return abort(404);
        // return view('jnepermohonan::Devisi.pengajuan.index');
    }
    public function create()
    {
        return view('jnepermohonan::Devisi.pengajuan.create');
    }


}
