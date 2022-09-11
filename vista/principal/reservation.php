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
                        <div class="section-content bg-white p-5 shadow" style="margin-top: 150px;">

                            <form action="" style="display: flex; justify-content: center; align-items: center; flex-flow: column;">
                                <Label>Mesas</Label>
                                <div id="diagrama">
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
<script src="vista/principal/js/agregarReservacion.js "></script>

</html>