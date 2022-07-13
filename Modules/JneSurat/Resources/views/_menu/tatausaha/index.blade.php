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
            <li><a class=" {{ check('jneapp.test/jnesurat/tata-usaha/pengajuan-masuk') }}"
                    href="{{ url('jnesurat/tata-usaha/pengajuan-masuk') }}">Pengajuan Masuk</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-envelope-circle-check"></i>
            <span class="nav-text">Pengajuan Aktif</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnesurat/tata-usaha/pengajuan-aktif') }}"
                    href="{{ url('jnesurat/tata-usaha/pengajuan-aktif') }}">Pengajuan Aktif</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-regular fa-envelope-open"></i>
            <span class="nav-text">Pengajuan Selesai</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnesurat/tata-usaha/pengajuan-selesai') }}"
                    href="{{ url('jnesurat/tata-usaha/pengajuan-selesai') }}">Pengajuan Selesai</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span class="nav-text">Riwayat Pengajuan</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnesurat/tata-usaha/riwayat-pengajuan') }}"
                    href="{{ url('jnesurat/tata-usaha/riwayat-pengajuan') }}">Riwayat Pengajuan</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-outdent"></i>
            <span class="nav-text">Format Draft</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnesurat/tata-usaha/format-draft') }}" href="{{ url('jnesurat/tata-usaha/format-draft') }}">Format Draft</a>
            </li>

        </ul>
    </li>
@endsection
