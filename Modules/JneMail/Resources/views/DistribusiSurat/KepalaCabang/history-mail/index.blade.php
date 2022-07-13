@extends('jnemail::_menu.DistribusiSurat.kepalacabang.index')


@section('content')
    <h1>Data History Surat</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data History Surat
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
                                    @if ($history->status == '603' || $history->status == '803')
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <th>
                                                <a href="{{ url('jnemail/kepala-cabang/history-mail', $history->id) }}"
                                                    class="btn btn-info"><i class="fa fa-eye"></i> lihat surat</a>
                                            </th>
                                            <th>{{ $history->tujuan }}</th>
                                            <th>{{ $history->status($history->status) }}</th>
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
