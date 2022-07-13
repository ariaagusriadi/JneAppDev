@extends('jnemail::_menu.unitkerja.index')


@section('content')
    <h1>Data History Surat</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data History Surat
                    <a href="{{ url('jnemail/unit-kerja/send-mail/create') }}" class="btn btn-rounded btn-dark"><span
                            class="btn-icon-left text-dark"><i class="fa fa-plus color-dark"></i>
                        </span>Kirim Surat Baru</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Tujuan Surat</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($list_history as $history)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <th>
                                            <a href="{{ url('jnemail/unit-kerja/history-mail', $history->id) }}"
                                                class="btn btn-info"><i class="fa fa-eye"></i> lihat surat</a>
                                        </th>
                                        <th>{{ $history->tujuan }}</th>
                                        <th>{{ $history->status($history->status) }}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Status Pengajuan</th>
                                    <th>status</th>
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
