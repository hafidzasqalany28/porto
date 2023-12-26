@php
$menuItems = [
['route' => 'home', 'label' => 'Home'],
['route' => 'about', 'label' => 'About'],
['route' => 'portfolio', 'label' => 'Portfolio'],
['route' => 'services', 'label' => 'Services'],
['route' => 'contact', 'label' => 'Contact'],
];

$socialLinks = [
['url' => 'https://wa.me/+6281325088870', 'icon' => 'fa fa-whatsapp'],
['url' => 'mailto:hafidzasqalany28@email.com', 'icon' => 'fa fa-envelope'],
['url' => 'https://github.com/hafidzasqalany28', 'icon' => 'fa fa-github'],
['url' => 'https://www.linkedin.com/in/hafidzasqalany/', 'icon' => 'fa fa-linkedin'],
];
@endphp

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="{{ route('home') }}" style="display: flex; align-items: center;">
                        <img src="{{ asset('img/logo1.png') }}" alt="" style="height: 50px;">
                        <span style="margin-left: 10px; font-size: 20px; color: #fff;">hafidzasqalany28</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            @foreach($menuItems as $menuItem)
                            <li class="{{ request()->routeIs($menuItem['route']) ? 'active' : '' }}">
                                <a href="{{ route($menuItem['route']) }}">{{ $menuItem['label'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                    <div class="header__nav__social">
                        @foreach($socialLinks as $socialLink)
                        <a href="{{ $socialLink['url'] }}" target="_blank"><i class="{{ $socialLink['icon'] }}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->