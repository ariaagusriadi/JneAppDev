@extends('jnelembur::_menu.kordinator-bidang.index')

@section('content')
    <h1>Pengajuan Lembur aktif</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pengajuan Lembur aktif
                    <a href="{{ url('jnelembur/kordinator-bidang/pengajuan-lembur-baru/create') }}" class="btn btn-dark"><i
                            class="fa fa-plus"></i> Tambah Pengajuan lembur</a>
                </div>
                <div class="card-body">
                    <table id="example" class="display min-w850">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Status Pengajuan</th>
                                <th>Tanggal Pengajuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp

                            @foreach ($list_lembur as $lembur)
                                @if ($lembur->status == '221' )
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <a href="{{ url('jnelembur/kordinator-bidang/pengajuan-lembur-aktif', $lembur->id) }}"
                                                class="btn btn-info"><i class="fa fa-eye"></i> Lihat surat perintah</a>
                                        </td>
                                        <td>{{ $lembur->status($lembur->status) }}</td>
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
