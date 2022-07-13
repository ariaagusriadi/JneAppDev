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
            <i class="fa-solid fa-person-digging"></i>
            <span class="nav-text">Pengajuan Lembur</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnelembur/kordinator-bidang/pengajuan-lembur-baru') }}" href="{{ url('jnelembur/kordinator-bidang/pengajuan-lembur-baru') }}">Pengajuan Lembur</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-chart-line"></i>
            <span class="nav-text">Pengajuan Aktif</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnelembur/kordinator-bidang/pengajuan-lembur-aktif') }}" href="{{ url('jnelembur/kordinator-bidang/pengajuan-lembur-aktif') }}">Pengajuan Aktif</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-clipboard-check"></i>
            <span class="nav-text">Laporan Pengajuan</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnelembur/kordinator-bidang/pengajuan-lembur-selesai') }}" href="{{ url('jnelembur/kordinator-bidang/pengajuan-lembur-selesai') }}">Laporan pengajuan Hrd</a>
            </li>
        </ul>
    </li>
@endsection
