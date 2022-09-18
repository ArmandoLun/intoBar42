<!DOCTYPE html>
<html lang="en">

<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar">
    <div class="boxed-page">
        <!-- NAVBAR -->
        <?php include('vista/principal/navbar.php'); ?>
        <!-- Reservation Section -->
        <section id="gtco-reservation" class="bg-fixed section-padding"
            style="background: linear-gradient(74deg, rgba(233,166,148,0.5497549361541492) 8%, rgba(237,172,191,0.41530115464154416) 48%, rgba(238,174,202,0.6029762246695554) 86%); margin-bottom:0% !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-section text-center">
                            <h2 id="dato_reservacion">
                                Mis Platillos
                            </h2>
                        </div>
                        <div class="testi-content testi-carousel owl-carousel ">
                            <!-- Aca tiene que ir -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Reservation Section -->
        <?php include('vista/principal/talon.php'); ?>
    </div>
</body>
<style>
h4 {
    font-weight: 200;
    font-size: 125%;
    border-style: dotted;
    border-radius: 2px;
}
</style>
<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>
<script>
var carrusel = document.querySelector(".owl-carousel"),
    items = <?php echo (json_encode($_pedidos)) ?>,
    HTML;
if (items.length == 0) {
    document.getElementById("dato_reservacion").innerHTML = "No tiene ninguna mesa reservada";
} else {
    for (var x = 0; x < items.length; x++) {
        if (x % 3 == 0) {
            if (x != 0) carrusel.innerHTML += "<div class='item'>" + HTML + "</div>";
            HTML = "";
        }
        HTML += "<div><h4>Platillo: " + items[x]["platillo"] + "<br>Estado actual: " + items[x][`estado`] +
            "<br> Mesa: " + items[x][`mesa`] + "<br> Entrega: " + items[x][`entrega`] +
            " hs</h4><div style='width: 20px;'></div>";
        HTML += "<button class='btn btn-primary btn-shadow btn-lg' onclick=\"cancelar("+items[x][`id`]+");\">Quitar</button></div><br>";
        "<br> Mesa: "+ items[x][`mesa`] + "<br> Entrega: " + items[x][`entrega`] +
            " hs</h4><div style='width: 20px;'></div>";
    }
}
if (items % 3 != 0) {
    carrusel.innerHTML += "<div class='item'>" + HTML + "</div>";
    HTML = "";
}
var xhr;
function cancelar(id){
    xhr = new XMLHttpRequest();
    xhr.open("post","./");
    var envio = new FormData();
    envio.append("idPedido",id);
    xhr.send(envio);
    xhr.onload=()=>{
        location.href="./?food";
    }
}
</script>

</html>