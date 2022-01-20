@extends('layouts.main')

@section('head-title', 'Homepage')

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

@section('footer-scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection