<footer class="section-t-space">
    <div class="container-fluid-lg">
        <div class="service-section">
            <div class="row g-3">
                <div class="col-12">
                    <div class="service-contain">
                        <div class="service-box">
                            <div class="service-image">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/product.svg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Todos los Productos Frescos</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/delivery.svg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Entrega Gratuita Para Pedidos<br>Superiores a S/. 50</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/discount.svg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Mega Descuentos Diarios</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/market.svg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>El Mejor Precio del Mercado</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-footer section-b-space section-t-space">
            <div class="row g-md-4 g-3">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-logo">
                        <div class="theme-logo">
                            <a href="index-2.html">
                                <img src="{{ asset('logo.svg')}}" class="blur-up lazyload" alt="">
                            </a>
                        </div>

                        <div class="footer-logo-contain">
                            <p>Somos @tiendo, tu lugar favorito para adquirir todo lo que necesitas.</p>

                            <ul class="address">
                                <li>
                                    <i data-feather="home"></i>
                                    <a href="javascript:void(0)">Lima -Perú</a>
                                </li>
                                <li>
                                    <i data-feather="mail"></i>
                                    <a href="javascript:void(0)">soporte@atiendo.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Categorias</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            @foreach ($categorias as $categoria)
                                <li>
                                    <a href="{{route('productos.categoria', ['id' => $categoria['categoria_dsc'], 'paginaActual' => 0])}}" class="text-content">{{$categoria['categoria_dsc']}}</a>
                                </li>
                                @if ($loop->index === 4)
                                    @break
                                @endif
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="col-xl col-lg-2 col-sm-3">
                    <div class="footer-title">
                        <h4>Links</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="{{route('/')}}" class="text-content">Inicio</a>
                            </li>
                            <li>
                                <a href="{{route('quienes-somos')}}" class="text-content">¿Quiénes Somos?</a>
                            </li>
                            <li>
                                <a href="{{route('preguntas-frecuentes')}}" class="text-content">Preguntas Frecuentes</a>
                            </li>
                            <li>
                                <a href="{{route('contactanos')}}" class="text-content">Contáctanos</a>
                            </li>
                            <!--<li>
                                <a href="contact-us.html" class="text-content">Contactanos</a>
                            </li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-3">
                    <div class="footer-title">
                        <h4>Centro de Ayuda</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="order-success.html" class="text-content">Su pedido</a>
                            </li>
                            <li>
                                <a href="user-dashboard.html" class="text-content">Su cuenta</a>
                            </li>
                            <li>
                                <a href="order-tracking.html" class="text-content">Orden</a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="text-content">Tu lista</a>
                            </li>
                            <li>
                                <a href="search.html" class="text-content">Buscar</a>
                            </li>
                            <li>
                                <a href="faq.html" class="text-content">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Contacta con Nosotros</h4>
                    </div>

                    <div class="footer-contact">
                        <ul>
                            <li>
                                <div class="footer-number">
                                    <i data-feather="phone"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">Linea directa 24/7 :</h6>
                                        <h5>+51 954 854 615</h5>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="footer-number">
                                    <i data-feather="mail"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">Correo Electronico :</h6>
                                        <h5>pedidos@atiendo.com</h5>
                                    </div>
                                </div>
                            </li>

                            <li class="social-app mb-0">
                                <h5 class="mb-2 text-content">Descarga el App :</h5>
                                <ul>
                                    <li class="mb-0">
                                        <a href="https://play.google.com/store/apps" target="_blank">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/playstore.svg" class="blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="mb-0">
                                        <a href="https://www.apple.com/in/app-store/" target="_blank">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/appstore.svg" class="blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-footer section-small-space">
            <div class="reserve">
                <h6 class="text-content">©2023 copyright Valor X</h6>
            </div>

            <div class="payment">
                <img src="{{ asset('web/assets/images/payment/1.png')}}" class="blur-up lazyload" alt="">
            </div>

            <div class="social-link">
                <h6 class="text-content">Mantente conectado :</h6>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://in.pinterest.com/" target="_blank">
                            <i class="fa-brands fa-pinterest-p"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
