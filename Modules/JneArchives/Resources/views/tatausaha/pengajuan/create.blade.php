@extends('jnearchives::_menu.tatausaha.index')

@section('content')
    <h1>Pengajuan Format</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Daftar pengajuan baru
                </div>
                <div class="card-body">
                    <form action="{{ url('jnearchives/tata-usaha/format-pengajuan') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nama Dokumen</h5>
                                    @include('utils.errors', ['item' => 'nama_dokumen'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('nama_dokumen') is-invalid @enderror"
                                        name="nama_dokumen" placeholder="nama dokumen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5>File Dokumen</h5>
                                @include('utils.errors', ['item' => 'file_dokumen'])
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  @error('file_dokumen') is-invalid @enderror"
                                            name="file_dokumen" accept=".pdf,.doc , .docx , .xlsx">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
                <div class="card-footer">
                    @include('utils.backbutton', [
                        'url' => url('jnearchives/tata-usaha/format-pengajuan/'),
                    ])
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
