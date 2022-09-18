<!DOCTYPE html>
<html lang="en">

<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar">
    <div class="boxed-page">
        <!-- NAVBAR -->
        <?php include('vista/principal/navbar.php'); ?>
        <!-- Reservation Section -->
        <section id="gtco-reservation" class="bg-fixed bg-light section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="heading-section text-center">
                            <h2 id="dato_reservacion">
                                Mis Reservaciones
                            </h2>
                        </div>
                        <div class="testi-content testi-carousel owl-carousel ">
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
<script>
var carrusel = document.querySelector(".owl-carousel"),
    items = <?php echo (json_encode($_reserva)) ?>,
    HTML;
if (items.length == 0) {
    document.getElementById("dato_reservacion").innerHTML = "No tiene ninguna mesa reservada";
} else {
    for (var x = 0; x < items.length; x++) {
        if (x % 5 == 0) {
            if (x != 0) carrusel.innerHTML += "<div class='item'>" + HTML + "</div>";
            HTML = "";
        }
        HTML += "<div><h4> Mesa " + items[x]["mesa"] + " Reservado para: <br>" + items[x][`reservada_para`] +
            "</h4><div style='width: 20px;'></div>";
        if (items[x]["pagada"] == 0) {
            HTML += "<button class='btn btn-primary btn-shadow btn-lg' onclick=\"pagar('" + items[x]["mesa"] + "','" +
                items[x]["reservada_para"] + "');\">pagar</button>";
            HTML += "<button class='btn btn-primary btn-shadow btn-lg' onclick=\"cancelar('" + items[x]["mesa"] +
                "','" + items[x]["reservada_para"] + "');\">Cancelar</button></div><br>";
        } else {
            HTML += "<button class='btn btn-secondary btn-shadow btn-lg' onclick=\"ordenar('" + items[x]["mesa"] +
                "','" + items[x]["reservada_para"] + "')\">Ordenar</button></div><br>";
        }

    }


}

if (items % 10 != 0) {
    carrusel.innerHTML += "<div class='item'>" + HTML + "</div>";
    HTML = "";
}

function pagar(mesa, reserv) {
    location.href = './?pagar&fecha_reservacion=' + reserv + '&mesa=' + mesa;
}
var xhr;

function cancelar(mesa, reserv) {

    xhr = new XMLHttpRequest();
    xhr.open("GET", './?cancelar&fecha_reservacion=' + reserv + '&mesa=' + mesa);
    xhr.send();
    xhr.responseType = "json";
    xhr.onloadend = () => {
        if (xhr.response["exito"]) {
            location.href = "./?mis_reservaciones";
        } else {
            alert(xhr.response["mensaje"]);
        }
    }
}
function ordenar(mesa,reserv){
    location.href = "./?menu&mesa="+mesa+"&fecha_reservada="+reserv;
}
</script>
</html>