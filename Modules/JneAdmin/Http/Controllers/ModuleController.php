<?php

namespace Modules\JneAdmin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\JneAdmin\Entities\Role;
use Modules\JneAdmin\Entities\Module;
use Modules\JneAdmin\Entities\Pegawai;
use Illuminate\Contracts\Support\Renderable;
use Modules\JneAdmin\Http\Requests\StoreModuleRequest;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data['list_module'] = Module::all();
        return view('jneadmin::module.index', $data);
    }

    public function create()
    {
        return view('jneadmin::module.create');
    }


    public function store(StoreModuleRequest $request)
    {
        $module = new Module();
        $module->app = request('app');
        $module->name = request('name');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->tag = request('tag');
        $module->save();

        return redirect('jneadmin/module')->with('success', 'berhasil menambahkan module');
    }

    public function show(Module $module)
    {
        $data['list_pegawai'] = Pegawai::all();
        $data['module'] = $module;
        return view('jneadmin::module.show', $data);
    }


    public function edit(Module $module)
    {
        $data['module'] = $module;
        return view('jneadmin::module.edit', $data);
    }

    public function update(Request $request, Module $module)
    {
        $module->app = request('app');
        $module->name = request('name');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->tag = request('tag');
        $module->save();

        return redirect('jneadmin/module')->with('warning', 'berhasil edit module');
    }


    public function destroy(Module $module)
    {
        $module->delete();
        $module->role()->delete();
        return redirect('jneadmin/module')->with('danger', 'berhasil delete module');
    }

    public function addRole()
    {
        $role = new Role();
        $role->id_pegawai = request('id_pegawai');
        $role->id_module = request('id_module');
        $role->save();

        return back()->with('success', 'pegawai di tambahkan ke module');
    }

    public function deleteRole(Role $role)
    {
        $role->delete();
        return back()->with('delete', 'pegawai di hapus dari module');
    }
}
