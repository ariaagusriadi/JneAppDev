@extends('jnepegawai::_menu.index')

@section('content')
    <div class="row">
        <div class="col-md-3 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Foto Pegawai </div>
                </div>
                <img src="{{ url(auth()->user()->foto) }}" class="img-fluid" alt="" srcset="">
            </div>
        </div>
        <div class="col-md-8 mt-5">

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Data Pegawai
                    </div>
                    <a href="{{ url('jnepegawai/setting', auth()->user()->id ) }}/edit" class="btn btn-warning float-right"><i class="fa fa-pen"></i> Edit Profile</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <strong>
                                Nama
                            </strong>
                        </div>
                        <div class="col">
                            {{ auth()->user()->nama }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <strong>
                                Nik
                            </strong>
                        </div>
                        <div class="col">
                            {{ auth()->user()->nik }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <strong>
                                Email
                            </strong>
                        </div>
                        <div class="col">
                            {{ auth()->user()->email }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <strong>
                                Unit Kerja
                            </strong>
                        </div>
                        <div class="col">
                            {{ auth()->user()->unitkerja->nama_unit }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <strong>
                                jenis kelamin
                            </strong>
                        </div>
                        <div class="col">
                            {{ auth()->user()->jenis_kelamin }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
