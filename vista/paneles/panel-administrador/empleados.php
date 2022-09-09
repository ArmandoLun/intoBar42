<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php require("vista/paneles/formularios.css") ?>
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
        <a href="?id=3">Todos</a> | 
        <a href="">Administradores</a>
        <form action="" method="get">
            <input type="hidden" name="id" value="3">
            <div align="right">
                <input type="text" style="padding:5px;margin-bottom:5px;margin-top:5px">
                <input type="submit" value="Buscar" class="btn">
            </div>
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
            <?php
                $t=["w","r","e","w","e","r","w","t","r","t","y","t","w","r","e","w","e","r","w","t","r","t","y","t","y"];
                $usuarios = count($t);

                if(isset($_GET["pag"])) $pag=$_GET["pag"];
                else $pag=1;

                if($usuarios == 0) $pags=1;
                else $pags = $usuarios/10;

                if($usuarios >= $pag*10) $usuarios = $pag*10;
            ?>
            <h6 style="text-align: right;">
            <?php
                if($pag>1){
                    $pag--; echo "<a href='?id=3&pag=$pag'><<</a>"; $pag++;
                }
                echo $pag;
                if($pag<$pags){ 
                    $pag++; echo "<a href='?id=3&pag=$pag'>>></a>"; $pag--;
                }
            ?>
            </h6>
            <table>
                <tr class="tr1">
                    <td width="20px"><input type="checkbox" id="SelAll" name="check" onclick="marcar(this)"></td>
                    <td colspan="2">Nombre de usuario</td>
                    <td class="td">Contraseña</td>
                    <td class="td" width="200px">Perfil</td>
                </tr>
                <?php
                    for($i=($pag-1)*10; $i<$usuarios; $i++){
                        if($i%2 == 0) echo "<tr style='background-color: #eee'>";
                        else echo "<tr style='background-color: white'>";

                        echo "<td><input type='checkbox' class='sel' onclick='ComprobarMarcado(this)'></td>
                        <td width='50px'><img src='vista/paneles/perfil.jpg' height='50px'></td>
                        <td>esrjeeujfurghh</td>
                        <td>esrjeeujfurghh</td>
                        <td class='td'>Cocinero</td>
                        </tr>";
                    }
                ?>
            </table>
        </form>
    </div>
    <?php require("vista/paneles/panel-administrador/popup_empleados.html") ?>
</body>
</html>