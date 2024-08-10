@extends('layouts.master')
@section('title', 'Trang chủ')
@section('link', '')
@section('css')
    <style>
        .carousel-caption {
            text-shadow: 0 1px 20px rgb(0 0 0 / 100%);
        }

        .image {
            height: 210px;
        }

        .banner {
            overflow: hidden;
            height: 600px;
        }

        .width {
            width: 100%;
        }
    </style>
@stop()
@section('home')
    active
@stop()
@section('main')

    <div class="body-content " id="top-banner-and-menu">
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($banner as $key => $ban)
                    <div class="item {{ $key == 0 ? 'active' : '' }} banner">
                        <img src="{{ url('images') }}/{{ $ban->img }}" class="width" alt="">
                        <div class="container">
                            <div class="carousel-caption ">
                                <h1 class="text-dark">{{ $ban->name }}</h1>
                                <p class="text-dark">{{ $ban->content }}</p>
                                <p><a class="btn btn-lg btn-primary" href="{{ url('/blog') }}" role="button">Xem ngay</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span
                    class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span
                    class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
        <div class="container">
            <div class="wide-banners wow fadeInUp outer-bottom-xs">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="wide-banner cnt-strip">
                            <div class="image"> <img class="img-responsive" src="assets/images/banners/banner-6.jpg"
                                    alt=""> </div>
                        </div>
                        <!-- /.wide-banner -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6 col-sm-6">
                        <div class="wide-banner cnt-strip">
                            <div class="image"> <img class="img-responsive" src="assets/images/banners/banner-7.jpg"
                                    alt=""> </div>
                        </div>
                        <!-- /.wide-banner -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.wide-banners -->
            <div class="container">

                <x-new-product :products="$newProduct" :title="'SẢN PHẨM MỚI NHẤT'" :status="'Mới'" />

            </div>
        </div>
        <div class="bestsellers1">
            <div class="bestseller">
                <div class="container">

                    <x-hot-product :products="$hotProduct" :title="'SẢN PHẨM NỔI BẬT'" />

                </div>
            </div>
        </div>
        <div class="container">
            <div class="info-boxes wow fadeInUp">
                <div class="info-boxes-inner">
                    <div class="row">
                        <div class="col-md-6 col-sm-4 col-lg-4">
                            <div class="info-box">
                                <div class="icon-img"><i class="fa fa-credit-card"></i></div>
                                <div class="icon-text">
                                    <h4 class="info-box-heading green">ĐẢM BẢO HOÀN LẠI TIỀN</h4>
                                    <h6 class="text">Đảm bảo hoàn tiền trong 7 ngày</h6>
                                </div>
                            </div>
                        </div>
                        <!-- .col -->
                        <div class="hidden-md col-sm-4 col-lg-4">
                            <div class="info-box">
                                <div class="icon-img"> <i class="fa fa-truck"></i></div>
                                <div class="icon-text">
                                    <h4 class="info-box-heading green">Giao hàng & Trả hàng Miễn phí</h4>
                                    <h6 class="text">Giao hàng cho các đơn đặt hàng trên $ 99</h6>
                                </div>
                            </div>
                        </div>
                        <!-- .col -->
                        <div class="col-md-6 col-sm-4 col-lg-4">
                            <div class="info-box last">
                                <div class="icon-img"><i class="fa fa-life-ring"></i></div>
                                <div class="icon-text">
                                    <h4 class="info-box-heading green">Hỗ trợ trực tuyến</h4>
                                    <h6 class="text">Gọi cho chúng tôi 01678 311 160</h6>
                                </div>
                            </div>
                        </div>
                        <!-- .col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.info-boxes-inner -->
            </div>
            <!-- /.info-boxes -->
        </div>

        <div class="container">
            <section class="section featured-product wow fadeInUp">

                <x-list-product :products="$saleProduct" :status="'Sale'" :title="'SẢN PHẨM KHUYẾN MÃI'" />

                <!-- /.home-owl-carousel -->
            </section>
        </div>

        <div class="container">
            <!-- /.row -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">
                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                    </div>
                    <!-- /.owl-carousel #logo-slider -->
                </div>
                <!-- /.logo-slider-inner -->
            </div>
            <!-- /.logo-slider -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#top-banner-and-menu -->
    <hr>
@endsection
@section('js')
    <script>
        var dthen1 = new Date("12/25/17 11:59:00 PM");
        start = "08/04/15 03:02:11 AM";
        start_date = Date.parse(start);
        var dnow1 = new Date(start_date);
        if (CountStepper > 0)
            ddiff = new Date((dnow1) - (dthen1));
        else
            ddiff = new Date((dthen1) - (dnow1));
        gsecs1 = Math.floor(ddiff.valueOf() / 1000);

        var iid1 = "countbox_1";
        CountBack_slider(gsecs1, "countbox_1", 1);

        var dthen1 = new Date("05/25/17 11:59:00 PM");
        start = "08/04/15 03:02:11 AM";
        start_date = Date.parse(start);
        var dnow1 = new Date(start_date);
        if (CountStepper > 0)
            ddiff = new Date((dnow1) - (dthen1));
        else
            ddiff = new Date((dthen1) - (dnow1));
        gsecs1 = Math.floor(ddiff.valueOf() / 1000);

        var iid1 = "countbox_2";
        CountBack_slider(gsecs1, "countbox_2", 1);
    </script>
@endsection
