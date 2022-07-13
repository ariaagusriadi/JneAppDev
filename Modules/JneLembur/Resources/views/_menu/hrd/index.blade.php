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
    Jne Lembur
@endsection

@section('menu')
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-laptop-file"></i>
            <span class="nav-text">Laporan masuk</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnelembur/hrd/laporan-lembur') }}"
                    href="{{ url('jnelembur/hrd/laporan-lembur') }}">Laporan Lembur masuk</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-regular fa-calendar-check"></i>
            <span class="nav-text">Laporan selesai</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnelembur/hrd/laporan-selesai') }}"
                    href="{{ url('jnelembur/hrd/laporan-selesai') }}">Laporan Lembur selesai</a>
            </li>
        </ul>
    </li>
@endsection
