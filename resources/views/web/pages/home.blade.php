@extends('web.layouts.layout')

@section('content')
<!-- Home Section Start -->
<section class="home-section pt-2">
    <div class="container-fluid-lg">
        <div class="row g-4">
            <div class="col-xl-8 ratio_65">
                <div class="home-contain h-100">
                    <div class="h-100">
                        <img src="{{ asset('web/assets/images/vegetable/banner/1.jpg')}}" class="bg-img blur-up lazyload" alt="">
                    </div>
                    <div class="home-detail p-center-left w-75">
                        <div>
                            <h6>Oferta Exclusiva <span>20% Off</span></h6>
                            <h1 class="text-uppercase">¡Solo por Hoy! <span class="daily">AÑEJADO NATURALMENTE</span></h1>
                            <p class="w-75 d-none d-sm-block">18 años de añejamiento natural, sin aditivos <br>
                            o ingredientes artificiales. En resumen, <br>un ron creado por la naturaleza...</p>
                            <button onclick="location.href = 'shop-left-sidebar.html';"
                                class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Compra Ahora <i
                                    class="fa-solid fa-right-long icon"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 ratio_65">
                <div class="row g-4">
                    <div class="col-xl-12 col-md-6">
                        <div class="home-contain">
                            <img src="{{ asset('web/assets/images/vegetable/banner/2.jpg')}}" class="bg-img blur-up lazyload"
                                alt="">
                            <div class="home-detail p-center-left home-p-sm w-75">
                                <div>
                                    <h2 class="mt-0 text-danger">30% <span class="discount text-title">OFF</span>
                                    </h2>
                                    <h3 class="theme-color">Bonobon</h3>
                                    <p class="w-75">Transforma tu día con un...</p>
                                    <a href="shop-left-sidebar.html" class="shop-button">Compra ya!!<i
                                            class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-md-6">
                        <div class="home-contain">
                            <img src="{{ asset('web/assets/images/vegetable/banner/3.jpg')}}" class="bg-img blur-up lazyload"
                                alt="">
                            <div class="home-detail p-center-left home-p-sm w-75">
                                <div>
                                    <h3 class="mt-0 theme-color fw-bold">Jack Daniel's</h3>
                                    <h4 class="text-danger">Tennessee Apple</h4>
                                    <p class="organic">Le dimos vuelta al lado mas dulce de Jack...</p>
                                    <a href="shop-left-sidebar.html" class="shop-button">Compra ya!!<i
                                            class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Section End -->

<!-- Banner Section Start -->
<section class="banner-section ratio_60 wow fadeInUp">
    <div class="container-fluid-lg">
        <div class="banner-slider">
            <div>
                <div class="banner-contain hover-effect">
                    <img src="{{ asset('web/assets/images/vegetable/banner/16.jpg')}}" class="bg-img blur-up lazyload" alt="">
                    <div class="banner-details">
                        <div class="banner-box">
                            <h6 class="text-danger">5% OFF</h6>
                            <h5>Pastas y Salsas Molitalia</h5>
                            <h6 class="text-content">La combinación perfecta</h6>
                        </div>
                        <a href="shop-left-sidebar.html" class="banner-button text-white">Compra ahora<i
                                class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="banner-contain hover-effect">
                    <img src="{{ asset('web/assets/images/vegetable/banner/5.jpg')}}" class="bg-img blur-up lazyload" alt="">
                    <div class="banner-details">
                        <div class="banner-box">
                            <h6 class="text-danger">5% OFF</h6>
                            <h5>Frutas de la Estación</h5>
                            <h6 class="text-content">Compre más ahorre más</h6>
                        </div>
                        <a href="shop-left-sidebar.html" class="banner-button text-white">Compra ahora <i
                                class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="banner-contain hover-effect">
                    <img src="{{ asset('web/assets/images/vegetable/banner/6.jpg')}}" class="bg-img blur-up lazyload" alt="">
                    <div class="banner-details">
                        <div class="banner-box">
                            <h6 class="text-danger">5% OFF</h6>
                            <h5>Carnes y Embutidos</h5>
                            <h6 class="text-content">Fresca y Congelada</h6>
                        </div>
                        <a href="shop-left-sidebar.html" class="banner-button text-white">Compra ahora <i
                                class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="banner-contain hover-effect">
                    <img src="{{ asset('web/assets/images/vegetable/banner/7.jpg')}}" class="bg-img blur-up lazyload" alt="">
                    <div class="banner-details">
                        <div class="banner-box">
                            <h6 class="text-danger">5% OFF</h6>
                            <h5>Nueces y mani</h5>
                            <h6 class="text-content">Para compartir</h6>
                        </div>
                        <a href="shop-left-sidebar.html" class="banner-button text-white">Compra ahora <i
                                class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Start -->
<section class="product-section">
    <div class="container-fluid-lg">
        <div class="row g-sm-4 g-3">
            <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                <div class="p-sticky">
                    <div class="category-menu">
                        <h3>Categoriaaaa</h3>
                        <ul>
                            <li>
                                <div class="category-list">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="shop-left-sidebar.html">Vegetales & Frutas</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/cup.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="shop-left-sidebar.html">Bebidas</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/meats.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="shop-left-sidebar.html">Carnes y Mariscos</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/breakfast.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="shop-left-sidebar.html">Desayuno y Lácteos/a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/frozen.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="shop-left-sidebar.html">Comidas congeladas</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/biscuit.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="shop-left-sidebar.html">Galletas y bocadillos</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/grocery.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="shop-left-sidebar.html">Abarrotes y productos básicos</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/drink.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="shop-left-sidebar.html">Vinos y bebidas alcohólicas</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/milk.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="shop-left-sidebar.html">Leche y Lácteoss</a>
                                    </h5>
                                </div>
                            </li>
                            <li class="pb-30">
                                <div class="category-list">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/pet.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="shop-left-sidebar.html">Alimentos para mascotas</a>
                                    </h5>
                                </div>
                            </li>
                        </ul>

                        <ul class="value-list">
                            <li>
                                <div class="category-list">
                                    <h5 class="ms-0 text-title">
                                        <a href="shop-left-sidebar.html">Valor del Dia</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <h5 class="ms-0 text-title">
                                        <a href="shop-left-sidebar.html">Las 50 Mejores Ofertas</a>
                                    </h5>
                                </div>
                            </li>
                            <li class="mb-0">
                                <div class="category-list">
                                    <h5 class="ms-0 text-title">
                                        <a href="shop-left-sidebar.html">Los Recién Llegados</a>
                                    </h5>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="ratio_156 section-t-space">
                        <div class="home-contain hover-effect">
                            <img src="{{ asset('web/assets/images/vegetable/banner/8.jpg')}}" class="bg-img blur-up lazyload"
                                alt="">
                            <div class="home-detail p-top-left home-p-medium">
                                <div>
                                    <h6 class="text-yellow home-banner">Diversión asegurada con...</h6>
                                    <h3 class="text-uppercase fw-normal"><span
                                            class="theme-color fw-bold">PARTY</span> BOX</h3>
                                    <h3 class="fw-light">¡Listo para la Fiesta!</h3>
                                    <button onclick="location.href = 'shop-left-sidebar.html';"
                                        class="btn btn-animation btn-md mend-auto">Compra ahora <i
                                            class="fa-solid fa-arrow-right icon"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratio_medium section-t-space">
                        <div class="home-contain hover-effect">
                            <img src="{{ asset('web/assets/images/vegetable/banner/11.jpg')}}" class="img-fluid blur-up lazyload"
                                alt="">
                            <div class="home-detail p-top-left home-p-medium">
                                <div>
                                    <h4 class="text-yellow text-exo home-banner">Organico</h4>
                                    <h2 class="text-uppercase fw-normal mb-0 text-russo theme-color">Fresco</h2>
                                    <h2 class="text-uppercase fw-normal text-title">Vegetales</h2>
                                    <p class="mb-3">Super Oferta 50% Off</p>
                                    <button onclick="location.href = 'shop-left-sidebar.html';"
                                        class="btn btn-animation btn-md mend-auto">Compra ahora <i
                                            class="fa-solid fa-arrow-right icon"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-t-space">
                        <div class="category-menu">
                            <h3>Productos de Tendencia</h3>

                            <ul class="product-list border-0 p-0 d-block">
                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="{{ asset('web/assets/images/vegetable/product/23.png')}}')}}"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Curry de cabra premium</h6>
                                                </a>
                                                <span>450 G</span>
                                                <h6 class="price theme-color">S/. 70.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="{{ asset('web/assets/images/vegetable/product/24.png')}}"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Dátiles Medjoul Premium Importados</h6>
                                                </a>
                                                <span>450 G</span>
                                                <h6 class="price theme-color">S/. 40.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="{{ asset('web/assets/images/vegetable/product/25.png')}}"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Nueces de buena vida</h6>
                                                </a>
                                                <span>200 G</span>
                                                <h6 class="price theme-color">S/. 52.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-0">
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="{{ asset('web/assets/images/vegetable/product/26.png')}}"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Manzana Roja Premium Importa</h6>
                                                </a>
                                                <span>1 KG</span>
                                                <h6 class="price theme-color">S/. 80.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="section-t-space">
                        <div class="category-menu">
                            <h3>Comentario del Cliente</h3>

                            <div class="review-box">
                                <div class="review-contain">
                                    <h5 class="w-75">Nos Preocupamos por la Experiencia de Nuestros Clientes</h5>
                                    <p>En el mundo de hoy, donde las opciones son abundantes, agradecemos profundamente
                                         que hayan elegido ser parte de nuestra familia de clientes. 
                                         Y queremos que sepan que estamos comprometidos a seguir brindándoles la mejor calidad, 
                                         servicio y atención que merecen.</p>
                                </div>

                                <div class="review-profile">
                                    <div class="review-image">
                                        <img src="{{ asset('web/assets/images/vegetable/review/1.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </div>
                                    <div class="review-detail">
                                        <h5>Jesica Lopez</h5>
                                        <h6>Gerente de Ventas</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-9 col-xl-8">
                <div class="title title-flex">
                    <div>
                        <h2>Ahorre hoy</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                        <p>No pierdas esta oportunidad con un descuento especial sólo por esta semana.</p>
                    </div>
                    <div class="timing-box">
                        <div class="timing">
                            <i data-feather="clock"></i>
                            <h6 class="name">Expira en :</h6>
                            <div class="time" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                <ul>
                                    <li>
                                        <div class="counter">
                                            <div class="days">
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div class="hours">
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div class="minutes">
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div class="seconds">
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-b-space">
                    <div class="product-border border-row overflow-hidden">
                        <div class="product-box-slider no-arrow">
                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.html">
                                                    <img src="{{ asset('web/assets/images/vegetable/product/1.png')}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.html">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">Galletas crujientes de chocolate con chispas de fantasía</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">S/. 26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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

                                                    <h6 class="theme-color">En Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button">Agregar
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus"
                                                                data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.html">
                                                    <img src="{{ asset('web/assets/images/vegetable/product/2.png')}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.html">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">Café Cold Brew Café Instantáneo 50 g</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">S/. 26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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

                                                    <h6 class="theme-color">En Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button">Agregar
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus"
                                                                data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.html">
                                                    <img src="{{ asset('web/assets/images/vegetable/product/3.png')}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.html">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">Galletas de mantequilla premium Peanut Butter Bite 600 g
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">S/. 26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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

                                                    <h6 class="theme-color">En Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button">Agregar
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus"
                                                                data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="label-tag">
                                                <span>NUEVO</span>
                                            </div>
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.html">
                                                    <img src="{{ asset('web/assets/images/vegetable/product/4.png')}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.html">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">Paquete combinado SnackAmor de Jowar Stick y Jowar
                                                        Papas fritas</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">s/. 26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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

                                                    <h6 class="theme-color">En Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button">Agregar
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus"
                                                                data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.html">
                                                    <img src="{{ asset('web/assets/images/vegetable/product/5.png')}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.html">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">Yumitos Patatas Fritas Espolvoreadas con Chile 100 g
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">S/. 26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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

                                                    <h6 class="theme-color">En Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button">Agregar
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus"
                                                                data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.html">
                                                    <img src="{{ asset('web/assets/images/vegetable/product/6.png')}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.html">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">Neu Farm Unpolished Desi Toor Dal 1 kg</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">S/. 26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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

                                                    <h6 class="theme-color">En Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button">Agregar
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus"
                                                                data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="label-tag">
                                                <span>NEW</span>
                                            </div>
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.html">
                                                    <img src="{{ asset('web/assets/images/vegetable/product/7.png')}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.html">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">hLeche tonificada saludable de larga duración 1 L</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">S/. 26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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

                                                    <h6 class="theme-color">En Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button">Agregar
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus"
                                                                data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.html">
                                                    <img src="{{ asset('web/assets/images/vegetable/product/8.png')}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.html">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">Dog Treats Natural Yak Milk Bars For Small Dogs
                                                        100g</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">S/. 26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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

                                                    <h6 class="theme-color">En Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button">Agregar
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus"
                                                                data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.html">
                                                    <img src="{{ asset('web/assets/images/vegetable/product/9.png')}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.html">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">Raw Mutton Leg, Packaging 5 Kg</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">S/. 26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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

                                                    <h6 class="theme-color">En Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button">Agregar
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus"
                                                                data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.html">
                                                    <img src="{{ asset('web/assets/images/vegetable/product/10.png')}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.html">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">Blended Instant Coffee 50 g Buy 1 Get 1 Free
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">S/. 26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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

                                                    <h6 class="theme-color">En Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button">Agregar
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus"
                                                                data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.html">
                                                    <img src="{{ asset('web/assets/images/vegetable/product/3.png')}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.html">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">Peanut Butter Bite Premium Butter Cookies 600 g
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">S/. 26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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

                                                    <h6 class="theme-color">En Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button">Agregar
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus"
                                                                data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-left-thumbnail.html">
                                                    <img src="{{ asset('web/assets/images/vegetable/product/5.png')}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <ul class="product-option">
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Compare">
                                                        <a href="compare.html">
                                                            <i data-feather="refresh-cw"></i>
                                                        </a>
                                                    </li>

                                                    <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i data-feather="heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h6 class="name">Yumitos Chilli Sprinkled Potato Chips 100 g
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">S/. 26.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-sm-2 mt-1">
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

                                                    <h6 class="theme-color">En Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box">
                                                    <button class="btn btn-add-cart addcart-button">Agregar
                                                        <span class="add-icon">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </button>
                                                    <div class="cart_qty qty-box">
                                                        <div class="input-group">
                                                            <button type="button" class="qty-left-minus"
                                                                data-type="minus" data-field="">
                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input"
                                                                type="text" name="quantity" value="0">
                                                            <button type="button" class="qty-right-plus"
                                                                data-type="plus" data-field="">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title">
                    <h2>Productos por Categorías</h2>
                    <span class="title-leaf">
                        <svg class="icon-width">
                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                        </svg>
                    </span>
                    <p>Categorías Principales de la Semana</p>
                </div>

                <div class="category-slider-2 product-wrapper no-arrow">
                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark">
                            <div>
                                <img src="	https://media.freshmart.pe/category-recommend/Departamentos_VerdurasNUEVO.png" class="blur-up lazyload" alt="">
                                <h5>Verduras</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark">
                            <div>
                                <img src="https://media.freshmart.pe/category-recommend/Departamentos_Limpieza.png" class="blur-up lazyload" alt="">
                                <h5>Limieza</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark">
                            <div>
                                <img src="https://media.freshmart.pe/category-recommend/Departamentos_CarnesYPescados.png" class="blur-up lazyload" alt="">
                                <h5>Carnes</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark">
                            <div>
                                <img src="https://media.freshmart.pe/category-recommend/Departamentos_FrutasNUEVO.png" class="blur-up lazyload" alt="">
                                <h5>Frutas</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark">
                            <div>
                                <img src="https://media.freshmart.pe/category-recommend/Departamentos_Lacteos.png" class="blur-up lazyload" alt="">
                                <h5>Lacteos</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark">
                            <div>
                                <img src="	https://media.freshmart.pe/category-recommend/Departamentos_Bebidas.png" class="blur-up lazyload" alt="">
                                <h5>Bebidas & Licores/h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark">
                            <div>
                                <img src="	https://media.freshmart.pe/category-recommend/Departamentos_MascotasNUEVO.png" class="blur-up lazyload" alt="">
                                <h5>Alimentos para Mascotas</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="section-t-space section-b-space">
                    <div class="row g-md-4 g-3">
                        <div class="col-md-6">
                            <div class="banner-contain hover-effect">
                                <img src="{{ asset ('web//assets/images/vegetable/banner/9.jpg')}}" class="bg-img blur-up lazyload"
                                    alt="">
                                <div class="banner-details p-center-left p-4">
                                    <div>
                                        <h3 class="text-exo">50% offer</h3>
                                        <h4 class="text-russo fw-normal theme-color mb-2">Carne Fresca</h4>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation btn-sm mend-auto">Compra ahora <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-contain hover-effect">
                                <img src="{{ asset ('web//assets/images/vegetable/banner/10.jpg')}}" class="bg-img blur-up lazyload"
                                    alt="">
                                <div class="banner-details p-center-left p-4">
                                    <div>
                                        <h3 class="text-exo">50% offer</h3>
                                        <h4 class="text-russo fw-normal theme-color mb-2">Hongos</h4>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation btn-sm mend-auto">Compra ahora <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title d-block">
                    <h2>Alacena</h2>
                    <span class="title-leaf">
                        <svg class="icon-width">
                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                        </svg>
                    </span>
                    <p>Un asistente virtual recoge los productos de tu lista</p>
                </div>

                <div class="product-border overflow-hidden wow fadeInUp">
                    <div class="product-box-slider no-arrow">
                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-left-thumbnail.html">
                                                <img src="{{ asset('web/assets/images/vegetable/product/1.png')}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                            <ul class="product-option">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-left-thumbnail.html">
                                                <h6 class="name h-100">Chocalate</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">S/. 26.69</span>
                                                <del>28.56</del>
                                            </h5>

                                            <div class="product-rating mt-sm-2 mt-1">
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

                                                <h6 class="theme-color">En Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box">
                                                <button class="btn btn-add-cart addcart-button">Agregar
                                                    <span class="add-icon">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </span>
                                                </button>
                                                <div class="cart_qty qty-box">
                                                    <div class="input-group">
                                                        <button type="button" class="qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input"
                                                            type="text" name="quantity" value="0">
                                                        <button type="button" class="qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-left-thumbnail.html">
                                                <img src="{{ asset('web/assets/images/vegetable/product/2.png')}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                            <ul class="product-option">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-left-thumbnail.html">
                                                <h6 class="name h-100">Galletas Sándwich</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">S/. 26.69</span>
                                                <del>28.56</del>
                                            </h5>

                                            <div class="product-rating mt-sm-2 mt-1">
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

                                                <h6 class="theme-color">En Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box">
                                                <button class="btn btn-add-cart addcart-button">Agreagar
                                                    <span class="add-icon">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </span>
                                                </button>
                                                <div class="cart_qty qty-box">
                                                    <div class="input-group">
                                                        <button type="button" class="qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input"
                                                            type="text" name="quantity" value="0">
                                                        <button type="button" class="qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-left-thumbnail.html">
                                                <img src="{{ asset('web/assets/images/vegetable/product/3.png')}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                            <ul class="product-option">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-left-thumbnail.html">
                                                <h6 class="name h-100">Croissant De Mantequilla</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">S/. 26.69</span>
                                                <del>28.56</del>
                                            </h5>

                                            <div class="product-rating mt-sm-2 mt-1">
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

                                                <h6 class="theme-color">En Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box">
                                                <button class="btn btn-add-cart addcart-button">Agregar
                                                    <span class="add-icon">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </span>
                                                </button>
                                                <div class="cart_qty qty-box">
                                                    <div class="input-group">
                                                        <button type="button" class="qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input"
                                                            type="text" name="quantity" value="0">
                                                        <button type="button" class="qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-left-thumbnail.html">
                                                <img src="{{ asset('web/assets/images/vegetable/product/4.png')}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                            <ul class="product-option">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-left-thumbnail.html">
                                                <h6 class="name h-100">Chocolate negro</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">S/. 26.69</span>
                                                <del>28.56</del>
                                            </h5>

                                            <div class="product-rating mt-sm-2 mt-1">
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

                                                <h6 class="theme-color">En Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box">
                                                <button class="btn btn-add-cart addcart-button">Agregar
                                                    <span class="add-icon">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </span>
                                                </button>
                                                <div class="cart_qty qty-box">
                                                    <div class="input-group">
                                                        <button type="button" class="qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input"
                                                            type="text" name="quantity" value="0">
                                                        <button type="button" class="qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-left-thumbnail.html">
                                                <img src="{{ asset('web/assets/images/vegetable/product/5.png')}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                            <ul class="product-option">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-left-thumbnail.html">
                                                <h6 class="name h-100">Comida dulce</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">S/. 26.69</span>
                                                <del>28.56</del>
                                            </h5>

                                            <div class="product-rating mt-sm-2 mt-1">
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

                                                <h6 class="theme-color">En Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box">
                                                <button class="btn btn-add-cart addcart-button">Agregar
                                                    <span class="add-icon">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </span>
                                                </button>
                                                <div class="cart_qty qty-box">
                                                    <div class="input-group">
                                                        <button type="button" class="qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input"
                                                            type="text" name="quantity" value="0">
                                                        <button type="button" class="qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-left-thumbnail.html">
                                                <img src="{{ asset('web/assets/images/vegetable/product/4.png')}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                            <ul class="product-option">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-left-thumbnail.html">
                                                <h6 class="name h-100">Chocolate negro</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">S/. 26.69</span>
                                                <del>28.56</del>
                                            </h5>

                                            <div class="product-rating mt-sm-2 mt-1">
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

                                                <h6 class="theme-color">En Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box">
                                                <button class="btn btn-add-cart addcart-button">Agregar
                                                    <span class="add-icon">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </span>
                                                </button>
                                                <div class="cart_qty qty-box">
                                                    <div class="input-group">
                                                        <button type="button" class="qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input"
                                                            type="text" name="quantity" value="0">
                                                        <button type="button" class="qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-t-space">
                    <div class="banner-contain">
                        <img src="{{ asset('web/assets/images/vegetable/banner/15.jpg')}}" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details p-center p-4 text-white text-center">
                            <div>
                                <h3 class="lh-base fw-bold offer-text">¡Obtén un reembolso de S/ 10! Orden mínima de S/. 110</h3>
                                <h6 class="coupon-code">Usar Código : ATIENDO2023</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-t-space section-b-space">
                    <div class="row g-md-4 g-3">
                        <div class="col-xxl-8 col-xl-12 col-md-7">
                            <div class="banner-contain hover-effect">
                                <img src="{{ asset('web/assets/images/vegetable/banner/12.jpg')}}" class="bg-img blur-up lazyload"
                                    alt="">
                                <div class="banner-details p-center-left p-4">
                                    <div>
                                        <h2 class="text-kaushan fw-normal theme-color">Preparate para</h2>
                                        <h3 class="mt-2 mb-3">¡APROVECHAR EL DÍA!</h3>
                                        <p class="text-content banner-text">Adquiere tus productos frescos al mejor precio.</p>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation btn-sm mend-auto">Compra ahora <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-12 col-md-5">
                            <a href="shop-left-sidebar.html" class="banner-contain hover-effect h-100">
                                <img src="{{ asset('web/assets/images/vegetable/banner/13.jpg')}}" class="bg-img blur-up lazyload"
                                    alt="">
                                <div class="banner-details p-center-left p-4 h-100">
                                    <div>
                                        <h2 class="text-kaushan fw-normal text-danger">20% Off</h2>
                                        <h3 class="mt-2 mb-2 theme-color">RESUMEN</h3>
                                        <h3 class="fw-normal product-name text-title">Producto</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="title d-block">
                    <div>
                        <h2>Nuestro Mejor Vendedor</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                        <p>Un asistente virtual recoge los productos de tu lista</p>
                    </div>
                </div>

                <div class="best-selling-slider product-wrapper wow fadeInUp">
                    <div>
                        <ul class="product-list">
                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="{{asset ('web/assets/images/vegetable/product/11.png')}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Pan Integral</h6>
                                            </a>
                                            <span>500 G</span>
                                            <h6 class="price theme-color">S/. 10.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="{{ asset('web/assets/images/vegetable/product/12.png')}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Papa</h6>
                                            </a>
                                            <span>500 G</span>
                                            <h6 class="price theme-color">S/. 10.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="{{ asset('web/assets/images/vegetable/product/13.png')}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Chile</h6>
                                            </a>
                                            <span>200 G</span>
                                            <h6 class="price theme-color">S/. 10.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="{{ asset('web/assets/images/vegetable/product/14.png')}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Hamburguesas</h6>
                                            </a>
                                            <span>150 G</span>
                                            <h6 class="price theme-color">S/. 10.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <ul class="product-list">
                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="{{ asset('web/assets/images/vegetable/product/15.png')}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Queso britanico</h6>
                                            </a>
                                            <span>500 G</span>
                                            <h6 class="price theme-color">S/. 10.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="{{ asset('web/assets/images/vegetable/product/16.png')}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Leche tonificada de larga duración</h6>
                                            </a>
                                            <span>1 L</span>
                                            <h6 class="price theme-color">S/. 10.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="{{ asset('web/assets/images/vegetable/product/17.png')}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Tomate Orgánico</h6>
                                            </a>
                                            <span>1 KG</span>
                                            <h6 class="price theme-color">S/. 10.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="{{ asset('web/assets/images/vegetable/product/18.png')}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Mermelada Organica</h6>
                                            </a>
                                            <span>150 G</span>
                                            <h6 class="price theme-color">S/. 10.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <ul class="product-list">
                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="{{ asset('web/assets/images/vegetable/product/19.png')}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Aceite de girasol refinado buena vida</h6>
                                            </a>
                                            <span>1 L</span>
                                            <h6 class="price theme-color">S/. 10.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="{{ asset('web/assets/images/vegetable/product/20.png')}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Maní crudo de buena vida</h6>
                                            </a>
                                            <span>500 G</span>
                                            <h6 class="price theme-color">S/.  10.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="{{ asset('web/assets/images/vegetable/product/21.png')}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Huevos de Granja</h6>
                                            </a>
                                            <span>1 KG</span>
                                            <h6 class="price theme-color">S/. 10.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="offer-product">
                                    <a href="product-left-thumbnail.html" class="offer-image">
                                        <img src="{{ asset('web/assets/images/vegetable/product/22.png')}}"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="product-left-thumbnail.html" class="text-title">
                                                <h6 class="name">Bebida de mango Froot</h6>
                                            </a>
                                            <span>160 ML</span>
                                            <h6 class="price theme-color">S/. 10.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="section-t-space">
                    <div class="banner-contain hover-effect">
                        <img src="{{ asset('web/assets/images/vegetable/banner/14.jpg')}}" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details p-center banner-b-space w-100 text-center">
                            <div>
                                <h6 class="ls-expanded theme-color mb-sm-3 mb-1">VERANO</h6>
                                <h2 class="banner-title">VERDURAS</h2>
                                <h5 class="lh-sm mx-auto mt-1 text-content">Ahorre hasta un 5% de descuento</h5>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn btn-animation btn-sm mx-auto mt-sm-3 mt-2">Compra ahora <i
                                        class="fa-solid fa-arrow-right icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title section-t-space">
                    <h2>Blog destacado</h2>
                    <span class="title-leaf">
                        <svg class="icon-width">
                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                        </svg>
                    </span>
                    <p>Un asistente virtual recoge los productos de tu lista</p>
                </div>

                <div class="slider-3-blog ratio_65 no-arrow product-wrapper">
                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="blog-detail.html" class="blog-image">
                                    <img src="{{ asset('web/assets/images/vegetable/blog/1.jpg')}}" class="bg-img blur-up lazyload"
                                        alt="">
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail">
                                <h6>20 Agosto, 2023</h6>
                                <h5>Verduras frescas en línea</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="blog-detail.html" class="blog-image">
                                    <img src="{{ asset('web/assets/images/vegetable/blog/2.jpg')}}" class="bg-img blur-up lazyload"
                                        alt="">
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail">
                                <h6>10 Setiembre, 2023</h6>
                                <h5>Fruta fresca combinada</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="blog-detail.html" class="blog-image">
                                    <img src="../assets/images/vegetable/blog/3.jpg" class="bg-img blur-up lazyload"
                                        alt="">
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail">
                                <h6>10 Setiembre, 2022</h6>
                                <h5>NQué comer para tener una mejor salud</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="blog-detail.html" class="blog-image">
                                    <img src="../assets/images/vegetable/blog/1.jpg" class="bg-img blur-up lazyload"
                                        alt="">
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail">
                                <h6>20 setiembre, 2023</h6>
                                <h5>Verduras frescas en línea</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Newsletter Section Start -->
<section class="newsletter-section section-b-space">
    <div class="container-fluid-lg">
        <div class="newsletter-box newsletter-box-2">
            <div class="newsletter-contain py-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                            <div class="newsletter-detail">
                                <h2>Únase a nuestro boletín y obtenga...</h2>
                                <h5>S/. 20 de descuento para tu primer pedido</h5>
                                <div class="input-box">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Ingresa tu Email">
                                    <i class="fa-solid fa-envelope arrow"></i>
                                    <button class="sub-btn  btn-animation">
                                        <span class="d-sm-block d-none">Suscribir</span>
                                        <i class="fa-solid fa-arrow-right icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Section End -->
@endsection
