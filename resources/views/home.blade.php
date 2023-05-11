@extends('layouts.app')

@section('page-title', 'Home page')

@section('content')
    <div id="main-top"></div>
    <div class="container">
        <div class="cards">
            @foreach ($cards as $card)
                <div class="box">
                    <img src="{{ $card['thumb'] }}" class="card-img-top" alt="...">
                    <h6 class="text-white p-1">{{ $card['title'] }}</h6>
                </div>
            @endforeach
        </div>
        <!-- CARD NAVBAR -->
    </div>
    <section class="blue-banner">
        <div class="container">
            <ul class="navbar-links">
                <li class="nav-link text-white">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"alt="">
                    <p>DIGITAL COMICS</p>
                </li>
                <li class="nav-link text-white">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"alt="">
                    <p>DC MERCHANDISE</p>
                </li>
                <li class="nav-link text-white">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"alt="">
                    <p>SUBSCRIPTIONS</p>
                </li>
                <li class="nav-link text-white">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"alt="">
                    <p>COMIC SHOP-LOCATOR</p>
                </li>
                <li class="nav-link text-white">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}"alt="">
                    <p>DC-POWER-VISA</p>
                </li>
            </ul>
            </ul>
    </section>

@endsection
