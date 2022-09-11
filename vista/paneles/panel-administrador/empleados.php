<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php require("vista/paneles/tablas.css") ?>
    </style>
</head>
<script>
    function mostrar_popup(){
        event.preventDefault();
        document.getElementById('fondo').style.display = 'flex';
    }
</script>
<body>
    <?php require("vista/paneles/panel-administrador/header.html") ?>
    <h2 style="text-align: center">Empleados</h2><br>
    <div class="d1">
        <input type="hidden" name="id" value="3">
        <div align="right">
            <input type="text" style="padding:5px;margin-bottom:5px;margin-top:5px">
            <button class="btn">Buscar</button>
        </div>
        <form action="" method="get">
            <div class="d2">
                <div>
                    <select name="accion">
                        <option value="0">Acciones en lote</option>
                    </select>
                    <input type="submit" value="Aplicar" class="btn" style="margin-right:20px">
                </div>
                <div>
                    <select name="perfil">
                        <option value="0">Cambiar perfil a...</option>
                    </select>
                    <input type="submit" value="Cambiar" class="btn">
                </div>
            </div>
            <button href="" class="btn" style="margin-top:5px" onclick="mostrar_popup()">Nuevo empleado</button>
            <h6 id="enlaces-tabla" style="text-align: right;">
            </h6>
            <table>
                <tbody>
                </tbody>
            </table>
        </form>
    </div>
    <script>
        const datos_tabla = <?php echo json_encode($empleados) ?>;
        const cabecera_tabla = "<tr class='tr1'>"+
        "<td width='20px'><input type='checkbox' id='SelAll' name='check' onclick='marcarTodos(this)'></td>"+
        "<td colspan='2'>Nombre de usuario</td>"+
        "<td>Contraseña</td>"+
        "<td>Perfil</td>"+
        "</tr>";
        const datos = ["usuario", "contrasenia", "perfil"];
        const img = ["vista/paneles/imgs-perfil/", "usuario"];
    </script>
    <script src="vista/paneles/tablas.js"></script>
    <?php require("vista/paneles/panel-administrador/popup_empleados.html") ?>
</body>
</html>