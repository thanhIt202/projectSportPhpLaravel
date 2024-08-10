@extends('layouts.master')
@section('title', 'Trang chủ')
@section('link', '../')
@section('main')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ url('')}}">TrangChủ</a></li>
                <li class='active'>Chỉnh sửa tài khoảng</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <div class="col-md-6 col-sm-6 create-new-account">
                    <h4 class="checkout-subtitle">Thông tin cá nhân</h4>

                    <form class="register-form outer-top-xs" method="POST" role="form" action="{{route('customer.account')}}">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Tên <span>*</span></label>
                            <input name="name" type="text" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1" value="{{auth('cus')->user()->name}}">
                                @error('name') <div>{!!$message!!}</div> @enderror

                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Số Điện Thoại <span>*</span></label>
                            <input name="phone" type="text" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1" value="{{auth('cus')->user()->phone}}">
                                @error('phone') <div>{!!$message!!}</div> @enderror

                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Địa chỉ <span>*</span></label>
                            <input name="address" type="text" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1" value="{{auth('cus')->user()->address}}">
                                @error('address') <div>{!!$message!!}</div> @enderror

                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Cập nhật</button>
                    </form>
                    
                    
                </div>
                <div class="col-md-6 col-sm-6 sign-in">
                
                    <h4 class="">Đổi mật khẩu</h4>
                    <form class="register-form outer-top-xs" method="POST" action="{{route('customer.edit_password',auth('cus')->user()->id)}}">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Mật Khẩu Cũ<span>*</span></label>
                            <input name="old_password" type="old_password" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1">
                                @error('old_password') <div>{!!$message!!}</div> @enderror

                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Mật Khẩu Mới<span>*</span></label>
                            <input name="password" type="password" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1">
                                @error('password') <div>{!!$message!!}</div> @enderror

                        </div>
                        <div class="form-group">
                            <label class="info-title"  for="exampleInputEmail1">Xác Nhận Mật
                                Khẩu<span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1" name="confirm_password">
                                @error('confirm_password') <div>{!!$message!!}</div> @enderror
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Cập nhật</button>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 sign-in">
                
            </div>
            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp">

            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                </div><!-- /.owl-carousel #logo-slider -->
            </div><!-- /.logo-slider-inner -->

        </div><!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div><!-- /.body-content -->

@stop()