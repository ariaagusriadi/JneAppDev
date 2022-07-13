@extends('jnelembur::_menu.junior-supervisior.index')

@section('content')
    <h1>Detail Pengajuan Lembur masuk</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Pengajuan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <dt>Tanggal Pengajuan</dt>
                            <dl>{{ $lembur->tanggal_pengajuan }}</dl>
                        </div>
                        <div class="col">
                            <dt>Status Pengajuan</dt>
                            <dl>{{ $lembur->status($lembur->status) }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Unit Pengajuan</dt>
                            <dl>{{ $lembur->unitkerja->nama_unit }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>File List Pegawai</th>
                                    <th>File Formulir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a href="{{ url($lembur->file_list_karyawan) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        List Pegawai</a>
                                </td>
                                <td>
                                    <a href="{{ url($lembur->file_formulir) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        Formulir</a>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary float-left" data-toggle="modal"
                                data-target=".bd-example-modal-lg">Terima Lembur</button>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ url('jnelembur/junior-supervisor/pengajuan-lembur-masuk/tolak', $lembur->id) }}" method="post">
                                @csrf
                                @method('put')
                                <button class="btn btn-danger float-right"
                                    onclick="return confirm('yakin menolak pengajuan lembur')">Tolak Lembur</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            @include('utils.backbutton', [
                                'url' => url('jnelembur/junior-supervisor/pengajuan-lembur-masuk/'),
                            ])
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Log
                </div>
                <div class="card-body">
                    <div id="DZ_W_TimeLine1" class="widget-timeline dz-scroll style-1 height370">
                        <ul class="timeline">
                            @foreach ($lembur->loglembur->sortByDesc('created_at')->values() as $log)
                                <li>
                                    <div class="timeline-badge info">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>{{ $log->pegawai->nama }} ,
                                            <em>{{ $log->created_at->format('F j, Y, g:i a') }}</em> </span>
                                        <p class="mb-0">
                                            {{ $log->keterangan }}
                                        </p>
                                        <span class="badge bg-info float-right">{{ $log->status($log->status) }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">FORMULIR SURAT PERINTAH LEMBUR JNE CABANG KETAPANG</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="{{ url('jnelembur/junior-supervisor/pengajuan-lembur-masuk', $lembur->id) }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">TANGGAL SPL</label>
                                @include('utils.errors', ['item' => 'tanggal_spl'])
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="date" class="form-control  @error('tanggal_spl') is-invalid @enderror"
                                        name="tanggal_spl">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">DEVISI</label>
                                @include('utils.errors', ['item' => 'devisi'])
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control  @error('devisi') is-invalid @enderror"
                                        name="devisi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">LOKASI LEMBUR</label>
                                @include('utils.errors', ['item' => 'lokasi_lembur'])
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control  @error('lokasi_lembur') is-invalid @enderror"
                                        name="lokasi_lembur">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">TANGGAL LEMBUR</label>
                                @include('utils.errors', ['item' => 'tanggal_lembur'])
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="date"
                                        class="form-control  @error('tanggal_lembur') is-invalid @enderror"
                                        name="tanggal_lembur">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">LEMBUR PADA</label>
                                @include('utils.errors', ['item' => 'lembur_pada_hari'])
                            </div>
                            <div class="col-md-9">
                                <select
                                    class="form-control default-select  @error('lembur_pada_hari') is-invalid @enderror"
                                    name="lembur_pada_hari">
                                    <option value="">Pilih Hari Lembur</option>
                                    <option value="hari kerja">HARI KERJA</option>
                                    <option value="hari libur">HARI LIBUR</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label mt-3">URAIAN ALASAN LEMBUR
                                        :</label>
                                    @include('utils.errors', ['item' => 'alasan_lembur'])
                                    <textarea name="alasan_lembur" id="" cols="30" rows="10"
                                        class="form-control @error('alasan_lembur') is-invalid @enderror"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label">LIST KARYAWAN YANG DIPERINTAHKAN</label>
                                @include('utils.errors', ['item' => 'file_list_terima'])
                            </div>
                            <div class="col-md-9">
                                <div class="form-group mt-3">
                                    <input type="file"
                                        class="custom-file-input  @error('file_list_terima') is-invalid @enderror"
                                        name="file_list_terima" accept=".pdf , .docx , .doc , .xlsx">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Generate surat perintah</button>
                </form>
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
