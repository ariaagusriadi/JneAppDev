<?php

namespace Modules\JneSurat\Http\Controllers\TataUsaha;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneSurat\Entities\FormatDraft;
use Modules\JneSurat\Http\Requests\UnitKerja\FormatSuratRequest;

class FormatSuratController extends Controller
{

    public function index()
    {
        $data['list_format'] = FormatDraft::all();
        return view('jnesurat::tatausaha.format-draft.index', $data);
    }

    public function create()
    {
        return view('jnesurat::tatausaha.format-draft.create');
    }


    public function store(FormatSuratRequest $request)
    {
        $format = new FormatDraft();
        $format->nama_format_surat = request('nama_format_surat');
        $format->save();
        $format->formatdraft();

        return redirect('jnesurat/tata-usaha/format-draft')->with('success', 'berhasil upload format draft');
    }


    public function edit(FormatDraft $format_draft)
    {
        $data['format_draft'] = $format_draft;
        return view('jnesurat::tatausaha.format-draft.edit', $data);
    }


    public function update(FormatDraft $format_draft)
    {
        $format_draft->nama_format_surat = request('nama_format_surat');
        $format_draft->save();
        if (request('file_format_surat')) $format_draft->formatdraft();

        return redirect('jnesurat/tata-usaha/format-draft')->with('warning', 'berhasil edit format draft');
    }

    public function destroy(FormatDraft $format_draft)
    {
        $format_draft->delete();
        $format_draft->deletformat();
        return redirect('jnesurat/tata-usaha/format-draft')->with('danger', 'berhasil delete format draft');

    }
}
