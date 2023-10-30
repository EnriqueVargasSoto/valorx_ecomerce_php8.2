<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, viewport-fit=cover">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('web/assets/images/favicon/1.png')}}" type="image/x-icon">
    <title>Atiendo</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('web/assets/css/vendors/bootstrap.css')}}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{ asset('web/assets/css/animate.min.css')}}" />

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/assets/css/vendors/font-awesome.css')}}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/assets/css/vendors/feather-icon.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/assets/css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/assets/css/vendors/slick/slick-theme.css')}}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/assets/css/bulk-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/assets/css/vendors/animate.css')}}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('web/assets/css/style.css')}}">

    @yield('style')
</head>
<body>

    <!-- Loader Start -->
    @include('web.layouts.loader')
    <!-- Loader End -->

    <!-- Header Start -->
    @include('web.layouts.header')
    <!-- Header End -->

    @yield('content')

    <!-- Footer Section Start -->
    @include('web.layouts.footer')
    <!-- Footer Section End -->

    <!-- Quick View Modal Box Start -->
    <div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                <img src="{{ asset('web/assets/images/product/category/1.jpg')}}" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">Galletas de mantequilla premium 600 g</h4>
                                <h4 class="price">S/. 36.99</h4>
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
                                            <h6>Bosque Negro</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Codigo Producto:</h5>
                                            <h6>W0690034</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Tipo de Prodcuto</h5>
                                            <h6>Pastel De Crema Blanca</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="select-size">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Box End -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Elija su lugar de entrega</h5>
                    <p class="mt-1 text-content">Introduce tu dirección y te concretaremos la oferta para tu zona.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Selecciona una ubicación</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Surco</h6>
                                    <span>Min: S/. 130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Miraflores</h6>
                                    <span>Min: S/. 150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>San Miguel</h6>
                                    <span>Min: S/. 110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Jesus Maria</h6>
                                    <span>Min: S/. 140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Lince</h6>
                                    <span>Min: S/. 160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>La Molina</h6>
                                    <span>Min: S/. 120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Ate</h6>
                                    <span>Min: S/. 170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Chorrillos</h6>
                                    <span>Min: S/. 120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Barranco</h6>
                                    <span>Min: S/. 110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Lima</h6>
                                    <span>Min: S/. 130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

    <!-- Cookie Bar Box Start -->
    <!--<div class="cookie-bar-box">
        <div class="cookie-box">
            <div class="cookie-image">
                <img src="../assets/images/cookie-bar.png" class="blur-up lazyload" alt="">
                <h2>Cookies!</h2>
            </div>

            <div class="cookie-contain">
                <h5 class="text-content">We use cookies to make your experience better</h5>
            </div>
        </div>

        <div class="button-group">
            <button class="btn privacy-button">Privacy Policy</button>
            <button class="btn ok-button">OK</button>
        </div>
    </div>-->
    <!-- Cookie Bar Box End -->

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Oferta de Hoy</h5>
                        <p class="mt-1 text-content">Ofertas recomendadas para ti.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Café instantáneo mezclado 50 g Compre 1 y obtenga 1 gratis</h5>
                                        <h6>S/. 52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Café instantáneo mezclado 50 g Compre 1 y obtenga 1 gratis</h5>
                                        <h6>S/. 52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Café instantáneo mezclado 50 g Compre 1 y obtenga 1 gratis</h5>
                                        <h6>S/. 52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Café instantáneo mezclado 50 g Compre 1 y obtenga 1 gratis</h5>
                                        <h6>S/. 52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Tap to top start -->
    <!--<div class="theme-option">
        <div class="setting-box">
            <button class="btn setting-button">
                <i class="fa-solid fa-gear"></i>
            </button>

            <div class="theme-setting-2">
                <div class="theme-box">
                    <ul>
                        <li>
                            <div class="setting-name">
                                <h4>Color</h4>
                            </div>
                            <div class="theme-setting-button color-picker">
                                <form class="form-control">
                                    <label for="colorPick" class="form-label mb-0">Theme Color</label>
                                    <input type="color" class="form-control form-control-color" id="colorPick"
                                        value="#0da487" title="Choose your color">
                                </form>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>Dark</h4>
                            </div>
                            <div class="theme-setting-button">
                                <button class="btn btn-2 outline" id="darkButton">Dark</button>
                                <button class="btn btn-2 unline" id="lightButton">Light</button>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>RTL</h4>
                            </div>
                            <div class="theme-setting-button rtl">
                                <button class="btn btn-2 rtl-unline">LTR</button>
                                <button class="btn btn-2 rtl-outline">RTL</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>-->
    <!-- Tap to top end -->

    <!--<div class="setting-box buy-now mt-2"><a class="btn setting-button" href="https://1.envato.market/gbvkjA" target="_blank"><i class="fa-solid fa fa-cart-flatbed"></i></a></div>-->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->


    <!-- latest jquery-->
    <script src="{{ asset('web/assets/js/jquery-3.6.0.min.js')}}"></script>

    <!-- jquery ui-->
    <script src="{{ asset('web/assets/js/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('web/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('web/assets/js/bootstrap/bootstrap-notify.min.js')}}"></script>
    <script src="{{ asset('web/assets/js/bootstrap/popper.min.js')}}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('web/assets/js/feather/feather.min.js')}}"></script>
    <script src="{{ asset('web/assets/js/feather/feather-icon.js')}}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('web/assets/js/lazysizes.min.js')}}"></script>

    <!-- Slick js-->
    <script src="{{ asset('web/assets/js/slick/slick.js')}}"></script>
    <script src="{{ asset('web/assets/js/slick/slick-animation.min.js')}}"></script>
    <script src="{{ asset('web/assets/js/slick/custom_slick.js')}}"></script>

    <!-- Auto Height Js -->
    <script src="{{ asset('web/assets/js/auto-height.js')}}"></script>

    <!-- Timer Js -->
    <script src="{{ asset('web/assets/js/timer1.js')}}"></script>

    <!-- Fly Cart Js -->
    <script src="{{ asset('web/assets/js/fly-cart.js')}}"></script>

    <!-- Quantity js -->
    <script src="{{ asset('web/assets/js/quantity-2.js')}}"></script>

    <!-- WOW js -->
    <script src="{{ asset('web/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('web/assets/js/custom-wow.js')}}"></script>

    <!-- script js -->
    <script src="{{ asset('web/assets/js/script.js')}}"></script>

    <!-- thme setting js -->
    <script src="{{ asset('web/assets/js/theme-setting.js')}}"></script>

    @yield('script')

    <script src="https://telegram.org/js/telegram-web-app.js"></script>
	<script src="{{asset('app.js')}}"></script>
</body>
</html>
