@extends('jnesurat::_menu.unitkerja.index')

@section('content')
    <h1>Data Pengajuan Aktif</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Pengajuan Aktif
                    <a href="{{ url('jnesurat/unit-kerja/pengajuan-baru/create') }}" class="btn btn-rounded btn-dark"><span
                            class="btn-icon-left text-dark"><i class="fa fa-plus color-dark"></i>
                        </span>Tambah Pengajuan Baru</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Status Pengajuan</th>
                                    <th>Nama Pengajuan</th>
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
                                                <a href="{{ url('jnesurat/unit-kerja/pengajuan-aktif', $pengajuan->id) }}" class="btn btn-dark"><i
                                                    class="fa fa-eye"></i> Lihat Pengajuan</a>
                                            </td>
                                            <td>{{ $pengajuan->getstatus($pengajuan->status) }}</td>
                                            <td>{{ $pengajuan->nama_pengajuan }}</td>
                                            <td>{{ $pengajuan->created_at->format("F j, Y, g:i a") }}</td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Status Pengajuan</th>
                                    <th>Nama Pengajuan</th>
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
