@extends('layouts.master')

@section('content')
<section class="portfolio spad">
    <div class="container">
        <div class="portfolio__text">
            <h2>{{ $portfolio->title }}</h2>
            <p>{{ $portfolio->description }}</p>
        </div>
        <div class="portfolio__img">
            @foreach($images as $image)
            <img class="portfolio-image"
                src="{{ asset('img/portfolio/' . $portfolio->title . '/' . pathinfo($image->getFilename(), PATHINFO_BASENAME)) }}"
                alt="{{ $portfolio->title }}">
            @endforeach
        </div>
    </div>
</section>
@endsection