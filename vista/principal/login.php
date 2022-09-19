<!DOCTYPE html>
<html lang="en">

<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar">
    <div id="canvas-overlay"></div>
    <div class="boxed-page" style=" background: rgb(215,177,109);
background: linear-gradient(118deg, rgba(215,177,109,0.577468487394958) 3%, rgba(0,0,0,0) 49%, rgba(213,89,217,0.48503151260504207) 90%); border-style:ridge; border-color:#deaeae;">
        <!-- NAVBAR -->
        <?php include('vista/principal/navbar.php'); ?>
        <!-- Reservation Section -->
        <section id="gtco-reservation" class=" bg-white section-padding overlay" style="background-image: url(https://lh3.googleusercontent.com/p/AF1QipN3yUhAAcn-rYxGW8O168XbaDYlkifBP6wDvkj2=w1080-h608-p-no-v0); margin:0%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="section-content p-5 shadow" style="background-color:#FAEFE5;border-radius:30px;border-style:double;">

                            <div class="heading-section text-center">
                                <h2>
                                    Iniciar Sesión
                                </h2>
                            </div>
                            <form method="post" name="contact-us" action="">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Contraseña" required>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="footer-section text-center">
                                <br>
                                <span>
                                    ¿No tienes cuenta? <a href="./?registrarse">Regístrate</a>
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
</body>
<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>

</html>