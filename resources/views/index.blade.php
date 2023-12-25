@extends('layouts.master')

@section('content')
<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span>Welcome to My Portfolio</span>
                            <h2>Hafidz Firman Asqalany</h2>
                            <p>Web Developer | IoT Enthusiast</p>
                            <a href="{{ route('contact') }}" class="primary-btn">Contant Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more hero items if needed -->
    </div>
</section>
<!-- Hero Section End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__pic">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about__pic__item about__pic__item--large set-bg"
                                data-setbg="{{ asset('img/about/about-1.jpg') }}"></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="about__pic__item set-bg"
                                        data-setbg="{{ asset('img/about/about-2.jpg') }}"></div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="about__pic__item set-bg"
                                        data-setbg="{{ asset('img/about/about-3.jpg') }}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="section-title">
                        <span>About Me</span>
                        <h2>Personal Summary</h2>
                    </div>
                    <p>I am a graduate of Computer Science from Sepuluh Nopember Institute of Technology, Surabaya, with
                        an academic achievement index of 3.41. During my academic journey, I gained practical experience
                        through a 1-month internship at PT. Surabaya Noor Leather as a Front End Programmer. In this
                        role, I was responsible for updating the company's profile website.</p>
                    <p>Aside from my internship, I have been actively working as a freelance developer, specializing in
                        website and IoT project development. My responsibilities include developing and creating entire
                        software projects according to requirements. On the frontend, I design and implement responsive
                        and aesthetic user interfaces using technologies like HTML, CSS, and JavaScript (often with
                        Bootstrap). On the backend, I build and manage servers, databases, and business logic using
                        programming languages such as JavaScript (Node.js) and PHP, with a preference for the Laravel
                        framework.</p>
                    <a href="{{ route('about') }}" class="primary-btn">Learn more about me</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Services Section Begin -->
<section class="services spad set-bg" data-setbg="img/bg1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="services__title">
                    <div class="section-title">
                        <span>My Services</span>
                        <h2>My Expertise</h2>
                    </div>
                    <p>As a dedicated web developer and IoT enthusiast, I bring a passion for turning complex problems
                        into simple, beautiful, and intuitive solutions. Whether you need a website developed, IoT
                        solutions implemented, or both, I am committed to delivering high-quality results that meet your
                        unique business needs.</p>
                    <a href="{{ route('services') }}" class="primary-btn">Explore All Services</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-6 col-md-6 col-sm-6">
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
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Portfolio Section Begin -->
<section class="portfolio spad set-bg" data-setbg="img/team.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio__title">
                    <div class="section-title center-title">
                        <span>My Portfolio</span>
                        <h2>Check out some of my projects</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row portfolio__gallery">
            <!-- Loop through portfolio items -->
            @foreach($portfolios as $portfolio)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg"
                        data-setbg="{{ asset('img/portfolio/' . $portfolio->image) }}"
                        style="background-size: cover; height: 300px;">
                        <a href="{{ $portfolio->youtube_link }}" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <a href="{{ route('portfolio.show', $portfolio->id) }}" class="primary-btn" target="_blank"
                        style="margin: 10px 0;">View Project</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Portfolio Section End -->

<!-- Counter Section Begin -->
<section class="counter">
    <div class="container">
        <div class="counter__content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__text">
                            <img src="{{ asset('img/icons/ci-1.png') }}" alt="">
                            <h2 class="counter_num">5</h2>
                            <p>Projects Taken</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item second__item">
                        <div class="counter__item__text">
                            <img src="{{ asset('img/icons/ci-2.png') }}" alt="">
                            <h2 class="counter_num">5</h2>
                            <p>Happy clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item third__item">
                        <div class="counter__item__text">
                            <img src="{{ asset('img/icons/ci-3.png') }}" alt="">
                            <h2 class="counter_num">5</h2>
                            <p>Perspective clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item four__item">
                        <div class="counter__item__text">
                            <img src="{{ asset('img/icons/ci-4.png') }}" alt="">
                            <h2 class="counter_num">5</h2>
                            <p>Completed Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->


@endsection