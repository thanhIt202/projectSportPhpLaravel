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
                                        <div class="image"> <a href=""><img
                                                    src="{{ url('images') }}/{{ $p->image }}" width="100%"
                                                    height="100%" alt="lỗi ảnh"></a>
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
                                                    <button class="btn btn-primary icon" data-toggle="dropdown"
                                                        type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to
                                                        cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html"
                                                        title="Wishlist"> <i class="icon fa fa-heart"></i> </a>
                                                </li>
                                                <li class="lnk"> <a class="add-to-cart" href="detail.html"
                                                        title="Compare"> <i class="fa fa-signal"></i> </a>
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
