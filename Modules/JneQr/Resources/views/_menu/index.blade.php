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
    JneQR
@endsection

@section('menu')
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-qrcode"></i>
            <span class="nav-text">New Qr</span>
        </a>
        <ul aria-expanded="false">
            <li> <a class="{{ check('jneqr/new-qr') }}" href="{{ url('jneqr/new-qr') }}">New Qr</a>
            </li>
        </ul>
    </li>
@endsection
