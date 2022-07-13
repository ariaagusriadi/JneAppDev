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
            <i class="fa-regular fa-envelope"></i>
            <span class="nav-text">Send Mail</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnemail/unit-kerja/send-mail') }}" href="{{ url('jnemail/unit-kerja/send-mail') }}">Send Mail</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-envelope-circle-check"></i>
            <span class="nav-text">Sent Mail</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnemail/unit-kerja/sent-mail') }}" href="{{ url('jnemail/unit-kerja/sent-mail') }}">Sent Mail</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span class="nav-text">History Mail</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnemail/unit-kerja/history-mail') }}" href="{{ url('jnemail/unit-kerja/history-mail') }}">History Mail</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-inbox"></i>
            <span class="nav-text">inbox</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnemail/unit-kerja/inbox-mail') }}" href="{{ url('jnemail/unit-kerja/inbox-mail') }}">inbox</a>
            </li>
        </ul>
    </li>
@endsection
