<?php

namespace Modules\JneMail\Http\Controllers\DistribusiSurat\KepalaCabang;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneMail\Entities\PengirimanSurat;

class ReadMailController extends Controller
{

    public function index()
    {
        $data['list_read'] = PengirimanSurat::all();
        return view('jnemail::DistribusiSurat.KepalaCabang.read-mail.index', $data);
    }


    public function show(PengirimanSurat $read_mail)
    {
        $data['read_mail'] = $read_mail;
        return view('jnemail::DistribusiSurat.KepalaCabang.read-mail.show', $data);
    }

}
