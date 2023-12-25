@extends('layouts.master')

@section('content')

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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Work Experience Section Begin -->
<section class="team spad set-bg" data-setbg="img/team-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <span>Professional Journey</span>
                    <h2>Work Experience</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            @foreach($experiences as $experience)
            <div class="col-lg-3 mx-4 col-md-6 col-sm-6 p-0">
                <div class="team__item set-bg" data-setbg="{{ $experience['image'] ?? asset('img/bg1.jpg') }}">
                    <div class="team__item__text text-center">
                        <h4>{{ $experience['title'] }}</h4>
                        <p>{{ $experience['company'] }}</p>
                        <p>{{ $experience['start_date'] }} - {{ $experience['end_date'] ?: 'Present' }}</p>
                        <p style="text-align: left; margin: 0;">{{ $experience['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-12 p-5 text-center">
                <div class="team__btn">
                    <a href="#" class="primary-btn">View All Experiences</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Work Experience Section End -->

<!-- Skill Section Begin -->
<section class="skill-section spad set-bg" data-setbg="{{ asset('img/bg1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title left-title">
                    <span>My Expertise</span>
                    <h2>Skills</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Frontend Development -->
            <div class="col-lg-4">
                <div class="skill-item">
                    <div class="skill-text">
                        <h4 class="skill-title">Frontend Development</h4>
                        <p class="skill-description">Languages and Technologies:</p>
                        <ul class="skill-list">
                            <li class="skill-list-item">HTML
                                <div class="progress skill-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%;"></div>
                                </div>
                            </li>
                            <li class="skill-list-item">CSS3
                                <div class="progress skill-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%;"></div>
                                </div>
                            </li>
                            <li class="skill-list-item">JavaScript
                                <div class="progress skill-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Backend Development -->
            <div class="col-lg-4">
                <div class="skill-item">
                    <div class="skill-text">
                        <h4 class="skill-title">Backend Development</h4>
                        <p class="skill-description">Languages and Frameworks:</p>
                        <ul class="skill-list">
                            <li class="skill-list-item">JavaScript
                                <div class="progress skill-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 55%;"></div>
                                </div>
                            </li>
                            <li class="skill-list-item">PHP (Laravel)
                                <div class="progress skill-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 55%;"></div>
                                </div>
                            </li>
                            <li class="skill-list-item">Python
                                <div class="progress skill-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 55%;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- IoT (Internet of Things) -->
            <div class="col-lg-4">
                <div class="skill-item">
                    <div class="skill-text">
                        <h4 class="skill-title">IoT (Internet of Things)</h4>
                        <p class="skill-description">Technologies and Protocols:</p>
                        <ul class="skill-list">
                            <li class="skill-list-item">MQTT
                                <div class="progress skill-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;"></div>
                                </div>
                            </li>
                            <li class="skill-list-item">Arduino
                                <div class="progress skill-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Skill Section End -->


{{--
<!-- Testimonial Section Begin -->
<section class="testimonial spad set-bg" data-setbg="{{ asset('img/testimonial-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <span>Recommendations</span>
                    <h2>What Others Say About Me</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <div class="testimonial__text">
                            <p>Delivers such a great service that it can benefit all kinds of people from any number
                                of industries.</p>
                        </div>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="{{ asset('img/testimonial/ta-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Krista Attorn</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other testimonials -->
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End --> --}}

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