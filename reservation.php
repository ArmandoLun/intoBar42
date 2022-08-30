<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resto - Restaurant Bootstrap 4 Template by GetTemplates.co</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

</head>

<body data-spy="scroll" data-target="#navbar">
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
        <!-- Reservation Section -->
        <section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay"
            style="background-image: url(img/reservation-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="section-content bg-white p-5 shadow" style="margin-top: 150px;">

                            <form action=""
                                style="display: flex; justify-content: center; align-items: center; flex-flow: column;">
                                <Label>Mesas</Label>
                                <div id="diagrama">
                                    <style>
                                        #diagrama {
                                            width: 100%;
                                            padding: 5%;
                                            background-color: red;
                                        }

                                        #diagrama .a {
                                            margin: 5% 0%;
                                        }

                                        #diagrama .a .b {
                                            width: 33.33%;
                                            margin: 0% 5%;
                                            background-color: black;
                                        }
                                    </style>
                                    <div class="a" style="display: flex;">
                                        <div class="b"></div>
                                        <div class="b"></div>
                                        <div class="b"></div>
                                    </div>
                                    <div class="a" style="display: flex;">
                                        <div class="b"></div>
                                        <div class="b"></div>
                                        <div class="b"></div>
                                    </div>
                                    <div class="a" style="display: flex;">
                                        <div class="b"></div>
                                        <div class="b"></div>
                                        <div class="b"></div>
                                    </div>
                                </div>
                                <div style="height: 30px;"></div>
                                <Label>Fecha</Label>
                                <input type="date" name="fecha" id="fecha" style="width: 100%;">
                                <Label>Hora</Label>
                                <select name="hora" id="hora" style="width: 100%;">
                                    <option value="">Horario 1</option>
                                    <option value="">Horario 2</option>
                                    <option value="">Horario 3</option>
                                    <option value="">Horario 4</option>
                                </select>
                                <div style="height: 30px;"></div>
                                <input type="submit" value="Reservar">
                            </form>
                            <script>
                                var fecha = new Date();
                                document.getElementById("fecha").min = fecha.toISOString().split("T")[0];
                                fecha.setDate(fecha.getDate() + 30);
                                document.getElementById("fecha").max = fecha.toISOString().split("T")[0];

                                const ajustarCuadritos = () => {
                                    var cuadritos = document.getElementById("diagrama").getElementsByClassName("b");

                                    for (var x = 0; x < cuadritos.length; x++) {
                                        cuadritos[x].style.height = cuadritos[x].clientWidth + "px";
                                    }
                                }
                                ajustarCuadritos();
                                window.onresize = ajustarCuadritos;
                            </script>

                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>

            </div>
        </section>
        <!-- End of Reservation Section -->
        <footer class="mastfoot pb-5 bg-white section-padding pb-0">
            <div class="inner container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-widget pr-lg-5 pr-0">
                            <img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit
                                omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt
                                modi? Magni, et voluptatum dolorem.</p>
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
                                <li class="d-flex justify-content-between"><span>Lunes</span><span>9:00 - 24:00</span>
                                </li>
                                <li class="d-flex justify-content-between"><span>Martes</span><span>9:00 - 24:00</span>
                                </li>
                                <li class="d-flex justify-content-between"><span>Miércoles</span><span>9:00 -
                                        24:00</span></li>
                                <li class="d-flex justify-content-between"><span>Jueves</span><span>9:00 - 24:00</span>
                                </li>
                                <li class="d-flex justify-content-between"><span>Viernes</span><span>9:00 - 02:00</span>
                                </li>
                                <li class="d-flex justify-content-between"><span>Sábado</span><span>9:00 - 02:00</span>
                                </li>
                                <li class="d-flex justify-content-between"><span>Domingo</span><span> Cerrado</span>
                                </li>
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
        </footer>
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
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Main JS -->
    <script src="js/app.min.js "></script>
</body>

</html>