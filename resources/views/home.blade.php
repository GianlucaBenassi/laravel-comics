@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('pageContent')

    <div class="jumbo">
        <img src="{{asset('/img/jumbotron.jpg')}}" alt="jumbo image">
    </div>

    <div class="series">
        <div class="container">
            
            {{-- title --}}
            <h2>Current series</h2>

            {{-- comics row --}}
            <div class="row">

                @foreach ($comics as $comic)
                    <a href="#" class="card">
                        <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
                        <span>{{$comic["title"]}}</span>
                    </a>
                @endforeach

            </div>

            {{-- load more button --}}
            <div class="row">
                <a href="#" class="load-more">load more</a>
            </div>

        </div>
    </div>

    <div class="shop">
        <div class="container">
            <div class="row">

                <div class="box">
                    <a href="#">
                        <img src="{{asset('img\buy-comics-digital-comics.png')}}" alt="Digital comics">
                        <span>digital comics</span>
                    </a>
                </div>
                
                <div class="box">
                    <a href="#">
                        <img src="{{asset('img\buy-comics-merchandise.png')}}" alt="DC merchandise">
                        <span>dc merchandise</span>
                    </a>
                </div>
                
                <div class="box">
                    <a href="#">
                        <img src="{{asset('img\buy-comics-subscriptions.png')}}" alt="Subscription">
                        <span>subscription</span>
                    </a>
                </div>
                
                <div class="box">
                    <a href="#">
                        <img src="{{asset('img\buy-comics-shop-locator.png')}}" alt="Comic shop locator">
                        <span>comic shop locator</span>
                    </a>
                </div>
                
                <div class="box">
                    <a href="#">
                        <img src="{{asset('img\buy-dc-power-visa.svg')}}" alt="DC power VISA">
                        <span>dc power visa</span>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
@endsection