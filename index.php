<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"], 1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
//descomentar esto al commitearlo XDDDDDDD
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
//descomentar esto al commitearlo XDDDDDDD
//conexion para probar una bd local
//$conn = mysqli_connect('localhost','root','','pruebas');
//conexion para probar una bd local
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IntoBar42</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="external/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="external/select2/select2.min.css">
    <link rel="stylesheet" href="external/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

    <!-- pruebas con la bd -->
</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
    <div id="side-nav" class="sidenav">
        <a href="javascript:void(0)" id="side-nav-close">&times;</a>

        <div class="sidenav-content">
            <p>
                Kuncen WB1, Wirobrajan 10010, DIY
            </p>
            <p>
                <span class="fs-16 primary-color">(+68) 120034509</span>
            </p>
            <p>info@yourdomain.com</p>
        </div>
    </div>
    <div id="side-search" class="sidenav">
        <a href="javascript:void(0)" id="side-search-close">&times;</a>
        <div class="sidenav-content">
            <form action="">

                <div class="input-group md-form form-sm form-2 pl-0">
                    <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="input-group-text red lighten-3" id="basic-text1">
                            <i class="fas fa-search text-grey" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </form>
        </div>


    </div>
    <div id="canvas-overlay"></div>
    <div class="boxed-page">
        <!-- NAVBAR -->
        <?php include('navbar.php'); ?>
        <div class="hero">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 hero-left">
                        <h1 class="display-4 mb-5">¡Bienvenidos a <br>Sentidos!</h1>
                        <div class="mb-2">
                            <a class="btn btn-primary btn-shadow btn-lg" href="#" role="button">Explorar Menú</a>
                            <a class="btn btn-icon btn-lg" href="https://player.vimeo.com/video/33110953"
                                data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true">
                                <span class="lnr lnr-film-play"></span>
                                Ver Video
                            </a>
                        </div>

                        <ul class="hero-info list-unstyled d-flex text-center mb-0">
                            <li class="border-right">
                                <span class="lnr lnr-rocket"></span>
                                <h5>
                                    Entrega Rápida
                                </h5>
                            </li>
                            <li class="border-right">
                                <span class="lnr lnr-leaf"></span>
                                <h5>
                                    Comida Fresca
                                </h5>
                            </li>
                            <li class="">
                                <span class="lnr lnr-bubble"></span>
                                <h5>
                                    Soporte 24/7
                                </h5>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6 hero-right">
                        <div class="owl-carousel owl-theme hero-carousel">
                            <div class="item">
                                <img class="img-fluid" src="img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.38.59 (2).jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.38.59.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.38.59.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Welcome Section -->
        <section id="gtco-welcome" class="bg-white section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2"
                            style="background-image: url(img/hero-2.jpg);">

                        </div>
                        <div class="col-sm-7 py-5 pl-md-0 pl-4">
                            <div class="heading-section pl-lg-5 ml-md-5">
                                <span class="subheading">
                                    Sobre nosotros
                                </span>
                                <h2>
                                    Sentidos
                                </h2>
                            </div>
                            <div class="pl-lg-5 ml-md-5">
                                <p> Buscamos atraer la atención de nuestros clientes 
                                    a través de experiencias inspiradas en la seducción de los sentidos 
                                    para que disfrute 
                                    de un momento de bienestar, en total armonía.</p>
                                <h3 class="mt-5">Nuestros servicios</h3>
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover" src="img\nuestras_fotos\photo-1523906630133-f6934a1ab2b9.jpg" />
                                            <h6>Té</h6>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover" src="img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.38.59 (1).jpeg" />
                                            <h6>Resto</h6>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover" src="img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.39.00.jpeg" />
                                            <h6>Catering</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Welcome Section -->
        <!-- Special Dishes Section -->
        <section id="gtco-special-dishes" class="bg-grey section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Especialidades
                        </span>
                        <h2>
                            El mejor sabor
                        </h2>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-5 col-md-6 align-self-center py-5">
                            <h2 class="special-number">01.</h2>
                            <div class="dishes-text">
                                <h3><span>Carnes</span><br>Bistec a la salsa</h3>
                                <p class="pt-3">Uno de los platos más elegidos por nuestros clientes.</p>
                                <h3 class="special-dishes-price">$1500.00</h3>
                                <a href="#" class="btn-primary mt-3">Pedilo ahora</a>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                            <img src="img/steak.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                            <img src="img/salmon-zucchini.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                            <h2 class="special-number">02.</h2>
                            <div class="dishes-text">
                                <h3><span>Salmon y</span><br> Zucchini</h3>
                                <p class="pt-3">Buen precio y sabor.</p>
                                <h3 class="special-dishes-price">$1200.00</h3>
                                <a href="#" class="btn-primary mt-3">Pedilo ahora <span><i
                                            class="fa fa-long-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Special Dishes Section -->
        <!-- Menu Section -->
        <section id="gtco-menu" class="section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="heading-section text-center">
                                <span class="subheading">
                                    Especialidades
                                </span>
                                <h2>
                                    Nuestro Menú
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 menu-wrap">
                            <div class="heading-menu">
                                <h3 class="text-center mb-5">Desayuno</h3>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img\nuestras_fotos\te-hierbas-tostadas-como-desayuno_525574-13329.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Té de hierbas con tostadas</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">$700</h4>
                                        </div>
                                    </div>
                                    <p>Pedir aparte: Manteca, Mermelada</p>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img\nuestras_fotos\download.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Té negro con limón</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">$400</h4>
                                        </div>
                                    </div>
                                    <p>Acompañamiento aparte.</p>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img\nuestras_fotos\te-verde.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Té verde</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">$300</h4>
                                        </div>
                                    </div>
                                    <p>Acompañamiento aparte.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 menu-wrap">
                            <div class="heading-menu">
                                <h3 class="text-center mb-5">Almuerzo</h3>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.38.59 (1).jpeg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Vino de la casa mas bistec a la plancha</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">$1600</h4>
                                        </div>
                                    </div>
                                    <p>Pedir punto de la carne.</p>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img\nuestras_fotos\hamburguesas-alto-angulo-papas-fritas-salsa-cerveza-espacio-copia_23-2148784437.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Hamburguesa y papas con cerveza</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">$1300</h4>
                                        </div>
                                    </div>
                                    <p>Carne de res, lechuga, tomate, papas fritas, cerveza a elección.</p>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img\salmon-zucchini.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Salmon con Zucchini</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">$1800</h4>
                                        </div>
                                    </div>
                                    <p>Salmón a la plancha con zuchinni</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 menu-wrap">
                            <div class="heading-menu">
                                <h3 class="text-center mb-5">Postres</h3>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.39.01 (1).jpeg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Porción de torta</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">$200 c/u</h4>
                                        </div>
                                    </div>
                                    <p>Frutilla, dulce de leche, chocolate.</p>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img\nuestras_fotos\polo-red-velvet-5-scaled.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Palito helado Red Velvet</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">$800</h4>
                                        </div>
                                    </div>
                                    <p>Relleno de Red Velvet cubierto de chocolate.</p>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img\queso-y-dulce.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Queso con dulce</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">$600</h4>
                                        </div>
                                    </div>
                                    <p>Dulce de membrillo o batata con queso.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of menu Section -->
        <!-- Testimonial Section-->
        <section id="gtco-testimonial" class="overlay bg-fixed section-padding"
            style="background-image: url(img/testi-bg.jpg);">
            <div class="container">
                <div class="section-content">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Testimonio
                        </span>
                        <h2>
                            Cliente Feliz
                        </h2>
                    </div>
                    <div class="row">
                        <!-- Testimonial -->
                        <div class="testi-content testi-carousel owl-carousel">
                            <div class="testi-item">
                                <i class="testi-icon fa fa-3x fa-quote-left"></i>
                                <p class="testi-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.</p>
                                <p class="testi-author">John Doe</p>
                                <p class="testi-desc">CEO of <span>GetTemplates</span></p>
                            </div>
                            <div class="testi-item">
                                <i class="testi-icon fa fa-3x fa-quote-left"></i>
                                <p class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                                    non doloribus ut, alias doloremque perspiciatis.</p>
                                <p class="testi-author">Mary Jane</p>
                                <p class="testi-desc">CTO of <span>Unidentity Inc</span></p>
                            </div>
                        </div>
                        <!-- End of Testimonial -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Testimonial Section-->
        <!-- Team Section -->
        <section id="gtco-team" class="bg-white section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Especialidades
                        </span>
                        <h2>
                            Nuestro Equipo
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-card mb-5">
                                <img class="img-fluid" src="img/chef-1.jpg" alt="">
                                <div class="team-desc">
                                    <h4 class="mb-0">Aaron Patel</h4>
                                    <p class="mb-1">CEO</p>
                                    <ul class="list-inline mb-0 team-social-links">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-card mb-5">
                                <img class="img-fluid" src="img/chef-2.jpg" alt="">
                                <div class="team-desc">
                                    <h4 class="mb-0">Daniel Tebas</h4>
                                    <p class="mb-1">Chef</p>
                                    <ul class="list-inline mb-0 team-social-links">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-card mb-5">
                                <img class="img-fluid" src="img/chef-3.jpg" alt="">
                                <div class="team-desc">
                                    <h4 class="mb-0">Jon Snow</h4>
                                    <p class="mb-1">Chef</p>
                                    <ul class="list-inline mb-0 team-social-links">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Team Section -->
        <!-- Reservation Section -->
        <!-- <section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(img/reservation-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-content bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Reservación
                        </span>
                        <h2>
                            Reservar ahora
                        </h2>
                    </div>
                    <form method="post" name="contact-us" action="">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Correo">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Teléfono">
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" placeholder="Fecha" />
                                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                        <div class="input-group-text">
                                            <span class="lnr lnr-calendar-full"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" placeholder="Hora" />
                                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                        <div class="input-group-text">
                                            <span class="lnr lnr-clock"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <select class="form-control" id="selectPerson">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                 
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Tu Mensaje ..."></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section> -->
        <!-- End of Reservation Section -->
</body>
<footer class="mastfoot pb-5 bg-white section-padding pb-0">
    <div class="inner container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-widget pr-lg-5 pr-0">
                    <img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis
                        explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et
                        voluptatum dolorem.</p>
                    <nav class="nav nav-mastfoot justify-content-start">
                        <a class="nav-link" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </nav>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="footer-widget px-lg-5 px-0">
                    <h4>Horas Abierto</h4>
                    <ul class="list-unstyled open-hours">
                        <li class="d-flex justify-content-between"><span>Lunes</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex justify-content-between"><span>Martes</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex justify-content-between"><span>Miércoles</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex justify-content-between"><span>Jueves</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex justify-content-between"><span>Viernes</span><span>9:00 - 02:00</span></li>
                        <li class="d-flex justify-content-between"><span>Sábado</span><span>9:00 - 02:00</span></li>
                        <li class="d-flex justify-content-between"><span>Domingo</span><span> Cerrado</span></li>
                    </ul>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="footer-widget pl-lg-5 pl-0">
                    <h4>Boletín Informativo</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <form id="newsletter">
                        <div class="form-group">
                            <input type="email" class="form-control" id="emailNewsletter"
                                aria-describedby="emailNewsletter" placeholder="Ingresar correo">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </form>
                </div>

            </div>
            <div class="col-md-12 d-flex align-items-center">
                <p class="mx-auto text-center mb-0">Copyright 2019. All Right Reserved. Design by <a
                        href="https://gettemplates.co" target="_blank">GetTemplates</a></p>
            </div>

        </div>
    </div>
    <!-- External JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="external/bootstrap/popper.min.js"></script>
    <script src="external/bootstrap/bootstrap.min.js"></script>
    <script src="external/select2/select2.min.js "></script>
    <script src="external/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
    <script src="external/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js">
    </script>

    <!-- Main JS -->
    <script src="js/app.min.js "></script>
</footer>

</html>