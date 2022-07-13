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
            <span class="nav-text">Pengajuan Baru</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jneapp.test/jnesurat/unit-kerja/pengajuan-baru') }}" href="{{ url('jnesurat/unit-kerja/pengajuan-baru') }}">Pengajuan Baru</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-envelope-circle-check"></i>
            <span class="nav-text">Pengajuan Aktif</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnesurat/unit-kerja/pengajuan-aktif') }}" href="{{ url('jnesurat/unit-kerja/pengajuan-aktif') }}">Pengajuan Aktif</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-regular fa-envelope-open"></i>
            <span class="nav-text">Pengajuan Selesai</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnesurat/unit-kerja/pengajuan-selesai') }}" href="{{ url('jnesurat/unit-kerja/pengajuan-selesai') }}">Pengajuan Selesai</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span class="nav-text">Riwayat Pengajuan</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnesurat/unit-kerja/riwayat-pengajuan') }}" href="{{ url('jnesurat/unit-kerja/riwayat-pengajuan') }}">Riwayat Pengajuan</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-outdent"></i>
            <span class="nav-text">Format Surat</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnesurat/unit-kerja/format-surat') }}" href="{{ url('jnesurat/unit-kerja/format-surat') }}">Format Surat</a>
            </li>

        </ul>
    </li>
@endsection
