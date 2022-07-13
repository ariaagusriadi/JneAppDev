@extends('jnesurat::_menu.unitkerja.index')

@section('content')
    <h1>Tambah Data Pengajuan Baru</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Pengajuan Baru
                </div>
                <div class="card-body">
                    <form action="{{ url('jnesurat/unit-kerja/pengajuan-baru') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nama</h5>
                                    <input type="text" class="form-control input-rounded" name="" readonly
                                        value="{{ auth()->user()->nama }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Unit Pengaju</h5>
                                    <input type="text" class="form-control input-rounded" name="" readonly
                                        value="{{ auth()->user()->unitkerja->nama_unit }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nama Pengajuan</h5>
                                    @include('utils.errors', ['item' => 'nama_pengajuan'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('nama_pengajuan') is-invalid @enderror"
                                        name="nama_pengajuan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Keperluan Pengajuan</h5>
                                    @include('utils.errors', ['item' => 'keperluan_pengajuan'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('keperluan_pengajuan') is-invalid @enderror"
                                        name="keperluan_pengajuan">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>File Pengantar</h5>
                                    @include('utils.errors', ['item' => 'file_pengantar'])
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input  @error('file_pengantar') is-invalid @enderror" name="file_pengantar" accept=".pdf, .doc, .docx">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>File Lampiran</h5>
                                    @include('utils.errors', ['item' => 'file_lampiran'])
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('file_lampiran') is-invalid @enderror" name="file_lampiran" accept=".pdf, .doc, .docx">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-6">
                                <button class="btn btn-rounded btn-dark float-right"><span
                                        class="btn-icon-left text-dark"><i class="fa fa-save color-dark"></i>
                                    </span>Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    @include('utils.backbutton', ['url' => url('jnesurat/unit-kerja/pengajuan-baru')])
                </div>
            </div>
        </div>
    </div>
@endsection
