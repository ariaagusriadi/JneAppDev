@extends('jnepegawai::_menu.index')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Welcome {{ auth()->user()->nama }}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <div class="default-tab">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home"><i
                                                        class="la la-home mr-2"></i> Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile"><i
                                                        class="fa-regular fa-calendar mr-2"></i> Time</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#contact"><i
                                                        class="la la-phone mr-2"></i> Contact</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                                <div class="pt-4">
                                                    <h4>Jne App</h4>
                                                    <p>
                                                        welcome back corporate warrior
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile">
                                                <div class="pt-4">
                                                    <h4>Time</h4>
                                                    <p>{{ date('F j, Y') }}</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="contact">
                                                <div class="pt-4">
                                                    <h4>This is contact title</h4>
                                                    <p>Far far away, behind the word mountains, far from the countries
                                                        Vokalia and Consonantia, there live the blind texts. Separated they
                                                        live in Bookmarksgrove.
                                                    </p>
                                                    <p>Far far away, behind the word mountains, far from the countries
                                                        Vokalia and Consonantia, there live the blind texts. Separated they
                                                        live in Bookmarksgrove.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="text-center p-5 overlay-box">
                                    <img src="{{ url(auth()->user()->foto) }}" width="100"
                                        class="img-fluid rounded-circle" alt="">
                                    <h3 class="mt-3 mb-0 text-white">{{ auth()->user()->nama }}</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <div class="bgl-primary rounded p-3">
                                                <h4 class="mb-0">{{ auth()->user()->jenis_kelamin }}</h4>
                                                <small>Patient Gender</small>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bgl-primary rounded p-3">
                                                <h4 class="mb-0">{{ auth()->user()->unitkerja->nama_unit }}</h4>
                                                <small>Unit Kerja</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-0">
                                    <a href="{{ url('jnepegawai/setting') }}"
                                        class="btn btn-primary btn-lg btn-block">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
