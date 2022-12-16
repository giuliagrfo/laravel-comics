@extends('layouts.app')

@section('content')
<main id="site_main">
    <div class="jumbo-top"></div>
    <div class="content">
        <div class="current_series">
            <h2>Current Series</h2>
        </div>
        <div class="container">
            <div class="cards row row-cols-6">
                @foreach($comics as $comic)
                <div class="col gy-5">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <div class="title">
                        <span>{{$comic['series']}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="load">
            <a href="#">Load More</a>
        </div>
    </div>
    <nav class="banner text-white">
        <div class="container">
            <div class="items_list d-flex">
                <div class="item px-3">
                    <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                    <span class="ms-1 text-uppercase">Digital Comics</span>
                </div>
                <div class="item px-3">
                    <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                    <span class="ms-1 text-uppercase">Dc Merchandise</span>
                </div>
                <div class="item px-3">
                    <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                    <span class="ms-1 text-uppercase">Subscriptions</span>
                </div>
                <div class="item px-3">
                    <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                    <span class="ms-1 text-uppercase">Comic shop locator</span>
                </div>
                <div class="item px-3">
                    <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                    <span class="ms-1 text-uppercase">Dc power visa</span>
                </div>
            </div>

        </div>

    </nav>
</main>
@endsection