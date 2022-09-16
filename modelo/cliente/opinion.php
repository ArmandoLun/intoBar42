<?php
    require("modelo/conexion.php");

    class Opinion extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function opinar($correo, $puntos, $opinion){
            try{
                $resultado = $this->db_connect->prepare("CALL opinar(:correo, :puntos, :opinion)");
                $resultado->execute(array(":correo"=>$correo, ":puntos"=>$puntos, ":opinion"=>$opinion));
            }catch(Exception $e){
                echo $e;
            }
        }

        public function leer_una($correo){
            try{
                $resultado = $this->db_connect->prepare("SELECT nombre, apellido, puntuacion, texto FROM
                opiniones INNER JOIN usuarios ON id_usuario = usuarios.id WHERE correo = :correo");
                return $this->$resultado->execute(array(":correo"=>$correo))->fetch();
            }catch(Exception $e){
                echo $e;
            }
        }

        public function leer_todas(){
            try{
                return $this->db_connect->query("SELECT nombre, apellido, puntuacion, texto FROM
                opiniones INNER JOIN usuarios ON id_usuario = usuarios.id")->fetchAll();
            }catch(Exception $e){
                echo $e;
            }
        }
    }
?>