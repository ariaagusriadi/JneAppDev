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
            <i class="fa-solid fa-briefcase"></i>
            <span class="nav-text">Pengajuan Lembur</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnelembur/junior-supervisor/pengajuan-lembur-masuk') }}"
                    href="{{ url('jnelembur/junior-supervisor/pengajuan-lembur-masuk') }}">Pengajuan Lembur</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span class="nav-text">Pengajuan selesai</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnelembur/junior-supervisor/pengajuan-lembur-selesai') }}"
                    href="{{ url('jnelembur/junior-supervisor/pengajuan-lembur-selesai') }}">Pengajuan Lembur selesai</a>
            </li>
        </ul>
    </li>
@endsection
