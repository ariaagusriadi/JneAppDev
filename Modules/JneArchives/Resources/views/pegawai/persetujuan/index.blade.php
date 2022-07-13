@extends('jnearchives::_menu.pegawai.index')

@section('content')
    <h1>Persetujuan Format</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Daftar Format Persetujuan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama Dokumen</th>
                                    <th>Tanggal Upload</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($list_persetujuan as $persetujuan)

                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <a href="{{ url($persetujuan->file_dokumen) }}" class="btn btn-dark" target="_blank"><i class="fa fa-download"></i></a>
                                            </td>
                                            <td>{{ $persetujuan->nama_dokumen }}</td>
                                            <td>{{ $persetujuan->created_at->format('F j, Y, g:i a') }}</td>
                                        </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama Dokumen</th>
                                    <th>Tanggal Upload</th>
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
