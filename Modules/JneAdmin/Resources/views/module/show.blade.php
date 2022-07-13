@extends('jneadmin::_menu.index')

@section('content')
    <h1>Detail Data Module</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Data module
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <strong>
                                        Nama App
                                    </strong>
                                </div>
                                <div class="col">
                                    : {{ $module->name }}
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <strong>
                                        App
                                    </strong>
                                </div>
                                <div class="col">
                                    : {{ $module->app }}
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <strong>
                                        Tag
                                    </strong>
                                </div>
                                <div class="col">
                                    : {{ $module->tag }}
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            @include('utils.boxbutton', [
                                'url' => url($module->url),
                                'color' => $module->color,
                                'title' => $module->title,
                                'subtitle' => $module->subtitle,
                            ])
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ url('jneadmin/module/add-role') }}" method="post">
                                @csrf
                                <input type="hidden" name="id_module" value="{{ $module->id }}">
                                <div class="form-group">
                                    <h5>Pegawai</h5>
                                    <select class="form-control default-select" name="id_pegawai">
                                        @foreach ($list_pegawai as $pegawai)
                                            <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="btn btn-rounded btn-dark float-right"><span
                                        class="btn-icon-left text-dark"><i class="fa fa-save color-dark"></i>
                                    </span>Save</button>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr>
                            <br>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center"> Aksi</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Nip</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($module->role as $role)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center ">
                                                <div class="btn-group">
                                                    @include('utils.delete', [
                                                        'url' => url('jneadmin/module/delete-role', $role->id),
                                                    ])
                                                </div>
                                            </td>
                                            <td class="text-center">{{ $role->pegawai->nama }}</td>
                                            <td class="text-center">{{ $role->pegawai->nik }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    @include('utils.backbutton', ['url' => url('jneadmin/module')])
                </div>
            </div>
        </div>


    </div>
@endsection
