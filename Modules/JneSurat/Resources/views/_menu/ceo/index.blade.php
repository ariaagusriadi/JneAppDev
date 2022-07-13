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
    JneSurat
@endsection

@section('menu')
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-regular fa-paper-plane"></i>
            <span class="nav-text">Pengajuan Masuk</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jneapp.test/jnesurat/ceo/pengajuan-masuk') }}"
                    href="{{ url('jnesurat/ceo/pengajuan-masuk') }}">Pengajuan Masuk</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-regular fa-paper-plane"></i>
            <span class="nav-text">Riwayat Pengajuan</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnesurat/ceo/riwayat-pengajuan') }}" href="{{ url('jnesurat/ceo/riwayat-pengajuan') }}">Riwayat Pengajuan</a>
            </li>
        </ul>
    </li>
@endsection
