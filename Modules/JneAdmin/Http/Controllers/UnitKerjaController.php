<?php

namespace Modules\JneAdmin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneAdmin\Entities\UnitKerja;
use Modules\JneAdmin\Http\Requests\StoreUnitKerjaRequest;

class UnitKerjaController extends Controller
{

    public function index()
    {
        $data['list_unitkerja'] = UnitKerja::all();
        return view('jneadmin::unitkerja.index', $data);
    }


    public function create()
    {
        return view('jneadmin::unitkerja.create');
    }

    public function store(StoreUnitKerjaRequest $request)
    {
        $unitkerja = new UnitKerja;
        $unitkerja->nama_unit = request('nama_unit');
        $unitkerja->save();

        return redirect('jneadmin/unit-kerja')->with('success', 'berhasil menambahkan unitkerja');
    }
    public function show(UnitKerja $unitKerja)
    {
        $data['unitkerja'] = $unitKerja;
        return view('jneadmin::unitkerja.show', $data);
    }

    public function edit(UnitKerja $unitKerja)
    {
        $data['unitkerja'] = $unitKerja;
        return view('jneadmin::unitkerja.edit', $data);
    }


    public function update(StoreUnitKerjaRequest $request, UnitKerja $unitKerja)
    {
        $unitKerja->nama_unit = request('nama_unit');
        $unitKerja->save();

        return redirect('jneadmin/unit-kerja')->with('warning', 'berhasil edit unitkerja');
    }


    public function destroy(UnitKerja $unitKerja)
    {
        $unitKerja->delete();
        return redirect('jneadmin/unit-kerja')->with('danger', 'berhasil delete unitkerja');
    }
}
