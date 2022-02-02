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

        </div>
    </div>
@endsection