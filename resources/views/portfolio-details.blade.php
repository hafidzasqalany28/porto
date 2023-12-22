<!-- resources/views/portfolio/show.blade.php -->

@extends('layouts.master')

@section('content')
<section class="portfolio spad">
    <div class="container">
        <div class="portfolio__text">
            <h2>{{ $portfolio->title }}</h2>
            <p>{{ $portfolio->description }}</p>
        </div>
        <div class="portfolio__img">
            <img src="{{ asset('img/portfolio/' . $portfolio->image) }}" alt="{{ $portfolio->title }}">
        </div>
    </div>
</section>
@endsection