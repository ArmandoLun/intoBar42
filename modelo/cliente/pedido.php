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
                $resultado->execute(array(":correo"=>$correo));
                return $resultado->fetchAll();
            }catch(Exception $e){
                echo $e;
            }
        }
        
        public function leer_todos(){
            try{
                return $this->db_connect->query("CALL leer_pedidos_todos()")->fetchAll();
            }catch(Exception $e){
                echo $e;
            }
        }

        public function eliminar_pedido($_id){
            try{
                $resultado = $this->db_connect->prepare("DELETE FROM pedidos WHERE id=:id ");
                $resultado->execute(array(":id"=>$_id));
            }catch(Exception $e){
                echo $e;
            }
        }
    }
?>