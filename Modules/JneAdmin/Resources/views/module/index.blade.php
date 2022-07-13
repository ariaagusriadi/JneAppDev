@extends('jneadmin::_menu.index')

@section('content')
    <h1>Data Module</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Module
                    <a href="{{ url('jneadmin/module/create') }}" class="btn btn-rounded btn-dark"><span
                            class="btn-icon-left text-dark"><i class="fa fa-plus color-dark"></i>
                        </span>Tambah Module</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama Module</th>
                                    <th>Tag</th>
                                    <th>Jumlah Pegawai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_module as $module)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ url('jneadmin/module', $module->id) }}" class="btn btn-info"><i
                                                    class="fa fa-info"></i></a>
                                            <a href="{{ url('jneadmin/module', $module->id) }}/edit"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('utils.delete', [
                                                'url' => url('jneadmin/module', $module->id),
                                            ])
                                        </td>
                                        <td>
                                            {{ $module->app }}
                                        </td>
                                        <td>
                                            {{ $module->tag }}
                                        </td>
                                        <td>
                                            {{ $module->role->count() }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama Module</th>
                                    <th>Tag</th>
                                    <th>Jumlah Pegawai</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@push('style')
    <link href="{{ url('asset') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

@push('script')
    <!-- Datatable -->
    <script src="{{ url('asset') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('asset') }}/js/plugins-init/datatables.init.js"></script>
@endpush
