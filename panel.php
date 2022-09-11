<?php
    if(isset($_POST["usuario"]) && isset($_POST["contrasenia"])){
        require("modelo/empleado/sesion.php");
        $sesion = new SesionEmpleado();
        $descripcion; $datos; $perfil; $cookie;

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
            }");

            if(isset($_POST["descripcion"])){
                rename("vista/paneles/imgs-perfil/".$cookie->{"usuario"}, "vista/paneles/imgs-perfil/".$_POST["usuario"]);
                if($_FILES["foto_perfil"]["tmp_name"] != ""){
                    echo "<script>alert('".$_FILES["foto_perfil"]["tmp_name"]."')</script>";
                    if(!move_uploaded_file($_FILES["foto_perfil"]["tmp_name"], "vista/paneles/imgs-perfil/".$_POST["usuario"])){
                        echo "error";
                    }
                }
            }

            //echo "<script>location.href = './panel.php';</script>";
        }
        else{
            require("vista/paneles/login.html");
            echo "<script>document.getElementById('mensaje').innerHTML = '<p>".
            $datos->{"mensaje"}."</p>'</script>";
        }
    }
    else if(isset($_COOKIE["cuenta-empleado"])){
        $cuenta = json_decode($_COOKIE["cuenta-empleado"]);

        if(isset($_GET["menu"])){
            require("modelo/restaurante/platillo.php");
            $menu = new Platillo();
            $menu = $menu->leer_todos();
            require("vista/paneles/panel-".$cuenta->{"perfil"}."/menu.php");
        }
        else if(isset($_GET["pedidos"])){
            require("modelo/cliente/pedido.php");
            $pedidos = new Pedido();
            $pedidos = $pedidos->leer_todos();
            require("vista/paneles/panel-".$cuenta->{"perfil"}."/pedidos.php");
        }
        else if(isset($_GET["clientes"])){
            require("modelo/cliente/sesion.php");
            $usuarios = new SesionCliente();
            $usuarios = $usuarios->leer_todos();
            require("vista/paneles/panel-".$cuenta->{"perfil"}."/clientes.php");
        }
        else if(isset($_GET["empleados"])){
            require("modelo/empleado/sesion.php");
            $empleados = new SesionEmpleado();
            $empleados = $empleados->leer_todos();
            require("vista/paneles/panel-".$cuenta->{"perfil"}."/empleados.php");
        }
        else require("vista/paneles/panel-".$cuenta->{"perfil"}."/index.php");
    }
    else require("vista/paneles/login.html");
?>