<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="./">
            <img src="vista/principal/img/nuestras_fotos/restauranteeee.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent" style="font-size:23px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight:100;">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a id="hola" class="nav-link" href="./">Inicio <span class="sr-only">(actual)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a id="hola" class="nav-link" href="./?menu">Menú</a>
                    </li>
                    <li class="nav-item">
                        <a id="hola" class="nav-link" href="./?acerca_de">Acerca De</a>
                    </li>
                </div>
            </ul>

            <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="./">
                <img src="vista\principal\img\3aea37c9-2e5b-497f-9b7b-72d23bfcb2fa.png" alt="">
            </a>
            <ul class="navbar-nav d-flex justify-content-between">
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <!-- falta agregar las paginas de login -->
                        <?php if (!isset($_COOKIE["cliente"])) { ?>
                            <a id="hola" class="nav-link" href="./?iniciar_sesion">Login</a>
                        <?php } else { ?>
                    </li>
                    <li><a id="hola" class="nav-link" href="./?reservar">Reservar</a></li>
                    <li class="nav-item">
                        <a id="hola" class="nav-link" href="./?mis_reservaciones">Reservaciones</a>
                    </li>
                    <li><a id="hola" class="nav-link" href="./?cerrar_coockie">Log-out</a></li>
                    <?php } ?>
                </div>
            </ul>
        </div>
    </div>
</nav>
<style>
    nav
    {
        background: rgb(215,177,109);
background: linear-gradient(118deg, rgba(215,177,109,0.577468487394958) 3%, rgba(0,0,0,0) 49%, rgba(213,89,217,0.48503151260504207) 90%);
border: 7px ridge #deaeae;
        
    }
    #hola {
        border-style: solid;
        border-color: white;
        border-radius: 15%;
        margin-left: 2px;
        background-color: #deaeae;
    }
</style>