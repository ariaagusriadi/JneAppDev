<?php

namespace Modules\JneSurat\Http\Controllers\UnitKerja;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneSurat\Entities\FormatSuratUnit;
use Modules\JneSurat\Http\Requests\UnitKerja\FormatSuratRequest;

class FormatSuratController extends Controller
{

    public function index()
    {
        $data['list_format'] = FormatSuratUnit::all();
        return view('jnesurat::unitkerja.format-surat.index' ,$data);
    }

    public function create()
    {
        return view('jnesurat::unitkerja.format-surat.create');
    }


    public function store(FormatSuratRequest $request)
    {
        $format = new FormatSuratUnit();
        $format->nama_format_surat = request('nama_format_surat');
        $format->save();
        $format->formatsurat();

        return redirect('jnesurat/unit-kerja/format-surat')->with('success','berhasil upload format surat');
    }

    public function edit(FormatSuratUnit $format_surat)
    {
        $data['format_surat'] = $format_surat;
        return view('jnesurat::unitkerja.format-surat.edit', $data);
    }


    public function update(FormatSuratUnit $format_surat)
    {
        $format_surat->nama_format_surat = request('nama_format_surat');
        $format_surat->save();
        if(request('file_format_surat'))$format_surat->formatsurat();
        return redirect('jnesurat/unit-kerja/format-surat')->with('warning','berhasil edit format surat');
    }


    public function destroy(FormatSuratUnit $format_surat)
    {
        $format_surat->delete();
        $format_surat->deletformat();
        return redirect('jnesurat/unit-kerja/format-surat')->with('danger','berhasil delete format surat');
    }
}
