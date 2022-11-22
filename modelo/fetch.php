<?php
   if($_SERVER['REQUEST_METHOD'] == 'GET'){
        
        require_once("bd.php");

        
        echo (json_encode ($mysql->query("SELECT platillo, tiempo_coccion, precio, tipo, descripcion
                FROM menu INNER JOIN tiposplatillos ON id_tiposPlatillos = tiposplatillos.id")->fetch_all(MYSQLI_ASSOC)));
        $mysql->close(); 
    }

