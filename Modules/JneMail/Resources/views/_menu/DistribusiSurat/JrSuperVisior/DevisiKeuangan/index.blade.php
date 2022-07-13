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
            <li><a class=" {{ check('jnemail/jr-supervisior-devisi-keuangan/inbox-mail') }}"
                    href="{{ url('jnemail/jr-supervisior-devisi-keuangan/inbox-mail') }}">inbox</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span class="nav-text">History Mail</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnemail/jr-supervisior-devisi-keuangan/history-mail') }}"
                    href="{{ url('jnemail/jr-supervisior-devisi-keuangan/history-mail') }}">History Mail</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-book-open"></i>
            <span class="nav-text">Read Mail</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnemail/jr-supervisior-devisi-keuangan/read-mail') }}"
                    href="{{ url('jnemail/jr-supervisior-devisi-keuangan/read-mail') }}">Read Mail</a>
            </li>
        </ul>
    </li>
@endsection
