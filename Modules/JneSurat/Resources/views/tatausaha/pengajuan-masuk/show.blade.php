@extends('jnesurat::_menu.tatausaha.index')

@section('content')
    <h1>Detail Data Pengajuan Masuk</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Pengajuan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <dt>Nama Pengajuan</dt>
                            <dl>{{ $pengajuan_masuk->nama_pengajuan }}</dl>
                        </div>
                        <div class="col">
                            <dt>Keperluan Pengajuan</dt>
                            <dl>{{ $pengajuan_masuk->keperluan_pengajuan }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Unit Yang Mengajukan</dt>
                            <dl>{{ $pengajuan_masuk->unitkerja->nama_unit }}</dl>
                        </div>
                        <div class="col">
                            <dt>Pegawai Mengajukan</dt>
                            <dl>{{ $pengajuan_masuk->pegawai->nama }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Status terakhir</dt>
                            <dl>{{ $pengajuan_masuk->getstatus($pengajuan_masuk->status) }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>File Pengantar</th>
                                    <th>File Lampiran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a href="{{ url($pengajuan_masuk->file_pengantar) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        Pengantar</a>
                                </td>
                                <td>
                                    @if ($pengajuan_masuk->file_lampiran)
                                        <a href="{{ url($pengajuan_masuk->file_lampiran) }}"
                                            class="btn btn-square btn-sm btn-outline-dark btn-rounded"
                                            target="blank_">Download
                                            Lampiran</a>
                                    @endif
                                </td>
                            </tbody>
                        </table>
                    </div>


                    <hr>
                </div>
                <div class="card-body">
                    <hr>
                    <div class="card-header">
                        Draft surat
                    </div>
                    <form action="{{ url('jnesurat/tata-usaha/pengajuan-masuk', $pengajuan_masuk->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col mt-3">
                                <div class="form-group">
                                    <h5>Draft Surat</h5>
                                    @include('utils.errors', ['item' => 'draft_surat'])
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('draft_surat') is-invalid @enderror"
                                                name="draft_surat" accept=" .doc, .docx">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <div class="form-group">
                                    <h5>Nomor Surat</h5>
                                    @include('utils.errors', ['item' => 'nomor_surat'])
                                    <input type="text"
                                        class="form-control input-rounded   @error('nomor_surat') is-invalid @enderror"
                                        name="nomor_surat">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <div class="form-group">
                                    <h5>Tanggal Surat</h5>
                                    @include('utils.errors', ['item' => 'tanggal_surat'])
                                    <input type="date"
                                        class="form-control input-rounded   @error('tanggal_surat') is-invalid @enderror"
                                        name="tanggal_surat">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <div class="form-group">
                                    <h5>Perihal Surat</h5>
                                    @include('utils.errors', ['item' => 'perihal_surat'])
                                    <input type="text"
                                        class="form-control input-rounded   @error('perihal_surat') is-invalid @enderror"
                                        name="perihal_surat">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <div class="form-group">
                                    <h5>Keterangan Surat</h5>
                                    @include('utils.errors', ['item' => 'keterangan_surat'])
                                    <textarea name="keterangan_surat" class="form-control  @error('keterangan_surat') is-invalid @enderror" cols="20"
                                        rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-rounded btn-dark float-right">Terima Pengajuan</button>
                            </div>
                    </form>
                    <div class="col-md-6">
                        <form action="{{ url('jnesurat/tata-usaha/tolak-pengajuan', $pengajuan_masuk->id) }}"
                            method="post" class="d-inline">
                            @method('put')
                            @csrf
                            <button class="btn btn-rounded btn-danger border-0"
                                onclick="return confirm('Apa kah yakin untuk menolak surat?')">
                                Tolak Pengajuan
                            </button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-5">
                        @include('utils.backbutton', [
                            'url' => url('jnesurat/tata-usaha/pengajuan-masuk'),
                        ])
                    </div>
                </div>
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
                        @foreach ($pengajuan_masuk->log->sortByDesc('created_at')->values() as $log)
                            <li>
                                <div class="timeline-badge info">
                                </div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>{{ $log->pegawai->nama }} ,
                                        <em>{{ $log->created_at->format('F j, Y, g:i a') }}</em> </span>
                                    <p class="mb-0">
                                        {{ $log->keterangan }}
                                    </p>
                                    <span class="badge bg-info float-right">{{ $log->getstatus($log->status) }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
