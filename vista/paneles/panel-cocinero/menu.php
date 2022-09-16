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
    <?php require("vista/paneles/panel-cocinero/header.html") ?>
    <h2 style="text-align: center">Menu</h2><br>
    <div class="d1">
        <input type="hidden" name="id" value="3">
        <div align="right">
            <input type="text" id="filtrar" style="padding:5px;margin-bottom:5px;margin-top:5px">
            <button class="btn" onclick="filtrar()">Buscar</button>
        </div>
        <h6 id="enlaces-tabla" style="text-align: right;">
        </h6>
        <table>
            <tbody>
            </tbody>
        </table>
    </div>
    <script>
        const datos_tabla = <?php echo json_encode($menu) ?>;
        const cabecera_tabla = "<tr class='tr1'>"+
        "<td colspan=2>Nombre del platillo</td>"+
        "<td>Tiempo de cocción</td>"+
        "<td>Precio</td>"+
        "<td>Tipo</td>"+
        "</tr>";
        const datos = ["platillo", "tiempo_coccion", "precio", "tipo"];
        const img = ["vista/principal/img/menu/", "platillo", ".jpg"];
        const filtro = "platillo";
    </script>
    <script src="vista/paneles/tablas.js"></script>
</body>
</html>