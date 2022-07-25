<?php

namespace Modules\JneMail\Http\Controllers\DistribusiSurat\JrSuperVisior\DevisiOperasional;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\JneMail\Entities\PengirimanSurat;
use Modules\JneMail\Entities\LogPengirimanSurat;
use Modules\JneMail\Http\Requests\BalasanSuratRequest;

class InboxController extends Controller
{

    public function index()
    {
        $data['list_inbox'] = PengirimanSurat::all();
        return view('jnemail::DistribusiSurat.JrSuperVisior.DevisiOperasional.inbox.index', $data);
    }


    public function show(PengirimanSurat $inbox_mail)
    {
        $data['inbox_mail'] = $inbox_mail;
        return view('jnemail::DistribusiSurat.JrSuperVisior.DevisiOperasional.inbox.show', $data);
    }


    public function update(BalasanSuratRequest $request, PengirimanSurat $inbox_mail)
    {
        $inbox_mail->subject_balasan = request('subject_balasan');
        $inbox_mail->status = 801;
        $inbox_mail->keterangan = 'Memberi balasan surat ke ' . $inbox_mail->pegawai->nama;
        $inbox_mail->save();
        if (request('balasan_surat')) $inbox_mail->balasansurat();

        $log = new LogPengirimanSurat();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengiriman_surat = $inbox_mail->id;
        $log->status = 801;
        $log->keterangan = $inbox_mail->keterangan;
        $log->save();

        return redirect('jnemail/jr-supervisior-devisi-operasional/inbox-mail')->with('success', 'berhasil mengirim balasan surat ke ' . $inbox_mail->pegawai->nama);
    }

    public function read(PengirimanSurat $inbox_mail)
    {
        $inbox_mail->status = 901;
        $inbox_mail->keterangan = 'Surat di terima dan sudah di baca oleh ' .$inbox_mail->tujuan;
        $inbox_mail->save();

        $log = new LogPengirimanSurat();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengiriman_surat = $inbox_mail->id;
        $log->status = 901;
        $log->keterangan = $inbox_mail->keterangan;
        $log->save();

        return redirect('jnemail/jr-supervisior-devisi-operasional/read-mail')->with('warning', 'sudah di baca');
    }
}
