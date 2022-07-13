@extends('jnelembur::_menu.hrd.index')

@section('content')
    <h1>laporan Lembur baru</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    laporan Lembur Baru
                </div>
                <div class="card-body">
                    <table id="example" class="display min-w850">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>nama pengaju</th>
                                <th>Status laporan lembur</th>
                                <th>Tanggal laporan di update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp

                            @foreach ($list_laporan as $laporan)
                                @if ($laporan->status == '331')
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <a href="{{ url('jnelembur/hrd/laporan-lembur', $laporan->id) }}"
                                                class="btn btn-info"><i class="fa fa-eye"></i> Lihat laporan</a>
                                        </td>
                                        <td>{{ $laporan->pegawai->nama }}</td>
                                        <td>{{ $laporan->status($laporan->status) }}</td>
                                        <td>{{ $laporan->created_at->format('F j, Y, g:i a') }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>nama pengaju</th>
                                <th>Status laporan lembur</th>
                                <th>Tanggal laporan di update</th>
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
