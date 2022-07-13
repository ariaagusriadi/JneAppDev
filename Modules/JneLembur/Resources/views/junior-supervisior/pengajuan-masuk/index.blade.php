@extends('jnelembur::_menu.junior-supervisior.index')

@section('content')
    <h1>Pengajuan Lembur baru</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pengajuan Lembur Baru
                </div>
                <div class="card-body">
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

                            @foreach ($list_masuk as $lembur)
                                @if ($lembur->status == '111' || $lembur->status == '112')
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <a href="{{ url('jnelembur/junior-supervisor/pengajuan-lembur-masuk', $lembur->id) }}"
                                                class="btn btn-info"><i class="fa fa-eye"></i> Lihat</a>
                                        </td>
                                        <td>{{ $lembur->status($lembur->status) }}</td>
                                        <td>{{ $lembur->pegawai->nama }}</td>
                                        <td>{{ $lembur->tanggal_pengajuan }}</td>
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
@endsection
@push('style')
    <link href="{{ url('asset') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

@push('script')
    <!-- Datatable -->
    <script src="{{ url('asset') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('asset') }}/js/plugins-init/datatables.init.js"></script>
@endpush
