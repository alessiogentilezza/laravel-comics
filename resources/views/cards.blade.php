@extends('layouts.app')

@section('page-title')

@section('content')
    <div class="row">
        @foreach ($cards as $card)
            <div class="col-auto">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $card['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $card['title'] }}</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
@endsection
