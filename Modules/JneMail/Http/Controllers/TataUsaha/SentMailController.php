<?php

namespace Modules\JneMail\Http\Controllers\Tatausaha;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneMail\Entities\PengirimanSurat;

class SentMailController extends Controller
{

    public function index()
    {
        $data['list_sent'] = PengirimanSurat::all();
        return view('jnemail::tatausaha.sent-mail.index', $data);
    }


    public function show(PengirimanSurat $sent_mail)
    {
        $data['sent_mail'] = $sent_mail;
        return view('jnemail::tatausaha.sent-mail.show', $data);
    }


}
