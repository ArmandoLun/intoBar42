<?php
include 'bd.php';
$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];


$sentencia = $mysql->prepare("SELECT * FROM usuarios WHERE correo=? AND contrasenia=?");
$sentencia -> bind_param('ss',$correo,$contrasenia);
$sentencia -> execute();

$resultado = $sentencia -> get_result();
if($fila = $resultado -> fetch_assoc()){
    echo json_encode($fila, JSON_UNESCAPED_UNICODE);
}
$sentencia -> close();
$mysql -> close();