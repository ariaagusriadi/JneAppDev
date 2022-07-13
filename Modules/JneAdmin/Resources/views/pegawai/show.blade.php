@extends('jneadmin::_menu.index')

@section('content')
    <h1>Detail Data Pegawai</h1>

    <div class="row">
        <div class="col-md-3 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Foto Pegawai </div>
                </div>
                <img src="{{ url($pegawai->foto) }}" class="img-fluid" alt="" srcset="">
            </div>
        </div>
        <div class="col-md-8 mt-5">

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Data Pegawai
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <strong>
                                Nama
                            </strong>
                        </div>
                        <div class="col">
                            {{ $pegawai->nama }}
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
                            {{ $pegawai->nik }}
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
                            {{ $pegawai->email }}
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
                            {{ $pegawai->unitkerja->nama_unit }}
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
                            {{ $pegawai->jenis_kelamin }}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    @include('utils.backbutton', ['url' => url('jneadmin/pegawai')])
                </div>
            </div>
        </div>
    </div>
@endsection
