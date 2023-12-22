<!-- Breadcrumb Begin -->
@if($pageTitle != 'Home')
<div class="breadcrumb-option spad set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>{{ $pageTitle }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Breadcrumb End -->