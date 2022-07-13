@extends('jneadmin::_menu.index')

@section('content')
    <h1>Create Data UnitKerja</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create Data UnitKerja
                </div>
                <div class="card-body">
                    <form action="{{ url('jneadmin/unit-kerja') }}" method="post">
                        @csrf
                        <div class="form-group row justify-content-center">
                            <label class="col-sm-3 col-form-label">Unit Kerja</label>
                            <div class="col-sm-6">
                                <input type="text"
                                    class="form-control input-rounded @error('nama_unit') is-invalid @enderror"
                                    name="nama_unit">
                               @include('utils.errors', ['item' => 'nama_unit'])
                            </div>
                        </div>
                        <button class="btn btn-rounded btn-dark float-right"><span class="btn-icon-left text-dark"><i
                                    class="fa fa-save color-dark"></i>
                            </span>Save</button>
                    </form>
                </div>
                <div class="card-footer">
                    @include('utils.backbutton', ['url' => url('jneadmin/unit-kerja')])
                </div>
            </div>
        </div>
    </div>
@endsection
