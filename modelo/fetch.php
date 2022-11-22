<?php
   if($_SERVER['REQUEST_METHOD'] == 'GET'){
        
        require_once("bd.php");
   class foo
        
   {
    public $data = [];
    function __construct($input)
    {
        $this->data = $input; 
    }
   }
        
        echo (json_encode ((new foo(($mysql->query("SELECT platillo, tiempo_coccion, precio, tipo, descripcion
                FROM menu INNER JOIN tiposplatillos ON id_tiposPlatillos = tiposplatillos.id")->fetch_all(MYSQLI_ASSOC))))));
        $mysql->close(); 
    }

