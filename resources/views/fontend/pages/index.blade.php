@extends("fontend.layouts.fontend")
@section("home-3")
home-3
@endsection
@section("wrapper")

<!-- ===============//banner section start here \\================= -->
    <section class="banner-section" style="background-image: url({{asset('fontend')}}/assets/images/banner/bg-1.jpg);">
        <div class="container">
            <div class="banner-wrapper">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <div class="banner-content">
                            <h1 class="mb-3"><span class="gradient-text-orange">Discover</span> , Trade, collect, and
                                sell
                                <span class="gradient-text-orange">
                                    NFTs</span>
                            </h1>
                            <p class="mb-5">Digital Marketplace For Crypto Collectibles And Non-Fungible Tokens.
                                Buy, Sell, And Discover Exclusive Digital Assets.</p>
                            <div class="banner-btns d-flex flex-wrap">
                                <a href="explore.html" class="default-btn move-top"><span>Explore</span> </a>
                                <a href="signin.html" class="default-btn move-right"><span>Create</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="swiper banner-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="nft-item">
                                        <div class="nft-inner">
                                            <!-- nft top part -->
                                            <div class="nft-item-top d-flex justify-content-between align-items-center">
                                                <div class="author-part">
                                                    <ul class="author-list d-flex">
                                                        <li class="single-author">
                                                            <a href="author.html"><img
                                                                    src="{{asset('fontend')}}/assets/images/seller/collector-5.png"
                                                                    alt="author-img"></a>
                                                        </li>
                                                        <li class="single-author d-flex align-items-center">
                                                            <a href="author.html" class="veryfied"><img
                                                                    src="{{asset('fontend')}}/assets/images/seller/collector-4.gif"
                                                                    alt="author-img"></a>
                                                            <h6><a href="author.html">rasselmrh</a></h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-part">
                                                    <div class=" dropstart">
                                                        <a class=" dropdown-toggle" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            data-bs-offset="25,0">
                                                            <i class="icofont-flikr"></i>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#"><span>
                                                                        <i class="icofont-warning"></i>
                                                                    </span> Report </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><span><i
                                                                            class="icofont-reply"></i></span> Share</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- nft-bottom part -->
                                            <div class="nft-item-bottom">
                                                <div class="nft-thumb">
                                                    <img src="{{asset('fontend')}}/assets/images/nft-item/05.gif" alt="nft-img">

                                                    <!-- nft countdwon -->
                                                    <!-- <ul class="nft-countdown count-down" data-date="May 05, 2022 21:14:01">
                                                                                <li>
                                                                                    <span class="days">34</span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="hours">09</span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="minutes">32</span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="seconds">32</span>
                                                                                </li>
                                                                            </ul> -->
                                                    <span class="badge rounded-pill position-absolute"><i
                                                            class="icofont-heart"></i>
                                                        1.3k</span>
                                                </div>
                                                <div class="nft-content">
                                                    <div class="content-title">
                                                        <h5><a href="item-details.html">Fly'n Higher space </a> </h5>
                                                    </div>

                                                    <div
                                                        class="nft-status d-flex flex-wrap justify-content-between align-items-center ">
                                                        <span class="nft-view"><a href="activity.html"><i
                                                                    class="icofont-eye-alt"></i> View
                                                                History</a> </span>
                                                        <div class="nft-stock"> 12 in Stock</div>
                                                    </div>
                                                    <div
                                                        class="price-like d-flex justify-content-between align-items-center">
                                                        <div class="nft-price d-flex align-items-center">
                                                            <span class="currency-img">
                                                                <img src="{{asset('fontend')}}/assets/images/currency/currency-2.png"
                                                                    alt="currency img">
                                                            </span>
                                                            <p>0.34 ETH
                                                            </p>
                                                        </div>

                                                        <a href="item-details.html" class="nft-bid">Place Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="nft-item">
                                        <div class="nft-inner">
                                            <!-- nft top part -->
                                            <div class="nft-item-top d-flex justify-content-between align-items-center">
                                                <div class="author-part">
                                                    <ul class="author-list d-flex">
                                                        <li class="single-author">
                                                            <a href="author.html"><img
                                                                    src="{{asset('fontend')}}/assets/images/seller/collector-5.png"
                                                                    alt="author-img"></a>
                                                        </li>
                                                        <li class="single-author d-flex align-items-center">
                                                            <a href="author.html" class="veryfied"><img
                                                                    src="{{asset('fontend')}}/assets/images/seller/collector-4.png"
                                                                    alt="author-img"></a>
                                                            <h6><a href="author.html">rex_el3</a></h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-part">
                                                    <div class=" dropstart">
                                                        <a class=" dropdown-toggle" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            data-bs-offset="25,0">
                                                            <i class="icofont-flikr"></i>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#"><span>
                                                                        <i class="icofont-warning"></i>
                                                                    </span> Report </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><span><i
                                                                            class="icofont-reply"></i></span> Share</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- nft-bottom part -->
                                            <div class="nft-item-bottom">
                                                <div class="nft-thumb">
                                                    <img src="{{asset('fontend')}}/assets/images/nft-item/02.jpg" alt="nft-img">

                                                    <!-- nft countdwon -->
                                                    <!-- <ul class="nft-countdown count-down" data-date="May 05, 2022 21:14:01">
                                                                                                    <li>
                                                                                                        <span class="days">34</span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <span class="hours">09</span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <span class="minutes">32</span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <span class="seconds">32</span>
                                                                                                    </li>
                                                                                                </ul> -->
                                                    <span class="badge rounded-pill position-absolute"><i
                                                            class="icofont-heart"></i>
                                                        1.3k</span>
                                                </div>
                                                <div class="nft-content">
                                                    <div class="content-title">
                                                        <h5><a href="item-details.html">Fly'n Higher space </a> </h5>
                                                    </div>

                                                    <div
                                                        class="nft-status d-flex flex-wrap justify-content-between align-items-center ">
                                                        <span class="nft-view"><a href="activity.html"><i
                                                                    class="icofont-eye-alt"></i> View
                                                                History</a> </span>
                                                        <div class="nft-stock"> 12 in Stock</div>
                                                    </div>
                                                    <div
                                                        class="price-like d-flex justify-content-between align-items-center">
                                                        <div class="nft-price d-flex align-items-center">
                                                            <span class="currency-img">
                                                                <img src="{{asset('fontend')}}/assets/images/currency/currency-2.png"
                                                                    alt="currency img">
                                                            </span>
                                                            <p>0.34 ETH
                                                            </p>
                                                        </div>

                                                        <a href="item-details.html" class="nft-bid">Place Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="nft-item">
                                        <div class="nft-inner">
                                            <!-- nft top part -->
                                            <div class="nft-item-top d-flex justify-content-between align-items-center">
                                                <div class="author-part">
                                                    <ul class="author-list d-flex">
                                                        <li class="single-author">
                                                            <a href="author.html"><img
                                                                    src="{{asset('fontend')}}/assets/images/seller/collector-1.gif"
                                                                    alt="author-img"></a>
                                                        </li>
                                                        <li class="single-author d-flex align-items-center">
                                                            <a href="author.html" class="veryfied"><img
                                                                    src="{{asset('fontend')}}/assets/images/seller/collector-6.png"
                                                                    alt="author-img"></a>
                                                            <h6><a href="author.html">3lix_zxe</a></h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-part">
                                                    <div class=" dropstart">
                                                        <a class=" dropdown-toggle" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            data-bs-offset="25,0">
                                                            <i class="icofont-flikr"></i>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#"><span>
                                                                        <i class="icofont-warning"></i>
                                                                    </span> Report </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><span><i
                                                                            class="icofont-reply"></i></span> Share</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- nft-bottom part -->
                                            <div class="nft-item-bottom">
                                                <div class="nft-thumb">
                                                    <img src="{{asset('fontend')}}/assets/images/nft-item/03.jpg" alt="nft-img">

                                                    <!-- nft countdwon -->
                                                    <!-- <ul class="nft-countdown count-down" data-date="May 05, 2022 21:14:01">
                                                                                                    <li>
                                                                                                        <span class="days">34</span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <span class="hours">09</span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <span class="minutes">32</span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <span class="seconds">32</span>
                                                                                                    </li>
                                                                                                </ul> -->
                                                    <span class="badge rounded-pill position-absolute"><i
                                                            class="icofont-heart"></i>
                                                        4.3k</span>
                                                </div>
                                                <div class="nft-content">
                                                    <div class="content-title">
                                                        <h5><a href="item-details.html">Dodo je Aliener Walk</a> </h5>
                                                    </div>

                                                    <div
                                                        class="nft-status d-flex flex-wrap justify-content-between align-items-center ">
                                                        <span class="nft-view"><a href="activity.html"><i
                                                                    class="icofont-eye-alt"></i> View
                                                                History</a> </span>
                                                        <div class="nft-stock"> 5 in Stock</div>
                                                    </div>
                                                    <div
                                                        class="price-like d-flex justify-content-between align-items-center">
                                                        <div class="nft-price d-flex align-items-center">
                                                            <span class="currency-img">
                                                                <img src="{{asset('fontend')}}/assets/images/currency/currency-3.png"
                                                                    alt="currency img">
                                                            </span>
                                                            <p>0.64 ETH
                                                            </p>
                                                        </div>

                                                        <a href="item-details.html" class="nft-bid">Place Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//banner section end here \\================= -->


    <!-- ===============>>Catergory section start here <<================= -->
    <section class="catergory-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <h3 class="header-title">Browse By Catergory</h3>
                <div class="header-content"><a href="explore-2.html"
                        class="default-btn style-2 small-btn move-right"><span>View All
                            <i class="icofont-circled-right"></i></span></a> </div>
            </div>
            <div class="category-wrapper">
                <div class="row row-cols-2 row-cols-md-4 row-cols-xl-auto g-3">
                    <div class="col">
                        <div class="cat-item">
                            <div class="cat-inner">
                                <div class="cat-thumb">
                                    <img src="{{asset('fontend')}}/assets/images/category/cat-1.png" alt="Category Image">
                                </div>
                                <div class="cat-content">
                                    <h6><a href="category-single.html">Art Work</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cat-item">
                            <div class="cat-inner">
                                <div class="cat-thumb">
                                    <img src="{{asset('fontend')}}/assets/images/category/cat-2.png" alt="Category Image">
                                </div>
                                <div class="cat-content">
                                    <h6><a href="category-single.html">Music</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cat-item">
                            <div class="cat-inner">
                                <div class="cat-thumb">
                                    <img src="{{asset('fontend')}}/assets/images/category/cat-3.png" alt="Category Image">
                                </div>
                                <div class="cat-content">
                                    <h6><a href="category-single.html">utility</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cat-item">
                            <div class="cat-inner">
                                <div class="cat-thumb">
                                    <img src="{{asset('fontend')}}/assets/images/category/cat-4.png" alt="Category Image">
                                </div>
                                <div class="cat-content">
                                    <h6><a href="category-single.html">Sports</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cat-item">
                            <div class="cat-inner">
                                <div class="cat-thumb">
                                    <img src="{{asset('fontend')}}/assets/images/category/cat-5.png" alt="Category Image">
                                </div>
                                <div class="cat-content">
                                    <h6><a href="category-single.html">Collectibles</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cat-item">
                            <div class="cat-inner">
                                <div class="cat-thumb">
                                    <img src="{{asset('fontend')}}/assets/images/category/cat-6.png" alt="Category Image">
                                </div>
                                <div class="cat-content">
                                    <h6><a href="category-single.html">Cards</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cat-item">
                            <div class="cat-inner">
                                <div class="cat-thumb">
                                    <img src="{{asset('fontend')}}/assets/images/category/cat-7.png" alt="Category Image">
                                </div>
                                <div class="cat-content">
                                    <h6><a href="category-single.html">Metaverse</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cat-item">
                            <div class="cat-inner">
                                <div class="cat-thumb">
                                    <img src="{{asset('fontend')}}/assets/images/category/cat-8.png" alt="Category Image">
                                </div>
                                <div class="cat-content">
                                    <h6><a href="category-single.html">Domain</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>>Catergory section end here <<================= -->



    <!-- ===============//collection section start here \\================= -->
    <section class="collection-section padding-bottom">
        <div class="container">
            <div class="section-header">
                <h3 class="header-title">Popular Collection</h3>
                <div class="header-content"><a href="collections.html"
                        class="default-btn style-2 small-btn move-right"><span>View All
                            <i class="icofont-circled-right"></i></span></a> </div>
            </div>
            <div class="section-wrapper">
                <div class="collection-wrapper">
                    <div class="row justify-content-center g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="nft-item collection-item">
                                <div class="nft-inner">
                                    <div class="coll-thumb-wrapper">
                                        <div class="nft-coll-thumb ">
                                            <div class="thumb-list swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img
                                                            src="{{asset('fontend')}}/assets/images/nft-item/category/01.gif"
                                                            alt="cat-image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img
                                                            src="{{asset('fontend')}}/assets/images/nft-item/category/02.gif"
                                                            alt="cat-image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img
                                                            src="{{asset('fontend')}}/assets/images/nft-item/category/03.gif"
                                                            alt="cat-image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="nft-content">
                                        <div class="collection-title">
                                            <h5><a href="collection-single.html">Radium Animated Monster</a> </h5>
                                            <p>Collection has 13 items</p>
                                        </div>

                                        <div
                                            class="author-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="single-author d-flex align-items-center">
                                                <a href="author.html" class="veryfied"><img
                                                        src="{{asset('fontend')}}/assets/images/seller/collector-4.gif" alt="author-img"></a>
                                                <h6><a href="author.html">rasselmrh </a></h6>
                                            </div>
                                            <span class="badge rounded-pill"><i class="icofont-heart"></i>
                                                11.3k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="nft-item collection-item">
                                <div class="nft-inner">
                                    <div class="coll-thumb-wrapper">
                                        <div class="nft-coll-thumb ">
                                            <div class="thumb-list swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img
                                                            src="{{asset('fontend')}}/assets/images/nft-item/category/1.jpg" alt="cat-image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img
                                                            src="{{asset('fontend')}}/assets/images/nft-item/category/2.jpg" alt="cat-image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img
                                                            src="{{asset('fontend')}}/assets/images/nft-item/category/3.jpg" alt="cat-image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="nft-content">
                                        <div class="collection-title">
                                            <h5><a href="collection-single.html">Digital CryptoArt</a> </h5>
                                            <p>Collection has 11 items</p>
                                        </div>

                                        <div
                                            class="author-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="single-author d-flex align-items-center">
                                                <a href="author.html" class="veryfied"><img
                                                        src="{{asset('fontend')}}/assets/images/seller/collector-3.gif" alt="author-img"></a>
                                                <h6><a href="author.html">Mimi_Chao </a></h6>
                                            </div>
                                            <span class="badge rounded-pill"><i class="icofont-heart"></i>
                                                1.3k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="nft-item collection-item">
                                <div class="nft-inner">
                                    <div class="coll-thumb-wrapper">
                                        <div class="nft-coll-thumb ">
                                            <div class="thumb-list swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img
                                                            src="{{asset('fontend')}}/assets/images/nft-item/category/04.gif"
                                                            alt="cat-image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img
                                                            src="{{asset('fontend')}}/assets/images/nft-item/category/05.gif"
                                                            alt="cat-image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img
                                                            src="{{asset('fontend')}}/assets/images/nft-item/category/06.gif"
                                                            alt="cat-image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="nft-content">
                                        <div class="collection-title">
                                            <h5><a href="collection-single.html">ZombieLand is alive</a> </h5>
                                            <p>Collection has 14+ items</p>
                                        </div>

                                        <div
                                            class="author-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="single-author d-flex align-items-center">
                                                <a href="author.html" class="veryfied"><img
                                                        src="{{asset('fontend')}}/assets/images/seller/collector-2.png" alt="author-img"></a>
                                                <h6><a href="author.html">@xar_spacer </a></h6>
                                            </div>
                                            <span class="badge rounded-pill"><i class="icofont-heart"></i>
                                                4.3k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//Collection section end here \\================= -->


    <!-- ===============//auction section start here \\================= -->
    <section class="auction-section padding-bottom">
        <div class="container">
            <div class="section-header">
                <h3 class="header-title">Featured Template</h3>
                <div class="header-content">
                    <ul class="arrows d-flex flex-wrap align-items-center">
                        <li class="li arrow-left auction-prev"> <i class="icofont-rounded-left"></i> </li>
                        <li class="li arrow-right auction-next"> <i class="icofont-rounded-right"></i></li>
                    </ul>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="auction-holder">
                    <div class="swiper-wrapper">
                        @forelse($templates as $template)
                        @php
                        $count = App\Models\LikeTemplate::where('template_id',$template->id)->count();
                        @endphp
                        <div class="swiper-slide">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <!-- <li class="single-author">
                                                    <a href="author.html"><img
                                                            src="{{asset('fontend')}}/{{asset('fontend')}}/assets/images/seller/collector-1.png"
                                                            alt="author-img"></a>
                                                </li> -->
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img
                                                            src="{{asset($template->user->profile_photo_path)}}"
                                                            alt="author-img"></a>
                                                    <h6><a href="{{route('home.user.details',[$template->user->id,$template->user->slug])}}">{{$template->user->name}}</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img src="{{asset($template->templateImage->image_home)}}" alt="nft-img">

                                            <!-- nft countdwon -->
                                            
                                            <span class="badge rounded-pill position-absolute"><i
                                                    class="icofont-heart"></i>
                                                {{$count}}</span>
                                        </div>
                                        <div class="nft-content">
                                            <div class="content-title">
                                                <h5><a href="{{route('home.template.details',[$template->id,$template->slug])}}">{{$template->title}}</a> </h5>
                                            </div>

                                            <div
                                                class="nft-status d-flex flex-wrap justify-content-between align-items-center ">
                                                <span class="nft-view"><a href="{{$template->link_live_preview}}" target="_blank"><i
                                                            class="icofont-eye-alt"></i> Live Preview</a> </span>
                                                @if($template->price_type == 0)
                                                <div class="nft-stock"> Free</div>
                                                @else
                                                <div class="nft-stock"> $ {{$template->price}}</div>
                                                @endif
                                            </div>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <div class="nft-price d-flex align-items-center">
                                                    
                                                    <p>4 Sales
                                                    </p>
                                                </div>

                                                <a href="" class="nft-bid">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <h1>No Template Found</h1>
                        
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//auction section end here \\================= -->



    <!-- ===============//seller section start here \\================= -->
    <section class="seller-section pb-100">
        <div class="container">
            <div class="section-header">
                <h3 class="header-title">Top Collectors</h3>
                <div class="header-content">
                    <ul class="filter-group d-flex flex-wrap align-items-center">
                        <li class="li collection-filter">
                            <div class="select-wrapper arrow-blue" data-icon="&#xea99;">
                                <select class="form-select " aria-label="Collection select">
                                    <option selected>Collections</option>
                                    <option value="1">Newest</option>
                                    <option value="2">Trending</option>
                                    <option value="3">Most Popular</option>
                                </select>
                            </div>
                        </li>
                        <li class="li day-filter">
                            <div class="select-wrapper arrow-orange" data-icon="&#xea99;">
                                <select class="form-select" aria-label="Day select">
                                    <option selected>Last 7 Days</option>
                                    <option value="1">Last 15 Day</option>
                                    <option value="2">Last Month</option>
                                    <option value="3">All Time</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="seller-wrapper">
                    <div class="row g-3">
                        <div class="col-xl-4 col-lg-6">
                            <div class="seller-item">
                                <div class="seller-inner">
                                    <div class="seller-part">
                                        <p class="assets-number">01</p>
                                        <div class="assets-owner">
                                            <div class="owner-thumb veryfied">
                                                <a href="author.html" class=""><img
                                                        src="{{asset('fontend')}}/assets/images/seller/collector-2.gif" alt="seller-img"></a>
                                            </div>
                                            <div class="owner-content">
                                                <h6><a href="author.html">@Ndrea _uido</a> </h6>
                                                <p>3,002.98 ETH</p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill bg-blue">+38.78%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="seller-item">
                                <div class="seller-inner">
                                    <div class="seller-part">
                                        <p class="assets-number">02</p>
                                        <div class="assets-owner">
                                            <div class="owner-thumb veryfied">
                                                <a href="author.html"><img src="{{asset('fontend')}}/assets/images/seller/collector-1.png"
                                                        alt="seller-img"></a>
                                            </div>
                                            <div class="owner-content">
                                                <h6><a href="author.html">goxio dom</a> </h6>
                                                <p>$12,002.48</p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill bg-orange">-2.78%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="seller-item">
                                <div class="seller-inner">
                                    <div class="seller-part">
                                        <p class="assets-number">03</p>
                                        <div class="assets-owner">
                                            <div class="owner-thumb veryfied">
                                                <a href="author.html"><img src="{{asset('fontend')}}/assets/images/seller/collector-2.png"
                                                        alt="seller-img"></a>
                                            </div>
                                            <div class="owner-content">
                                                <h6><a href="author.html">pter qido</a> </h6>
                                                <p>$3,002.98</p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill bg-blue">+18.8%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="seller-item">
                                <div class="seller-inner">
                                    <div class="seller-part">
                                        <p class="assets-number">04</p>
                                        <div class="assets-owner">
                                            <div class="owner-thumb veryfied">
                                                <a href="author.html"><img src="{{asset('fontend')}}/assets/images/seller/collector-8.png"
                                                        alt="seller-img"></a>
                                            </div>
                                            <div class="owner-content">
                                                <h6><a href="author.html">drexa_3xo</a> </h6>
                                                <p>$23,002.98</p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill bg-orange"> -23.81%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="seller-item">
                                <div class="seller-inner">
                                    <div class="seller-part">
                                        <p class="assets-number">05</p>
                                        <div class="assets-owner">
                                            <div class="owner-thumb veryfied">
                                                <a href="author.html"><img src="{{asset('fontend')}}/assets/images/seller/collector-6.png"
                                                        alt="seller-img"></a>
                                            </div>
                                            <div class="owner-content">
                                                <h6><a href="author.html">rox zipper</a> </h6>
                                                <p>20,02.98 ETH</p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill bg-blue">+48.38%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="seller-item">
                                <div class="seller-inner">
                                    <div class="seller-part">
                                        <p class="assets-number">06</p>
                                        <div class="assets-owner">
                                            <div class="owner-thumb veryfied">
                                                <a href="author.html"><img src="{{asset('fontend')}}/assets/images/seller/collector-3.gif"
                                                        alt="seller-img"></a>
                                            </div>
                                            <div class="owner-content">
                                                <h6><a href="#">@Anra-_uido</a> </h6>
                                                <p>$23,002.98</p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill bg-orange">-8.78%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="seller-item">
                                <div class="seller-inner">
                                    <div class="seller-part">
                                        <p class="assets-number">07</p>
                                        <div class="assets-owner">
                                            <div class="owner-thumb veryfied">
                                                <a href="author.html"><img src="{{asset('fontend')}}/assets/images/seller/collector-4.gif"
                                                        alt="seller-img"></a>
                                            </div>
                                            <div class="owner-content">
                                                <h6><a href="author.html">rassel_mrh </a> </h6>
                                                <p>93,002.98 ETH</p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill bg-blue">+88.78%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="seller-item">
                                <div class="seller-inner">
                                    <div class="seller-part">
                                        <p class="assets-number">08</p>
                                        <div class="assets-owner">
                                            <div class="owner-thumb veryfied">
                                                <a href="author.html"><img src="{{asset('fontend')}}/assets/images/seller/collector-7.png"
                                                        alt="seller-img"></a>
                                            </div>
                                            <div class="owner-content">
                                                <h6><a href="author.html">holder don</a> </h6>
                                                <p>$23,002.98</p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill bg-blue">+3.7%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="seller-item">
                                <div class="seller-inner">
                                    <div class="seller-part">
                                        <p class="assets-number">09</p>
                                        <div class="assets-owner">
                                            <div class="owner-thumb veryfied">
                                                <a href="author.html"><img src="{{asset('fontend')}}/assets/images/seller/collector-1.gif"
                                                        alt="seller-img"></a>
                                            </div>
                                            <div class="owner-content">
                                                <h6><a href="#">rub_3l</a> </h6>
                                                <p>$3,002.98</p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill bg-blue">+31.78%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <a href="rank.html" class="default-btn move-right"><span>Go To Rank</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//seller section end here \\================= -->



    <!-- ===============>> Artwork section start here <<================= -->
    <section class="artwork-section">
        <div class="container">
            <div class="section-header">
                <h3 class="header-title">Trending Now</h3>
                <div class="header-content">
                    <ul class="filter-group d-flex flex-wrap align-items-center">
                        <li class="li collection-filter">
                            <div class="select-wrapper arrow-blue" data-icon="&#xef29;">
                                <select class="form-select " aria-label="Collection select">
                                    <option selected>Recently Added</option>
                                    <option value="1">Newest</option>
                                    <option value="2">Trending</option>
                                    <option value="3">Most Popular</option>
                                </select>
                            </div>
                        </li>
                        <li class="li day-filter">
                            <div class="select-wrapper arrow-blue" data-icon="&#xef74;">
                                <select class="form-select" aria-label="Day select">
                                    <option selected>Category</option>
                                    <option value="1">Crypto Card</option>
                                    <option value="2">Sports</option>
                                    <option value="3">Crypto Art</option>
                                </select>
                            </div>
                        </li>
                        <li class="li day-filter">
                            <div class="select-wrapper arrow-blue" data-icon="&#xef74;">
                                <select class=" form-select" aria-label="Day select">
                                    <option selected>Last 7 Days</option>
                                    <option value="1">Last 15 Day</option>
                                    <option value="2">Last Month</option>
                                    <option value="3">All Time</option>
                                </select>
                            </div>
                        </li>
                        <li class="li day-filter">
                            <div class="select-wrapper arrow-blue" data-icon="&#xee84;">
                                <select class="form-select" aria-label="Day select">
                                    <option selected>Sell Type</option>
                                    <option value="1">Collectibles</option>
                                    <option value="2">Trending</option>
                                </select>
                            </div>
                        </li>
                        <li class="li day-filter">
                            <div class="select-wrapper arrow-blue" data-icon="&#xe9d8;">
                                <select class="form-select" aria-label="Day select">
                                    <option selected>Price Range</option>
                                    <option value="1">$0-$500</option>
                                    <option value="2">$500-$1000</option>
                                    <option value="3">$1000-infinite</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                        <div class="nft-item">
                            <div class="nft-inner">
                                <!-- nft top part -->
                                <div class="nft-item-top d-flex justify-content-between align-items-center">
                                    <div class="author-part">
                                        <ul class="author-list d-flex">
                                            <li class="single-author">
                                                <a href="author.html"><img src="{{asset('fontend')}}/assets/images/seller/collector-1.png"
                                                        alt="author-img"></a>
                                            </li>
                                            <li class="single-author d-flex align-items-center">
                                                <a href="author.html" class="veryfied"><img
                                                        src="{{asset('fontend')}}/assets/images/seller/collector-2.png" alt="author-img"></a>
                                                <h6><a href="author.html">Jhon_Doe</a></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more-part">
                                        <div class=" dropstart">
                                            <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-offset="25,0">
                                                <i class="icofont-flikr"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><span>
                                                            <i class="icofont-warning"></i>
                                                        </span> Report </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"><span><i
                                                                class="icofont-reply"></i></span> Share</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft-bottom part -->
                                <div class="nft-item-bottom">
                                    <div class="nft-thumb">
                                        <img src="{{asset('fontend')}}/assets/images/nft-item/01.jpg" alt="nft-img">

                                        <!-- nft countdwon -->
                                        <!-- <ul class="nft-countdown count-down" data-date="May 05, 2022 21:14:01">
                                            <li>
                                                <span class="days">34</span>
                                            </li>
                                            <li>
                                                <span class="hours">09</span>
                                            </li>
                                            <li>
                                                <span class="minutes">32</span>
                                            </li>
                                            <li>
                                                <span class="seconds">32</span>
                                            </li>
                                        </ul> -->
                                        <span class="badge rounded-pill position-absolute"><i class="icofont-heart"></i>
                                            1.3k</span>
                                    </div>
                                    <div class="nft-content">
                                        <div class="content-title">
                                            <h5><a href="item-details.html">Walking On
                                                    Air</a> </h5>
                                        </div>

                                        <div
                                            class="nft-status d-flex flex-wrap justify-content-between align-items-center ">
                                            <span class="nft-view"><a href="activity.html"><i
                                                        class="icofont-eye-alt"></i> View
                                                    History</a> </span>
                                            <div class="nft-stock"> 12 in Stock</div>
                                        </div>
                                        <div class="price-like d-flex justify-content-between align-items-center">
                                            <div class="nft-price d-flex align-items-center">
                                                <span class="currency-img">
                                                    <img src="{{asset('fontend')}}/assets/images/currency/currency-1.png" alt="currency img">
                                                </span>
                                                <p>0.34 ETH
                                                </p>
                                            </div>

                                            <a href="item-details.html" class="nft-bid">Place Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                        <div class="nft-item">
                            <div class="nft-inner">
                                <!-- nft top part -->
                                <div class="nft-item-top d-flex justify-content-between align-items-center">
                                    <div class="author-part">
                                        <ul class="author-list d-flex">
                                            <li class="single-author">
                                                <a href="author.html"><img src="assets/images/seller/collector-5.png"
                                                        alt="author-img"></a>
                                            </li>
                                            <li class="single-author d-flex align-items-center">
                                                <a href="author.html" class="veryfied"><img
                                                        src="{{asset('fontend')}}/assets/images/seller/collector-4.gif" alt="author-img"></a>
                                                <h6><a href="author.html">rasselmrh</a></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more-part">
                                        <div class=" dropstart">
                                            <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-offset="25,0">
                                                <i class="icofont-flikr"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><span>
                                                            <i class="icofont-warning"></i>
                                                        </span> Report </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"><span><i
                                                                class="icofont-reply"></i></span> Share</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft-bottom part -->
                                <div class="nft-item-bottom">
                                    <div class="nft-thumb">
                                        <img src="{{asset('fontend')}}/assets/images/nft-item/05.gif" alt="nft-img">

                                        <!-- nft countdwon -->
                                        <!-- <ul class="nft-countdown count-down" data-date="May 05, 2022 21:14:01">
                                            <li>
                                                <span class="days">34</span>
                                            </li>
                                            <li>
                                                <span class="hours">09</span>
                                            </li>
                                            <li>
                                                <span class="minutes">32</span>
                                            </li>
                                            <li>
                                                <span class="seconds">32</span>
                                            </li>
                                        </ul> -->
                                        <span class="badge rounded-pill position-absolute"><i class="icofont-heart"></i>
                                            1.3k</span>
                                    </div>
                                    <div class="nft-content">
                                        <div class="content-title">
                                            <h5><a href="item-details.html">Fly'n Higher space </a> </h5>
                                        </div>

                                        <div
                                            class="nft-status d-flex flex-wrap justify-content-between align-items-center ">
                                            <span class="nft-view"><a href="activity.html"><i
                                                        class="icofont-eye-alt"></i> View
                                                    History</a> </span>
                                            <div class="nft-stock"> 12 in Stock</div>
                                        </div>
                                        <div class="price-like d-flex justify-content-between align-items-center">
                                            <div class="nft-price d-flex align-items-center">
                                                <span class="currency-img">
                                                    <img src="{{asset('fontend')}}/assets/images/currency/currency-2.png" alt="currency img">
                                                </span>
                                                <p>0.34 ETH
                                                </p>
                                            </div>

                                            <a href="item-details.html" class="nft-bid">Place Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                        <div class="nft-item">
                            <div class="nft-inner">
                                <!-- nft top part -->
                                <div class="nft-item-top d-flex justify-content-between align-items-center">
                                    <div class="author-part">
                                        <ul class="author-list d-flex">
                                            <li class="single-author">
                                                <a href="author.html"><img src="assets/images/seller/collector-3.gif"
                                                        alt="author-img"></a>
                                            </li>
                                            <li class="single-author d-flex align-items-center">
                                                <a href="author.html" class="veryfied"><img
                                                        src="{{asset('fontend')}}/assets/images/seller/collector-6.png" alt="author-img"></a>
                                                <h6><a href="author.html">Elix_Qe</a></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more-part">
                                        <div class=" dropstart">
                                            <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-offset="25,0">
                                                <i class="icofont-flikr"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><span>
                                                            <i class="icofont-warning"></i>
                                                        </span> Report </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"><span><i
                                                                class="icofont-reply"></i></span> Share</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft-bottom part -->
                                <div class="nft-item-bottom">
                                    <div class="nft-thumb">
                                        <img src="{{asset('fontend')}}/assets/images/nft-item/05.jpg" alt="nft-img">

                                        <!-- nft countdwon -->
                                        <!-- <ul class="nft-countdown count-down" data-date="May 05, 2022 21:14:01">
                                            <li>
                                                <span class="days">34</span>
                                            </li>
                                            <li>
                                                <span class="hours">09</span>
                                            </li>
                                            <li>
                                                <span class="minutes">32</span>
                                            </li>
                                            <li>
                                                <span class="seconds">32</span>
                                            </li>
                                        </ul> -->
                                        <span class="badge rounded-pill position-absolute"><i class="icofont-heart"></i>
                                            4.3k</span>
                                    </div>
                                    <div class="nft-content">
                                        <div class="content-title">
                                            <h5><a href="item-details.html">Dodo je Aliener Walk</a> </h5>
                                        </div>

                                        <div
                                            class="nft-status d-flex flex-wrap justify-content-between align-items-center ">
                                            <span class="nft-view"><a href="activity.html"><i
                                                        class="icofont-eye-alt"></i> View
                                                    History</a> </span>
                                            <div class="nft-stock"> 5 in Stock</div>
                                        </div>
                                        <div class="price-like d-flex justify-content-between align-items-center">
                                            <div class="nft-price d-flex align-items-center">
                                                <span class="currency-img">
                                                    <img src="{{asset('fontend')}}/assets/images/currency/currency-3.png" alt="currency img">
                                                </span>
                                                <p>0.64 ETH
                                                </p>
                                            </div>

                                            <a href="item-details.html" class="nft-bid">Place Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                        <div class="nft-item">
                            <div class="nft-inner">
                                <!-- nft top part -->
                                <div class="nft-item-top d-flex justify-content-between align-items-center">
                                    <div class="author-part">
                                        <ul class="author-list d-flex">
                                            <li class="single-author d-flex align-items-center">
                                                <a href="author.html" class="veryfied"><img
                                                        src="{{asset('fontend')}}/assets/images/seller/collector-7.png" alt="author-img"></a>
                                                <h6><a href="author.html">Mimi_Chao </a></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more-part">
                                        <div class=" dropstart">
                                            <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-offset="25,0">
                                                <i class="icofont-flikr"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><span>
                                                            <i class="icofont-warning"></i>
                                                        </span> Report </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"><span><i
                                                                class="icofont-reply"></i></span> Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft-bottom part -->
                                <div class="nft-item-bottom">
                                    <div class="nft-thumb">
                                        <img src="{{asset('fontend')}}/assets/images/nft-item/04.jpg" alt="nft-img">

                                        <!-- nft countdwon -->
                                        <!-- <ul class="nft-countdown count-down" data-date="May 05, 2022 21:14:01">
                                            <li>
                                                <span class="days">34</span>
                                            </li>
                                            <li>
                                                <span class="hours">09</span>
                                            </li>
                                            <li>
                                                <span class="minutes">32</span>
                                            </li>
                                            <li>
                                                <span class="seconds">32</span>
                                            </li>
                                        </ul> -->
                                        <span class="badge rounded-pill position-absolute"><i class="icofont-heart"></i>
                                            1.3k</span>
                                    </div>
                                    <div class="nft-content">
                                        <div class="content-title">
                                            <h5><a href="item-details.html">MimiChika Cartos</a> </h5>
                                        </div>

                                        <div
                                            class="nft-status d-flex flex-wrap justify-content-between align-items-center ">
                                            <span class="nft-view"><a href="activity.html"><i
                                                        class="icofont-eye-alt"></i> View
                                                    History</a> </span>
                                            <div class="nft-stock"> 17 in Stock</div>
                                        </div>
                                        <div class="price-like d-flex justify-content-between align-items-center">
                                            <div class="nft-price d-flex align-items-center">
                                                <span class="currency-img">
                                                    <img src="{{asset('fontend')}}/assets/images/currency/currency-4.png" alt="currency img">
                                                </span>
                                                <p>0.94 ETH
                                                </p>
                                            </div>

                                            <a href="item-details.html" class="nft-bid">Place Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                        <div class="nft-item">
                            <div class="nft-inner">
                                <!-- nft top part -->
                                <div class="nft-item-top d-flex justify-content-between align-items-center">
                                    <div class="author-part">
                                        <ul class="author-list d-flex">
                                            <li class="single-author">
                                                <a href="author.html"><img src="assets/images/seller/collector-1.png"
                                                        alt="author-img"></a>
                                            </li>
                                            <li class="single-author d-flex align-items-center">
                                                <a href="author.html" class="veryfied"><img
                                                        src="{{asset('fontend')}}/assets/images/seller/collector-2.gif" alt="author-img"></a>
                                                <h6><a href="author.html">Topmy3 #na</a></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more-part">
                                        <div class=" dropstart">
                                            <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-offset="25,0">
                                                <i class="icofont-flikr"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><span>
                                                            <i class="icofont-warning"></i>
                                                        </span> Report </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"><span><i
                                                                class="icofont-reply"></i></span> Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft-bottom part -->
                                <div class="nft-item-bottom">
                                    <div class="nft-thumb">
                                        <img src="assets/images/nft-item/02.gif" alt="nft-img">

                                        <!-- nft countdwon -->
                                        <!-- <ul class="nft-countdown count-down" data-date="May 05, 2022 21:14:01">
                                                                <li>
                                                                    <span class="days">34</span>
                                                                </li>
                                                                <li>
                                                                    <span class="hours">09</span>
                                                                </li>
                                                                <li>
                                                                    <span class="minutes">32</span>
                                                                </li>
                                                                <li>
                                                                    <span class="seconds">32</span>
                                                                </li>
                                                            </ul> -->
                                        <span class="badge rounded-pill position-absolute"><i class="icofont-heart"></i>
                                            1.3k</span>
                                    </div>
                                    <div class="nft-content">
                                        <div class="content-title">
                                            <h5><a href="item-details.html">Eye Balls#2 </a> </h5>
                                        </div>

                                        <div
                                            class="nft-status d-flex flex-wrap justify-content-between align-items-center ">
                                            <span class="nft-view"><a href="activity.html"><i
                                                        class="icofont-eye-alt"></i> View
                                                    History</a> </span>
                                            <div class="nft-stock"> 12 in Stock</div>
                                        </div>
                                        <div class="price-like d-flex justify-content-between align-items-center">
                                            <div class="nft-price d-flex align-items-center">
                                                <span class="currency-img">
                                                    <img src="{{asset('fontend')}}/assets/images/currency/currency-1.png" alt="currency img">
                                                </span>
                                                <p>0.34 ETH
                                                </p>
                                            </div>

                                            <a href="item-details.html" class="nft-bid">Place Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                        <div class="nft-item">
                            <div class="nft-inner">
                                <!-- nft top part -->
                                <div class="nft-item-top d-flex justify-content-between align-items-center">
                                    <div class="author-part">
                                        <ul class="author-list d-flex">
                                            <li class="single-author">
                                                <a href="author.html"><img src="{{asset('fontend')}}/assets/images/seller/collector-5.png"
                                                        alt="author-img"></a>
                                            </li>
                                            <li class="single-author d-flex align-items-center">
                                                <a href="author.html" class="veryfied"><img
                                                        src="{{asset('fontend')}}/assets/images/seller/collector-4.png" alt="author-img"></a>
                                                <h6><a href="author.html">rex_el3</a></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more-part">
                                        <div class=" dropstart">
                                            <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-offset="25,0">
                                                <i class="icofont-flikr"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><span>
                                                            <i class="icofont-warning"></i>
                                                        </span> Report </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"><span><i
                                                                class="icofont-reply"></i></span> Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft-bottom part -->
                                <div class="nft-item-bottom">
                                    <div class="nft-thumb">
                                        <img src="assets/images/nft-item/02.jpg" alt="nft-img">

                                        <!-- nft countdwon -->
                                        <!-- <ul class="nft-countdown count-down" data-date="May 05, 2022 21:14:01">
                                                                <li>
                                                                    <span class="days">34</span>
                                                                </li>
                                                                <li>
                                                                    <span class="hours">09</span>
                                                                </li>
                                                                <li>
                                                                    <span class="minutes">32</span>
                                                                </li>
                                                                <li>
                                                                    <span class="seconds">32</span>
                                                                </li>
                                                            </ul> -->
                                        <span class="badge rounded-pill position-absolute"><i class="icofont-heart"></i>
                                            1.3k</span>
                                    </div>
                                    <div class="nft-content">
                                        <div class="content-title">
                                            <h5><a href="item-details.html">Fly'n Higher space </a> </h5>
                                        </div>

                                        <div
                                            class="nft-status d-flex flex-wrap justify-content-between align-items-center ">
                                            <span class="nft-view"><a href="activity.html"><i
                                                        class="icofont-eye-alt"></i> View
                                                    History</a> </span>
                                            <div class="nft-stock"> 12 in Stock</div>
                                        </div>
                                        <div class="price-like d-flex justify-content-between align-items-center">
                                            <div class="nft-price d-flex align-items-center">
                                                <span class="currency-img">
                                                    <img src="{{asset('fontend')}}/assets/images/currency/currency-2.png" alt="currency img">
                                                </span>
                                                <p>0.34 ETH
                                                </p>
                                            </div>

                                            <a href="item-details.html" class="nft-bid">Place Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                        <div class="nft-item">
                            <div class="nft-inner">
                                <!-- nft top part -->
                                <div class="nft-item-top d-flex justify-content-between align-items-center">
                                    <div class="author-part">
                                        <ul class="author-list d-flex">
                                            <li class="single-author">
                                                <a href="author.html"><img src="{{asset('fontend')}}/assets/images/seller/collector-1.gif"
                                                        alt="author-img"></a>
                                            </li>
                                            <li class="single-author d-flex align-items-center">
                                                <a href="author.html" class="veryfied"><img
                                                        src="{{asset('fontend')}}/assets/images/seller/collector-6.png" alt="author-img"></a>
                                                <h6><a href="author.html">3lix_zxe</a></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more-part">
                                        <div class=" dropstart">
                                            <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-offset="25,0">
                                                <i class="icofont-flikr"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><span>
                                                            <i class="icofont-warning"></i>
                                                        </span> Report </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"><span><i
                                                                class="icofont-reply"></i></span> Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft-bottom part -->
                                <div class="nft-item-bottom">
                                    <div class="nft-thumb">
                                        <img src="assets/images/nft-item/03.jpg" alt="nft-img">

                                        <!-- nft countdwon -->
                                        <!-- <ul class="nft-countdown count-down" data-date="May 05, 2022 21:14:01">
                                                                <li>
                                                                    <span class="days">34</span>
                                                                </li>
                                                                <li>
                                                                    <span class="hours">09</span>
                                                                </li>
                                                                <li>
                                                                    <span class="minutes">32</span>
                                                                </li>
                                                                <li>
                                                                    <span class="seconds">32</span>
                                                                </li>
                                                            </ul> -->
                                        <span class="badge rounded-pill position-absolute"><i class="icofont-heart"></i>
                                            4.3k</span>
                                    </div>
                                    <div class="nft-content">
                                        <div class="content-title">
                                            <h5><a href="item-details.html">Dodo je Aliener Walk</a> </h5>
                                        </div>

                                        <div
                                            class="nft-status d-flex flex-wrap justify-content-between align-items-center ">
                                            <span class="nft-view"><a href="activity.html"><i
                                                        class="icofont-eye-alt"></i> View
                                                    History</a> </span>
                                            <div class="nft-stock"> 5 in Stock</div>
                                        </div>
                                        <div class="price-like d-flex justify-content-between align-items-center">
                                            <div class="nft-price d-flex align-items-center">
                                                <span class="currency-img">
                                                    <img src="{{asset('fontend')}}/assets/images/currency/currency-3.png" alt="currency img">
                                                </span>
                                                <p>0.64 ETH
                                                </p>
                                            </div>

                                            <a href="item-details.html" class="nft-bid">Place Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                        <div class="nft-item">
                            <div class="nft-inner">
                                <!-- nft top part -->
                                <div class="nft-item-top d-flex justify-content-between align-items-center">
                                    <div class="author-part">
                                        <ul class="author-list d-flex">
                                            <li class="single-author d-flex align-items-center">
                                                <a href="author.html" class="veryfied"><img
                                                        src="{{asset('fontend')}}/assets/images/seller/collector-3.gif" alt="author-img"></a>
                                                <h6><a href="author.html">Naka_@siga </a></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more-part">
                                        <div class=" dropstart">
                                            <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-offset="25,0">
                                                <i class="icofont-flikr"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><span>
                                                            <i class="icofont-warning"></i>
                                                        </span> Report </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"><span><i
                                                                class="icofont-reply"></i></span> Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft-bottom part -->
                                <div class="nft-item-bottom">
                                    <div class="nft-thumb">
                                        <img src="{{asset('fontend')}}/assets/images/nft-item/03.gif" alt="nft-img">

                                        <!-- nft countdwon -->
                                        <!-- <ul class="nft-countdown count-down" data-date="May 05, 2022 21:14:01">
                                                                <li>
                                                                    <span class="days">34</span>
                                                                </li>
                                                                <li>
                                                                    <span class="hours">09</span>
                                                                </li>
                                                                <li>
                                                                    <span class="minutes">32</span>
                                                                </li>
                                                                <li>
                                                                    <span class="seconds">32</span>
                                                                </li>
                                                            </ul> -->
                                        <span class="badge rounded-pill position-absolute"><i class="icofont-heart"></i>
                                            1.3k</span>
                                    </div>
                                    <div class="nft-content">
                                        <div class="content-title">
                                            <h5><a href="item-details.html">3black _spiDer &#xe829;</a> </h5>
                                        </div>

                                        <div
                                            class="nft-status d-flex flex-wrap justify-content-between align-items-center ">
                                            <span class="nft-view"><a href="activity.html"><i
                                                        class="icofont-eye-alt"></i> View
                                                    History</a> </span>
                                            <div class="nft-stock"> 17 in Stock</div>
                                        </div>
                                        <div class="price-like d-flex justify-content-between align-items-center">
                                            <div class="nft-price d-flex align-items-center">
                                                <span class="currency-img">
                                                    <img src="{{asset('fontend')}}/assets/images/currency/currency-4.png" alt="currency img">
                                                </span>
                                                <p>0.94 ETH
                                                </p>
                                            </div>

                                            <a href="item-details.html" class="nft-bid">Place Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> Artwork section end here <<================= -->




    <!-- ===============//blog section start here \\================= -->
    <section class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <h3 class="header-title"> Our Latest News</h3>
                <div class="header-content"><a href="blog.html"
                        class="default-btn style-2 small-btn move-right"><span>View All
                            <i class="icofont-circled-right"></i></span></a> </div>
            </div>

            <div class="section-wrapper">
                <div class="blog-wrapper">
                    <div class="row justify-content-center g-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item blog-item">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img src="{{asset('fontend')}}/assets/images/nft-item/blog/01.jpg" alt="blog-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="blog-single.html">Learn More about NFT</a> </h4>
                                            <div class="meta-info">
                                                <p><span><i class="icofont-ui-calendar"
                                                            data-blast="color"></i></span>Jan 20 2022
                                                </p>
                                                <p><span><i class="icofont-user" data-blast="color"></i></span>Jhon doe
                                                </p>
                                            </div>
                                            <a href="blog-single.html"
                                                class="default-btn move-right small-btn"><span>Read
                                                    More</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item blog-item">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img src="{{asset('fontend')}}/assets/images/nft-item/blog/02.jpg" alt="blog-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="blog-single.html">Trending NFT 2022</a> </h4>
                                            <div class="meta-info">
                                                <p><span><i class="icofont-ui-calendar"
                                                            data-blast="color"></i></span>July 20 2022
                                                </p>
                                                <p><span><i class="icofont-user" data-blast="color"></i></span>Jhon doe
                                                </p>
                                            </div>
                                            <a href="blog-single.html"
                                                class="default-btn move-right small-btn"><span>Read
                                                    More</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item blog-item">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img src="{{asset('fontend')}}/assets/images/nft-item/blog/03.jpg" alt="blog-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="blog-single.html">Decentrelize Crypto ... </a> </h4>
                                            <div class="meta-info">
                                                <p><span><i class="icofont-ui-calendar"
                                                            data-blast="color"></i></span>Dec 20 2022
                                                </p>
                                                <p><span><i class="icofont-user" data-blast="color"></i></span>rasselmrh
                                                </p>
                                            </div>
                                            <a href="blog-single.html"
                                                class="default-btn move-right small-btn"><span>Read
                                                    More</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//blog section end here \\================= -->

{{asset('fontend')}}/
@endsection