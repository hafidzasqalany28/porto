<!-- resources/views/services.blade.php -->

@extends('layouts.master')

@section('content')
<!-- Services Section Begin -->
<section class="services-page spad">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <img src="{{ asset('img/icons/' . $service->image) }}" alt="{{ $service->title }}">
                    </div>
                    <h4>{{ $service->title }}</h4>
                    <p>{{ $service->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Call To Action Section Begin -->
<section class="callto sp__callto">
    <div class="container">
        <div class="callto__services spad set-bg" data-setbg="{{ asset('img/calltos-bg.jpg') }}">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="callto__text">
                        <h2>EMBARK ON YOUR DIGITAL JOURNEY AND SHOWCASE YOUR PERSONAL PORTFOLIO</h2>
                        <p>Explore the boundless opportunities for your personal projects with my expertise in web
                            development. Whether you're refining your coding skills or just commencing your journey, I'm
                            here to help you perfect and present your unique creations.</p>
                        <a href="https://wa.me/+6281325088870">Begin showcasing your digital journey</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->
@endsection