@extends('layouts.master')

@section('content')
<section class="portfolio spad">
    <div class="container">
        <div class="portfolio__text">
            <h3 style="color: white; margin-bottom: 10px;">Project Description:</h3>
            <p style="text-align: justify; color: #adadad; margin-bottom: 20px;">
                {{ $portfolio->description }}
            </p>
        </div>
        <div class="portfolio__img">
            <h3 style="color: white; margin-bottom: 10px;">Screen Shots:</h3>
            @foreach($images as $image)
            <img class="portfolio-image"
                src="{{ asset('img/portfolio/' . $portfolio->title . '/' . pathinfo($image->getFilename(), PATHINFO_BASENAME)) }}"
                alt="{{ $portfolio->title }}">
            @endforeach
        </div>
    </div>
</section>
@endsection