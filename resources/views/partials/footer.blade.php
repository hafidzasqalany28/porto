@php
$socialLinks = [
['url' => 'https://www.facebook.com/hafidzasqalany28/', 'icon' => 'fa fa-facebook'],
['url' => 'https://twitter.com/HafidzAsqalany', 'icon' => 'fa fa-twitter'],
['url' => 'https://www.instagram.com/hafidzasqalany/', 'icon' => 'fa fa-instagram'],
['url' => 'https://wa.me/+6281325088870', 'icon' => 'fa fa-whatsapp'],
['url' => 'mailto:hafidzasqalany28@email.com', 'icon' => 'fa fa-envelope'],
['url' => 'https://github.com/hafidzasqalany28', 'icon' => 'fa fa-github'],
['url' => 'https://www.linkedin.com/in/hafidzasqalany/', 'icon' => 'fa fa-linkedin'],
];

$skills = ['Web Development', 'Frontend', 'Backend', 'IOT'];

$workLinks = [
['url' => '#', 'label' => 'Portfolio'],
['url' => '#', 'label' => 'Projects'],
['url' => '#', 'label' => 'Blog'],
];
@endphp

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="footer__top__logo">
                        <a href="{{ route('home') }}" style="display: flex; align-items: center;">
                            <img src="{{ asset('img/logo1.png') }}" alt="" style="height: 50px;">
                            <span style="margin-left: 10px; font-size: 20px; color: #fff;">hafidzasqalany28</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer__top__social">
                        @foreach($socialLinks as $link)
                        <a href="{{ $link['url'] }}" target="_blank"><i class="{{ $link['icon'] }}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__option">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__option__item">
                        <h5>About me</h5>
                        <p>Hello, I'm Hafidzasqalany28. A passionate web developer with a focus on creating meaningful
                            and innovative web experiences.</p>
                        <a href="#" class="read__more">Read more <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3">
                    <div class="footer__option__item">
                        <h5>My Skills</h5>
                        <ul>
                            @foreach($skills as $skill)
                            <li><a href="#">{{ $skill }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3">
                    <div class="footer__option__item">
                        <h5>My Work</h5>
                        <ul>
                            @foreach($workLinks as $workLink)
                            <li><a href="{{ $workLink['url'] }}">{{ $workLink['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__option__item">
                        <h5>Contact Me</h5>
                        <p>Feel free to reach out. Let's create something amazing together!</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="footer__copyright__text">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="{{ route('home') }}"
                            target="_blank">Hafidzasqalany28</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer section ends -->