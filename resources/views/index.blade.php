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
                            <a href="#about" class="primary-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more hero items if needed -->
    </div>
</section>
<!-- Hero Section End -->

<!-- About Me Section Begin -->
<section class="about spad" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="about__text">
                    <h2>About Me</h2>
                    <p>Hello! I'm Hafidz Firman Asqalany, a passionate web developer and IoT enthusiast based in
                        Surabaya, Indonesia. I love turning complex problems into simple, beautiful, and intuitive
                        solutions.</p>
                    <!-- Add more details about yourself -->

                    <div class="about__social">
                        <!-- Add your social media links here -->
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Me Section End -->

<!-- Portfolio Section Begin -->
<section class="portfolio spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>My Portfolio</h2>
                    <p>Check out some of my projects</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Add your portfolio items here -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="portfolio__item">
                    <img src="img/portfolio/portfolio-1.jpg" alt="">
                    <h4>Project Title 1</h4>
                    <a href="#" class="primary-btn" target="_blank">View Project</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="portfolio__item">
                    <img src="img/portfolio/portfolio-2.jpg" alt="">
                    <h4>Project Title 2</h4>
                    <a href="#" class="primary-btn" target="_blank">View Project</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="portfolio__item">
                    <img src="img/portfolio/portfolio-3.jpg" alt="">
                    <h4>Project Title 3</h4>
                    <a href="#" class="primary-btn" target="_blank">View Project</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Section End -->
@endsection