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
                                                                class="price">{{ number_format($f->pro->sale_price) }} Đ</span>
                                                            <s class="price-before-discount">{{ number_format($f->pro->price) }} Đ</s>
                                                        </div>
                                                    @else
                                                        <div class="product-price"> <span
                                                                class="price">{{ number_format($f->pro->price) }} Đ</span>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td class="col-md-2">
                                                    <a href="{{ route('home.productDetail', ['slug' => Str::slug($f->pro->name), 'product' => $f->pro->id]) }}" class="btn-upper btn btn-primary">Thêm vào giỏ</a>
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
@stop()
