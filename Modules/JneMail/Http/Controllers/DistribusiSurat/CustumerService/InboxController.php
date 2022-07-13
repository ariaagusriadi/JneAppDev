<?php

namespace Modules\JneMail\Http\Controllers\DistribusiSurat\CustumerService;

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
        return view('jnemail::Distribusisurat.CustumerService.inbox.index', $data);
    }


    public function show(PengirimanSurat $inbox_mail)
    {
        $data['inbox_mail'] = $inbox_mail;
        return view('jnemail::Distribusisurat.CustumerService.inbox.show', $data);
    }


    public function update(BalasanSuratRequest $request, PengirimanSurat $inbox_mail)
    {
        $inbox_mail->subject_balasan = request('subject_balasan');
        $inbox_mail->status = 804;
        $inbox_mail->keterangan = 'Memberi balasan surat ke ' . $inbox_mail->pegawai->nama;
        $inbox_mail->save();
        if (request('balasan_surat')) $inbox_mail->balasansurat();

        $log = new LogPengirimanSurat();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengiriman_surat = $inbox_mail->id;
        $log->status = 804;
        $log->keterangan = $inbox_mail->keterangan;
        $log->save();

        return redirect('jnemail/custumer-service/inbox-mail')->with('success', 'berhasil mengirim balasan surat ke ' . $inbox_mail->pegawai->nama);
    }
    public function read(PengirimanSurat $inbox_mail)
    {
        $inbox_mail->status = 904;
        $inbox_mail->keterangan = 'Surat di terima dan sudah di baca oleh ' . $inbox_mail->tujuan;
        $inbox_mail->save();

        $log = new LogPengirimanSurat();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengiriman_surat = $inbox_mail->id;
        $log->status = 904;
        $log->keterangan = $inbox_mail->keterangan;
        $log->save();

        return redirect('jnemail/custumer-service/read-mail')->with('warning', 'sudah di baca');
    }
}
