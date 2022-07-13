<?php

namespace Modules\JneMail\Http\Controllers\TataUsaha;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneMail\Entities\LogPengirimanSurat;
use Modules\JneMail\Entities\PengirimanSurat;
use Modules\JneMail\Http\Requests\Tatausaha\InboxMailStoreRequest;

class InboxController extends Controller
{

    public function index()
    {
        $data['list_inbox'] = PengirimanSurat::all();
        return view('jnemail::tatausaha.inbox.index', $data);
    }

    public function show(PengirimanSurat $inbox)
    {
        $data['inbox'] = $inbox;
        return view('jnemail::tatausaha.inbox.show', $data);
    }


    public function update(PengirimanSurat $inbox, InboxMailStoreRequest $request)
    {
        $inbox->status = request('status');
        $inbox->keterangan = 'pengajuan di terima dan di teruskan ke' . $inbox->tujuan;
        $inbox->save();

        $log = new LogPengirimanSurat();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengiriman_surat = $inbox->id;
        $log->status = request('status');
        $log->keterangan = $inbox->keterangan;
        $log->save();

        return redirect('jnemail/tata-usaha/inbox')->with('success','surat diterima dan diteruskan ke'. $inbox->tujuan);
    }

    public function tolakinbox(PengirimanSurat $inbox)
    {
        $inbox->status = 701;
        $inbox->keterangan = 'pengajuan di tolak dan di kembalikan ke ' .$inbox->pegawai->nama;
        $inbox->save();

        $log = new LogPengirimanSurat();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengiriman_surat = $inbox->id;
        $log->status = 701;
        $log->keterangan = $inbox->keterangan;
        $log->save();

        return redirect('jnemail/tata-usaha/inbox')->with('warning','surat ditolak dan di kembalikan ke '. $inbox->pegawai->nama);
    }

}
