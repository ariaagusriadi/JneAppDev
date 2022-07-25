<?php

namespace Modules\JneMail\Http\Controllers\DistribusiSurat\CustumerService;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneMail\Entities\PengirimanSurat;

class HistoryMailController extends Controller
{

    public function index()
    {
        $data['list_history'] = PengirimanSurat::all();
        return view('jnemail::DistribusiSurat.custumerservice.history-mail.index',$data);
    }


    public function show(PengirimanSurat $history_mail)
    {
        $data['history_mail'] = $history_mail;
        return view('jnemail::DistribusiSurat.custumerservice.history-mail.show',$data);
    }


}
