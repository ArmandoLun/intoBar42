<!DOCTYPE html>
<html lang="en">
<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar">
    <div class="boxed-page">
        <!-- NAVBAR -->
        <?php include('vista/principal/navbar.php'); ?>
        <!-- Welcome Section -->
        <section id="gtco-welcome" class="bg-white section-padding"
            style=" background: rgb(215,177,109);
background: linear-gradient(118deg, rgba(215,177,109,0.577468487394958) 3%, rgba(0,0,0,0) 49%, rgba(213,89,217,0.48503151260504207) 90%);">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2"
                            style="background-image: url(https://static.cdn.cadena3.com/admin/playerswf/fotos/ARCHI_842637.jpg); border-style:ridge;">

                        </div>
                        <div class="col-sm-7 py-5 pl-md-0 pl-4">
                            <div class="heading-section pl-lg-5 ml-md-5">
                                <span class="subheading">
                                    Sobre Nosotros
                                </span>
                                <img src="vista\principal\img\3aea37c9-2e5b-497f-9b7b-72d23bfcb2fa.png" style="width:80%;"alt="">

                            </div>
                            <br><br>

                            <div class="pl-lg-5 ml-md-5" style="font-size:larger; font-weight: 400;">
                                <p>Buscamos atraer la atención de nuestros clientes
                                    a través de experiencias inspiradas en la seducción de los sentidos
                                    para que disfrute
                                    de un momento de bienestar, en total armonía.</p>
                                <br><br>
                                <h3 class="mt-5">Nuestros servicios</h3>
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover"
                                                src="vista/principal/img\nuestras_fotos\photo-1523906630133-f6934a1ab2b9.jpg" />
                                            <h5>Té</h5>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover"
                                                src="vista/principal/img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.38.59 (1).jpeg" />
                                            <h5>Resto</h5>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover"
                                                src="vista/principal/img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.39.00.jpeg" />
                                            <h5>Catering</h5>
                                        </a>
                                        <br><br>
                                        <br><br>
                                    </div>

                                    <h2 style="text-align:center;">Para saber más sobre nosotros</h2>
                                    <h5 style="text-align:center;">Visite nuestra página empresarial!</h5>

                                </div>
                                <a class="MiBoton" href="https://lucafbergamaschi.wixsite.com/empresa-innobar42"
                                    type="button" name="visitar">Click aquí</a>
                                <a class="MiBoton" href="./?contacos" type="button" name="visitar">Opiniones</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <style>
            .MiBoton {
                color: #ffffff;
                background-color: #e0bdbd;
                font-size: 25px;
                border: 5px solid #e4c795;
                border-radius: 40px;
                padding: 15px 50px;
                cursor: pointer
            }

            .MiBoton:hover {
                color: #3f2c2c;
                background-color: #ecadf0;

            }
            </style>
        </div>
        <!-- End of Welcome Section -->
        <?php include('vista/principal/talon.php'); ?>
    </div>
</body>
<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>

</html>