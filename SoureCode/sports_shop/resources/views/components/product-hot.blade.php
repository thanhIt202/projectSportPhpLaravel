<div class="sidebar-widget outer-bottom-small hot-deals wow fadeInUp ">
    <h3 class="section-title">{{ $title }}</h3>
    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme ">
        @foreach ($products as $p)
            <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image"> <img src="{{ url('images') }}/{{ $p->image }}" width="100%"
                                height="100%" alt="lỗi ảnh">
                        </div>
                        <div class="sale-offer-tag"><span>HOT<br>
                                off</span></div>
                        <div class="timing-wrapper">
                            <div class="box-wrapper">
                                <div class="date box"> <span class="key">24</span> <span class="value">DAYS</span>
                                </div>
                            </div>
                            <div class="box-wrapper">
                                <div class="minutes box"> <span class="key">12</span> <span
                                        class="value">MONTHS</span>
                                </div>
                            </div>
                            <div class="box-wrapper hidden-md">
                                <div class="seconds box"> <span class="key">2022</span> <span
                                        class="value">YEAR</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->
                    <div class="product-info text-left m-t-20">
                        <h3 class="name"><a href="detail.html">{{ $p->name }}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price">
                        @if ($p->sale_price > 0)
                                    <div class="product-price"> <span class="price">{{number_format($p->sale_price )}}</span>
                                        <s class="price-before-discount">{{ number_format($p->price) }}</s>
                                    </div>
                                @else
                                    <div class="product-price"> <span class="price">{{ number_format($p->price) }}</span>
                                    </div>
                                @endif
                        </div>
                        <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                        <div class="action">
                            <div class="add-cart-button btn-group">
                                <button class="cart-btn-bg"><a class="bg-group" style=" background: rgba(0, 0, 0, 0.0)" href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}">Thêm vào giỏ</a></button>
                            </div>
                        </div>
                        <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                </div>
            </div>
        @endforeach
    </div>
    <!-- /.sidebar-widget -->
</div>
