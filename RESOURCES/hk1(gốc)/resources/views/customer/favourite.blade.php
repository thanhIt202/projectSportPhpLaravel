@extends('layouts.master')
@section('title', 'Trang chủ')
@section('link', '../')
@section('main')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ url('') }}">TrangChủ</a></li>
                    <li class='active'>Danh sách Yêu Thích</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="my-wishlist-page">
                <div class="row">
                    <div class="col-md-12 my-wishlist">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="4" class="heading-title">Danh sách Yêu Thích</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fa as $f)
                                        @if ($f->customer_id == auth('cus')->user()->id)
                                            <tr>
                                                <td class="col-md-2"><img src="{{ url('images') }}/{{ $f->pro->image }}"
                                                        width="100%" height="100%" alt="lỗi ảnh"></td>
                                                <td class="col-md-7">
                                                    <div class="product-name"><a
                                                            href="{{ route('home.productDetail', ['slug' => Str::slug($f->pro->name), 'product' => $f->pro->id]) }}">{{ $f->pro->name }}</a>
                                                    </div>
                                                    <div class="">
                                                        <p>{{ $f->pro->short_content }}</p>
                                                    </div>

                                                    @if ($f->pro->sale_price > 0)
                                                        <div class="product-price"> <span
                                                                class="price">{{ $f->pro->sale_price }}</span>
                                                            <s class="price-before-discount">{{ $f->pro->price }}</s>
                                                        </div>
                                                    @else
                                                        <div class="product-price"> <span
                                                                class="price">{{ $f->pro->price }}</span>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td class="col-md-2">
                                                    <a href="#" class="btn-upper btn btn-primary">Add to cart</a>
                                                </td>
                                                <td class="col-md-1 close-btn">
                                                    <form action="{{ route('favourite.destroy', $f->pro->id) }}"
                                                        method="post">
                                                        @csrf @method('DELETE')
                                                        <button data-toggle="tooltip" class="btn btn-light icon"
                                                            title="Xóa Yêu Thích">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <!-- <a href="#" class=""><i class="fa fa-times"></i></a> -->
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    <!-- <tr>
                                        <td class="col-md-2"><img src="assets/images/products/p2.jpg" alt="phoro"></td>
                                        <td class="col-md-7">
                                            <div class="product-name"><a href="#">Floral Print Buttoned</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star non-rate"></i>
                                                <span class="review">( 06 Reviews )</span>
                                            </div>
                                            <div class="price">
                                                $450.00
                                                <span>$900.00</span>
                                            </div>
                                        </td>
                                        <td class="col-md-2">
                                            <a href="#" class="btn-upper btn btn-default">Add to cart</a>
                                        </td>
                                        <td class="col-md-1 close-btn">
                                            <a href="#" class=""><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">

                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->

            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
    <!-- ============================================================= FOOTER ============================================================= -->

    <section class="bottom-section">
        <div class="container">
            <div class="row">


                <!-- ============================================== SPECIAL OFFER ============================================== -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                        <h3 class="section-title">Top Rated</h3>
                        <div class="sidebar-widget-body">
                            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme">
                                <div class="item">
                                    <div class="products special-product">
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p10.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p18.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p30.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>

                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p28.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="products special-product">
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p27.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p26.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p25.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="products special-product">
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p24.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p23.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->
                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p22.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                </div>
                <!-- ============================================== SPECIAL OFFER : END ============================================== -->

                <!-- ============================================== HOT DEALS ============================================== -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="sidebar-widget outer-bottom-small hot-deals wow fadeInUp ">
                        <h3 class="section-title">hot deals</h3>
                        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme ">
                            <div class="item">
                                <div class="products">
                                    <div class="hot-deal-wrapper">
                                        <div class="image"> <img src="assets/images/hot-deals/p5.jpg" alt="">
                                        </div>
                                        <div class="sale-offer-tag"><span>49%<br>
                                                off</span></div>
                                        <div class="timing-wrapper">
                                            <div class="box-wrapper">
                                                <div class="date box"> <span class="key">120</span> <span
                                                        class="value">DAYS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="hour box"> <span class="key">20</span> <span
                                                        class="value">HRS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="minutes box"> <span class="key">36</span> <span
                                                        class="value">MINS</span> </div>
                                            </div>
                                            <div class="box-wrapper hidden-md">
                                                <div class="seconds box"> <span class="key">60</span> <span
                                                        class="value">SEC</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.hot-deal-wrapper -->

                                    <div class="product-info text-left m-t-20">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price"> <span class="price"> $600.00 </span> <span
                                                class="price-before-discount">$800.00</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <div class="add-cart-button btn-group">
                                                <button class="cart-btn-bg" type="button">Add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="products">
                                    <div class="hot-deal-wrapper">
                                        <div class="image"> <img src="assets/images/hot-deals/p5.jpg" alt="">
                                        </div>
                                        <div class="sale-offer-tag"><span>35%<br>
                                                off</span></div>
                                        <div class="timing-wrapper">
                                            <div class="box-wrapper">
                                                <div class="date box"> <span class="key">120</span> <span
                                                        class="value">Days</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="hour box"> <span class="key">20</span> <span
                                                        class="value">HRS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="minutes box"> <span class="key">36</span> <span
                                                        class="value">MINS</span> </div>
                                            </div>
                                            <div class="box-wrapper hidden-md">
                                                <div class="seconds box"> <span class="key">60</span> <span
                                                        class="value">SEC</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.hot-deal-wrapper -->

                                    <div class="product-info text-left m-t-20">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price"> <span class="price"> $600.00 </span> <span
                                                class="price-before-discount">$800.00</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <div class="add-cart-button btn-group">
                                                <button class="cart-btn-bg" type="button">Add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="products">
                                    <div class="hot-deal-wrapper">
                                        <div class="image"> <img src="assets/images/hot-deals/p10.jpg" alt="">
                                        </div>
                                        <div class="sale-offer-tag"><span>35%<br>
                                                off</span></div>
                                        <div class="timing-wrapper">
                                            <div class="box-wrapper">
                                                <div class="date box"> <span class="key">120</span> <span
                                                        class="value">Days</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="hour box"> <span class="key">20</span> <span
                                                        class="value">HRS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="minutes box"> <span class="key">36</span> <span
                                                        class="value">MINS</span> </div>
                                            </div>
                                            <div class="box-wrapper hidden-md">
                                                <div class="seconds box"> <span class="key">60</span> <span
                                                        class="value">SEC</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.hot-deal-wrapper -->

                                    <div class="product-info text-left m-t-20">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price"> <span class="price"> $600.00 </span> <span
                                                class="price-before-discount">$800.00</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <div class="add-cart-button btn-group">
                                                <button class="cart-btn-bg" type="button">Add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                            </div>
                        </div>
                        <!-- /.sidebar-widget -->
                    </div>
                </div>
                <!-- ============================================== HOT DEALS: END ============================================== -->

                <!-- ============================================== SPECIAL DEALS ============================================== -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                        <h3 class="section-title">Special Deals</h3>
                        <div class="sidebar-widget-body">
                            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme">
                                <div class="item">
                                    <div class="products special-product">
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p28.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p15.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p7.jpg"
                                                                        alt="image">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p26.jpg"
                                                                        alt="image">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="products special-product">
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p18.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p17.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p19.jpg"
                                                                        alt="image">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">

                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p16.jpg"
                                                                        alt=""> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->
                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="products special-product">
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p15.jpg"
                                                                        alt="images">
                                                                    <div class="zoom-overlay"></div>
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p14.jpg"
                                                                        alt="">
                                                                    <div class="zoom-overlay"></div>
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p13.jpg"
                                                                        alt="image">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>

                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="#"> <img
                                                                        src="assets/images/products/p19.jpg"
                                                                        alt="image">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt
                                                                    Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span>
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== SPECIAL DEALS : END ============================================== -->
                </div>
            </div>


            <!-- ============================================== NEWSLETTER ============================================== -->
            <div class="newsletter wow fadeInUp">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <h3>Sign up to <strong>Newsletter</strong></h3>
                        <div class="sidebar-widget-body">
                            <p>Get <strong>40% Off</strong> on selected items!</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                placeholder="Subscribe to our newsletter"> <button
                                class="btn btn-primary">Subscribe</button>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== NEWSLETTER: END ============================================== -->


        </div>
    </section>
@stop()
