<?php
    require("modelo/conexion.php");

    class SesionEmpleado extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function iniciar($usuario, $contrasenia){
            try{
                $resultado = $this->db_connect->prepare("CALL comprobar_empleado(:usuario, :contrasenia)");
                $resultado->execute(array(":usuario"=>$usuario, ":contrasenia"=>$contrasenia));
                $codigo=$resultado->fetch();
                
                if($codigo[0] == 0) return "{\"exito\":false, \"mensaje\":\"Usuario y/o contraseña incorrectos\"}";
                else return "{\"exito\":true, \"descripcion\":\"$codigo[1]\", \"perfil\":\"$codigo[2]\"}";
            }catch(Exception $e){
                echo $e;
            }
        }

        public function nuevo($usuario, $contrasenia, $perfil){
            try{
                $resultado = $this->db_connect->prepare("CALL nuevo_empleado(:usuario, :contrasenia, :perfil)");
                $resultado->execute(array(":usuario"=>$usuario, ":contrasenia"=>$contrasenia, ":perfil"=>$perfil));
                $exito=$resultado->fetch()[0];
                
                if($exito == 0) return "{\"exito\":false, \"mensaje\":\"Ya existe el usuario\"}";
                else return "{\"exito\":true, \"mensaje\":\"Usuario creado con éxito\"}";
            }catch(Exception $e){
                echo $e;
            }
        }

        public function borrar($usuario){
            try{
                $resultado = $this->db_connect->prepare("DELETE FROM empleados WHERE usuario = :usuario");
                $resultado->execute(array(":usuario"=>$usuario));
            }catch(Exception $e){
                echo $e;
            }
        }

        public function editar($usuario_original, $usuario, $contrasenia, $descripcion){
            try{
                $resultado = $this->db_connect->prepare("CALL editar_empleado(:usuaro_o, :usuario, :contrasenia,
                :descripcion)");
                $resultado->execute(array(":usuaro_o"=>$usuario_original, ":usuario"=>$usuario,
                ":contrasenia"=>$contrasenia, ":descripcion"=>$descripcion));
                $exito=$resultado->fetch()[0];
                
                if($exito == 0) return "{\"exito\":false, \"mensaje\":\"Ya existe el usuario\"}";
                else return "{\"exito\":true, \"mensaje\":\"Usuario cambiado con éxito\"}";
            }catch(Exception $e){
                echo $e;
            }
        }

        public function cambiar_perfil($usuario, $perfil){
            try{
                $resultado = $this->db_connect->prepare("UPDATE empleados SET id_perfil =
                (SELECT id FROM perfiles WHERE perfil = :perfil) WHERE usuario = :usuario");
                $resultado->execute(array(":usuario"=>$usuario, ":perfil"=>$perfil));
            }catch(Exception $e){
                echo $e;
            }
        }

        public function leer_todos(){
            try{
                return $this->db_connect->query("SELECT usuario, contrasenia, perfil FROM empleados
                INNER JOIN perfiles ON id_perfil = perfiles.id")->fetchAll();
            }catch(Exception $e){
                echo $e;
            }
        }
    }
?>