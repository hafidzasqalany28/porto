@extends('layouts.master')
@section('content')
<!-- Contact Widget Section Begin -->
<section class="contact-widget spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>Address</h4>
                        <p>Surabaya, Jawa Timur, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>WA</h4>
                        <p>+62 8132-508-8870</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>Email</h4>
                        <p>hafidzasqalany28@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Widget Section End -->

<!-- Call To Action Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1810568053756!2d112.74425371066275!3d-7.333552972099175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb02ee1e740b%3A0xc8e387a290099d4d!2sKutisari%20Town%20House%20II!5e0!3m2!1sid!2sid!4v1703264079038!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <h3>Get in touch</h3>
                    <form action="#">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Website">
                        <textarea placeholder="Message"></textarea>
                        <button type="submit" class="site-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->
@endsection