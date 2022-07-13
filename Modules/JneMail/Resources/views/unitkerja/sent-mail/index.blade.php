@extends('jnemail::_menu.unitkerja.index')


@section('content')
    <h1>Data Terkirim Surat</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Terkirim Surat
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
                                @foreach ($list_sent as $sent)
                                    @if ($sent->status == '601' || $sent->status == '602' || $sent->status == '603' || $sent->status == '604' || $sent->status == '605' || $sent->status == '606'  )
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <th>
                                                <a href="{{ url('jnemail/unit-kerja/sent-mail', $sent->id) }}"
                                                    class="btn btn-info"><i class="fa fa-eye"></i> lihat surat</a>
                                            </th>
                                            <th>{{ $sent->tujuan }}</th>
                                            <th>{{ $sent->status($sent->status) }}</th>
                                        </tr>
                                    @endif
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
