@extends('layouts.master')

@section('title')
    Cars
@endsection()

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Welcome {{$name}}
            </div>
            <div class="title m-b-md">
                I'm {{$age}} years old
            </div>

            <div class="links">
                <a href="http://vivify.local/cars/public/about">About</a>
                <a href="http://vivify.local/cars/public/cars">Cars</a>
            </div>
        </div>
    </div>
@endsection()
