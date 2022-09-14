<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="./">
            <img src="vista/principal/img/nuestras_fotos/restauranteeee.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="./">Inicio <span class="sr-only">(actual)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./?menu">Menú</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?acerca_de">Acerca De</a>
                    </li>
                </div>
            </ul>

            <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="./">
                <img src="vista/principal/img/nuestras_fotos/restauranteeee.png" alt="">
            </a>
            <ul class="navbar-nav d-flex justify-content-between">
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <!-- falta agregar las paginas de login -->
                        <?php if (!isset($_COOKIE["cliente"])) { ?>
                            <a class="nav-link" href="./?iniciar_sesion">Login</a>
                        <?php } else { ?>
                    <li><a class="nav-link" href="./?cerrar_coockie">Cerrar Sesion</a></li>
                    </li>
                    <li><a class="nav-link" href="./?reservar">Reservar</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?mis_reservaciones">Mis Reservaciones</a>
                    </li>
                    <?php } ?>
                </div>
                <li class="nav-item">
                    <a id="side-search-open" class="nav-link" href="#">
                        <span class="lnr lnr-magnifier"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>