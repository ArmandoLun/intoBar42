<?php
    require("modelo/conexion.php");

    class SesionCliente extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function iniciar($correo, $contrasenia){
            try{
                $resultado = $this->db_connect->prepare("CALL comprobar_usuario(:correo, :contrasenia)");
                $resultado->execute(array(":correo"=>$correo, ":contrasenia"=>$contrasenia));
                $codigo=$resultado->fetch()[0];
                
                if($codigo == 0) return "{\"exito\":true, \"mensaje\":\"Sesión iniciada con éxito\"}";
                else if($codigo == 1) return "{\"exito\":false, \"mensaje\":\"No existe el usuario\"}";
                else if($codigo == 2) return "{\"exito\":false, \"mensaje\":\"Contraseña incorrecta\"}";
                else if($codigo == 3) return "{\"exito\":false, \"mensaje\":\"Cuenta baneada\"}";
            }catch(Exception $e){
                echo $e;
            }
        }

        public function registrarse($nombre, $apellido, $dni, $telefono, $domicilio, $correo, $contrasenia){
            try{
                $resultado = $this->db_connect->prepare("CALL nuevo_usuario(:nombre, :apellido, :dni,
                :telefono, :domicilio, :correo, :contrasenia)");
                $resultado->execute(array(":nombre"=>$nombre, ":apellido"=>$apellido, ":dni"=>$dni,
                ":telefono"=>$telefono, ":domicilio"=>$domicilio, ":correo"=>$correo, ":contrasenia"=>$contrasenia));
                $exito=$resultado->fetch()[0];
                
                if($exito == 0) return "{\"exito\":false, \"mensaje\":\"Ya existe un usuario con este correo\"}";
                else return "{\"exito\":true, \"mensaje\":\"Usuario creado con éxito\"}";
            }catch(Exception $e){
                echo $e;
            }
        }

        public function borrar($correo){
            try{
                $resultado = $this->db_connect->prepare("DELETE FROM usuarios WHERE correo = :correo");
                $resultado->execute(array(":correo"=>$correo));
            }catch(Exception $e){
                echo $e;
            }
        }

        public function leer_todos(){
            try{
                $resultado = $this->db_connect->query("SELECT nombre, apellido, DNI, correo, baneado FROM usuarios");
                return $resultado->fetchAll();
            }catch(Exception $e){
                echo $e;
            }
        }

        public function banear($correo){
            try{
                $resultado = $this->db_connect->prepare("UPDATE usuarios SET baneado = 'si' WHERE correo = :correo");
                $resultado->execute(array(":correo"=>$correo));
            }catch(Exception $e){
                echo $e;
            }
        }

        public function desbanear($correo){
            try{
                $resultado = $this->db_connect->prepare("UPDATE usuarios SET baneado = 'no' WHERE correo = :correo");
                $resultado->execute(array(":correo"=>$correo));
            }catch(Exception $e){
                echo $e;
            }
        }
    }
?>