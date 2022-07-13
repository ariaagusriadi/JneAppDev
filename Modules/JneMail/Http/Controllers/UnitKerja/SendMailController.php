<?php

namespace Modules\JneMail\Http\Controllers\UnitKerja;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneMail\Entities\LogPengirimanSurat;
use Modules\JneMail\Entities\PengirimanSurat;
use Modules\JneMail\Http\Requests\PengirimanRequest;

class SendMailController extends Controller
{

    public function index()
    {
        $data['list_send'] = auth()->user()->pengirimansurat;
        return view('jnemail::unitkerja.send-mail.index', $data);
    }

    public function create()
    {
        return view('jnemail::unitkerja.send-mail.create');
    }

    public function store(PengirimanRequest $request)
    {
        $send = new PengirimanSurat();
        $send->id_pegawai = auth()->user()->id;
        $send->id_unitkerja = auth()->user()->unitkerja->id;
        $send->tujuan = request('tujuan');
        $send->subject = request('subject');
        $send->status = 501;
        $send->keterangan = 'surat dikirimkan ke, ' . request('tujuan');
        $send->save();
        $send->filesurat();

        $log = new LogPengirimanSurat();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengiriman_surat = $send->id;
        $log->status = 501;
        $log->keterangan = $send->keterangan;
        $log->save();

        return redirect('jnemail/unit-kerja/send-mail')->with('success', 'berhasil kirim surat ke ' . $send->tujuan);
    }

    public function show(PengirimanSurat $send_mail)
    {
        $data['send_mail'] = $send_mail;
        return view('jnemail::unitkerja.send-mail.show', $data);
    }

    public function edit(PengirimanSurat $send_mail)
    {
        $data['send_mail'] = $send_mail;
        return view('jnemail::unitkerja.send-mail.edit', $data);
    }


    public function update(PengirimanSurat $send_mail)
    {
        $send_mail->id_pegawai = auth()->user()->id;
        $send_mail->id_unitkerja = auth()->user()->unitkerja->id;
        $send_mail->tujuan = request('tujuan');
        $send_mail->subject = request('subject');
        $send_mail->status = 502;
        $send_mail->keterangan = 'surat diedit dan dikirimkan ke, ' . request('tujuan');
        $send_mail->save();
        if(request('file_surat'))$send_mail->filesurat();

        $log = new LogPengirimanSurat();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengiriman_surat = $send_mail->id;
        $log->status = 502;
        $log->keterangan = $send_mail->keterangan;
        $log->save();

        return redirect('jnemail/unit-kerja/send-mail')->with('warning', 'berhasil edit dan dikirim surat ke ' . $send_mail->tujuan);
    }


    public function destroy(PengirimanSurat $send_mail)
    {
        $send_mail->delete();
        $send_mail->logpengiriman()->delete();
        $send_mail->deletefilesurat();
        return redirect('jnemail/unit-kerja/send-mail')->with('danger', 'berhasil delete dan tarik surat');
    }
}
