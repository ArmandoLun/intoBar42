<?php
    require("modelo/conexion.php");

    class Sesion extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function nuevo($nombre, $sillas){
            try{
                $resultado = $this->db_connect->prepare("CALL nueva_mesa(:nombre, :sillas)");
                $resultado->execute(array(":nombre"=>$nombre, ":sillas"=>$sillas));
                $exito=$resultado->fetch()[0];
                
                if($this->exito == 0) return "{\"exito\":false, \"mensaje\":\"Ya existe la mesa\"}";
                else return "{\"exito\":true, \"mensaje\":\"Mesa agregada con éxito\"}";
            }catch(Exception $e){
                echo $e;
            }
        }

        public function borrar($nombre){
            try{
                $resultado = $this->db_connect->prepare("DELETE FROM mesas WHERE nombre = :nombre");
                $resultado->execute(array(":nombre"=>$nombre));
            }catch(Exception $e){
                echo $e;
            }
        }

        public function leer_todos(){
            try{
                return $this->query("SELECT nombre, sillas FROM mesas")->fetchAll();
            }catch(Exception $e){
                echo $e;
            }
        }
    }
?>