<div class="search-result-container ">
    <div id="myTabContent" class="tab-content category-list">
        <div class="tab-pane active " id="grid-container">
            <div class="category-product">
                <div class="row">
                    @foreach ($products as $p)
                    <div class="col-sm-6 col-md-4 wow fadeInUp">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href=""><img src="{{ url('images') }}/{{ $p->image }}"
                                                width="100%" height="100%" alt="lỗi ảnh"></a>
                                    </div>
                                    <!-- /.image -->
                                </div>
                                <!-- /.product-image -->
                                <div class="product-info text-left">
                                    <h3 class="name"><a
                                            href="{{ route('home.productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}">
                                            {{ $p->name }}
                                        </a>
                                    </h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price">
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
                                                <form action="{{ route('favourite.destroy', $p->id) }}" method="post">
                                                    @csrf @method('DELETE')
                                                    <button data-toggle="tooltip" class="btn btn-light icon"
                                                        title="Bỏ Yêu Thích">
                                                        <i class="text-danger icon fa fa-heart"></i>
                                                    </button>
                                                </form>

                                            </li>
                                        @else
                                            <li class="lnk wishlist">
                                                <a data-toggle="tooltip" class="add-to-cart"
                                                    href="{{ route('favourite.add', $p->id) }}" title="Yêu Thích">
                                                    <i class="icon fa fa-heart"></i>
                                                </a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart"
                                                href="{{ url('customer/login') }}" title="Yêu Thích">
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
                {{-- {{ $products->links() }} --}}
                <!-- /.list-inline -->
            </div>
            <!-- /.pagination-container -->
        </div>
        <!-- /.text-right -->
    </div>
    <!-- /.filters-container -->
</div>