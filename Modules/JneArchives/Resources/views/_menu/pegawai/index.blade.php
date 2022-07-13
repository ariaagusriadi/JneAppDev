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
    JneArchives
@endsection

@section('menu')
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-list-check"></i>
            <span class="nav-text">Pengajuan Format</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnearchives/pegawai/format-pengajuan') }}" href="{{ url('jnearchives/pegawai/format-pengajuan') }}">Pengajuan Format</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-regular fa-square-check"></i>
            <span class="nav-text">Persetujuan Format</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnearchives/pegawai/format-persetujuan') }}" href="{{ url('jnearchives/pegawai/format-persetujuan') }}">Persetujuan Format</a>
            </li>
        </ul>
    </li>

@endsection
