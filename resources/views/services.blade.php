@extends('layouts.master')
@section('content')
<!-- Services Section Begin -->
<section class="services-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <img src="{{ asset('img/icons/si-2.png') }}" alt="">
                    </div>
                    <h4>Web Development</h4>
                    <p>Whether you're in the midst of coding or just starting your web development journey, our services
                        can assist you in putting the finishing touches on your projects.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <img src="{{ asset('img/icons/si-1.png') }}" alt="">
                    </div>
                    <h4>Internet of Things (IoT) Development</h4>
                    <p>Improve the connectivity and functionality of your IoT devices with our expertise, whether you're
                        halfway through the development process or just beginning.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <img src="{{ asset('img/icons/si-2.png') }}" alt="">
                    </div>
                    <h4>Responsive Design</h4>
                    <p>Ensure your websites look great on all devices by incorporating responsive design. Whether you're
                        midway through development or just starting out, we can help.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <img src="{{ asset('img/icons/si-3.png') }}" alt="">
                    </div>
                    <h4>E-commerce Solutions</h4>
                    <p>Implement powerful e-commerce solutions in your web development projects. Whether you're in the
                        editing phase or just beginning, our post-production services can add the final touches.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <img src="{{ asset('img/icons/si-4.png') }}" alt="">
                    </div>
                    <h4>Content Management Systems (CMS)</h4>
                    <p>Whether you're halfway through developing your CMS or just starting, our services can contribute
                        to the completion of your web development projects.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <img src="{{ asset('img/icons/si-4.png') }}" alt="">
                    </div>
                    <h4>Database Management</h4>
                    <p>Ensure efficient data handling and storage with our database management expertise. Whether you're
                        midway through development or just starting out, we've got you covered.</p>
                </div>
            </div>
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
                        <a href="#">Begin showcasing your digital journey</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->



@endsection