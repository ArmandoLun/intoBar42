<?php
    require("modelo/conexion.php");

    class Platillo extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function nuevo($nombre, $coccion, $precio){
            try{
                $resultado = $this->db_connect->prepare("CALL nuevo_platillo(:nombre, :coccion, :precio)");
                $resultado->execute(array(":nombre"=>$nombre, ":coccion"=>$coccion, ":precio"=>$precio));
                $exito=$resultado->fetch()[0];
                
                if($this->exito == 0) return "{\"exito\":false, \"mensaje\":\"Ya existe el platillo\"}";
                else return "{\"exito\":true, \"mensaje\":\"Platillo agregado con éxito\"}";
            }catch(Exception $e){
                echo $e;
            }
        }

        public function borrar($nombre){
            try{
                $resultado = $this->db_connect->prepare("DELETE FROM menu WHERE platillo = :nombre");
                $resultado->execute(array(":nombre"=>$nombre));
            }catch(Exception $e){
                echo $e;
            }
        }

        public function cambiar_precio($nombre, $precio){
            try{
                $resultado = $this->db_connect->prepare("UPDATE menu SET precio = :precio WHERE platillo = :nombre");
                $resultado->execute(array(":nombre"=>$nombre, ":precio"=>$precio));
            }catch(Exception $e){
                echo $e;
            }
        }

        public function leer_todos(){
            try{
                return $this->db_connect->query("SELECT platillo, tiempo_coccion, precio FROM menu")->fetchAll();
            }catch(Exception $e){
                echo $e;
            }
        }
    }
?>