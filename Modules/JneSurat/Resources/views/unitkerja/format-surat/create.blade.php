@extends('jnesurat::_menu.unitkerja.index')

@section('content')
    <h1>Format Surat</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Format Surat
                </div>
                <div class="card-body">
                    <form action="{{ url('jnesurat/unit-kerja/format-surat') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nama Format Surat</h5>
                                    @include('utils.errors', ['item' => 'nama_format_surat'])
                                    <input type="text"
                                        class="form-control input-rounded @error('nama_format_surat') is-invalid @enderror"
                                        name="nama_format_surat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>File Format Surat</h5>
                                    @include('utils.errors', ['item' => 'file_format_surat'])
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('file_format_surat') is-invalid @enderror"
                                                name="file_format_surat" accept=".pdf, .doc, .docx">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                @include('utils.backbutton', [
                                    'url' => url('jnesurat/unit-kerja/pengajuan-baru'),
                                ])
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-rounded btn-dark float-right"><span
                                        class="btn-icon-left text-dark"><i class="fa fa-save color-dark"></i>
                                    </span>Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
