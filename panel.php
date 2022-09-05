<?php
    if(isset($_GET["cocinero"])){
        if(isset($_GET["menu"])) require("vista/paneles/panel-cocinero/menu.php");
        else if(isset($_GET["pedidos"])) require("vista/paneles/panel-cocinero/pedidos.php");
        else require("vista/paneles/panel-cocinero/index.php");
    }
    else if(isset($_GET["mesero"])){
        if(isset($_GET["pedidos"])) require("vista/paneles/panel-mesero/pedidos.php");
        else require("vista/paneles/panel-mesero/index.php");
    }
    else if(isset($_GET["admin"])){
        if(isset($_GET["menu"])) require("vista/paneles/panel-admin/menu.php");
        else if(isset($_GET["pedidos"])) require("vista/paneles/panel-admin/pedidos.php");
        else if(isset($_GET["clientes"])) require("vista/paneles/panel-admin/clientes.php");
        else if(isset($_GET["empleados"])) require("vista/paneles/panel-admin/empleados.php");
        else require("vista/paneles/panel-admin/index.php");
    }
    else require("vista/paneles/login.html");
?>