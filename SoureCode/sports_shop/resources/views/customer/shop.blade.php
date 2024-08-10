@extends('layouts.master')
@section('title', 'Trang chủ')
@section('link', '../')
@section('shop')
    active
@stop()
@section('main')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ url('') }}">TrangChủ</a></li>
                    <li class='active'>Cửa hàng</li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row'>
                <div class='col-md-3 sidebar'>
                    <div class="side-menu animate-dropdown outer-bottom-xs">
                        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Danh Mục </div>
                        <nav class="yamm megamenu-horizontal">
                            @foreach ($cat as $c)
                                <ul class="nav">
                                    <li class="dropdown menu-item"> <a
                                        href="{{ route('home.categoryDetail', ['category' => $c->id, 'slug' => Str::slug($c->name)]) }}"
                                            class="dropdown-toggle" data-toggle=""><i class="icon fa fa-shopping-bag"
                                                aria-hidden="true"></i> {{ $c->name }} </a>
                                    </li>
                                    <!-- /.menu-item -->
                                </ul>
                            @endforeach
                            <!-- /.nav -->
                        </nav>
                        <!-- /.megamenu-horizontal -->
                    </div>
                    <!-- /.side-menu -->
                    <div class="sidebar-module-container">
                        <div class="sidebar-filter">
                            <div class="home-banner"> <img src="../assets/images/banners/product-2.jpg" width="100%"
                                    height="100%" alt="Image"> </div>
                        </div>
                        <div class="sidebar-filter">
                            <div class="home-banner"> <img src="../assets/images/banners/product-1.jpg" width="100%"
                                    height="100%" alt="Image"> </div>
                        </div>
                        <!-- /.sidebar-filter -->
                    </div>
                    <!-- /.sidebar-module-container -->
                </div>
                <!-- /.sidebar -->
                <div class='col-md-9'>
                    <div id="category" class="category-carousel hidden-xs">
                        <div class="item">
                            <div class="image"> <img src="../../assets/images/banners/cat-banner-1.jpg" alt=""
                                    class="img-responsive"> </div>
                            <div class="container-fluid">
                                <div class="caption vertical-top text-left">
                                    <div class="big-text">Siêu giảm giá </div>
                                    <div class="excerpt hidden-sm hidden-md"> Sự kiện giáng sinh </div>
                                    <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit </div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                    </div>
                    <div class="clearfix filters-container m-t-10">
                        <p>SHOPPING</p>
                    </div>

                    <x-shop-product :products="$shopProduct" />
                    
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">
                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="../assets/images/brands/brand1.png" src="../assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="../assets/images/brands/brand2.png" src="../assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="../assets/images/brands/brand3.png" src="../assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="../assets/images/brands/brand4.png" src="../assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="../assets/images/brands/brand5.png" src="../assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="../assets/images/brands/brand6.png" src="../assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="../assets/images/brands/brand2.png" src="../assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="../assets/images/brands/brand4.png" src="../assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="../assets/images/brands/brand1.png" src="../assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->
                        <div class="item"> <a href="#" class="image"> <img
                                    data-echo="../assets/images/brands/brand5.png" src="../assets/images/blank.gif"
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
    <section class="bottom-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <x-product-list :products="$newProduct" :title="'SẢN PHẨM MỚI NHẤT'" />

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <x-product-hot :products="$hotProduct" :title="'SẢN PHẨM NỔI BẬT NHẤT'" />

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <x-product-list :products="$saleProduct" :title="'SẢN PHẨM MỚI NHẤT'" />

                </div>
            </div>
    </section>
    <hr>
@endsection
