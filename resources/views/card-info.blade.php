@extends('layouts.main')

@section('main-content')

<section class="card-info">
    <div class="billboard">
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="">
        <div class="img-ctn">
            <img src="{{$card['thumb']}}" alt="">
            <span class="type">
                {{$card['type']}}
            </span>
            <span class="view">
                view gallery
            </span>
        </div>
    </div>
    <section class="info-section">
        <div class="info-ctn">
            <h3 class="title">{{$card['title']}}</h3>
            <div class="buy-box">
                <div class="buy-info">
                    <span class="price-ctn">
                        U.S price: 
                        <span class="price">
                            {{$card['price']}}
                        </span>
                    </span>
                    <span class="available">
                        Available
                    </span>
                </div>
                <div class="btn-ctn">
                    <span>
                        check Availability
                    </span>
                </div>
            </div>
            <div class="text-ctn">
                <p>
                    {{ $card['description'] }}
                </p>
            </div>
        </div>
        <div class="adv-ctn">
            <div class="img-ctn">
                <span class="adv-text">
                    advertisment
                </span>
                <img src="{{asset('images/adv.jpg')}}" alt="">
            </div>
        </div>
    </section>
</section>

@endsection