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
                                <div class="avatar"><img src="../assets/images/testimonials/member3.jpg" alt="Image">
                                </div>
                                <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port
                                    mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                <div class="clients_author"> Đoàn Văn Thành <span>BachKhoa-Aptech</span> </div>
                                <!-- /.container-fluid -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="avatar"><img src="../assets/images/testimonials/member1.jpg" alt="Image">
                                </div>
                                <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port
                                    mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                <div class="clients_author"> Đinh Đức Mạnh <span>BachKhoa-Aptech</span> </div>
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="avatar"><img src="../assets/images/testimonials/member2.jpg" alt="Image">
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
                                    
                                    <div class="description-container m-t-20">
                                        {{ $product->content }}
                                    </div><!-- /.description-container -->
                                    <div class="price-container info-container m-t-20">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="price-box">
                                                    @if ($product->sale_price > 0)
                                                    <div class="product-price"> <span
                                                            class="price">{{number_format($product->sale_price )}} Đ</span>
                                                        <s
                                                            class="price-before-discount">{{ number_format($product->price) }} Đ</s>
                                                    </div>
                                                    @else
                                                    <div class="product-price"> <span
                                                            class="price">{{ number_format($product->price) }} Đ</span>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                @if (auth('cus')->check())
                                                @if ($product->checkFav(auth('cus')->user()->id))
                                                <li class="add-cart-button  btn-group">
                                                    <a data-toggle="tooltip" class="btn btn-light icon btn-huy"
                                                        title="Bỏ Yêu Thích">
                                                        <i class="text-danger icon fa fa-heart"></i>
                                                    </a>
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
                                                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-success btn-sm">Thêm giỏ hàng</a>
                                                @else
                                                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-success btn-sm">Thêm giỏ hàng</a>
                                                @endif
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.quantity-container -->
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                </div>
                <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                    <div class="row">
                        <div class="col-sm-3">
                            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                <li class="active"><a data-toggle="tab" href="#description">Mô tả</a></li>
                                <li><a data-toggle="tab" href="#review">Đánh giá</a></li>
                            </ul><!-- /.nav-tabs #product-tabs -->
                        </div>
                        <div class="col-sm-9">
                            <div class="tab-content">
                                <div id="description" class="tab-pane in active">
                                    <div class="product-tab">
                                        <p class="text"> {{ $product->long_content }} </p>
                                    </div>
                                </div><!-- /.tab-pane -->

                                <div id="review" class="tab-pane">
									<div class="product-tab">
										<div class="product-add-review">
											<h4 class="title">Đánh giá</h4>
											<div class="review-table">
												<div class="table-responsive">
													<table class="table">	
														<thead>
															<tr>
																<th class="cell-label">&nbsp;</th>
																<th>1 Sao</th>
																<th>2 Sao</th>
																<th>3 Sao</th>
																<th>4 Sao</th>
																<th>5 Sao</th>
															</tr>
														</thead>	
														<tbody>
															<tr>
																<td class="cell-label">Chất lượng sảm phẩm</td>
																<td><input type="radio" name="quality" class="radio" value="1"></td>
																<td><input type="radio" name="quality" class="radio" value="2"></td>
																<td><input type="radio" name="quality" class="radio" value="3"></td>
																<td><input type="radio" name="quality" class="radio" value="4"></td>
																<td><input type="radio" name="quality" class="radio" value="5"></td>
															</tr>
															<tr>
																<td class="cell-label">Dịch vụ giao hàng</td>
																<td><input type="radio" name="quality" class="radio" value="1"></td>
																<td><input type="radio" name="quality" class="radio" value="2"></td>
																<td><input type="radio" name="quality" class="radio" value="3"></td>
																<td><input type="radio" name="quality" class="radio" value="4"></td>
																<td><input type="radio" name="quality" class="radio" value="5"></td>
															</tr>
															
														</tbody>
													</table><!-- /.table .table-bordered -->
												</div><!-- /.table-responsive -->
											</div><!-- /.review-table -->
											
											<div class="review-form">
												<div class="form-container">
													<form role="form" class="cnt-form">
														
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="exampleInputName">Tên <span class="astk">*</span></label>
																	<input type="text" class="form-control txt" id="exampleInputName" placeholder="">
																</div><!-- /.form-group -->
																
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputReview">Bình luận <span class="astk">*</span></label>
																	<textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
																</div><!-- /.form-group -->
															</div>
														</div><!-- /.row -->
														
														<div class="action text-right">
															<button class="btn btn-primary btn-upper">Gửi</button>
														</div><!-- /.action -->

													</form><!-- /.cnt-form -->
												</div><!-- /.form-container -->
											</div><!-- /.review-form -->

										</div><!-- /.product-add-review -->										
										
							        </div><!-- /.product-tab -->
								</div>
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
                            <img data-echo="../assets/images/brands/brand1.png" src="../assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../assets/images/brands/brand2.png" src="../assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../assets/images/brands/brand3.png" src="../assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../assets/images/brands/brand4.png" src="../assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../assets/images/brands/brand5.png" src="../assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../assets/images/brands/brand6.png" src="../assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../assets/images/brands/brand2.png" src="../assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../assets/images/brands/brand4.png" src="../assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../assets/images/brands/brand1.png" src="../assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../assets/images/brands/brand5.png" src="../assets/images/blank.gif" alt="">
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

<form action="{{ route('favourite.destroy', $product->id) }}" class="form_destroy" method="post">
    @csrf @method('DELETE')
</form>
@stop()

@section('JS')

<script type="text/javascript">
$('.btn-huy').click(function(e) {
    e.preventDefault();
    $('.form_destroy').submit();
})
</script>
@stop()