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
                                    Acerca de
                                </span>
                                <h2>
                                  Opiniones 
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!-- aca comienza el martirio-->
                    <div class="row">
                        <?php
                        //$_opinion;
                            foreach ($_opiniones as $_opinion) {
                                echo ('<div class="col-lg-12 menu-wrap">');
                                echo ('<div class="heading-menu">
                                            <h3 class="text-center mb-5">' . $_opinion["nombre"] . '</h3>
                                        </div>');
                                mostrarElemento($_opinion);
                                echo ('</div>');
                            }
                            
                        
                        function mostrarElemento($array_Elemento)
                        {
                        ?>
                        <div class="menus d-flex align-items-center">
                            <div class="text-wrap">
                                <div class="row align-items-start">
                                    <div class="col-8">
                                        <h4><?php echo ($array_Elemento["nombre"]." ".$array_Elemento["apellido"]); ?>
                                        </h4>
                                    </div>
                                    <div class="col-4">
                                        <h4 class="text-muted menu-price"><?php echo ($array_Elemento["puntuacion"]) ?>
                                        </h4>
                                    </div>
                                </div>
                                <div class="row align-items-start">
                                    <div class="col-12">
                                        <p><?php echo ($array_Elemento["texto"]) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <?php if (isset($_COOKIE["cliente"])){ ?>
                        <form method="POST" action="./?contacos" class="col-lg-12 menu-wrap" style="display: flex;flex-flow:column;">
                            <textarea id="texto" maxlength="1000"  name="texto" id="" cols="30" rows="10" placeholder="Escriba su opinión..." required></textarea>
                            <input id="puntaje" style="margin-top: 5px; " type="number" name="puntaje" min="0" max="10" placeholder="Puntúanos (0-10)" required>
                            <button style="margin-top: 5px;" class='btn btn-danger btn-shadow btn-lg' onclick="dejarOpinion();">Enviar
                                </button>
                        </form><br>
                    </div>
                    <?php } ?>
                </div>
                <!--hasta aca es el php :v-->
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