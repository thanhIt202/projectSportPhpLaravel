<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesground.com/boxshop/demo/V1/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jun 2020 07:12:34 GMT -->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{url('')}}/assets/css/main.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/blue.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/rateit.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap-select.min.css">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{url('')}}/assets/css/font-awesome.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    @yield('css')
</head>

<body class="cnt-home">
    <header class="header-style-1">
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                    <div class="cnt-account">
                        <ul class="list-unstyled">
                            @if (auth('cus')->check())
                                <li><a href="{{ route('customer.account') }}"><i
                                            class="icon fa fa-user"></i>{{ auth('cus')->user()->name }}</a>
                                </li>
                                <li><a href="{{ route('favourite.index') }}"><i class="icon fa fa-heart"></i>Yêu
                                        Thích</a>
                                </li>
                                <li><a href="{{ route('cart.view') }}"><i class="icon fa fa-shopping-cart"></i>Giỏ
                                        Hàng</a>
                                </li>
                                <li><a href="{{ route('customer.logout') }}"><i
                                            class="icon fas fa-sign-out-alt"></i>Đăng
                                        Xuất</a></li>
                            @else
                                <li><a href="{{ url('customer/login') }}"><i class="icon fa fa-heart"></i>Yêu Thích</a>
                                </li>
                                <li><a href="{{ url('customer/login') }}"><i class="icon fa fa-shopping-cart"></i>Giỏ
                                        Hàng</a>
                                </li>
                                <li><a href="{{ url('customer/login') }}"><i class="icon fa fa-lock"></i>Đăng Nhập</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <!-- /.cnt-account -->
                    <div class="cnt-block">
                        <!-- /.list-unstyled -->
                    </div>
                    <!-- /.cnt-cart -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.header-top-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.header-top -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                        <div class="logo"> <a href="{{ url('/') }}"> <img
                                    src="{{url('')}}/assets/images/logo.png" alt="logo"> </a> </div>
                        <!-- /.logo -->
                    </div>
                    <!-- /.logo-holder -->
                    <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                        <!-- /.contact-row -->
                        <div class="search-area">
                            <form action="{{ route('search.index') }}" method="get" class="form-inline"
                                role="form">
                                <div class="control-group">
                                    <input class="search-field" name="keyword" placeholder="Tìm kiếm ..." />
                                    <button type="submit" class="search-button"></button>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-area -->
                    </div>
                    <!-- /.top-search-holder -->
                    <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                        <div class="dropdown dropdown-cart"> <a href="" class="dropdown-toggle lnk-cart"
                                data-toggle="dropdown">
                                <div class="items-cart-inner">
                                    <div class="basket"></div>
                                    <div class="basket-item-count">
                                        <span class="count">{{ $cart->totalQuantity }}</span>
                                    </div>
                                    <div class="total-price-basket"> <span class="lbl"></span> <span
                                            class="total-price"> <span class="value">{{number_format ($cart->totalPrice) }}</span>
                                            <span class="sign">Đ</span> </span> </div>
                                </div>
                            </a>
                        </div>
                        <!-- /.dropdown-cart -->
                    </div>
                    <!-- /.top-cart-row -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.main-header -->
        <div class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                            class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <ul class="nav navbar-nav">
                                    <li class="@yield('home') dropdown yamm-fw"> <a href="{{ url('/') }}"
                                            data-hover="dropdown" class="dropdown-toggle">Trang chủ</a> </li>
                                    <!-- data-toggle="dropdown" -->
                                    <li class="@yield('shop') dropdown yamm mega-menu"> <a href="#"
                                            data-hover="dropdown" class="dropdown-toggle">Sản phẩm</a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <ul class="links">
                                                                @foreach ($cat as $c)
                                                                    <li><a
                                                                            href="{{ route('home.categoryDetail', ['category' => $c->id, 'slug' => Str::slug($c->name)]) }}">{{ $c->name }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                            <img class="img-responsive"
                                                                src="assets/images/banners/banner-11.jpg"
                                                                width="100%" height="100%" alt="">
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                            <img class="img-responsive"
                                                                src="assets/images/banners/banner-12.jpg"
                                                                width="100%" height="100%" alt="">
                                                        </div>
                                                        <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="@yield('blog') dropdown"> <a href="{{ url('/blog') }}">Tin
                                            Tức</a> </li>
                                    <li class="@yield('contact') dropdown"> <a href="{{ url('/contact') }}">Liên
                                            hệ</a>
                                    </li>

                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="clearfix"></div>
                            </div>
                            <!-- /.nav-outer -->
                        </div>
                        <!-- /.navbar-collapse -->

                    </div>
                    <!-- /.nav-bg-class -->
                </div>
                <!-- /.navbar-default -->
            </div>
            <!-- /.container-class -->

        </div>
        <!-- /.header-nav -->

    </header>

    @yield('main')


    <footer id="footer" class="footer color-bg">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Liên hệ chúng tôi</h4>
                        </div>
                        <!-- /.module-heading -->

                        <address>
                            <ul class="toggle-footer" style="">
                                <li class="media">
                                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i
                                                class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                                    <div class="media-body">
                                        <p>Tòa Nhà HTC, 250 Hoàng Quốc Việt, Cổ Nhuế, Cầu Giấy, Hà Nội</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i
                                                class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                                    <div class="media-body">
                                        <p>+(888) 123-4567<br>
                                            +(888) 456-7890</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i
                                                class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                                    <div class="media-body outer-top-xsm"> <span><a
                                                href="#">Abc@themesground.com</a></span> </div>
                                </li>
                            </ul>
                        </address>
                        <!-- /.module-body -->
                    </div>
                    <!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Dịch vụ khách hàng</h4>
                        </div>
                        <!-- /.module-heading -->
                        <div class="module-body">
                            <ul class='list-unstyled'>
                            @if (auth('cus')->check())
                                <li class="first"><a href="{{ route('customer.account') }}" title="Contact us">Tài khoản</a></li>
                                <li><a href="{{ route('order.order_history') }}" title="About us">Lịch sử đơn hàng</a></li>
                                <li><a href="#" title="faq">Câu hỏi thường gặp</a></li>
                                <li class="last"><a href="#" title="Where is my order?">Trung tâm trợ giúp</a></li>
                                @else
                                <li class="first"><a href="{{ url('customer/login') }}" title="Contact us">My Account</a></li>
                                <li><a href="{{ url('customer/login') }}" title="About us">Order History</a></li>
                                <li><a href="{{ url('customer/login') }}" title="faq">FAQ</a></li>
                                <li class="last"><a href="{{ url('customer/login') }}" title="Where is my order?">Help Center</a></li>
                                @endif

                            </ul>
                        </div>
                        <!-- /.module-body -->
                    </div>
                    <!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Đường dẫn nhanh</h4>
                        </div>
                        <!-- /.module-heading -->

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <li class="first"><a title="Your Account" href="#">Về chúng tôi</a></li>
                                <li><a title="Information" href="#">Dịch vụ khách hàng</a></li>
                                <li><a title="Addresses" href="#">Công ty</a></li>
                                <li><a title="Addresses" href="#">Quan hệ đầu tư</a></li>
                            </ul>
                        </div>
                        <!-- /.module-body -->
                    </div>
                    <!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Tại sao chọn chúng tôi ?</h4>
                        </div>
                        <!-- /.module-heading -->

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <li class="first"><a href="#" title="About us">Hướng dẫn mua sắm</a></li>
                                <li><a href="{{ url('/blog') }}" title="Blog">Tin tức</a></li>
                                <li><a href="#" title="Company">Công ty</a></li>
                                <li><a href="#" title="Investor Relations">Quan hệ đầu tư</a></li>
                                <li class=" last"><a href="{{ url('/contact') }}" title="Suppliers">Liên hệ chúng tôi</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.module-body -->
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-bar">
            <div class="container">
                <div class="col-xs-12 col-sm-6 no-padding social">
                    <ul class="link">
                        <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#"
                                title="Facebook"></a></li>
                        <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#"
                                title="Twitter"></a></li>
                        <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#"
                                title="GooglePlus"></a></li>
                        <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#"
                                title="RSS"></a></li>
                        <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#"
                                title="PInterest"></a>
                        </li>
                        <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#"
                                title="Linkedin"></a>
                        </li>
                        <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#"
                                title="Youtube"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 no-padding">
                    <div class="clearfix payment-methods">
                        <ul>
                            <li><img src="assets/images/payments/1.png" alt=""></li>
                            <li><img src="assets/images/payments/2.png" alt=""></li>
                            <li><img src="assets/images/payments/3.png" alt=""></li>
                            <li><img src="assets/images/payments/4.png" alt=""></li>
                            <li><img src="assets/images/payments/5.png" alt=""></li>
                        </ul>
                    </div>
                    <!-- /.payment-methods -->
                </div>
            </div>
        </div>
    </footer>

    <!-- For demo purposes – can be removed on production -->

    <!-- For demo purposes – can be removed on production : End -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="{{url('')}}/assets/js/jquery-1.11.1.min.js"></script>
    <script src="{{url('')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="{{url('')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{url('')}}/assets/js/countdown.js"></script>
    <script src="{{url('')}}/assets/js/echo.min.js"></script>
    <script src="{{url('')}}/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="{{url('')}}/assets/js/bootstrap-slider.min.js"></script>
    <script src="{{url('')}}/assets/js/jquery.rateit.min.js"></script>
    <script src="{{url('')}}/assets/js/lightbox.min.js"></script>
    <script src="{{url('')}}/assets/js/bootstrap-select.min.js"></script>
    <script src="{{url('')}}/assets/js/wow.min.js"></script>
    <script src="{{url('')}}/assets/js/scripts.js"></script>

    <!-- Hot Deals Timer 1-->
    @yield('JS')
    
</body>

<!-- Mirrored from themesground.com/boxshop/demo/V1/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jun 2020 07:16:08 GMT -->

</html>
