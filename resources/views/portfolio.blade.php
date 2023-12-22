@extends('layouts.master')

@section('content')
@php
// Mengumpulkan kategori unik dari portofolio
$uniqueCategories = $portfolios->pluck('category')->unique();
@endphp

<section class="portfolio spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio__filter">
                    <li class="active" data-filter="*">All</li>
                    <!-- Menampilkan kategori unik -->
                    @foreach($uniqueCategories as $category)
                    <li data-filter=".{{ Str::slug($category) }}">{{ $category }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row portfolio__gallery">
            <!-- Menampilkan portofolio sesuai dengan kategori -->
            @foreach($portfolios as $portfolio)
            <div class="col-lg-4 col-md-6 col-sm-6 mix {{ Str::slug($portfolio->category) }}">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg"
                        data-setbg="{{ asset('img/portfolio/' . $portfolio->image) }}">
                        <a href="{{ $portfolio->youtube_link }}" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4><a href="{{ route('portfolio.show', $portfolio->id) }}">{{ $portfolio->title }}</a></h4>
                        <p>Category: {{ $portfolio->category }}</p>
                        <ul>
                            <p>{{ $portfolio->description }}</p>
                            <p>Explore: <a href="{{ $portfolio->website_link }}" target="_blank">{{
                                    $portfolio->website_link }}</a></p>
                            <p>Github: <a href="{{ $portfolio->github_link }}" target="_blank">{{
                                    $portfolio->github_link }}</a></p>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination__option">
                    @if($currentPage > 1)
                    <a href="{{ route('portfolio', ['page' => $currentPage - 1]) }}"
                        class="arrow__pagination left__arrow">Prev <span class="arrow_left"></span></a>
                    @endif
                    @for ($i = 1; $i <= ceil($totalPortfolios / $itemsPerPage); $i++) <a
                        href="{{ route('portfolio', ['page' => $i]) }}"
                        class="number__pagination {{ $i == $currentPage ? 'active' : '' }}">{{ $i }}</a>
                        @endfor
                        @if($currentPage < ceil($totalPortfolios / $itemsPerPage)) <a
                            href="{{ route('portfolio', ['page' => $currentPage + 1]) }}"
                            class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                            @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection