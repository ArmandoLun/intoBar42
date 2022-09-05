<?php
    if(isset($_GET["acerca_de"])) require("vista/principal/about.php");
    else if(isset($_GET["iniciar_sesion"])) require("vista/principal/login.php");
    else if(isset($_GET["menu"])) require("vista/principal/menu.php");
    else if(isset($_GET["mis_reservaciones"])) require("vista/principal/my-reservations.php");
    else if(isset($_GET["pagar"])) require("vista/principal/payment.php");
    else if(isset($_GET["reservar"])) require("vista/principal/reservation.php");
    else if(isset($_GET["registrarse"])) require("vista/principal/sign-in.php");
    else if(isset($_GET["platos_especiales"])) require("vista/principal/special-dishes.php");
    else if(isset($_GET["equipo"])) require("vista/principal/team.php");
    else require("vista/principal/index.php");
?>