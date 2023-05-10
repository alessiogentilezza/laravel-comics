@extends('layouts.app')

@section('page-title')

@section('content')
    <div class="row">
        @foreach ($cards as $card)
            <div class="col-3">
                <div class="card">
                    <img src="{{ $card['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $card['title'] }}</h5>
                        <p class="card-text">{!! substr($card['description'], 0, 100) !!}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
