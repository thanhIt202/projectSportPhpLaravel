
@extends('layouts.master')
@section('title', 'Tìm kiếm')
@section('link', '')
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
                        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>Sản Phẩm Thuộc Danh Mục </div>
                        <nav class="yamm megamenu-horizontal">
                            @foreach ($cat as $c)
                                <ul class="nav">
                                    <li class="dropdown menu-item"> <a href="{{ route('home.categoryDetail', ['category' => $c->id, 'slug' => Str::slug($c->name) ,'id' => $c->id.'true' ]) }}" class="dropdown-toggle"
                                            data-toggle=""><i class="icon fa fa-shopping-bag"
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
                            <div class="home-banner"> <img src="assets/images/banners/product-2.jpg" width="100%"
                                    height="100%" alt="Image"> </div>
                        </div>
                        <div class="sidebar-filter">
                            <div class="home-banner"> <img src="assets/images/banners/product-1.jpg" width="100%"
                                    height="100%" alt="Image"> </div>
                        </div>
                        <!-- /.sidebar-filter -->
                    </div>
                    <!-- /.sidebar-module-container -->
                </div>
                <!-- /.sidebar -->
                <div class='col-md-9'>
                    <div class="clearfix filters-container ">
                    </div>
                        <div class="search-result-container ">
                            <div id="myTabContent" class="tab-content category-list">
                                <div class="tab-pane active " id="grid-container">
                                    <div class="category-product">
                                        <div class="row">
                                            @foreach ($pro as $p)
                                                    <div class="col-sm-6 col-md-4 wow fadeInUp">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="product-image">
                                                                    <div class="image"> <a href="detail.html"><img
                                                                        src="{{ url('images') }}/{{ $p->image }}"
                                                                        width="100%" height="100%" alt="lỗi ảnh"></a>
                                                                    </div>
                                                                    <!-- /.image -->
                                                                </div>
                                                                <!-- /.product-image -->
                                                                <div class="product-info text-left">
                                                                    <h3 class="name"><a href="detail.html">
                                                                            {{ $p->name }}
                                                                        </a>
                                                                    </h3>
                                                                    <div class="rating rateit-small"></div>
                                                                    <div class="description"></div>
                                                                    <div class="product-price"> <span class="price">
                                                                            $450.99
                                                                        </span>
                                                                        <span class="price-before-discount">$ 800</span>
                                                                    </div>
                                                                    <!-- /.product-price -->
                                                                </div>
                                                                <!-- /.product-info -->
                                                                <div class="cart clearfix animate-effect">
                                                                    <div class="action">
                                                                        <ul class="list-unstyled">
                                                                            <li class="add-cart-button btn-group">
                                                                                <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown" type="button">
                                                                                    <i class="fa fa-shopping-cart"></i>
                                                                                </button>
                                                                                <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart</button>
                                                                            </li>
                                                                            <li class="lnk wishlist"> <a class="add-to-cart"
                                                                                    href="detail.html" title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i> </a>
                                                                            </li>
                                                                            <li class="lnk"> <a class="add-to-cart"
                                                                                    href="detail.html" title="Compare"> <i
                                                                                        class="fa fa-signal"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- /.action -->
                                                                </div>
                                                                <!-- /.cart -->
                                                            </div>
                                                            <!-- /.product -->
                                                        </div>
                                                        <!-- /.products -->
                                                    </div>
                                                    <!-- /.item -->
                                            @endforeach
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.category-product -->
                                </div>
                            </div>
                            <!-- /.tab-content -->
                            <div class="clearfix filters-container">
                                <div class="text-right">
                                    <div class="pagination-container">
                                        <!-- /.list-inline -->
                                    </div>
                                    <!-- /.pagination-container -->
                                </div>
                                <!-- /.text-right -->
                            </div>
                            <!-- /.filters-container -->
                        </div>
                        <!-- /.search-result-container -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- /.logo-slider -->
        </div>
        <!-- /.container -->
    </div>
    
    <hr>
@endsection