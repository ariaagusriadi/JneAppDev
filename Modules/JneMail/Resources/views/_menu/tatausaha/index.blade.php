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
    JneMail
@endsection

@section('menu')
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-inbox"></i>
            <span class="nav-text">inbox</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('') }}" href="{{ url('jnemail/tata-usaha/inbox') }}">inbox</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-envelope-circle-check"></i>
            <span class="nav-text">Sent Mail</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnemail/tata-usaha/sent-mail') }}" href="{{ url('jnemail/tata-usaha/sent-mail') }}">Sent Mail</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
        <i class="fa-solid fa-clock-rotate-left"></i>
        <span class="nav-text">History Mail</span>
    </a>
    <ul aria-expanded="false">
        <li><a class=" {{ check('jnemail/tata-usaha/history-mail') }}" href="{{ url('jnemail/tata-usaha/history-mail') }}">History Mail</a>
        </li>
    </ul>
</li>
@endsection
