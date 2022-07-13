<?php

namespace Modules\JneMail\Http\Controllers\UnitKerja;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneMail\Entities\PengirimanSurat;

class InboxMailController extends Controller
{

    public function index()
    {
        $data['list_inbox'] = auth()->user()->pengirimansurat;
        return view('jnemail::unitkerja.inbox.index',$data);
    }

    public function show(PengirimanSurat $inbox_mail)
    {
        $data['inbox_mail'] = $inbox_mail;
        return view('jnemail::unitkerja.inbox.show',$data);
    }
}
