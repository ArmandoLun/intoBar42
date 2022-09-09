<?php
    if(isset($_POST["usuario"]) && isset($_POST["contrasenia"])){
        require("modelo/empleado/sesion.php");
        $sesion = new SesionEmpleado();
        $descripcion; $datos; $perfil;

        if(isset($_POST["descripcion"])){
            $descripcion = $_POST["descripcion"];
            $cookie = json_decode($_COOKIE["cuenta-empleado"]);
            $perfil = $cookie->{"perfil"};
            $datos = json_decode($sesion->editar($cookie->{"usuario"}, $_POST["usuario"],
            $_POST["contrasenia"], $_POST["descripcion"]));
        }
        else{
            $datos = json_decode($sesion->iniciar($_POST["usuario"], $_POST["contrasenia"]));
            $perfil = $datos->{"perfil"};
            $descripcion = $datos->{"descripcion"};
        }

        if($datos->{"exito"}){
            setcookie("cuenta-empleado", "{
                \"usuario\":\"".$_POST["usuario"]."\", \"contrasenia\":\"".$_POST["contrasenia"]."\",
                \"descripcion\": \"$descripcion\", \"perfil\": \"$perfil\" 
            }", time()+2600000);
            echo "<script>location.href = './panel.php';</script>";
        }
        else{
            require("vista/paneles/login.html");
            echo "<script>document.getElementById('mensaje').innerHTML = '<p>".
            $datos->{"mensaje"}."</p>'</script>";
        }
    }
    else if(isset($_COOKIE["cuenta-empleado"])){
        $cuenta = json_decode($_COOKIE["cuenta-empleado"]);

        if(isset($_GET["menu"])) require("vista/paneles/panel-".$cuenta->{"perfil"}."/menu.php");
        else if(isset($_GET["pedidos"])) require("vista/paneles/panel-".$cuenta->{"perfil"}."/pedidos.php");
        else if(isset($_GET["clientes"])) require("vista/paneles/panel-".$cuenta->{"perfil"}."/clientes.php");
        else if(isset($_GET["empleados"])) require("vista/paneles/panel-".$cuenta->{"perfil"}."/empleados.php");
        else require("vista/paneles/panel-".$cuenta->{"perfil"}."/index.php");
    }
    else require("vista/paneles/login.html");
?>