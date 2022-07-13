<?php

namespace Modules\JneSurat\Http\Controllers\Ceo;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneSurat\Entities\Log;
use Modules\JneSurat\Entities\Pengajuan;
use Illuminate\Contracts\Support\Renderable;
use Modules\JneSurat\Http\Requests\Ceo\TerimaSuratStoreRequest;

class PengajuanMasukController extends Controller
{

    public function index()
    {
        $data['list_pengajuan'] = Pengajuan::all();
        return view('jnesurat::ceo.pengajuan-masuk.index', $data);
    }


    public function show(Pengajuan $pengajuan_masuk)
    {
        $data['pengajuan_masuk'] = $pengajuan_masuk;
        return view('jnesurat::ceo.pengajuan-masuk.show', $data);
    }

    public function update(Pengajuan $pengajuan_masuk , TerimaSuratStoreRequest $request)
    {
        $pengajuan_masuk->keterangan_surat_ceo = request('keterangan_surat_ceo');
        $pengajuan_masuk->status = 301;
        $pengajuan_masuk->keterangan = 'ditanda tangani oleh ceo';
        $pengajuan_masuk->save();
        $pengajuan_masuk->filepdf();

        $log = new Log();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengajuan = $pengajuan_masuk->id;
        $log->keterangan = 'ditanda tangani oleh ceo';
        $log->status = 301;
        $log->save();

        return redirect('jnesurat/ceo/riwayat-pengajuan')->with('success', 'pengajuan di teruskan');
    }

    public function tolakpengajuan(Pengajuan $pengajuan_masuk)
    {
        $pengajuan_masuk->status = 302;
        $pengajuan_masuk->keterangan = 'ditolak oleh ceo';
        $pengajuan_masuk->save();

        $log = new Log();
        $log->id_pegawai = auth()->user()->id;
        $log->id_pengajuan = $pengajuan_masuk->id;
        $log->keterangan = 'ditolak oleh ceo';
        $log->status = 302;
        $log->save();

        return redirect('jnesurat/ceo/riwayat-pengajuan')->with('warning', 'pengajuan di tolak');
    }
}
