<?php
    if(isset($_POST["usuario"]) && !isset($_GET["empleados"])){
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
                $dir = $_SERVER["DOCUMENT_ROOT"].substr($_SERVER["PHP_SELF"], 0, -9)."vista/paneles/imgs-perfil/";

                if($cookie->{"usuario"} != $_POST["usuario"]){
                    rename("./vista/paneles/imgs-perfil/".$cookie->{"usuario"}.".jpg",
                    "./vista/paneles/imgs-perfil/".$_POST["usuario"].".jpg");
                }

                if($_FILES["foto_perfil"]["tmp_name"] != ""){
                    move_uploaded_file($_FILES["foto_perfil"]["tmp_name"], $dir.$_POST["usuario"].".jpg");
                }
            }

            echo "<script>location.href = './panel.php';</script>";
        }
        else if(isset($_POST["descripcion"])) {
            echo "<script>alert('".$datos->{"mensaje"}."'); location.href = './panel.php';</script>";
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

            if(isset($_GET["precio"])) $menu->cambiar_precio($_GET["platillo"], $_GET["precio"]);
            else if(isset($_GET["borrar"])){
                $menu->borrar($_GET["borrar"]);
                unlink("./vista/principal/img/menu/".$_GET["borrar"].".jpg");
            }
            else if(isset($_POST["nombre"])){
                $dir = $_SERVER["DOCUMENT_ROOT"].substr($_SERVER["PHP_SELF"], 0, -9)."vista/principal/img/menu/";
                $datos = $menu->nuevo($_POST["nombre"], $_POST["tiempo_coccion"], $_POST["precio"],
                $_POST["tipo"], $_POST["descripcion"]);
                echo $datos;

                if(!json_decode($datos)->{"exito"}){
                    $menu->editar($_POST["nombre"], $_POST["tiempo_coccion"], $_POST["precio"],
                    $_POST["tipo"], $_POST["descripcion"]);
                }

                if($_FILES["foto"]["tmp_name"] != ""){
                    move_uploaded_file($_FILES["foto"]["tmp_name"], $dir.$_POST["nombre"].".jpg");
                }
            }
            
            else{
                $menu = $menu->leer_todos();
                require("vista/paneles/panel-".$cuenta->{"perfil"}."/menu.php");
            }
        }
        else if(isset($_GET["pedidos"])){
            require("modelo/cliente/pedido.php");
            $pedidos = new Pedido();

            if(isset($_GET["id"])) $pedidos->cambiar_estado($_GET["id"], $_GET["estado"]);
            else{
                $pedidos = $pedidos->leer_todos();
                require("vista/paneles/panel-".$cuenta->{"perfil"}."/pedidos.php");
            }
        }
        else if(isset($_GET["clientes"])){
            require("modelo/cliente/sesion.php");
            $usuarios = new SesionCliente();

            if(isset($_GET["banear"])) $usuarios->banear($_GET["banear"]);
            else if(isset($_GET["desbanear"])) $usuarios->desbanear($_GET["desbanear"]);
            else{
                $usuarios = $usuarios->leer_todos();
                require("vista/paneles/panel-".$cuenta->{"perfil"}."/clientes.php");
            }
        }
        else if(isset($_GET["empleados"])){
            require("modelo/empleado/sesion.php");
            $empleados = new SesionEmpleado();

            if(isset($_POST["contrasenia"])){
                $datos = $empleados->nuevo($_POST["usuario"], $_POST["contrasenia"], $_POST["perfil"]);
                echo $datos;

                if(json_decode($datos)->{"exito"}){
                    copy("./vista/paneles/perfil.jpg", "./vista/paneles/imgs-perfil/".$_POST["usuario"].".jpg");
                }
            }
            else if(isset($_GET["perfil"])) $empleados->cambiar_perfil($_GET["usuario"], $_GET["perfil"]);
            else if(isset($_GET["borrar"])){
                $empleados->borrar($_GET["borrar"]);
                unlink("./vista/paneles/imgs-perfil/".$_GET["borrar"].".jpg");
            }
            else{
                $empleados = $empleados->leer_todos();
                require("vista/paneles/panel-".$cuenta->{"perfil"}."/empleados.php");
            }
        }
        else require("vista/paneles/panel-".$cuenta->{"perfil"}."/index.php");
    }
    else require("vista/paneles/login.html");
?>