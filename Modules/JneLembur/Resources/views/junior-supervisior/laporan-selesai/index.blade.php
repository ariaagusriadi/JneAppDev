@extends('jnelembur::_menu.junior-supervisior.index')

@section('content')
    <h1>laporan Lembur Selesai</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    laporan Lembur Selesai
                </div>
                <div class="card-body">
                    <table id="example" class="display min-w850">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Status laporan lembur</th>
                                <th>nama pengajuan</th>
                                <th>Tanggal laporan terakhir di update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp

                            @foreach ($list_laporan as $laporan)
                                @if ($laporan->status == '441')
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <a href="{{ url('jnelembur/junior-supervisor/pengajuan-lembur-selesai', $laporan->id) }}"
                                                class="btn btn-info"><i class="fa fa-eye"></i> Lihat laporan</a>
                                        </td>
                                        <td>{{ $laporan->status($laporan->status) }}</td>
                                        <td>{{ $laporan->pegawai->nama }}</td>
                                        <td>{{ $laporan->created_at->format('F j, Y, g:i a') }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Status Pengajuan</th>
                                <th>unit pengajuan</th>
                                <th>Tanggal laporan terakhir di update</th>
                            </tr>
                        </tfoot>
                    </table>
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
