@extends('layouts.master')
@section('title', 'Trang chủ')
@section('link', '')
@section('blog')
    active
@stop()
@section('main')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li class='active'>Tin Tức</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="blog-page">
                    <div class="col-md-9">
                        @foreach ($blog as $b)
                            <div class="blog-post  wow fadeInUp">
                                <a href=""><img class="img-responsive" src="{{ url('images') }}/{{ $b->image }}"
                                        width="100%" height="100%" alt="lỗi ảnh"></a>
                                <h1><a href="">{{ $b->name }}</a></h1>
                                <p>{{ $b->content }}</p>
                                <a href="#" class="btn btn-upper btn-primary read-more">read more</a>
                            </div>
                        @endforeach
                        <div class="clearfix blog-pagination filters-container  wow fadeInUp"
                            style="padding:0px; background:none; box-shadow:none;  border:none">
                            <div class="text-right">
                                <div class="pagination-container">
                                    {{ $blog->links() }}
                                </div><!-- /.pagination-container -->
                            </div><!-- /.text-right -->
                        </div><!-- /.filters-container -->
                    </div>
                    <div class="col-md-3 sidebar">
                        <div class="sidebar-module-container">
                            <div class="home-banner outer-top-n outer-bottom-xs">
                                <img src="assets/images/banners/product-1.jpg" width="100%" height="100%" alt="Image">
                            </div>
                            <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                                <h3 class="section-title">Category</h3>
                                @foreach ($cat as $c)
                                    <div class="sidebar-widget-body m-t-10">
                                        <div class="accordion">
                                            <div class="accordion-group">
                                                <div class="accordion-heading">
                                                    <a
                                                        href="{{ route('home.categoryDetail', ['category' => $c->id, 'slug' => Str::slug($c->name)]) }}">
                                                        {{ $c->name }}
                                                    </a>
                                                </div><!-- /.accordion-heading -->
                                            </div><!-- /.accordion-group -->
                                        </div><!-- /.accordion -->
                                    </div><!-- /.sidebar-widget-body -->
                                @endforeach
                            </div><!-- /.sidebar-widget -->
                            <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                                <h3 class="section-title">Tin nhanh</h3>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#popular" data-toggle="tab">Bài gần đây</a></li>
                                    <li><a href="#recent" data-toggle="tab">Bài phổ biến</a></li>
                                </ul>
                                <div class="tab-content" style="padding-left:0">
                                    @foreach ($blog as $b)
                                        <div class="tab-pane active m-t-20" id="popular">
                                            <div class="blog-post inner-bottom-30 ">
                                                <img class="img-responsive" src="{{ url('images') }}/{{ $b->image }}"
                                                    width="100%" height="100%" alt="lỗi ảnh">
                                                <h4><a href="">{{ $b->name }}</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="tab-pane m-t-20" id="recent">
                                        <div class="blog-post inner-bottom-30">
                                            <img class="img-responsive" src="assets/images/banners/banner-7.jpg"
                                                alt="">
                                            <h4><a href="">Blog Post 1</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        </div>
                                        <div class="blog-post">
                                            <img class="img-responsive" src="assets/images/banners/banner-6.jpg"
                                                alt="">
                                            <h4><a href="">Blog Post 2</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        </div>
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
