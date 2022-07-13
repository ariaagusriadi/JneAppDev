@extends('jneadmin::_menu.index')

@section('content')
    <h1>Create Data Module</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create Data Module
                </div>
                <div class="card-body">
                    <form action="{{ url('jneadmin/module') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>NAMA APP</h5>
                                    @include('utils.errors', ['item' => 'app'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('app') is-invalid @enderror"
                                        name="app" placeholder="App" autofocus>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>NAMA MODULE</h5>
                                    @include('utils.errors', ['item' => 'name'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('name') is-invalid @enderror"
                                        name="name" placeholder="Name">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>TITLE</h5>
                                    @include('utils.errors', ['item' => 'title'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('title') is-invalid @enderror"
                                        name="title" placeholder="Title">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>SUBTITLE</h5>
                                    @include('utils.errors', ['item' => 'subtitle'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('subtitle') is-invalid @enderror"
                                        name="subtitle" placeholder="Subtitle">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>URL</h5>
                                    @include('utils.errors', ['item' => 'url'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('url') is-invalid @enderror"
                                        name="url" placeholder="Url">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>COLOR</h5>
                                    @include('utils.errors', ['item' => 'color'])
                                    <input type="text"
                                        class="form-control input-rounded complex-colorpicker @error('color') is-invalid @enderror "
                                        name="color" placeholder="Color">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>TAG</h5>
                                    @include('utils.errors', ['item' => 'tag'])
                                    <input type="text"
                                        class="form-control input-rounded  @error('tag') is-invalid @enderror"
                                        name="tag" placeholder="Tag">
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <button class="btn btn-rounded btn-dark float-right"><span
                                        class="btn-icon-left text-dark"><i class="fa fa-save color-dark"></i>
                                    </span>Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    @include('utils.backbutton', ['url' => url('jneadmin/module')])
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <!-- Daterange picker -->
    <link href="{{ url('asset') }}/vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{ url('asset') }}/vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{ url('asset') }}/vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="{{ url('asset') }}/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{ url('asset') }}/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="{{ url('asset') }}/vendor/pickadate/themes/default.date.css">
    <!-- Custom Stylesheet -->
    <link href="{{ url('asset') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ url('asset') }}/css/style.css" rel="stylesheet">
@endpush

@push('script')
    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="{{ url('asset') }}/vendor/moment/moment.min.js"></script>
    <script src="{{ url('asset') }}/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="{{ url('asset') }}/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="{{ url('asset') }}/vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="{{ url('asset') }}/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="{{ url('asset') }}/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="{{ url('asset') }}/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
    </script>
    <!-- pickdate -->
    <script src="{{ url('asset') }}/vendor/pickadate/picker.js"></script>
    <script src="{{ url('asset') }}/vendor/pickadate/picker.time.js"></script>
    <script src="{{ url('asset') }}/vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="{{ url('asset') }}/js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="{{ url('asset') }}/js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="{{ url('asset') }}/js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="{{ url('asset') }}/js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="{{ url('asset') }}/js/plugins-init/pickadate-init.js"></script>
@endpush
