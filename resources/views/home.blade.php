@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')

    <img src="{{ $image_url }}" alt="Image" class="login-image">
    <main class="container mt-4">
        <!-- Form di Login -->

        @guest
            <h2>Benvenuto! Accedi o registrati per usufruire delle funzionalità di amministrazione.</h2>
            <a href="{{ route('login') }}" class="btn btn-primary">Sign In</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">Sign Up</a>
        @else
            <h2>Benvenuto, {{ Auth::user()->name }}!</h2>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </main>


@endsection
