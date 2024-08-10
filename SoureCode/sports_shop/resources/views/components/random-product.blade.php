<!-- tab product -->
<div class="tab-panel active">
    <div class="category-products">
        <ul class="products-grid">
            @foreach ($products as $key => $p)
            <li class="item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="item-inner">
                    <div class="item-img">
                        <div class="product-cartitem"></div>
                        <a class="product-image" title="Retis lapen casen" href=""> <img
                                src="{{ url('images') }}/{{ $p->image }}" width="90%" height="90%" alt="lỗi ảnh"> </a>
                    </div>
                    <div class="item-info">
                        <div class="info-inner">
                            <div class="item-title"> <a title="Retis lapen casen"
                                    href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}   ">{{ $p->name }}</a>
                            </div>
                            <div class="item-content">
                                <div class="item-price">
                                    <div class="price-box">
                                        @if ($p->sale_price > 0)
                                        <div class="product-price"> <span
                                                class="price">{{number_format($p->sale_price )}}</span>
                                            <s class="price-before-discount">{{ number_format($p->price) }}</s>
                                        </div>
                                        @else
                                        <div class="product-price"> <span
                                                class="price">{{ number_format($p->price) }}</span>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- tab product -->