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
            <li><a class=" {{ check('jnemail/custumer-service/inbox-mail') }}"
                    href="{{ url('jnemail/custumer-service/inbox-mail') }}">inbox</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span class="nav-text">History Mail</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnemail/custumer-service/history-mail') }}"
                    href="{{ url('jnemail/custumer-service/history-mail') }}">History Mail</a>
            </li>
        </ul>
    </li>
    <li><a class="has-arrow ai-icon" href="javascrip:void()" aria-expanded="false">
            <i class="fa-solid fa-book-open"></i>
            <span class="nav-text">Read Mail</span>
        </a>
        <ul aria-expanded="false">
            <li><a class=" {{ check('jnemail/custumer-service/read-mail') }}"
                    href="{{ url('jnemail/custumer-service/read-mail') }}">Read Mail</a>
            </li>
        </ul>
    </li>
@endsection
