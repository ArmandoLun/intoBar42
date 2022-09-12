<!DOCTYPE html>
<html lang="en">
<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar">
    <div class="boxed-page">
        <!-- NAVBAR -->
        <?php include('vista/principal/navbar.php'); ?>
        <!-- Welcome Section -->
        <section id="gtco-welcome" class="bg-white section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2" style="background-image: url(vista\principal\img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.39.00.jpeg);">

                        </div>
                        <div class="col-sm-7 py-5 pl-md-0 pl-4">
                            <div class="heading-section pl-lg-5 ml-md-5">
                                <span class="subheading">
                                    Acerca de
                                </span>
                                <h2>
                                    Sentidos
                                </h2>
                            </div>
                            <div class="pl-lg-5 ml-md-5">
                                <p>Buscamos atraer la atención de nuestros clientes
                                    a través de experiencias inspiradas en la seducción de los sentidos
                                    para que disfrute
                                    de un momento de bienestar, en total armonía.</p>
                                <h3 class="mt-5">Recetas Especiales</h3>
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover" src="vista/principal/img\nuestras_fotos\photo-1523906630133-f6934a1ab2b9.jpg" />
                                            <h6>Té</h6>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover" src="vista/principal/img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.38.59 (1).jpeg" />
                                            <h6>Resto</h6>
                                        </a>
                                    </div>
                                    <!-- <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover" src="vista/principal/img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.39.00.jpeg" />
                                            <h6>Catering</h6>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Welcome Section -->
        <?php include('vista/principal/talon.php'); ?>
    </div>
</body>
<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>

</html>