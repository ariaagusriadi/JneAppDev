@extends('jnepermohonan::_menu.Devisi.index')

@section('content')
    <h1>Pengajuan Permohonan barang baru</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pengajuan Permohonan barang baru

                </div>
                <div class="card-body">
                    <form action="{{ url('jnepermohonan/devisi/pengajuan-baru') }}" method="post">
                        @csrf

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
