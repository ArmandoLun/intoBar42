<!DOCTYPE html>
<html lang="en">
<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
    <div class="boxed-page">
        <!-- NAVBAR -->
        <?php include('vista/principal/navbar.php'); ?>
        <div class="hero" style=" background: rgb(215,177,109);
background: linear-gradient(118deg, rgba(215,177,109,0.577468487394958) 3%, rgba(0,0,0,0) 49%, rgba(213,89,217,0.48503151260504207) 90%); border-style:ridge; border-color:#deaeae;">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 hero-left">
                        <h1 class="display-4 mb-5">¡Bienvenidos a <br>Sentidos!</h1>
                        <div class="mb-2">
                            <a class="btn btn-primary btn-shadow btn-lg" href="./?menu" role="button">Explorar Menú</a>
                        </div>
                        <div class="mb-4" style="margin-top: 10%;">
                            <a class="btn btn-secondary btn-outline-info btn-shadow btn-lg" href="https://www.argentina.gob.ar/sites/default/files/protocolo_covid_gastronomicos.pdf" style ="border-style:dotted; border-width:3px; border-radius:20%; !important"role="button">Protocolo Covid-19</a>
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
                    <div class="col-lg-6">
                        <div class="owl-carousel owl-theme hero-carousel" style="">
                            <div class="item">
                                <img class="img-fluid" style="border-style:solid;border-radius:100%;" src="vista/principal/img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.38.59 (2).jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" style="border-style:solid;border-radius:100%;position:absolute;" src="vista/principal/img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.38.59.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" style="border-style:solid;border-radius:100%;position:absolute;" src="vista\principal\img\nuestras_fotos\WhatsApp Image 2022-08-09 at 21.39.00.jpeg" alt="">
                            </div>
                           
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
        
        <!-- End of Reservation Section -->
        <?php include('vista/principal/talon.php'); ?>
    </div>
</body>

<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>

</html>
