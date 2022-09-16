<!DOCTYPE html>
<html lang="en">

<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar">
    <div class="boxed-page">
        <!-- NAVBAR -->
        <?php include('vista/principal/navbar.php'); ?>
        <!-- Reservation Section -->
        <section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(https://4.bp.blogspot.com/-ukcMZ2m0IcE/U5l_9gvz_aI/AAAAAAAEzmg/9h2X-sPAAIw/s1600/cordero-a-la-estaca-casero.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="section-content bg-white p-3 shadow">

                            <form method="post" action=".\" style="display: flex; justify-content: center; align-items: center; flex-flow: column;">
                                <Label>Mesas</Label>
                                <div id="diagrama">
                                    <img src="vista/principal/img/sillas/chespirito.jpg" alt="" style="max-width: 100%; max-height:100%;">
                                </div>
                                <div style="height: 30px;"></div>
                                <Label>Fecha</Label>
                                <input type="date" name="fecha" id="fecha" style="width: 100%;" required>
                                <Label>Hora</Label>
                                <select name="hora" id="hora" style="width: 100%;" required>
                                    <option value="08:00:00">Horario 1</option>
                                    <option value="10:00:00">Horario 2</option>
                                    <option value="12:00:00">Horario 3</option>
                                    <option value="14:00:00">Horario 4</option>
                                    <option value="16:00:00">Horario 5</option>
                                    <option value="18:00:00">Horario 6</option>
                                    <option value="20:00:00">Horario 7</option>
                                    <option value="22:00:00">Horario 8</option>
                                </select>
                                <Label>Tipo de Mesa</Label>
                                <select name="mesa" id="mesa" style="width: 100%;" required>
                                    <option value="1">2 personas</option>
                                    <option value="2">4 personas</option>
                                    <option value="3">6 personas</option>
                                    <option value="4">8 personas</option>
                                </select>
                                <div style="height: 30px;"></div>
                                <button onclick="reservar();" type="submit">Reservar</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>

            </div>
        </section>
        <!-- End of Reservation Section -->
        <?php include('vista/principal/talon.php'); ?>
        <script>
            var fecha,hora,mesa;
            fecha=document.getElementById("fecha").value;
            hora=document.getElementById("hora").value;
            mesa=document.getElementById("mesa").value;
            var xhr;
            function reservar(){
                //alert(fecha)
                var datitos = new FormData();
                datitos.append("fecha",(fecha.getFullYear()+"-"+fecha.getMonth()+"-"+fecha.getDate()));
                datitos.append("hora",hora);
                datitos.append("mesa",mesa);
                event.preventDefault();
                alert(JSON.stringify(datitos));
                xhr= new XMLHttpRequest();
                xhr.open("POST","./");
                xhr.send(datitos);
            }
        </script>
    </div>

</body>
<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>
<script src="vista/principal/js/agregarReservacion.js "></script>

</html>