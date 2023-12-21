@extends('web.layouts.layout')

@section('content')
<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>{{$product['item_dsc']}}</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{route('/')}}">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>

                            <li class="breadcrumb-item active">{{$product['item_dsc']}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Left Sidebar Start -->
<section class="product-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-xxl-9 col-xl-8 col-lg-7 wow fadeInUp">
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInUp">
                        <div class="product-left-box">
                            <div class="row g-sm-4 g-2">
                                <div class="col-12">
                                    <div class="product-main no-arrow">
                                        <div>
                                            <div class="slider-image">
                                                <img src="../assets/images/product/category/1.jpg" id="img-1"
                                                    data-zoom-image="../assets/images/product/category/1.jpg" class="
                                                    img-fluid image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="../assets/images/product/category/2.jpg"
                                                    data-zoom-image="../assets/images/product/category/2.jpg" class="
                                                    img-fluid image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="../assets/images/product/category/3.jpg"
                                                    data-zoom-image="../assets/images/product/category/3.jpg" class="
                                                    img-fluid image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="../assets/images/product/category/4.jpg"
                                                    data-zoom-image="../assets/images/product/category/4.jpg" class="
                                                    img-fluid image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="../assets/images/product/category/5.jpg"
                                                    data-zoom-image="../assets/images/product/category/5.jpg" class="
                                                    img-fluid image_zoom_cls-4 blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="slider-image">
                                                <img src="../assets/images/product/category/6.jpg"
                                                    data-zoom-image="../assets/images/product/category/6.jpg" class="
                                                    img-fluid image_zoom_cls-5 blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="left-slider-image left-slider no-arrow slick-top">
                                        <div>
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/1.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/2.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/3.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/4.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/5.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/6.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 wow fadeInUp">
                        <div class="right-box-contain">
                            {{--<h6 class="offer-top">30% Off</h6>--}}
                            <h2 class="name">{{$product['item_dsc']}}</h2>
                            <div class="price-rating">
                                <h3 class="theme-color price">S/. {{$product['precio']}} {{--<del class="text-content">$58.46</del> <span
                                        class="offer theme-color">(8% off)</span>--}}</h3>
                                <div class="product-rating custom-rate">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span class="review">23 Customer Review</span>
                                </div>
                            </div>

                            <div class="procuct-contain">
                                <p>Lollipop cake chocolate chocolate cake dessert jujubes. Shortbread sugar plum
                                    dessert
                                    powder cookie sweet brownie. Cake cookie apple pie dessert sugar plum muffin
                                    cheesecake.
                                </p>
                            </div>

                            {{--<div class="product-packege">
                                <div class="product-title">
                                    <h4>Weight</h4>
                                </div>
                                <ul class="select-packege">
                                    <li>
                                        <a href="javascript:void(0)" class="active">1/2 KG</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">1 KG</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">1.5 KG</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Red Roses</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">With Pink Roses</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="time deal-timer product-deal-timer mx-md-0 mx-auto" id="clockdiv-1"
                                data-hours="1" data-minutes="2" data-seconds="3">
                                <div class="product-title">
                                    <h4>Hurry up! Sales Ends In</h4>
                                </div>
                                <ul>
                                    <li>
                                        <div class="counter d-block">
                                            <div class="days d-block">
                                                <h5></h5>
                                            </div>
                                            <h6>Days</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter d-block">
                                            <div class="hours d-block">
                                                <h5></h5>
                                            </div>
                                            <h6>Hours</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter d-block">
                                            <div class="minutes d-block">
                                                <h5></h5>
                                            </div>
                                            <h6>Min</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter d-block">
                                            <div class="seconds d-block">
                                                <h5></h5>
                                            </div>
                                            <h6>Sec</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>--}}



                            <div class="note-box product-packege">
                                <div class="cart_qty qty-box product-qty">
                                    <div class="input-group">
                                        <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <button type="button" class="qty-left-minus" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>

                                <button onclick="location.href = 'cart.html';"
                                    class="btn btn-md bg-dark cart-button text-white w-100">Add To Cart</button>
                            </div>

                            {{--<div class="buy-box">
                                <a href="wishlist.html">
                                    <i data-feather="heart"></i>
                                    <span>Add To Wishlist</span>
                                </a>

                                <a href="compare.html">
                                    <i data-feather="shuffle"></i>
                                    <span>Add To Compare</span>
                                </a>
                            </div>--}}

                            <div class="pickup-box">
                                <div class="product-title">
                                    <h4>Store Information</h4>
                                </div>

                                <div class="pickup-detail">
                                    <h4 class="text-content">Lollipop cake chocolate chocolate cake dessert jujubes.
                                        Shortbread sugar plum dessert powder cookie sweet brownie.</h4>
                                </div>

                                <div class="product-info">
                                    <ul class="product-info-list product-info-list-2">
                                        <li>Marca : <a href="javascript:void(0)">{{$product['marca_dsc']}}</a></li>
                                        <li>SKU : <a href="javascript:void(0)">{{$product['item_cod']}}</a></li>
                                        <li>Categoria : <a href="javascript:void(0)">{{$product['categoria_dsc']}}</a></li>
                                        <li>Stock : <a href="javascript:void(0)">{{$product['stock_disponible']}}</a></li>
                                        <li>Subcategoria : <a href="javascript:void(0)">{{$product['subcategoria_dsc']}}</a> {{--<a
                                                href="javascript:void(0)">Backery</a>--}}</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paymnet-option">
                                <div class="product-title">
                                    <h4>Guaranteed Safe Checkout</h4>
                                </div>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/1.svg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/2.svg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/3.svg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/4.svg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/5.svg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-4 col-lg-5 d-none d-lg-block wow fadeInUp">
                <div class="right-sidebar-box">
                    <div class="vendor-box">
                        <div class="verndor-contain">
                            <div class="vendor-image">
                                <img src="../assets/images/product/vendor.png" class="blur-up lazyload" alt="">
                            </div>

                            <div class="vendor-name">
                                <h5 class="fw-500">Noodles Co.</h5>

                                <div class="product-rating mt-1">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span>(36 Reviews)</span>
                                </div>

                            </div>
                        </div>

                        <p class="vendor-detail">Noodles & Company is an American fast-casual
                            restaurant that offers international and American noodle dishes and pasta.</p>

                        <div class="vendor-list">
                            <ul>
                                <li>
                                    <div class="address-contact">
                                        <i data-feather="map-pin"></i>
                                        <h5>Address: <span class="text-content">1288 Franklin Avenue</span></h5>
                                    </div>
                                </li>

                                <li>
                                    <div class="address-contact">
                                        <i data-feather="headphones"></i>
                                        <h5>Contact Seller: <span class="text-content">(+1)-123-456-789</span></h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-25">
                        <div class="hot-line-number">
                            <h5>Hotline Order:</h5>
                            <h6>Mon - Fri: 07:00 am - 08:30PM</h6>
                            <h3>(+1) 123 456 789</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Left Sidebar End -->

<!-- Related Product Section Start -->
<section class="related-product-2">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
</section>
<!-- Related Product Section End -->

@endsection
