@extends('jnemail::_menu.unitkerja.index')


@section('content')
    <h1>Pengiriman Surat</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pengiriman Surat
                </div>
                <div class="card-body">
                    <form action="{{ url('jnemail/unit-kerja/send-mail') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nama Pengirim</h5>
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
                                    <h5>Tujuan</h5>
                                    @include('utils.errors', ['item' => 'tujuan'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('tujuan') is-invalid @enderror"
                                        name="tujuan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Surat</h5>
                                    @include('utils.errors', ['item' => 'file_surat'])
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('file_surat') is-invalid @enderror"
                                                name="file_surat" accept=".pdf">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Subject</h5>
                                    @include('utils.errors', ['item' => 'subject'])
                                    <textarea name="subject" id="" cols="30" rows="10"
                                        class="form-control @error('subject') is-invalid @enderror"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-6">
                                <button class="btn btn-rounded btn-dark float-right"><span
                                        class="btn-icon-left text-dark"><i class="fa-regular fa-paper-plane color-dark"></i>
                                    </span>Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    @include('utils.backbutton', ['url' => url('jnemail/unit-kerja/send-mail')])
                </div>
            </div>
        </div>
    </div>
@endsection
