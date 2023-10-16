@extends('web.layouts.layout')

@section('content')
<!-- Fresh Vegetable Section Start -->
<section class="fresh-vegetable-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="row gx-xl-5 gy-xl-0 g-3 ratio_148_1">
            <div class="col-xl-6 col-12">
                <div class="row g-sm-4 g-2">
                    <div class="col-6">
                        <div class="fresh-image-2">
                            <div>
                                <img src="{{ asset('web/assets/images/inner-page/about-us/1.jpg')}}"
                                    class="bg-img blur-up lazyload" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="fresh-image">
                            <div>
                                <img src="{{ asset('web/assets/images/inner-page/about-us/2.jpg')}}"
                                    class="bg-img blur-up lazyload" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-12">
                <div class="fresh-contain p-center-left">
                    <div>
                        <div class="review-title">
                            <h4>Acerca de Nosotros</h4>
                            <h2>"Atiendo: Tu Compañero de Compras en Línea".</h2>
                        </div>

                        <div class="delivery-list">
                            <p class="text-content">En "Atiendo", estamos dedicados a brindarte una experiencia de compra en línea única y excepcional. 
                                Fundada por un equipo apasionado de entusiastas del comercio electrónico, 
                                nuestra misión es conectar a las personas con productos de calidad y servicios excepcionales, 
                                todo desde la comodidad de tu hogar.</p>

                            <ul class="delivery-box">
                                <li>
                                    <div class="delivery-box">
                                        <div class="delivery-icon">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/delivery.svg" class="blur-up lazyload" alt="">
                                        </div>

                                        <div class="delivery-detail">
                                            <h5 class="text">Entrega gratuita para todos los pedidos.</h5>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="delivery-box">
                                        <div class="delivery-icon">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/leaf.svg" class="blur-up lazyload" alt="">
                                        </div>

                                        <div class="delivery-detail">
                                            <h5 class="text">Solo alimentos frescos</h5>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="delivery-box">
                                        <div class="delivery-icon">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/delivery.svg" class="blur-up lazyload" alt="">
                                        </div>

                                        <div class="delivery-detail">
                                            <h5 class="text">Entrega gratuita para todos los pedidos.</h5>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="delivery-box">
                                        <div class="delivery-icon">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/leaf.svg" class="blur-up lazyload" alt="">
                                        </div>

                                        <div class="delivery-detail">
                                            <h5 class="text">Solo alimentos frescos</h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fresh Vegetable Section End -->

<!-- Client Section Start -->
<section class="client-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="about-us-title text-center">
                    <h4>¿Que hacemos?</h4>
                    <h2 class="center">Los clientes confían en nosotros</h2>
                </div>

                <div class="slider-3_1 product-wrapper">
                    <div>
                        <div class="clint-contain">
                            <div class="client-icon">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/work.svg" class="blur-up lazyload" alt="">
                            </div>
                            <h2>10</h2>
                            <h4>Años en el Mercado</h4>
                            <p>En "Atiendo", estamos emocionados y agradecidos por celebrar una década de excelencia en el 
                                mundo del comercio electrónico. Desde nuestros humildes comienzos hasta convertirnos 
                                en una marca líder en el mercado, esta travesía ha sido emocionante y gratificante..</p>
                        </div>
                    </div>

                    <div>
                        <div class="clint-contain">
                            <div class="client-icon">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/buy.svg" class="blur-up lazyload" alt="">
                            </div>
                            <h2>80 K+</h2>
                            <h4>Productos Vendidos</h4>
                            <p>Cada uno de estos 80,000 productos representa un cliente satisfecho, una necesidad cubierta y una 
                                experiencia de compra exitosa. 
                                Detrás de cada venta, hay historias y momentos únicos, y estamos agradecidos por formar parte de ellos..</p>
                        </div>
                    </div>

                    <div>
                        <div class="clint-contain">
                            <div class="client-icon">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/user.svg" class="blur-up lazyload" alt="">
                            </div>
                            <h2>90%</h2>
                            <h4>Cliente Satisfechos</h4>
                            <p>Nada nos llena de orgullo y gratitud más que saber que nuestros productos han marcado la diferencia en tu vida. 
                                Tus historias de satisfacción y éxito nos inspiran a seguir mejorando y creciendo. 
                                Cada producto que vendemos es una oportunidad para hacer tu vida más fácil,
                                más divertida o más hermosa, y estamos encantados de ser parte de esos momentos especiales..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Section End -->

<!-- Team Section Start -->
<section class="team-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="about-us-title text-center">
            <h4 class="text-content">Nuestro Equipo Creativo</h4>
            <h2 class="center">Miebros del Equipo Atiendo</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-user product-wrapper">
                    <div>
                        <div class="team-box">
                            <div class="team-iamge">
                                <img src="{{ asset('web/assets/images/inner-page/user/1.jpg')}}" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>cheeseburger airedale mozzarella the big cheese fondue.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-box">
                            <div class="team-iamge">
                                <img src="{{ asset('web/assets/images/inner-page/user/2.jpg')}}" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>cheese on toast mozzarella bavarian bergkase smelly cheese cheesy feet.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-box">
                            <div class="team-iamge">
                                <img src="{{ asset('web/assets/images/inner-page/user/3.jpg')}}" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>camembert de normandie. Bocconcini rubber cheese fromage frais port-salut.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-box">
                            <div class="team-iamge">
                                <img src="{{ asset('web/assets/images/inner-page/user/4.jpg')}}" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>Fondue stinking bishop goat. Macaroni cheese croque monsieur cottage cheese.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-box">
                            <div class="team-iamge">
                                <img src="{{ asset('web/assets/images/inner-page/user/1.jpg')}}" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>squirty cheese cheddar macaroni cheese airedale cheese triangles.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Review Section Start -->
<section class="review-section section-lg-space">
    <div class="container-fluid">
        <div class="about-us-title text-center">
            <h4 class="text-content">Ultimos Testimonios</h4>
            <h2 class="center">Los que dicen nuestros Clientes</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-4-half product-wrapper">
                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
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
                            </div>

                            <h3>Alta calidad</h3>

                            <p>En el competitivo mundo del comercio electrónico, nos enorgullece afirmar con confianza que "Atiendo" 
                                es la mejor plataforma para tus compras en línea. Durante más de una década, 
                                hemos trabajado incansablemente para perfeccionar cada aspecto de tu experiencia 
                                de compra y, en el proceso, hemos establecido un estándar de excelencia que nos diferencia de los demás.</p>

                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{ asset('web/assets/images/inner-page/user/1.jpg')}}" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Betty J. Turner</h4>
                                    <h6>CTO, Company</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
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
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"My busy schedule leaves little, if any, time for blogging and social media. The
                                Lorem Ipsum Company has been a huge part of helping me grow my business through
                                organic search and content marketing."</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{ asset('web/assets/images/inner-page/user/2.jpg')}}" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Alfredo S. Rocha</h4>
                                    <h6>Project Manager</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
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
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"Professional, responsive, and able to keep up with ever-changing demand and tight
                                deadlines: That's how I would describe Jeramy and his team at The Lorem Ipsum
                                Company. When it comes to content marketing."</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{ asset('web/assets/images/inner-page/user/3.jpg')}}" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Donald C. Spurr</h4>
                                    <h6>Sale Agents</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
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
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"After being forced to move twice within five years, our customers had a hard time
                                finding us and our sales plummeted. The Lorem Ipsum Co. not only revitalized our
                                brand."</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{ asset('web/assets/images/inner-page/user/4.jpg')}}" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Terry G. Fain</h4>
                                    <h6>Photographer</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
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
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"I was skeptical of SEO and content marketing at first, but the Lorem Ipsum Company
                                not only proved itself financially speaking, but the response I have received from
                                customers is incredible."</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{ asset('web/assets/images/inner-page/user/1.jpg')}}" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Gwen J. Geiger</h4>
                                    <h6>Designer</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
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
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"Jeramy and his team at the Lorem Ipsum Company whipped my website into shape just in
                                time for tax season. I was excited by the results and am proud to direct clients to
                                my website once again."</p>

                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{ asset('web/assets/images/inner-page/user/2.jpg')}}" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Constance K. Whang</h4>
                                    <h6>CEO, Company</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
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
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"Yeah, and if you were the pope they'd be all, "Straighten your pope hat." And "Put
                                on your good vestments." What are their names? Yep, I remember. They came in last at
                                the Olympics!"</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{ asset('web/assets/images/inner-page/user/3.jpg')}}" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Christopher R. Lee</h4>
                                    <h6>Managing Director</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
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
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"Good man. Nixon's pro-war and pro-family. Hey, tell me something. You've got all
                                this money. How come you always dress like you're doing your laundry? So, how 'bout
                                them Knicks? What kind of a father would I be if I said no?."</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{ asset('web/assets/images/inner-page/user/4.jpg')}}" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Eileen R. Chu</h4>
                                    <h6>Marketing Director</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Review Section End -->

<!-- Blog Section Start -->
<section class="section-lg-space">
    <div class="container-fluid-lg">
        <div class="about-us-title text-center">
            <h4 class="text-content">Blog</h4>
            <h2 class="center">Nuestro ultimo blog</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-5 ratio_87">
                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <div class="blog-image">
                                    <a href="blog-detail.html" class="rounded-3">
                                        <img src="{{ asset('web/assets/images/veg-2/blog/1.jpg')}}" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>
                            </div>

                            <a href="blog-detail.html" class="blog-detail d-block">
                                <h6>Crema Organica</h6>
                                <h5>Crema Organica</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <div class="blog-image">
                                    <a href="blog-detail.html" class="rounded-3">
                                        <img src="{{ asset('web/assets/images/veg-2/blog/2.jpg')}}" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>
                            </div>

                            <a href="blog-detail.html" class="blog-detail d-block">
                                <h6>Carne</h6>
                                <h5>Carne - 20% OFF</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <div class="blog-image">
                                    <a href="blog-detail.html" class="rounded-3">
                                        <img src="{{ asset('web/assets/images/veg-2/blog/3.jpg')}}" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>
                            </div>

                            <a href="blog-detail.html" class="blog-detail d-block">
                                <h6>Cerveza</h6>
                                <h5>Cerveza - 20% OFF</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <div class="blog-image">
                                    <a href="blog-detail.html" class="rounded-3">
                                        <img src="{{ asset('web/assets/images/veg-2/blog/4.jpg')}}" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>
                            </div>

                            <a href="blog-detail.html" class="blog-detail d-block">
                                <h6>Gaseosa</h6>
                                <h5>Gaseosa -30% OFF</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-image">
                                <a href="blog-detail.html" class="rounded-3">
                                    <img src="{{ asset('web/assets/images/veg-2/blog/5.jpg')}}" class="bg-img blur-up lazyload"
                                        alt="">
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail d-block">
                                <h6>Milk Brand</h6>
                                <h5>Fresh Milk</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection
