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
    JnePermohonan
@endsection

@section('menu')
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-boxes-packing"></i>
            <span class="nav-text">Pengajuan Baru</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnepermohonan/devisi/pengajuan-baru') }}" href="{{ url('jnepermohonan/devisi/pengajuan-baru') }}">Pengajuan Baru</a>
            </li>
        </ul>
    </li>

@endsection
