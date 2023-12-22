@extends('layouts.master')

@section('content')

<!-- Portfolio Section Begin -->
<section class="portfolio spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio__filter">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".digital-marketing">IoT</li>
                    <li data-filter=".web">Web</li>
                    <li data-filter=".ecommerce">eCommerce</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio__gallery">
            <!-- Example Portfolio Item 1 -->
            <div class="col-lg-4 col-md-6 col-sm-6 mix branding">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-1.jpg">
                        <!-- You can replace the video link below with the link to your actual video -->
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Project Title 1</h4>
                        <ul>
                            <li>Category: Branding</li>
                            <li>Technology: Magento</li>
                            <li>Explore: <a href="#" target="_blank">www.example1.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Example Portfolio Item 2 -->
            <div class="col-lg-4 col-md-6 col-sm-6 mix branding">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-1.jpg">
                        <!-- You can replace the video link below with the link to your actual video -->
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Project Title 1</h4>
                        <ul>
                            <li>Category: Branding</li>
                            <li>Technology: Magento</li>
                            <li>Explore: <a href="#" target="_blank">www.example1.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Pagination Options (Modify as needed) -->
                <div class="pagination__option">
                    <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                    <a href="#" class="number__pagination">1</a>
                    <a href="#" class="number__pagination">2</a>
                    <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Section End -->

@endsection