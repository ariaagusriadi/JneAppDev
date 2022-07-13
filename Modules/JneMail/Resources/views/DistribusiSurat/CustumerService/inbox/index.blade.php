@extends('jnemail::_menu.DistribusiSurat.custumerservice.index')


@section('content')
    <h1>Inbox Surat</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Inbox Surat
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama Pengirim</th>
                                    <th>Unit Pengirim Pengirim</th>
                                    <th>Tujuan Pengirim</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($list_inbox as $inbox)
                                    @if ($inbox->status == '604')
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <a href="{{ url('jnemail/custumer-service/inbox-mail' , $inbox->id) }}" class="btn btn-rounded btn-dark"><i class="fa fa-eye"></i> Lihat Surat</a>
                                            </td>
                                            <td>
                                                {{ $inbox->pegawai->nama }}
                                            </td>
                                            <td>
                                                {{ $inbox->unitkerja->nama_unit }}
                                            </td>
                                            <td>
                                                {{ $inbox->tujuan }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama Pengirim</th>
                                    <th>Unit Pengirim Pengirim</th>
                                    <th>Tujuan Pengirim</th>
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

