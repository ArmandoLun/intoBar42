
<!DOCTYPE html>
<html lang="en">

<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar">
    <div class="">
        <!-- NAVBAR -->
        <?php include('vista/principal/navbar.php'); ?>
        <!-- Reservation Section -->
        <section id="gtco-reservation" class="" style="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="p-3 mb-2 bg-light text-dark" style="">

                            <form id="picho" method="post" action=".\" style="display: flex; justify-content: center; align-items: center; flex-flow: column; border-style:groove; border-radius:30px;">
                                <h1>Mesas</h1>
                                <div id="diagrama">
                                    <img src="vista/principal/img/sillas/chespirito.jpg" alt="" style="max-width: 100%; max-height:100%;">
                                </div>
                                <div style="height: 30px;"></div>
                                <h4>Fecha</h4>
                                <input type="date" name="fecha" id="fecha" style="width: 100%;" required>
                                <h4>Hora</h4>
                                <select name="hora" id="hora" style="width: 100%;" required>
                                    <option value="08:00:00">Horario 1(8:00 am)</option>
                                    <option value="10:00:00">Horario 2(10:00 am)</option>
                                    <option value="12:00:00">Horario 3(12:00 am)</option>
                                    <option value="14:00:00">Horario 4(14:00 pm)</option>
                                    <option value="16:00:00">Horario 5(16:00 pm)</option>
                                    <option value="18:00:00">Horario 6(18:00 pm)</option>
                                    <option value="20:00:00">Horario 7(20:00 pm)</option>
                                    <option value="22:00:00">Horario 8(22:00 pm)</option>
                                </select>
                                <h4>Tipo de Mesa</h4>
                                <select name="mesa" id="mesa" style="width: 100%;" required>
                                    <option value="1">2 personas</option>
                                    <option value="2">4 personas</option>
                                    <option value="3">6 personas</option>
                                    <option value="4">8 personas</option>
                                </select>
                                <div style="height: 30px;"></div>
                                <button onclick="reservar();" type="submit" style="border-style:solid;">Reservar</button>
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
                alert(fecha)
                let datitos = new FormData(document.getElementById("picho"));
                event.preventDefault();
                xhr= new XMLHttpRequest();
                xhr.responseType="json";
                xhr.open("POST","./");
                xhr.send(datitos);
                xhr.onloadend = ()=>{
                    if(xhr.response["exito"]){
                        location.href="./?mis_reservaciones";
                    }else{
                        alert(xhr.response["mensaje"]);
                    }
                }
            }
        </script>
    </div>

</body>

<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>
<script src="vista/principal/js/agregarReservacion.js "></script>

</html>
