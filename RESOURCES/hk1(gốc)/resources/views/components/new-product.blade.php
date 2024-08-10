<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
    <div class="more-info-tab clearfix ">
        <h3 class="new-product-title pull-left">{{ $title }}</h3>
        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
            <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">Tất cả</a>
            </li>
            @foreach ($cat as $c)
                <li><a data-transition-type="backSlide" href="#{{ $c->id }}"
                        data-toggle="tab">{{ $c->name }}</a></li>
            @endforeach
        </ul>
        <!-- /.nav-tabs -->
    </div>
    <div class="tab-content">
        <div class="tab-pane in active" id="all">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                    @foreach ($products as $p)
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a
                                                href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}"><img
                                                    src="{{ url('images') }}/{{ $p->image }}" width="100%"
                                                    height="100%" alt="lỗi ảnh"></a>
                                        </div>
                                        <!-- /.image -->
                                        <div class="tag new"><span>{{ $status }}</span></div>
                                    </div>
                                    <!-- /.product-image -->
                                    <div class="product-info text-left">
                                        <h3 class="name"><a
                                                href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}">{{ $p->name }}</a>
                                        </h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="status"></div>
                                        @if ($p->sale_price > 0)
                                            <div class="product-price"> <span class="price">{{ $p->sale_price }}</span>
                                                <s class="price-before-discount">{{ $p->price }}</s>
                                            </div>
                                        @else
                                            <div class="product-price"> <span class="price">{{ $p->price }}</span>
                                            </div>
                                        @endif
                                        <!-- /.product-price -->
                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart"
                                                        href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}"
                                                        title="Thêm Giỏ"> <i class="fa fa-shopping-cart"></i> </a>
                                                </li>
                                                @if (auth('cus')->check())
                                                    @if ($p->checkFav(auth('cus')->user()->id))
                                                        <li class="add-cart-button  btn-group">
                                                            <form action="{{ route('favourite.destroy', $p->id) }}"
                                                                method="post">
                                                                @csrf @method('DELETE')
                                                                <button data-toggle="tooltip" class="btn btn-light icon"
                                                                    title="Bỏ Yêu Thích">
                                                                    <i class="text-danger icon fa fa-heart"></i>
                                                                </button>
                                                        </li>
                                                    @else
                                                        <li class="lnk wishlist">
                                                            <a data-toggle="tooltip" class="add-to-cart"
                                                                href="{{ route('favourite.add', $p->id) }}"
                                                                title="Yêu Thích">
                                                                <i class="icon fa fa-heart"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                @else
                                                    <li class="lnk wishlist"> <a data-toggle="tooltip"
                                                            class="add-to-cart" href="{{ url('customer/login') }}"
                                                            title="Yêu Thích">
                                                            <i class="icon fa fa-heart"></i>
                                                        </a> </li>
                                                @endif
                                                <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart"
                                                        href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}"
                                                        title="Chi tiết">
                                                        <i class="fa-solid fa-eye" aria-hidden="true"></i>
                                                    </a>
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
                    @endforeach
                    <!-- /.item -->
                </div>
                <!-- /.home-owl-carousel -->
            </div>
            <!-- /.product-slider -->
        </div>
        <!-- /.tab-pane -->
        @foreach ($cat as $c)
            <div class="tab-pane" id="{{ $c->id }}">
                <div class="product-slider">
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                        @foreach ($products as $p)
                            @if ($c->id == $p->cat->id)
                                <div class="item item-carousel">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image"> <a href=""><img
                                                            src="{{ url('images') }}/{{ $p->image }}"
                                                            width="100%" height="100%" alt="lỗi ảnh"></a>
                                                </div>
                                                <!-- /.image -->
                                                <div class="tag new"><span>new</span></div>
                                            </div>
                                            <!-- /.product-image -->
                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="">{{ $p->name }}</a>
                                                </h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description">{{ $p->cat->name }}</div>
                                                <div class="status"></div>
                                                @if ($p->sale_price > 0)
                                                    <div class="product-price"> <span
                                                            class="price">{{ $p->sale_price }}</span>
                                                        <s class="price-before-discount">{{ $p->price }}</s>
                                                    </div>
                                                @else
                                                    <div class="product-price"> <span
                                                            class="price">{{ $p->price }}</span>
                                                    </div>
                                                @endif
                                                <!-- /.product-price -->
                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                            <button data-toggle="tooltip" class="btn btn-primary icon"
                                                                type="button" title="Add Cart"> <i
                                                                    class="fa fa-shopping-cart"></i> </button>
                                                            <button class="btn btn-primary cart-btn"
                                                                type="button">Thêm
                                                                vào giỏ hàng</button>
                                                        </li>
                                                        <li class="lnk wishlist"> <a data-toggle="tooltip"
                                                                class="add-to-cart" href="" title="Wishlist">
                                                                <i class="icon fa fa-heart"></i>
                                                            </a> </li>
                                                        <li class="lnk"> <a data-toggle="tooltip"
                                                                class="add-to-cart"
                                                                href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}"
                                                                title="Compare">
                                                                <i class="fa-solid fa-eye" aria-hidden="true"></i>
                                                            </a>
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
                            @endif
                        @endforeach
                        <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
            </div>
        @endforeach
        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
</div>
