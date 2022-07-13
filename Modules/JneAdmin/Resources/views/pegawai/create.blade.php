@extends('jneadmin::_menu.index')

@section('content')
    <h1>Create Data Pegawai</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create Data Pegawai
                </div>
                <div class="card-body">
                    <form action="{{ url('jneadmin/pegawai') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nama</h5>
                                    @include('utils.errors', ['item' => 'nama'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('nama') is-invalid @enderror"
                                        name="nama" placeholder="nama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nik</h5>
                                    @include('utils.errors', ['item' => 'nik'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('nik') is-invalid @enderror"
                                        name="nik" placeholder="nik">
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
                                        name="email" placeholder="email">
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
                                        <option selected>Pilih JeniKelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Unit Kerja</h5>
                                    @include('utils.errors', ['item' => 'unit_kerja'])
                                    <select class="form-control default-select" name="unit_kerja">
                                        <option selected>Pilih Unit Kerja</option>
                                        @foreach ($list_unitkerja as $unitkerja)
                                            </option>
                                            <option value="{{ $unitkerja->id }}">{{ $unitkerja->nama_unit }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Foto</h5>
                                @include('utils.errors', ['item' => 'foto'])
                                <img class="img-preview img-fluid mb-3 col-sm-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="foto"
                                            onchange="previewImage()" accept="image/*" id="image">
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
                    @include('utils.backbutton', ['url' => url('jneadmin/pegawai')])
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
            // const blob = URL.createObjectURL(image.files[0]);
            // imgPreview.src = blob;
        }
    </script>
@endpush
