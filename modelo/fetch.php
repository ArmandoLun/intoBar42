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
        echo json_encode(new foo("qa"));
        
        //usuarioprueba WHERE id = '$id'
        
        /*
        $query = "SELECT * FROM menu";
        
        $result = $mysql -> query($query);

        if ($mysql->affected_rows > 0){
            while($row = $result->fetch_all(MYSQLI_ASSOC)){
                $array = $row; //json
            }
            echo json_encode(new foo($array));
        }else{
            echo "No se encontro ningun usuario con ese ID";
        }

        $mysql->close(); 
        */
        
    }
