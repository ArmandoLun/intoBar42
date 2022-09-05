<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="import" href="">
    <style>
        body{
            text-align: center;
        }
        .d1{
            margin: 50px;
            padding: 10px;
            margin-top: 100px;
            border: 5px solid black;
        }
        .d1 img{
            border: 5px solid black;
            margin-top: -65px;
        }
        .d1 p{
            text-align: justify;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php require("vista/paneles/panel-mesero/header.html") ?>
    <p>Bienvenido al panel de administración.</p>
    <p>Haga click en las obciones de la barra de arriba para cambiar de página dentro del panel.</p>
    <p>Este es tu perfil</p>
    <div class="d1">
        <img src="vista/paneles/perfil.jpg" width="100px" height="100px">
        <h1>Usuario</h1>
        <h3>Contraseña: 1234</h3>
        <h3>Perfil: mesero</h3>
        <br>
        <p>
            Aquí va una descripción personalizada del usuario, esta tendrá un limite de 200 caracteres. Este
            texto tiene exactamente 200 caracteres de largo y sirve de referencia para ver a cuánto texto
            equivale.
        </p>
        <br>
        <button onclick="document.getElementById('fondo').style.display = 'flex'">Editar perfil</button>
    </div>
    <?php require("vista/paneles/panel-mesero/popup_perfil.html") ?>
</body>
</html>