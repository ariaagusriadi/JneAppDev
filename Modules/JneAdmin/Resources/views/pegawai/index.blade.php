@extends('jneadmin::_menu.index')

@section('content')
    <h1>Data Pegawai</h1>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Pegawai
                    <a href="{{ url('jneadmin/pegawai/create') }}" class="btn btn-rounded btn-dark"><span
                            class="btn-icon-left text-dark"><i class="fa fa-plus color-dark"></i>
                        </span>Tambah Pegawai</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_pegawai as $pegawai)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ url('jneadmin/pegawai', $pegawai->id) }}" class="btn btn-info"><i
                                                    class="fa fa-info"></i></a>
                                            <a href="{{ url('jneadmin/pegawai', $pegawai->id) }}/edit"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('utils.delete', [
                                                'url' => url('jneadmin/pegawai', $pegawai->id),
                                            ])
                                        </td>
                                        <td>
                                            {{ $pegawai->nik }}
                                        </td>
                                        <td>
                                            {{ $pegawai->nama }}
                                        </td>
                                        <td>
                                            {{ $pegawai->email }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Email</th>
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
