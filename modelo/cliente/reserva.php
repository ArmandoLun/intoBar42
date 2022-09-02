<?php
    require("modelo/conexion.php");

    class Reserva extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function reservar($mesa, $correo, $realizado, $reservado){
            try{
                $resultado = $this->db_connect->prepare("CALL nueva_reserva(:mesa, :correo, :realizado, :reservado)");
                $resultado->execute(array(":mesa"=>$mesa, ":correo"=>$correo,":realizado" =>$realizado,
                ":reservado"=>$reservado));
                $codigo=$resultado->fetch()[0];

                if($this->codigo == 0) return "{\"exito\":true, \"mensaje\":\"Reservación realizada con éxito\"}";
                else return "{\"exito\":false, \"mensaje\":\"Reservación no disponible\"}";
            }catch(Exception $e){
                echo $e;
            }
        }

        public function cancelar($mesa, $reservado){
            try{
                $resultado = $this->db_connect->prepare("CALL borrar_reserva(:mesa, :reservado)");
                $resultado->execute(array(":mesa"=>$mesa, ":reservado"=>$reservado));
                $codigo=$resultado->fetch()[0];

                if($this->codigo == 0) return "{\"exito\":true, \"mensaje\":\"Reservación cancelada con éxito\"}";
                else return "{\"exito\":false, \"mensaje\":\"Muy tarde para cancelar la reservación\"}";
            }catch(Exception $e){
                echo $e;
            }
        }

        public function confirmar($mesa, $reservado){
            try{
                $resultado = $this->db_connect->prepare("CALL confirmar_reserva(:mesa, :reservado)");
                $resultado->execute(array(":mesa"=>$mesa, ":reservado"=>$reservado));
                $codigo=$resultado->fetch()[0];

                if($this->codigo == 0) return "{\"exito\":true, \"mensaje\":\"Reservación confirmada con éxito\"}";
                else return "{\"exito\":false, \"mensaje\":\"Muy tarde para confirmar la reservación\"}";
            }catch(Exception $e){
                echo $e;
            }
        }

        public function leer_de_usuario($correo){
            try{
                $resultado = $this->db_connect->prepare("CALL leer_reservas_usuario(:correo)");
                return $this->$resultado->execute(array(":correo"=>$correo))->fetchAll();
            }catch(Exception $e){
                echo $e;
            }
        }

        public function leer_todos($correo){
            try{
                return $this->db_connect->query("CALL leer_reservas_todos()")->fetchAll();
            }catch(Exception $e){
                echo $e;
            }
        }
    }
?>