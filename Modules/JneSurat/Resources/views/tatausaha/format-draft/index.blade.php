@extends('jnesurat::_menu.tatausaha.index')

@section('content')
    <h1>Format draft</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Format draft
                    <a href="{{ url('jnesurat/tata-usaha/format-draft/create') }}" class="btn btn-rounded btn-dark"><span
                            class="btn-icon-left text-dark"><i class="fa fa-plus color-dark"></i>
                        </span>Tambah Format Draft Baru</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Download</th>
                                    <th>Nama Format draft</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_format as $format)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ url('jnesurat/tata-usaha/format-draft', $format->id) }}/edit"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('utils.delete', [
                                                'url' => url('jnesurat/tata-usaha/format-draft', $format->id),
                                            ])
                                        </td>
                                        <td>
                                            <a href="{{ url($format->file_format_surat) }}"
                                                class="btn btn-primary" target="_blank">Download Format</a>
                                        </td>
                                        <td>{{ $format->nama_format_surat }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Download</th>
                                    <th>Nama Format Surat</th>
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
