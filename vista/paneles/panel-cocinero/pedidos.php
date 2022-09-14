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
    <?php require("vista/paneles/panel-cocinero/header.html") ?>
    <h2 style="text-align: center">Pedidos</h2><br>
    <div class="d1">
        <input type="hidden" name="id" value="3">
        <div align="right">
            <input type="text" id="filtrar" style="padding:5px;margin-bottom:5px;margin-top:5px">
            <button class="btn" onclick="filtrar()">Buscar por fecha</button>
        </div>
        <div class="d2">
            <div>
                <select name="perfil" id="cambio_valor">
                    <option value="">Cambiar estado a...</option>
                    <option value="cocinando">Cocinando</option>
                    <option value="listo para entregar">Listo para entregar</option>
                    <option value="pedido incumplido">Pedido incumplido</option>
                </select>
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
        const datos_tabla = <?php echo json_encode($pedidos) ?>;
        const cabecera_tabla = "<tr class='tr1'>"+
        "<td width='20px'><input type='checkbox' id='SelAll' name='check' onclick='marcarTodos(this)'></td>"+
        "<td colspan='2'>Platillo</td>"+
        "<td>Estado</td>"+
        "<td>Mesa</td>"+
        "<td>Fecha y hora entrega</td>"+
        "</tr>";
        const datos = ["platillo", "estado", "mesa", "entrega"];
        const img = ["vista/principal/img/menu/", "platillo", ".jpg"];
        const accion_cambiar = ["./panel.php?pedidos&id=", "id", "&estado="];
        const filtro = "entrega";
    </script>
    <script src="vista/paneles/tablas.js"></script>
</body>
</html>