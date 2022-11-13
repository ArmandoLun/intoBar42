<?php

    $mysql = new mysqli(
        /*
        "localhost",
        "root",
        "",
        "innobar4_sentidosbd"
|       */
        "us-cdbr-east-06.cleardb.net",
        "b07f350183c1bd",
        "b6f989d6",
        "heroku_5efcd308a0883ac"
        
    );

    if ($mysql->connect_error){
        die("Fallo la conexion a la bd" . $mysql->connect_error);
    }else{
        
    }
