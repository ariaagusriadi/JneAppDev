@extends('jnepegawai::_menu.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create Data Pegawai
                </div>
                <div class="card-body">
                    <form action="{{ url('jnepegawai/setting', $pegawai->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nama</h5>
                                    @include('utils.errors', ['item' => 'nama'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('nama') is-invalid @enderror"
                                        name="nama" placeholder="nama" value="{{ $pegawai->nama }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nik</h5>
                                    @include('utils.errors', ['item' => 'nik'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('nik') is-invalid @enderror"
                                        name="nik" placeholder="nik" value="{{ $pegawai->nik }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Email</h5>
                                    @include('utils.errors', ['item' => 'email'])
                                    <input type="email"
                                        class="form-control input-rounded  @error('email') is-invalid @enderror"
                                        name="email" placeholder="email" value="{{ $pegawai->email }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Password</h5>
                                    @include('utils.errors', ['item' => 'password'])
                                    <input type="password"
                                        class="form-control input-rounded  @error('password') is-invalid @enderror"
                                        name="password" placeholder="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Jenis Kelamin</h5>
                                    @include('utils.errors', ['item' => 'jenis_kelamin'])
                                    <select class="form-control default-select" name="jenis_kelamin">
                                        @if ($pegawai->jenis_kelamin == 'Laki-Laki')
                                            <option value="{{ $pegawai->jenis_kelamin }}">
                                                {{ $pegawai->jenis_kelamin }}</option>
                                            <option value="Perempuan">Perempuan</option>
                                        @elseif ($pegawai->jenis_kelamin == 'Perempuan')
                                            <option value="{{ $pegawai->jenis_kelamin }}">
                                                {{ $pegawai->jenis_kelamin }}</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Unit Kerja</h5>
                                    @include('utils.errors', ['item' => 'unit_kerja'])
                                    <select class="form-control default-select" name="unit_kerja" disabled>
                                        <option value=""> {{ $pegawai->unitkerja->nama_unit }}</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Foto</h5>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="foto" accept="image/*">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-rounded btn-dark float-right"><span class="btn-icon-left text-dark"><i
                                    class="fa fa-save color-dark"></i>
                            </span>Save</button>
                    </form>
                </div>
                <div class="card-footer">
                    @include('utils.backbutton', ['url' => url('jnepegawai/setting')])
                </div>
            </div>
        </div>
    </div>
@endsection
