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
            </div>
        </div>
        <div class="load">
            <a href="#">Load More</a>
        </div>
    </div>
</main>
@endsection