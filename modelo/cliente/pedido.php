<?php
    require("modelo/conexion.php");

    class Pedido extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function realizar($platillo, $mesa, $fecha_y_hora){
            try{
                $resultado = $this->db_connect->prepare("CALL nuevo_pedido(:platillo, :mesa, :entrega)");
                $resultado->execute(array(":platillo"=>$platillo, ":mesa"=>$mesa, ":entrega"=>$fecha_y_hora));
            }catch(Exception $e){
                echo $e;
            }
        }

        public function cambiar_estado($id, $estado){
            try{
                $resultado = $this->db_connect->prepare("UPDATE pedidos SET id_estado =
                (SELECT id FROM estados_pedido WHERE estado = :estado) WHERE id = :id");
                $resultado->execute(array(":estado"=>$estado, ":id"=>$id));
            }catch(Exception $e){
                echo $e;
            }
        }
        
        public function leer_de_usuario($correo){
            try{
                $resultado = $this->db_connect->prepare("CALL leer_pedidos_usuario(:correo)");
                return $resultado->execute(array(":correo"=>$correo))->fetchAll();
            }catch(Exception $e){
                echo $e;
            }
        }
        
        public function leer_todos(){
            try{
                return $this->query("CALL leer_pedidos_todos()")->fetchAll();
            }catch(Exception $e){
                echo $e;
            }
        }
    }
?>