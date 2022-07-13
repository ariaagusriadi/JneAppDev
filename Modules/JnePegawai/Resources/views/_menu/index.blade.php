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
    JnePegawai
@endsection

@section('menu')
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-chart-line"></i>
            <span class="nav-text">Dashboard</span>
        </a>
        <ul aria-expanded="false">
            <li> <a class="{{ check('jnepegawai/dashboard') }}" href="{{ url('jnepegawai/dashboard') }}">Dashboard</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-gear"></i>
            <span class="nav-text">Setting</span>
        </a>
        <ul aria-expanded="false">
            <li> <a class="{{ check('jnepegawai/setting') }}" href="{{ url('jnepegawai/setting') }}">Setting</a>
            </li>
        </ul>
    </li>
@endsection
