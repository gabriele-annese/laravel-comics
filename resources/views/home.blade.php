@extends('layouts.main')

@section('main-content')
    <section class="homepage">
        <div class="main-ctn">
            <div class="cards">
                @foreach ($cards as $card )
                    <div class="card">
                        <div class="img-ctn">
                            <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                        </div>
                        <h4>{{ $card['series'] }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection