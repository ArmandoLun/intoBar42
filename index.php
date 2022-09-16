<?php
if (isset($_GET["acerca_de"])) {
    require("vista/principal/about.php");
} else if (isset($_GET["iniciar_sesion"])) {
    require("modelo/cliente/sesion.php");
    $_sesion=new SesionCliente();
    if(isset($_POST["correo"])){
        $_sesion=$_sesion->iniciar($_POST["correo"],$_POST["contrasenia"]);
        $_jsonsito=json_decode($_sesion);
        if($_jsonsito->{"exito"}){
            setcookie("cliente","{\"correo\":\"".$_POST["correo"]."\", \"contrasenia\":\"".$_POST["contrasenia"]."\"}");
            echo("<script>
            location.href='./';</script>");
        }else{
            echo("<script>alert(\"".json_decode($_sesion)->{'mensaje'}."\");</script>");
        }
    }

    require("vista/principal/login.php");
}
else if (isset($_GET["menu"])){
    require("modelo/restaurante/platillo.php");
    $_menu=new Platillo();
    $_menu=$_menu->leer_todos();
    require("vista/principal/menu.php");
} 
else if (isset($_GET["mis_reservaciones"])) {
    require("modelo/cliente/reserva.php");
    $_reserva=new Reserva();
    $_reserva=$_reserva->leer_de_usuario(json_decode($_COOKIE["cliente"])->{"correo"});
    require("vista/principal/my-reservations.php");
}
else if (isset($_GET["pagar"])) require("vista/principal/payment.php");
else if (isset($_GET["reservar"])) {
    require("vista/principal/reservation.php");
}
else if (isset($_GET["registrarse"])) {
    require("modelo/cliente/sesion.php");
    $_sesion=new SesionCliente();
    if(isset($_POST["correo"])){
        $_sesion=$_sesion->registrarse($_POST["nombre"],$_POST["apellido"],$_POST["dni"],$_POST["telefono"],$_POST["domicilio"],$_POST["correo"],$_POST["contrasenia"]);
        $_jsonsito=json_decode($_sesion);
        if($_jsonsito->{"exito"}){
            setcookie("cliente","{\"correo\":\"".$_POST["correo"]."\", \"contrasenia\":\"".$_POST["contrasenia"]."\"}");
            echo("<script>location.href='./';</script>");
        }else{
            echo("<script>alert('".$_jsonsito->{"mensaje"}."');</script>");
        }
    }
    require("vista/principal/sign-in.php");
}
else if (isset($_GET["equipo"])) require("vista/principal/team.php");
else if (isset($_GET["cerrar_coockie"])){
    setcookie("cliente","",time()-60);
    echo("<script>location.href='./';</script>");
}
else if(isset($_GET["cancelar"])){
    require("modelo/cliente/reserva.php");
    $_reserva=new Reserva();
    $_reserva=$_reserva->cancelar($_GET["mesa"],$_GET["fecha_reservacion"]);
    echo($_reserva);
}
else if(isset($_GET["platillo"])){
    require("modelo/cliente/pedido.php");
    $_pedido=new Pedido();
    $_pedido=$_pedido->realizar($_GET["platillo"],$_GET["mesa"],$_GET["fecha_reservada"]);
    echo($_GET["platillo"] . " " . $_GET["mesa"] . " "  .$_GET["fecha_reservada"]);
}else if(isset($_GET["food"])){
    require("modelo/cliente/pedido.php");
    $_pedidos=new Pedido();
    $_pedidos=$_pedidos->leer_de_usuario(json_decode($_COOKIE["cliente"])->{"correo"});
    require("vista/principal/food.php");
}
else if(isset($_POST["fecha"]))
{
    require("modelo/cliente/reserva.php");
    $_reservacion = new Reserva();
    $_reservacion = $_reservacion->reservar($_POST["mesa"],json_decode($_COOKIE["cliente"])->{"correo"},$_POST["fecha"]." ".$_POST["hora"]);
    echo("$_reservacion");
}
else if(isset($_POST["numeroTarjeta"])){
    require("modelo/cliente/reserva.php");
    $_reserva=new Reserva();
    $_reserva=$_reserva->confirmar($_POST["mesa"],$_POST["fecha_reservacion"]);
    echo($_reserva);
}
else {

    require("vista/principal/index.php");
}
?>