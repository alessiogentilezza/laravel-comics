@extends('layouts.app')

@section('page-title', 'cards')

@section('content')
    <div class="container">
        <div class="cards">
            @foreach ($cards as $card)
                <div class="box">
                    <div class="card m-2">
                        <img src="{{ $card['thumb'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $card['title'] }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
