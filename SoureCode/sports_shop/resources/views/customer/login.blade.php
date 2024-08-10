@extends('layouts.master')
@section('title', 'Trang chủ')
@section('link', '../')
@section('main')

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ url('')}}">TrangChủ</a></li>
                <li class='active'>Đăng Nhập</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <div class="box">
                    @if (Session::has('n'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{Session::get('n')}}!</strong>
                    </div>
                    @endif
                </div>
                <!-- Sign-in -->
                <div class="col-md-6 col-sm-6 sign-in">
                    <h4 class="">Đăng Nhập</h4>
                    <form class="register-form outer-top-xs" method="POST" action="{{route('customer.login')}}">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1" name="email">
                                @error('email') <div>{!!$message!!}</div> @enderror

                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Mật Khẩu <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input"
                                id="exampleInputPassword1" name="password">
                                @error('password') <div>{!!$message!!}</div> @enderror

                        </div>
                        <div class="radio outer-xs">
                            <a href="{{route('admin.login')}}" class="forgot-password">Đăng Nhập Quyền Quản Trị</a>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng Nhập</button>
                    </form>
                </div>
                <!-- Sign-in -->

                <!-- create a new account -->
                <div class="col-md-6 col-sm-6 create-new-account">
                @if (Session::has('no'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{Session::get('no')}}!</strong>
                    </div>
                    @endif

                    @if (Session::has('yes'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{Session::get('yes')}}!</strong>
                    </div>
                    @endif
                    
                    <h4 class="checkout-subtitle">Tạo tài khoản mới</h4>

                    <form class="register-form outer-top-xs" method="POST" role="form" action="{{route('customer.register')}}">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Tên <span>*</span></label>
                            <input name="name" type="text" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1">
                                @error('name') <div>{!!$message!!}</div> @enderror

                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Số Điện Thoại <span>*</span></label>
                            <input name="phone" type="text" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1">
                                @error('phone') <div>{!!$message!!}</div> @enderror

                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Địa chỉ <span>*</span></label>
                            <input name="address" type="text" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1">
                                @error('address') <div>{!!$message!!}</div> @enderror

                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail2">Email<span>*</span></label>
                            <input name="email" type="email" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail2">
                                @error('email') <div>{!!$message!!}</div> @enderror

                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Mật Khẩu <span>*</span></label>
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
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng Ký</button>
                    </form>


                </div>
                <!-- create a new account -->
            </div><!-- /.row -->
        </div><!-- /.sigin-in--> 
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
    </div><!-- /.container -->
</div><!-- /.body-content -->

<hr>
@endsection