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
<body>
    <?php require("vista/paneles/panel-administrador/header.html") ?>
    <h2 style="text-align: center">Empleados</h2><br>
    <div class="d1">
        <input type="hidden" name="id" value="3">
        <div align="right">
            <input type="text" id="filtrar" style="padding:5px;margin-bottom:5px;margin-top:5px">
            <button class="btn" onclick="filtrar()">Buscar</button>
        </div>
        <div class="d2">
            <div>
                <select name="accion" id="accion_lote">
                    <option value="">Acciones en lote</option>
                    <option value="borrar">Eliminar</option>
                </select>
                <button class="btn" onclick="accion_en_lote()" style="margin-right:20px">Aplicar</button>
            </div>
            <div>
                <select name="perfil" id="cambio_valor">
                    <option value="">Cambiar rol a...</option>
                    <option value="cocinero">Cocinero</option>
                    <option value="mesero">Mesero</option>
                    <option value="administrador">Administrador</option>
                </select>
                <button class="btn" onclick="cambiar_valor()">Cambiar</button>
            </div>
        </div>
        <button href="" class="btn" style="margin-top:5px" onclick="mostrar_popup()">Nuevo empleado</button>
        <h6 id="enlaces-tabla" style="text-align: right;">
        </h6>
        <table>
            <tbody>
            </tbody>
        </table>
    </div>
    <?php require("vista/paneles/panel-administrador/popup_empleados.html"); ?>
    <script>
        const datos_tabla = <?php echo json_encode($empleados) ?>;
        const cabecera_tabla = "<tr class='tr1'>"+
        "<td width='20px'><input type='checkbox' id='SelAll' name='check' onclick='marcarTodos(this)'></td>"+
        "<td colspan='2'>Nombre de usuario</td>"+
        "<td>Contraseña</td>"+
        "<td>Rol</td>"+
        "</tr>";
        const datos = ["usuario", "contrasenia", "perfil"];
        const img = ["vista/paneles/imgs-perfil/", "usuario", ".jpg"];
        const acciones_lote = {"borrar":["./panel.php?empleados&borrar=", "usuario"]};
        const accion_cambiar = ["./panel.php?empleados&usuario=", "usuario", "&perfil="];
        const filtro = "usuario";
    </script>
    <script src="vista/paneles/tablas.js"></script>
    <script>
        
    </script>
</body>
</html>