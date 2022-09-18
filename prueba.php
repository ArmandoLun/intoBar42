<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include("modelo/restaurante/platillo.php");
        
        $_menu=new Platillo();
        $_menu= $_menu->leer_todos();
        if(mail("barrios_mati1@outlook.com","hola yo aparezco arriba :v","asjidiosadhasodsadosaiojd")){
            echo("ESTO ANDUBbbbO");
        }else{
            echo("NO FUNCO LPM :v");
        }
        
        echo('<p>'.json_encode($_menu).'</p>');
    ?>
</body>
</html>