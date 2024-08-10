@extends('layouts.master')
@section('title')
@section('link', '../')
@section('main')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ url('') }}">TrangChủ</a></li>
                <li class='active'>Giỏ hàng</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
@if ($cart->totalQuantity > 0)
<div class="body-content outer-top-xs">
    <div class="container">
        <div>
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-description item">Ảnh</th>
                                    <th class="cart-product-name item">Sản Phẩm</th>
                                    <th class="">Số lượng</th>
                                    <th class="cart-sub-total item">Giá</th>
                                    <th class="cart-total last-item">Tổng tiền</th>
                                    <th class="cart-romove item"></th>
                                </tr>
                            </thead><!-- /thead -->
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="shopping-cart-btn">
                                            <span class="">
                                                <a href="{{ route('home.index') }}" class="btn btn-primary">Tiếp tục mua
                                                    hàng</a>
                                                <a href="{{ route('cart.clear') }}"
                                                    onclick="return confirm('Bạn chắc chưa?')"
                                                    class="btn btn-upper btn-danger pull-right outer-right-xs">Xóa giỏ
                                                    hàng</a>
                                            </span>
                                        </div><!-- /.shopping-cart-btn -->
                                    </td>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($cart->items as $item)
                                <form action="{{ route('cart.update', $item->id) }}" method="get">
                                    <tr>
                                        <td class="cart-image">
                                            <a class="entry-thumbnail" href="#">
                                                <img src="{{ url('images') }}/{{ $item->image }}" width="100%"
                                                    height="100%" alt="lỗi ảnh">
                                            </a>
                                        </td>

                                        <td class="cart-product-name-info">
                                            <h4 class='cart-product-description'><a href="#">{{ $item->name }}</a>
                                            </h4>
                                        </td>
                                        <td>
                                            <form action="{{ route('cart.update', $item->id)}}" method="get">

                                                <input type="number" name="quantity" value="{{$item->quantity}}"
                                                    style="width:60px; text-align:center">
                                                <button type="submit"
                                                    class="btn btn-outline-primary btn-sm">Update</button>
                                            </form>
                                        </td>

                                        <td class="cart-product-sub-total"><span
                                                class="cart-sub-total-price">{{ number_format($item->buy_price) }}
                                                đ</span>
                                        </td>
                                        <td class="cart-product-grand-total"><span
                                                class="cart-grand-total-price">{{ number_format($item->quantity * $item->buy_price) }}
                                                đ</span></td>
                                        <td class="romove-item"><a href="{{ route('cart.remove', $item->id) }}"
                                                onclick="return confirm('Bạn chắc chưa?')" title="cancel"
                                                class="icon"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                </form>
                                @endforeach
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div>
                </div><!-- /.shopping-cart-table -->
                <div class="col-md-4 col-sm-12">
                    <div class="cart-shopping-total">
                        <table class="table">
                            <tr>
                                <b>Tổng số tiền giỏ hàng:</b>
                                <th>
                                    <div class="cart-sub-total">
                                        Tổng :<span class="inner-left-md">{{ number_format($cart->totalPrice) }}
                                            Đ</span>
                                    </div>
                                </th>
                            </tr>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="cart-checkout-btn">
                                            <a href="{{ route('order.checkout') }}" class="btn btn-success">Đặt
                                                hàng</a>
                                            <a href="{{ route('order.order_history') }}" class="btn btn-warning">Lịch sử
                                                Đặt
                                                hàng</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div>
                </div><!-- /.cart-shopping-total -->
            </div><!-- /.shopping-cart -->
        </div> <!-- /.row -->
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
@else
<div class="container">

    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Giỏ hàng đang rỗng</strong> <a href="{{ route('home.index') }}">Click để tiếp tục mua hàng</a>
    </div>
</div>
<hr>
@endif
@endsection