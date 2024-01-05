@extends('web.layouts.layout')

@section('content')
<!-- Poster Section Start -->
<section>
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="slider-1 slider-animate product-wrapper no-arrow">
                    <div>
                        <div class="banner-contain-2 hover-effect">
                            <img src="{{ asset('web/assets/images/shop/1.jpg')}}" class="bg-img rounded-3 blur-up lazyload" alt="">
                            <div
                                class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                                <div>
                                    <h2>Healthy, nutritious & Tasty Fruits & Veggies</h2>
                                    <h3>Save upto 50%</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="banner-contain-2 hover-effect">
                            <img src="{{ asset('web/assets/images/shop/1.jpg')}}" class="bg-img rounded-3 blur-up lazyload" alt="">
                            <div
                                class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                                <div>
                                    <h2>Healthy, nutritious & Tasty Fruits & Veggies</h2>
                                    <h3>Save upto 50%</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="banner-contain-2 hover-effect">
                            <img src="{{ asset('web/assets/images/shop/1.jpg')}}" class="bg-img rounded-3 blur-up lazyload" alt="">
                            <div
                                class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                                <div>
                                    <h2>Healthy, nutritious & Tasty Fruits & Veggies</h2>
                                    <h3>Save upto 50%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Poster Section End -->

<!-- Shop Section Start -->
<section class="section-b-space shop-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-custome-3">
                <div class="left-box wow fadeInUp">
                    <div class="shop-left-sidebar">
                        <div class="back-button">
                            <h3><i class="fa-solid fa-arrow-left"></i> Back</h3>
                        </div>

                        {{--<div class="filter-category">
                            <div class="filter-title">
                                <h2>Filters</h2>
                                <a href="javascript:void(0)">Clear All</a>
                            </div>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">Vegetable</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Fruit</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Fresh</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Milk</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Meat</a>
                                </li>
                            </ul>
                        </div>--}}

                        <div class="accordion custome-accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <span>Categorias</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne">
                                    <div class="accordion-body">
                                        {{--<div class="form-floating theme-form-floating-2 search-box">
                                            <input type="search" class="form-control" id="search"
                                                placeholder="Search ..">
                                            <label for="search">Search</label>
                                        </div>--}}

                                        <ul class="category-list custom-padding custom-height" style="max-height: 500px;">
                                            @foreach ($categorias as $categoria)
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    {{--<input class="checkbox_animated" type="checkbox" id="fruit">--}}
                                                    <a href="{{route('productos.categoria', ['id' => $categoria['categoria_dsc'], 'paginaActual' => 0])}}" class="form-check-label" for="fruit">
                                                        <span class="name">{{$categoria['categoria_dsc']}}</span>
                                                        {{--<span class="number">(15)</span>--}}
                                                    </a>
                                                </div>
                                            </li>
                                            @endforeach


                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="col-custome-9">
                <div class="show-button">
                    <div class="filter-button-group mt-0">
                        <div class="filter-button d-inline-block d-lg-none">
                            <a><i class="fa-solid fa-filter"></i> Filter Menu</a>
                        </div>
                    </div>

                    <div class="top-filter-menu">


                        <div class="grid-option d-none d-md-block">
                            <ul>
                                <li class="three-grid">
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-3.svg" class="blur-up lazyload" alt="">
                                    </a>
                                </li>
                                <li class="grid-btn d-xxl-inline-block d-none active">
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-4.svg"
                                            class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid.svg"
                                            class="blur-up lazyload img-fluid d-lg-none d-inline-block" alt="">
                                    </a>
                                </li>
                                <li class="list-btn">
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/list.svg" class="blur-up lazyload" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                    @foreach ($products as $product)
                    <div>
                        <div class="product-box-3 h-100 wow fadeInUp">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="{{route('producto', $product['item_cod'])}}">
                                        <img src="{{$product['item_url']}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#view{{$product['item_cod']}}">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Vegetable</span>
                                    <a href="{{route('producto', 0)}}">
                                        <h5 class="name">{{$product['item_dsc']}}</h5>
                                    </a>
                                    <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                        Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                        cheese macaroni cheese croque monsieur.</p>
                                    <div class="product-rating mt-2">
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
                                        <span>(4.0)</span>
                                    </div>
                                    <h6 class="unit">{{$product['unidad_man']}}</h6>
                                    @if ($usuario)
                                    <h5 class="price"><span class="theme-color">S./ {{number_format($product['precio'], 2)}}</span> <!--<del>$15.15</del>-->
                                    @else
                                    <h5 class="price"><span class="theme-color">Logete para obetener el precio</span> <!--<del>$15.15</del>-->
                                    @endif

                                    </h5>
                                    <div class="add-to-cart-box bg-white">
                                        <form action="{{route('cart.add')}}" method="post">
                                            @csrf
                                            <input type="text" name="item_cod" hidden value="{{$product['item_cod']}}">
                                            <input type="text" name="item_dsc" hidden value="{{$product['item_dsc']}}">
                                            <input type="text" name="marca_cod" hidden value="{{$product['marca_cod']}}">
                                            <input type="text" name="marca_dsc" hidden value="{{$product['marca_dsc']}}">
                                            <input type="text" name="categoria_cod" hidden value="{{$product['categoria_cod']}}">
                                            <input type="text" name="categoria_dsc" hidden value="{{$product['categoria_dsc']}}">
                                            <input type="text" name="unidad_man" hidden value="{{$product['unidad_man']}}">
                                            <input type="text" name="item_status" hidden value="{{$product['item_status']}}">
                                            <input type="text" name="item_url" hidden value="{{$product['item_url']}}">
                                            <input type="text" name="subcategoria_cod" hidden value="{{$product['subcategoria_cod']}}">
                                            <input type="text" name="subcategoria_dsc" hidden value="{{$product['subcategoria_dsc']}}">
                                            <input type="text" name="precio" hidden value="{{$product['precio']}}">
                                            <input type="text" name="cantidad" hidden value="1">

                                            <button type="submit" class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                        </form>

                                        {{--<div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray"
                                                    data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <button type="button" class="qty-right-plus bg-gray"
                                                    data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <nav class="custome-pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" @if($paginasTotal > 1 && ($paginaActual+1) > ($paginasTotal-1)) href="{{route('productos.categoria', ['id' => $id, 'paginaActual' => ($paginaActual-1)])}}" @endif>
                                <i class="fa-solid fa-angles-left"></i>
                            </a>
                        </li>
                        @foreach (range(1, $paginasTotal) as $pagina)
                        <li class="page-item @if($paginaActual == ($pagina-1)) active @endif">
                            <a class="page-link" @if($paginaActual != ($pagina-1)) href="{{route('productos.categoria', ['id' => $id, 'paginaActual' => ($pagina-1)])}}" @endif>{{$pagina}}</a>
                        </li>
                        @endforeach



                        <li class="page-item">
                            <a class="page-link" @if($paginasTotal > 1 && $paginaActual < ($paginasTotal -1)) href="{{route('productos.categoria', ['id' => $id, 'paginaActual' => ($paginaActual+1)])}}" @endif>
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->

@foreach ($products as $product)
    <!-- Quick View Modal Box Start -->
<div class="modal fade theme-modal view-modal" id="view{{$product['item_cod']}}" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
    <div class="modal-content">
        <div class="modal-header p-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="modal-body">
            <div class="row g-sm-4 g-2">
                <div class="col-lg-6">
                    <div class="slider-image">
                        <img src="{{$product['item_url']}}" class="img-fluid blur-up lazyload"
                            alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="right-sidebar-modal">
                        <h4 class="title-name">{{$product['item_dsc']}}</h4>
                        <h4 class="price">S/. {{number_format($product['precio'], 2)}}</h4>
                        <div class="product-rating">
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
                            <span class="ms-2">8 reseñas</span>
                            <span class="ms-2 text-danger">6 vendidos en las últimas 16 horas</span>
                        </div>

                        <div class="product-detail">
                            <h4>Detalle de Productos :</h4>
                            <p>Bastones de caramelo, azúcar, ciruela, tarta, algodón de azúcar, chupa chups, azúcar, ciruela, chocolate, me encanta.
                                Caramelos, glaseado de malvaviscos, postre, bastones de caramelo. Me encanta el soufflé. Me encanta el toffee.
                                Pastel de malvavisco, dulce rollo dulce, tiramisú, gelatina, garra de oso. Caramelo
                                muffin Me encanta el pastel de zanahoria, el azúcar, el bombón de postre de ciruela.</p>
                        </div>

                        <ul class="brand-list">
                            <li>
                                <div class="brand-box">
                                    <h5>Nombre de Marca</h5>
                                    <h6>{{$product['marca_dsc']}}</h6>
                                </div>
                            </li>

                            <li>
                                <div class="brand-box">
                                    <h5>Codigo Producto:</h5>
                                    <h6>{{$product['item_cod']}}</h6>
                                </div>
                            </li>

                            <li>
                                <div class="brand-box">
                                    <h5>Categoria</h5>
                                    <h6>P{{$product['categoria_dsc']}}</h6>
                                </div>
                            </li>
                        </ul>

                        {{--<div class="select-size">
                            <h4>Tamaño de la torata :</h4>
                            <select class="form-select select-form-size">
                                <option selected>Selcciona Tamaño</option>
                                <option value="1.2">1/2 KG</option>
                                <option value="0">1 KG</option>
                                <option value="1.5">1/5 KG</option>
                                <option value="red">Rosas rojas</option>
                                <option value="pink">Con rosas rosadas</option>
                            </select>
                        </div>

                        <div class="modal-button">
                            <button onclick="location.href = 'cart.html';"
                                class="btn btn-md add-cart-button icon">Añadir
                            al carrito</button>
                            <button onclick="location.href = 'product-left.html';"
                                class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                Ver mas detalles</button>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Quick View Modal Box End -->
@endforeach

@endsection
