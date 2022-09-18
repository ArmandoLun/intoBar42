<!DOCTYPE html>
<html lang="en">

<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar">
    <div class="boxed-page">
        <!-- NAVBAR -->
        <?php include('vista/principal/navbar.php'); ?>
        <!-- Menu Section -->
        <section id="gtco-menu" class="section-padding">
            <div class="container">
                <div class="section-content">
                    <?php if(isset($_COOKIE["cliente"]) && isset($_GET["mesa"])){
                        ?>
                    <button class='btn btn-primary btn-shadow btn-lg' onclick="location.href='./?food'">Vista Previa de
                        las Ordenes</button>
                    <?php } ?>
                    <div class="row mb-5">

                        <div class="col-md-12">
                            <div class="heading-section text-center">
                                <span class="subheading">
                                    Especialidades
                                </span>
                                <h2>
                                    Nuestro Menú
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!-- aca comienza el martirio-->
                    <div class="row">
                        <?php
                        $_cena = [];
                        $_almuerzo = [];
                        $_desayuno = [];
                        $_postre = [];
                        foreach ($_menu as $_queso) {
                            if ($_queso["tipo"] == 'Cena') {
                                array_push($_cena, $_queso);
                            } elseif ($_queso["tipo"] == 'Almuerzo') {
                                array_push($_almuerzo, $_queso);
                            } elseif ($_queso["tipo"] == 'Desayuno') {
                                array_push($_desayuno, $_queso);

                            } elseif ($_queso["tipo"] == 'Postres') {
                                array_push($_postre, $_queso);
                            }
                        }

                        Clasificar($_desayuno,"Desayuno");
                        Clasificar($_almuerzo,"Almuerzo");
                        Clasificar($_cena,"Cena");
                        Clasificar($_postre,"Postres");

                        function Clasificar($_arrayTipo,$Tiponombre)
                        {
                            echo ('<div class="col-lg-6 menu-wrap">');
                            echo ('
                                    <div class="heading-menu">
                                        <h3 class="text-center mb-5">' . $Tiponombre . '</h3>
                                    </div>');
                            foreach ($_arrayTipo as $_arrayElemento) {
                                
                                mostrarElemento($_arrayElemento);
                            }
                            echo ('</div>');
                        }
                        function mostrarElemento($array_Elemento)
                        {
                        ?>
                        <div class="menus d-flex align-items-center">
                            <div class="menu-img rounded-circle">
                                <img class="img-fluid"
                                    src="vista/principal/img/menu/<?php echo($array_Elemento["platillo"])?>.jpg" alt="">
                            </div>
                            <div class="text-wrap">
                                <div class="row align-items-start">
                                    <div class="col-8">
                                        <h4><?php echo ($array_Elemento["platillo"]); ?></h4>
                                    </div>
                                    <div class="col-4">
                                        <h4 class="text-muted menu-price"><?php echo ($array_Elemento["precio"]) ?>$
                                        </h4>
                                    </div>
                                </div>
                                <div class="row align-items-start">
                                    <div class="col-8">
                                        <p><?php echo ($array_Elemento["descripcion"]) ?></p>
                                    </div>
                                    <div class="col-4">
                                        <h4 class="text-muted menu-price">
                                            <?php echo ($array_Elemento["tiempo_coccion"]) ?></h4><br>
                                    </div>
                                </div>
                                <div class="row align-items-start">
                                    <div class="col-8"></div>
                                    <?php 
                                    if(isset($_GET["mesa"])){ 
                                        ?>
                                    <div id="botoncito" class="col-4">
                                        <button class='btn btn-primary btn-shadow btn-lg'
                                            onclick="nuevoPedido('<?php echo($array_Elemento['platillo']); ?>');">Ordenar</button><br>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!--hasta aca es el php :v-->
                </div>

            </div>

    </div>

    </section>
    <!-- End of menu Section -->
    <?php include('vista/principal/talon.php'); ?>
    </div>
    <script>
    var xhr;


    function nuevoPedido(platillo) {
        xhr = new XMLHttpRequest();
        xhr.open("GET", "./?platillo=" + platillo +
            "&mesa=<?php echo($_GET['mesa']); ?>&fecha_reservada=<?php echo($_GET['fecha_reservada']) ?>");
        xhr.send();
        alert(platillo + " se añadio con exito al pedido");
    }
    </script>

</body>
<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>

</html>