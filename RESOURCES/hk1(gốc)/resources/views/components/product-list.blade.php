<div class="sidebar-widget outer-bottom-small wow fadeInUp">
    <h3 class="section-title">{{ $title }}</h3>
    <div class="sidebar-widget-body">
        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme">
            @foreach ($products as $p)
                <div class="item">
                    <div class="products special-product">
                        @foreach ($products as $p)
                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col col-xs-4">
                                            <div class="product-image">
                                                <div class="image"> <a
                                                        href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}"><img
                                                            src="{{ url('images') }}/{{ $p->image }}" width="100%"
                                                            height="100%" alt="lỗi ảnh">
                                                    </a> </div>
                                                <!-- /.image -->
                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col col-xs-8">
                                            <div class="product-info">
                                                <h3 class="name"><a
                                                        href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}">{{ $p->name }}</a>
                                                </h3>
                                                <div class="rating">{{ $p->short_content }}</div>
                                                <div class="product-price">
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
                                                </div>
                                                <!-- /.product-price -->
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>
                                <!-- /.product-micro -->
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
            {{-- <div class="item">
            <div class="products special-product">
                @foreach ($products as $p)
                    <div class="product">
                        <div class="product-micro">
                            <div class="row product-micro-row">
                                <div class="col col-xs-4">
                                    <div class="product-image">
                                        <div class="image"> <a
                                                href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}"><img
                                                    src="{{ url('images') }}/{{ $p->image }}" width="100%"
                                                    height="100%" alt="lỗi ảnh">
                                            </a> </div>
                                        <!-- /.image -->
                                    </div>
                                    <!-- /.product-image -->
                                </div>
                                <!-- /.col -->
                                <div class="col col-xs-8">
                                    <div class="product-info">
                                        <h3 class="name"><a
                                                href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}">{{ $p->name }}</a>
                                        </h3>
                                        <div class="rating">{{ $p->short_content }}</div>
                                        <div class="product-price">
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
                                        </div>
                                        <!-- /.product-price -->
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                    </div>
                @endforeach
            </div>
        </div> --}}
        </div>
    </div>
</div>
