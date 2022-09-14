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
    <h2 style="text-align: center">Clientes</h2><br>
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
                    <option value="banear">Banear</option>
                    <option value="desbanear">Desbanear</option>
                </select>
                <button class="btn" onclick="accion_en_lote()" style="margin-right:20px">Aplicar</button>
            </div>
        </div>
        <h6 id="enlaces-tabla" style="text-align: right;">
        </h6>
        <table>
            <tbody>
            </tbody>
        </table>
    </div>
    <script>
        const datos_tabla = <?php echo json_encode($usuarios) ?>;
        const cabecera_tabla = "<tr class='tr1'>"+
        "<td width='20px'><input type='checkbox' id='SelAll' name='check' onclick='marcarTodos(this)'></td>"+
        "<td>Nombre</td>"+
        "<td>Apellido</td>"+
        "<td>DNI</td>"+
        "<td>Correo electrónico</td>"+
        "<td>Baneado</td>"+
        "</tr>";
        const datos = ["nombre", "apellido", "DNI", "correo", "baneado"];
        const acciones_lote = {
            "banear":["./panel.php?clientes&banear=", "correo"],
            "desbanear":["./panel.php?clientes&desbanear=", "correo"]
        };
        const filtro = "nombre";
    </script>
    <script src="vista/paneles/tablas.js"></script>
</body>
</html>