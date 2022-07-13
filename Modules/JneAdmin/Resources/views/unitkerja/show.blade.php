@extends('jneadmin::_menu.index')

@section('content')
    <h1>Data UnitKerja</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Data UnitKerja
                </div>
                <div class="card-body">
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3">Unit Kerja :</label>
                        <div class="col-sm-6">
                            <h4>{{ $unitkerja->nama_unit }}</h4>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    @include('utils.backbutton', ['url' => url('jneadmin/unit-kerja')])
                </div>
            </div>
        </div>
    @endsection
