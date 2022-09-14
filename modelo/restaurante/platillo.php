<?php
    require("modelo/conexion.php");

    class Platillo extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function nuevo($nombre, $coccion, $precio, $tipo, $descripcion){
            try{
                $resultado = $this->db_connect->prepare("CALL nuevo_platillo(:nombre, :coccion, :precio,
                :tipo, :descripcion)");
                $resultado->execute(array(":nombre"=>$nombre, ":coccion"=>$coccion, ":precio"=>$precio,
                ":tipo"=>$tipo, ":descripcion"=>$descripcion));
                $exito=$resultado->fetch()[0];
                
                if($exito == 0) return "{\"exito\":false, \"mensaje\":\"Ya existe el platillo\"}";
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

        public function editar($nombre, $coccion, $precio, $tipo, $descripcion){
            try{
                $resultado = $this->db_connect->prepare("CALL editar_platillo(:nombre, :coccion, :precio,
                :tipo, :descripcion)");
                $resultado->execute(array(":nombre"=>$nombre, ":coccion"=>$coccion, ":precio"=>$precio,
                ":tipo"=>$tipo, ":descripcion"=>$descripcion));
            }catch(Exception $e){
                echo $e;
            }
        }

        public function leer_todos(){
            try{
                return $this->db_connect->query("SELECT platillo, tiempo_coccion, precio, tipo, descripcion
                FROM menu INNER JOIN tiposplatillos ON id_tiposPlatillos = tiposplatillos.id")->fetchAll();
            }catch(Exception $e){
                echo $e;
            }
        }
    }
?>