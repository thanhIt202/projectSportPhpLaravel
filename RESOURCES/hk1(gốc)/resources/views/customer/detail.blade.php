@extends('layouts.master')
@section('title', $product->name)
@section('link', '../')
@section('main')

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ url('') }}">TrangChủ</a></li>
                    <li class='active'>{{ $product->name }}</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row single-product'>
                <div class='col-md-3 sidebar'>
                    <div class="sidebar-module-container">
                        <div class="home-banner outer-top-n">
                            <img src="../assets/images/banners/product-2.jpg" width="100%" height="100%" alt="Image">
                        </div>
                        <div class="sidebar-widget  wow fadeInUp outer-top-vs outer-bottom-xs">
                            <div id="advertisement" class="advertisement">
                                <div class="item">
                                    <div class="avatar"><img src="../assets/images/testimonials/member1.png" alt="Image">
                                    </div>
                                    <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port
                                        mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                    <div class="clients_author"> Đoàn Văn Thành <span>BachKhoa-Aptech</span> </div>
                                    <!-- /.container-fluid -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="avatar"><img src="../assets/images/testimonials/member3.png" alt="Image">
                                    </div>
                                    <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port
                                        mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                    <div class="clients_author"> Đinh Đức Mạnh <span>BachKhoa-Aptech</span> </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="avatar"><img src="../assets/images/testimonials/member2.png" alt="Image">
                                    </div>
                                    <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port
                                        mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                    <div class="clients_author"> Đào Duy Thái <span>BachKhoa-Aptech</span> </div>
                                    <!-- /.container-fluid -->
                                </div><!-- /.item -->
                            </div><!-- /.owl-carousel -->
                        </div>
                    </div>
                </div><!-- /.sidebar -->
                <div class='col-md-9'>
                    <div class="detail-block">
                        <form action="{{ route('cart.add', $product->id) }}" method="get" enctype="multipart/form-data">
                            <div class="row  wow fadeInUp">
                                <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                                    <div class="product-item-holder size-big single-product-gallery small-gallery">
                                        <div id="owl-single-product">
                                            <div class="single-product-gallery-item" id="slide1">
                                                <a data-lightbox="image-1" data-title="Gallery"
                                                    href="{{ url('images') }}/{{ $product->image }}">
                                                    <img width="100%" class="img-responsive" alt=""
                                                        src="../assets/images/blank.gif"
                                                        data-echo="{{ url('images') }}/{{ $product->image }}" />
                                                </a>
                                            </div><!-- /.single-product-gallery-item -->
                                        </div>
                                    </div><!-- /.single-product-gallery -->
                                </div><!-- /.gallery-holder -->
                                <div class='col-sm-6 col-md-7 product-info-block'>
                                    <div class="product-info">
                                        <h1 class="name">{{ $product->name }}</h1>
                                        <div class="rating-reviews m-t-20">
                                            <p>{{ $product->short_content }}</p>
                                        </div><!-- /.rating-reviews -->
                                        <div class="stock-container info-container m-t-10">
                                            <div class="form-check">
                                                <p><b>Màu</b></p>
                                                @foreach ($color as $key => $color)
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="color"
                                                            value="{{ $color->id }}" {{ $key == 0 ? 'checked' : '' }}>
                                                        {{ $color->name }}
                                                    </label>
                                                @endforeach
                                            </div>
                                            <div class="form-check">
                                                <p><b>Size</b></p>
                                                @foreach ($size as $key => $size)
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="size"
                                                            value="{{ $size->id }}" {{ $key == 0 ? 'checked' : '' }}>
                                                        {{ $size->name }}
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div><!-- /.stock-container -->
                                        <div class="description-container m-t-20">
                                            {{ $product->content }}
                                        </div><!-- /.description-container -->
                                        <div class="price-container info-container m-t-20">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="price-box">
                                                        @if ($product->sale_price > 0)
                                                            <div class="product-price"> <span
                                                                    class="price">{{ $product->sale_price }}</span>
                                                                <s class="price-strike">{{ $product->price }}</s>
                                                            </div>
                                                        @else
                                                            <div class="product-price"> <span
                                                                    class="price">{{ $product->price }}</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    @if (auth('cus')->check())
                                                        @if ($product->checkFav(auth('cus')->user()->id))
                                                            <li class="add-cart-button  btn-group">
                                                                <form
                                                                    action="{{ route('favourite.destroy', $product->id) }} "
                                                                    method="post">
                                                                    @csrf @method('DELETE')
                                                                    <button data-toggle="tooltip" class="btn btn-light icon"
                                                                        title="Bỏ Yêu Thích">
                                                                        <i class="text-danger icon fa fa-heart"></i>
                                                                    </button>
                                                            </li>
                                                        @else
                                                            <div class="favorite-button m-t-10">
                                                                <a class="btn btn-primary" data-toggle="tooltip"
                                                                    data-placement="right" title="Yêu Thích"
                                                                    href="{{ route('favourite.add', $product->id) }}">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </div>
                                                        @endif
                                                    @else
                                                        <div class="favorite-button m-t-10">
                                                            <a class="btn btn-primary" data-toggle="tooltip"
                                                                data-placement="right" title="Yêu Thích"
                                                                href="{{ url('customer/login') }}">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div><!-- /.row -->
                                        </div><!-- /.price-container -->
                                        <div class="quantity-container info-container">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    @if (auth('cus')->check())
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="fa fa-shopping-cart inner-right-vs"></i> Thêm vào
                                                            giỏ
                                                            hàng</button>
                                                    @else
                                                        <a href="{{ url('customer/login') }}" class="btn btn-primary"><i
                                                                class="fa fa-shopping-cart inner-right-vs"></i> Thêm vào
                                                            giỏ
                                                            hàng</a>
                                                    @endif
                                                </div>
                                            </div><!-- /.row -->
                                        </div><!-- /.quantity-container -->
                                    </div><!-- /.product-info -->
                                </div><!-- /.col-sm-7 -->
                            </div><!-- /.row -->
                        </form>
                    </div>
                    <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                </ul><!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-9">
                                <div class="tab-content">
                                    <div id="description" class="tab-pane in active">
                                        <div class="product-tab">
                                            <p class="text"> {{ $product->long_content }} </p>
                                        </div>
                                    </div><!-- /.tab-pane -->
                                </div><!-- /.tab-content -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.product-tabs -->

                    <x-list-product :products="$detailProduct" :status="'Mới'" :title="'SẢN PHẨM LIÊN QUAN'" />

                </div><!-- /.col -->
                <div class="clearfix"></div>
            </div><!-- /.row -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">

                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="../assets/images/brands/brand1.png" src="../assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="../assets/images/brands/brand2.png" src="../assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="../assets/images/brands/brand3.png" src="../assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="../assets/images/brands/brand4.png" src="../assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="../assets/images/brands/brand5.png" src="../assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="../assets/images/brands/brand6.png" src="../assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="../assets/images/brands/brand2.png" src="../assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="../assets/images/brands/brand4.png" src="../assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="../assets/images/brands/brand1.png" src="../assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="../assets/images/brands/brand5.png" src="../assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->

            </div><!-- /.logo-slider -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
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
