<!DOCTYPE html>
<html lang="en">

<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar">
    <div class="boxed-page">
        <!-- NAVBAR -->
        <?php include('vista/principal/navbar.php'); ?>
        <!-- Reservation Section -->
        <section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(vista/principal/img/reservation-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="section-content bg-white p-5 shadow">

                            <div class="heading-section text-center">
                                <h2>
                                    Registrarse
                                </h2>
                            </div>
                            <form method="post" name="contact-us" action="">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre - Obligatorio">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido - Obligatorio">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="number" class="form-control" id="dni" name="dni" placeholder="DNI - Obligatorio">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Teléfono - opcioAnal">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Domicilio - Para observarte">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo - Para llenarte de publicidad pelotud">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Contraseña - Pone la misma que la de xvideos">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="footer-section text-center">
                                <br>
                                <span>
                                    ¿Ya tienes una cuenta? <a href="./?iniciar_sesion">Inicia sesión</a>
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