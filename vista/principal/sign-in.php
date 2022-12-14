<!DOCTYPE html>
<html lang="en">

<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar">
    <div class="boxed-page">
        <!-- NAVBAR -->
        <?php include('vista/principal/navbar.php'); ?>
        <!-- Reservation Section -->
        <section id="gtco-reservation" class="bg-white section-padding overlay" style="background-image: url(https://lh3.googleusercontent.com/p/AF1QipMn8rwtdzVmulMMEEuQaO9oMFY4wgZg_dC8bDP-=w960-h960-n-o-v1);margin:0%">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="section-content p-4 shadow" style="position:absolute;margin-top:-120px;background:#FAEFE5;border-radius:50px;">

                            <div class="heading-section text-center">
                                <h2>
                                    Registrarse
                                </h2>
                                <h5>(*) = Obligatorio</h5>
                            </div>
                            <form method="post" name="contact-us" action="">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(*)">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido(*)">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="tel" class="form-control" id="dni" name="dni" placeholder="DNI(*)">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Tel??fono">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Domicilio">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo(*)">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Contrase??a(*)">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="footer-section text-center">
                                <br>
                                <span>
                                    ??Ya tienes una cuenta? <a href="./?iniciar_sesion">Inicia sesi??n</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>

            </div>
        </section>
        <!-- End of Reservation Section -->
        <?php include('vista/principal/talon.php'); ?>
    </div>
</body>
<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>

</html>