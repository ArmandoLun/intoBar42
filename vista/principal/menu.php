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
                            } elseif ($_queso["tipo"] == 'Postre') {
                                array_push($_postre, $_queso);
                            }
                        }

                        Clasificar($_cena);
                        Clasificar($_almuerzo);
                        Clasificar($_desayuno);
                        Clasificar($_postre);

                        function Clasificar($_arrayTipo)
                        {
                            echo ('<div class="col-lg-6 menu-wrap">');
                            foreach ($_arrayTipo as $_arrayElemento) {
                                echo ('
                                    <div class="heading-menu">
                                        <h3 class="text-center mb-5">' . $_arrayElemento["tipo"] . '</h3>
                                    </div>');
                                mostrarElemento($_arrayElemento);
                            }
                            echo ('</div>');
                        }
                        function mostrarElemento($array_Elemento)
                        {
                        ?>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="vista/principal/img/menu/<?php echo($array_Elemento["platillo"])?>.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4><?php echo ($array_Elemento["platillo"]); ?></h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price"><?php echo ($array_Elemento["precio"]) ?></h4>
                                        </div>
                                    </div>
                                    <p>Descripcion Pendiente</p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <!--hasta aca es el php :v-->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of menu Section -->
        <?php include('vista/principal/talon.php'); ?>
    </div>
</body>
<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>

</html>