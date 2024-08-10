@extends('layouts.master')
@section('title', 'Liên Hệ')
@section('link', '')
@section('contact')
active
@stop()
@section('main')

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ url('')}}">TrangChủ</a></li>
                <li class='active'>Liên Hệ</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="contact-page">
            <div class="row">

                <div class="col-md-12 contact-map outer-bottom-vs">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6597100371273!2d105.78243413461533!3d21.04629764300459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c9e359e2a4f618c!2sB%C3%A1ch%20Khoa%20Aptech!5e0!3m2!1svi!2s!4v1671352144896!5m2!1svi!2s"
                        width="600" height="450" style="border:0"></iframe>
                        
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4 contact-info">
                    <div class="contact-title">
                        <h4>Thông tin</h4>
                    </div>
                    <div class="clearfix address">
                        <span class="contact-i"><i class="fa fa-map-marker"></i></span>
                        <span class="contact-span">Tòa Nhà HTC, 250 Hoàng Quốc Việt, Cổ Nhuế, Cầu Giấy, Hà Nội</span>
                    </div>
                    <div class="clearfix phone-no">
                        <span class="contact-i"><i class="fa fa-mobile"></i></span>
                        <span class="contact-span">+(888) 123-4567<br>+(888) 456-7890</span>
                    </div>
                    <div class="clearfix email">
                        <span class="contact-i"><i class="fa fa-envelope"></i></span>
                        <span class="contact-span"><a href="#">ABC@themesground.com</a></span>
                    </div>
                </div>
                <!-- <div class="col-md-9 contact-form">
                    <div class="col-md-12 contact-title">
                        <h4>Thông tin</h4>
                    </div>
                    <div class="col-md-4 ">
                        <form class="register-form" role="form">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
                                <input type="email" class="form-control unicase-form-control text-input"
                                    id="exampleInputName" placeholder="">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form class="register-form" role="form">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                <input type="email" class="form-control unicase-form-control text-input"
                                    id="exampleInputEmail1" placeholder="">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form class="register-form" role="form">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
                                <input type="email" class="form-control unicase-form-control text-input"
                                    id="exampleInputTitle" placeholder="Title">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <form class="register-form" role="form">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputComments">Your Comments
                                    <span>*</span></label>
                                <textarea class="form-control unicase-form-control"
                                    id="exampleInputComments"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 outer-bottom-small m-t-20">
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Send
                            Message</button>
                    </div>
                </div> -->
               
            </div><!-- /.contact-page -->
        </div><!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp outer-top-vs">

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
                                                                        src="assets/images/products/p10.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p18.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p30.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p28.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p27.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p26.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p25.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p24.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p23.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p22.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                        <div class="image"> <img src="assets/images/hot-deals/p5.jpg" alt=""> </div>
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
                                        <div class="image"> <img src="assets/images/hot-deals/p5.jpg" alt=""> </div>
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
                                        <div class="image"> <img src="assets/images/hot-deals/p10.jpg" alt=""> </div>
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
                                                                        src="assets/images/products/p28.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p15.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p7.jpg" alt="image">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        alt="image"> </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p18.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p17.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        alt="image"> </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p16.jpg" alt="">
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        src="assets/images/products/p14.jpg" alt="">
                                                                    <div class="zoom-overlay"></div>
                                                                </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        alt="image"> </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
                                                                        alt="image"> </a> </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print shirt Buttoned</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"> <span class="price"> $450.99
                                                                </span> </div>
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
@endsection