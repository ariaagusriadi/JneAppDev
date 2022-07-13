<?php

namespace Modules\JneMail\Http\Controllers\UnitKerja;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneMail\Entities\PengirimanSurat;

class HistoryMailController extends Controller
{

    public function index()
    {
        $data['list_history'] = auth()->user()->pengirimansurat;
        return view('jnemail::unitkerja.history-mail.index', $data);
    }


    public function show(PengirimanSurat $history_mail)
    {
        $data['history_mail'] = $history_mail;
        return view('jnemail::unitkerja.history-mail.show', $data);

    }

}
