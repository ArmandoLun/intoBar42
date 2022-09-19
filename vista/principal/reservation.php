<!DOCTYPE html>
<html lang="en">

<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar">
    <div class="">
        <!-- NAVBAR -->
        <?php include('vista/principal/navbar.php'); ?>
        <!-- Reservation Section -->
        <section id="gtco-reservation" class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="p-3 mb-2 bg-light text-dark">

                            <form action="./" method="post"
                                style="display: flex; justify-content: center; align-items: center; flex-flow: column; border-style:groove; border-radius:30px;">
                                <h1>Mesas</h1>
                                <div id="diagrama">
                                    <img src="vista/principal/img/sillas/chespirito.jpg" alt=""
                                        style="max-width: 100%; max-height:100%;">
                                </div>
                                <div style="height: 30px;"></div>
                                <h4>Fecha</h4>
                                <input onchange="seleccionarDia();" type="date" name="fecha" id="fecha"
                                    style="width: 100%;" required>
                                <h4>Tipo de Mesa</h4>
                                <select onclick="seleccionarMesa();" onchange="seleccionarMesa();" name="mesa" id="mesa"
                                    style="width: 100%;">
                                    <!--innerHtml("mesa")-->
                                </select>
                                <h4>Hora</h4>
                                <select name="hora" id="hora" style="width: 100%;" required>
                                    <!--innerHtml("hora")-->
                                </select>
                                <div style="height: 30px;"></div>
                                <button onclick="reservar();" type="submit"
                                    style="border-style:solid;">Reservar</button>
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
        var horarios = [];
        var xrev = [];

        const mesa = <?php echo(json_encode($_mesa));?>;
        const datosBD = <?php echo(json_encode($_reserva)); ?>;

        function seleccionarDia() {
            var seleccionMesa = document.querySelector("#mesa");

            var fecha = document.getElementById("fecha").value;
            var seleccionHora = document.querySelector("#hora");
            seleccionHora.value = "";
            xrev = [];
            datosBD.forEach(datos => {
                if (datos["reservada_para"].includes(fecha)) {
                    xrev.push(datos);
                }
            })
            var html = "";
            var contMesas = 0;
            mesa.forEach(me => { //MESAS
                horarios = [" 08", " 10", " 12", " 14", " 16", " 18", " 20", " 22"];
                horarios.forEach(horario => { //HORARIOS POSIBLES
                    xrev.forEach(dia => { //HORARIOS EN LOS QUE ESTA OCUPADA LA MESA
                        //MOSTRAR MESAS QUE NO ESTEN OCUPADAS
                        if (dia["mesa"] == me["nombre"]) {
                            if (dia["reservada_para"].includes(horario)) {
                                contMesas++;
                            }
                        }
                    })
                })
                if (contMesas < 8) {
                    html += "<option value=\"" + me['nombre'] + "\"> Mesa: " + me['nombre'] + "de " + me[
                        'sillas'] + " sillas </option>";
                }
                contMesas = 0;
            })
            seleccionMesa.innerHTML = html;
            seleccionMesa.value = "";
            seleccionHora.innerHTML = "";
        }

        function seleccionarMesa() {
            var seleccionHora = document.querySelector("#hora");
            var mesaSeleccionada = document.getElementById("mesa").value;

            var actual = new Date();
            actual.setMonth(actual.getMonth() + 1);
            var fechaSeleccionada = document.getElementById("fecha").value;
            var actualStr = "";
            var horarioEntero = 0;

            if (actual.getMonth() < 10) {
                //console.log("hasta aca anda");
                if (actual.getDate() < 10) {
                    //console.log("Esto no anda");
                    actualStr = actual.getFullYear() + "-0" + actual.getMonth() + "-0" + actual.getDate();
                } else {
                    //console.log("Esto Tambien Anda");
                    actualStr = actual.getFullYear() + "-0" + actual.getMonth() + "-" + actual.getDate();
                }
            } else {
                if (actual.getDate() < 10) {
                    //console.log("Esto no anda");
                    actualStr = actual.getFullYear() + "-" + actual.getMonth() + "-0" + actual.getDate();
                } else {
                    //console.log("Esto no anda");
                    actualStr = actual.getFullYear() + "-" + actual.getMonth() + "-" + actual.getDate();
                }
            }
            var controlador = false;
            var estaDisp = true;
            var html = "";
            horarios.forEach(horario => {
                horarioEntero = parseInt(horario.split(" ")[1], 10);
                estaDisp = true;
                //console.log(xrev);
                xrev.forEach(Nodisponible => {

                    //console.log("actual incluye fecha seleccionada? =" + (actualStr.includes(fechaSeleccionada)));
                    if (Nodisponible["mesa"] == mesaSeleccionada) {
                        if (Nodisponible["reservada_para"].includes(horario)) {
                            estaDisp = false;
                        }
                    }
                })
                    controlador = (actual.getHours() > horarioEntero);

                if (actualStr.includes(fechaSeleccionada) && controlador) {
                    estaDisp = false;
                }
                if (estaDisp) {
                    html += "<option value=\"" + horario.split(" ")[1] + "\"> Horario: " + horario.split(" ")[
                        1] + ":00:00 </option>";
                }
            })
            seleccionHora.innerHTML = html;
            seleccionHora.value = "";
        }
        </script>
    </div>

</body>

<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>
<script src="vista/principal/js/agregarReservacion.js "></script>

</html>