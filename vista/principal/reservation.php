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
                                <select onclick="seleccionarMesa();" onchange="seleccionarMesa();" name="mesa" id="mesa" style="width: 100%;">
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
            seleccionMesa.value="";
            document.querySelector("#hora").innerHTML="";
        }

        function seleccionarMesa() {
            var seleccionHora = document.querySelector("#hora");
            var mesaSeleccionada = document.getElementById("mesa").value;

            var estaDisp = true;
            var html="";
            horarios.forEach(horario => {
                estaDisp = true;
                xrev.forEach(Nodisponible => {
                    if (Nodisponible["mesa"] == mesaSeleccionada) {
                        if (Nodisponible["reservada_para"].includes(horario)) {
                            estaDisp = false;
                        }
                    }
                })
                if (estaDisp){
                    html += "<option value=\""+horario.split(" ")[1]+"\"> Horario: " + horario.split(" ")[1] + ":00:00 </option>";
                }
            })
            seleccionHora.innerHTML=html;
            seleccionHora.value="";
        }
        /*function PonerHorarios() {
            var horas = document.querySelector("#hora")
            var timenow = new Date();
            var html = "";
            for (var x = 8; x <= 22; x += 2) {
                if (timenow.getHours() < x) {
                    html += "<option value=" + x + ">Horario 1 (" + x + ":00)</option>";
                }
            }
            horas.innerHTML += html;
        }*/
        </script>
    </div>

</body>

<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>
<script src="vista/principal/js/agregarReservacion.js "></script>

</html>