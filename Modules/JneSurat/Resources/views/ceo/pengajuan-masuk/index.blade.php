@extends('jnesurat::_menu.ceo.index')

@section('content')
    <h1>Data Pengajuan masuk</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pengajuan Masuk</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama Pengajuan</th>
                                    <th>Status Pengajuan</th>
                                    <th>Unit Pengajuan</th>
                                    <th>Tanggal Pengajuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($list_pengajuan as $pengajuan)
                                    @if ($pengajuan->status == '201')
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <a href="{{ url('jnesurat/ceo/pengajuan-masuk', $pengajuan->id) }}"
                                                    class="btn btn-sm btn-dark"><i class="fa fa-eye"></i> Lihat Pengajuan</a>
                                            </td>
                                            <td>{{ $pengajuan->nama_pengajuan }}</td>
                                            <td>{{ $pengajuan->getstatus($pengajuan->status) }}</td>
                                            <td>{{ $pengajuan->unitkerja->nama_unit }}</td>
                                            <td>{{ $pengajuan->created_at->format('F j, Y, g:i a') }}</td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>nama Pengajuan</th>
                                    <th>Status Pengajuan</th>
                                    <th>Unit Pengajuan</th>
                                    <th>Tanggal Pengajuan</th>
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
