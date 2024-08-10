<div class="product-bestseller row">
    <div class="product-bestseller-content">
        <div class="col-md-5 col-xs-12 hot-deal-box">
            <div class="hot-deal">
                <div class="item">
                    @foreach ($products as $key => $p)
                        @if ($key == 0)
                            <div class="item-inner ">
                                <div class="item-img">
                                    <div class="item-img-info">
                                        <div class="link-quickview"><a
                                                href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}"
                                                class="quick-view"><i class="fa fa-eye"></i></a></div>
                                        <div class="product-cartitem"></div>
                                        <a class="product-image" title="Retis lapen casen"
                                            href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}">
                                            <img src="{{ url('images') }}/{{ $p->image }}" alt="lỗi ảnh"
                                                width="100%" height="250">
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"> <a title="Retis lapen casen"
                                                href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}">{{ $p->name }}</a>
                                        </div>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-item-description">{{ $p->short_content }}
                                        </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box">
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
                                            </div>
                                        </div>
                                        <div class="quantity-adder">
                                            <button
                                                onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;"
                                                class="reduced items-count" type="button"><i
                                                    class="fa fa-minus">&nbsp;</i></button>
                                            <input type="text" class="input-text qty" title="Qty" value="1"
                                                maxlength="12" id="qty" name="qty">
                                            <button
                                                onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                class="increase items-count" type="button"><i
                                                    class="fa fa-plus">&nbsp;</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-7 col-xs-12 por-tabs">
            <ul class="nav navbar-nav">
                <div class="new_title">
                    <h2>SẢN PHẨM Ngẫu Nhiên</h2>
                </div>
            </ul>
            <div class="product-bestseller-list">
                <div class="tab-container">
                    <!-- tab product -->
                    <x-random-product :products="$randomProduct" />
                    <!-- tab product -->
                </div>
            </div>
        </div>
    </div>
</div>
