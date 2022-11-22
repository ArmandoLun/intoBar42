<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $idplatillo = $_GET["id"];
        require_once("bd.php");

        class foo
        
{
    public $data = [];
    function __construct($input)
    {
        $this->data = $input; 
    }
}

        echo (json_encode ((new foo(($mysql->query("SELECT menu.id, platillo, tiempo_coccion, precio, tipo, descripcion, recomendar
                FROM menu INNER JOIN tiposplatillos ON id_tiposPlatillos = tiposplatillos.id
                WHERE tiposplatillos.id = $idplatillo")->fetch_all(MYSQLI_ASSOC))))));
        $mysql->close(); 
        /*
        //usuarioprueba WHERE id = '$id'
        $query = "SELECT * FROM menu";
        
        $result = $mysql -> query($query);

        if ($mysql->affected_rows > 0){
            while($row = $result->fetch_all(MYSQLI_ASSOC)){
                $array = $row; //json
            }
            echo json_encode($array);
        }else{
            echo "No se encontro ningun usuario con ese ID";
        }

        $mysql->close(); 
        */
    }
