<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="{{ route('home') }}"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">
                                <a href="{{ route('portfolio') }}">Portfolio</a>
                            </li>
                            <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
                                <a href="{{ route('services') }}">Services</a>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                        <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">
                                        <a href="{{ route('portfolio') }}">Portfolio</a>
                                    </li>
                                    {{-- <li class="{{ request()->routeIs('blog') ? 'active' : '' }}">
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li class="{{ request()->routeIs('blog-details') ? 'active' : '' }}">
                                        <a href="{{ route('blog-details') }}">Blog Details</a>
                                    </li> --}}
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__nav__social">
                        <a href="https://wa.me/+6281325088870" target="_blank"><i class="fa fa-whatsapp"></i></a>
                        <a href="mailto:hafidzasqalany28@email.com"><i class="fa fa-envelope"></i></a>
                        <a href="https://github.com/hafidzasqalany28" target="_blank"><i class="fa fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/hafidzasqalany/" target="_blank"><i
                                class="fa fa-linkedin"></i></a>
                    </div>

                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->