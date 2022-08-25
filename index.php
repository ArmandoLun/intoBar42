
<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
//descomentar esto al commitearlo XDDDDDDD
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
//descomentar esto al commitearlo XDDDDDDD
//conexion para probar una bd local
//$conn = mysqli_connect('localhost','root','','prueba');
//conexion para probar una bd local
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/estilos.css">    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando Datitos</title>
    <br>
    <table>
        <tr>
            <td>id:</td>
            <td>nombre:</td>
            <td>email:</td>
            <td>ciudad:</td>
        </tr>
        <?php
            $sql="SELECT * from usuarios";
            $result=mysqli_query($conn, $sql);
            
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $mostrar['id'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['email'] ?></td>
            <td><?php echo $mostrar['ciudad'] ?></td>
        </tr>
        <?php }?>
    </table>
    
</head>
<body>
        <p>
            hola ARMANDO
        </p>
        <div class = "estilos">
            <style>
            </style>
        </div>
        <h1 class = "prueba">
            probando aqui unas cosillas
        </h1>
       
</body>
</html>


