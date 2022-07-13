@php
function check($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

@extends('layouts.App')

@section('title')
    JneAdmin
@endsection

@section('menu')
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa fa-user"></i>
            <span class="nav-text">Pegawai</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jneapp.test/jneadmin/pegawai') }}" href="{{ url('jneadmin/pegawai') }}">Pegawai</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon " href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-box"></i>
            <span class="nav-text">Module</span>
        </a>
        <ul aria-expanded="false">
            <li><a class="{{ check('jneapp.test/jneadmin/module') }}" href="{{ url('jneadmin/module') }}">Module</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon " href="javascrip:void()" aria-expanded="false">
            <i class="fa-regular fa-building"></i>
            <span class="nav-text">UnitKerja</span>
        </a>
        <ul aria-expanded="false">
            <li><a class="{{ check('jneapp.test/jneadmin/unit-kerja') }}" href="{{ url('jneadmin/unit-kerja') }}">UnitKerja</a>
            </li>
        </ul>
    </li>
@endsection

