<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../img/logo_footer.ico">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>INDEX - WIP SHOP</title>
</head>

<body>
    <header>
        <a class="textoheadder" href="../pages/index.php">WIP - SHOP
            <a>
                <p class="textoSlogan">¡Viste con estilo y potencia con nuestra ropa de anime inspirada en los coches
                    más emblemáticos de la
                    cultura automotriz!</p>
            </a>

            <?php

            session_start();

            // Comprobar si la sesión está activa
            if (isset($_SESSION['logueado']) && $_SESSION['logueado'] === true) {

                echo '<a style=" color: black; text-decoration: none; " href="../pages/perfil.php"><p>Hola! ' . $_SESSION['nombre'] . '</p></a>';

                echo "<form action='logout.php'>";
                echo "<button style= background-color:transparent; border: solid 1px black;; type='submit'>Cerrar sesión</button>";
                echo "</form>";
            } else {

                echo '<a href="../pages/registro.html"><p>Regístrate</p></a>';
                echo '<a href="../pages/login.html"><p>Inicia Sesión</p></a>';
            }


            ?>
        </a>

    </header>
    <main>
        <!--ofertas de registro y compra-->
        <hr class="separador">

        <form action="../allpages/llaveros.html">
            <article class="oferta">
                <button class="botonofertas">
                    <p href="../allpages/llaveros.html" class="textooferta">Y AHORA CON LA COMPRA DE 3 LLAVEROS
                        LLEVATE
                        GRATIS UNA SUDADERA, LA QUE MAS GUSTES
                        SOLO POR TIEMPO LIMITADO</p>
                </button>
            </article>
        </form>

        <hr class="separador">

        <?php
        // Comprobar si la sesión está activa
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] === true) {



        } else if (isset($_POST['logout'])) {
            session_destroy();
            header('Location: index.php');
            exit;
        } else {

            echo "<form action='registro.html'>";
            echo "<article class='oferta'>";
            echo "<button class='botonofertas'>";
            echo "<p class='textooferta'>SUBSCRÍBETE AHORA Y OBTEN UN 11% DE DESDUENTO EN TODAS TUS COMPRAS</p>";
            echo "</button>";
            echo "</article>";
            echo "</form>";
        }


        ?>


        <!-- FIN ofertas de registro y compra--->


        <!--categorias-->
        <hr class="separador">
        <section class="bloqueforms">
            <form action="../allpages/accesorios.html">
                <article class="categoria1">
                    <button class="botoncategorias1">
                        <p class="textocatego">ACCESORIOS PARA TU VEHICULO</p>
                    </button>
                </article>
            </form>

            <hr class="separador">

            <form action="../allpages/ropa.html">
                <article class="categoria2">
                    <button href="" class="botoncategorias2">
                        <p class="textocatego">ROPA</p>
                    </button>
                </article>
            </form>

            <hr class="separador">

            <form action="../allpages/llaveros.html">
                <article class="categoria3">
                    <button href="" class="botoncategorias3">
                        <p class="textocatego">LLAVEROS</p>
                    </button>
                </article>
            </form>
        </section>



        <hr class="separador">
        <!--FIN categorias-->



    </main>
    <footer>
        <section class="bloq12no">
            <section class="bloque1">
                <a>SIGUENOS EN NUESTRAS REDES</a></br></br>
                <a class="instagramtexto" href="https://www.instagram.com/shoppwipp/">| whipshoopOR |</a></br></br>
                <a>whipshoopOR</a></br></br>
                <a>whipshoopOR</a></br></br>
            </section>

            <section class="bloqueno"></section>



            <section class="bloque2">
                <a>CATEGORIAS</a></br></br>
                <ul>
                    <li>ACCESORIOS PARA VEHICULOS</li>
                    <a>GANCHOS DE REMOLQUE</a></br>
                    <a>COLGANTES</a></br>
                    <a>STICKERS </a></br></br>
                    <li>ROPA</li>
                    <a>SUDADERAS</a></br>
                    <a>CAMISETAS</a></br></br>
                    <li>LLAVEROS</li>
                    <a>METALICOS</a></br>
                </ul>
            </section>

        </section>


        <section class="bloque3">
            <a href="./index.php" class="wippshoppText">WIP - SHOP</a><br></br>
            <img class="logoamano" src="../img/logo_footer.png" alt=""></br><br>
        </section>



        <section class="bloque456">
            <section class="bloque4">
                <p>POLITICA DE PRIVACIDAD &copy; 2023</p>
            </section>

            <section class="bloque5">
                <p>COOCKIES</p>
            </section>

            <section class="bloque6">
                <p>TERMINOS Y CONDICIONES</p>
            </section>
        </section>
    </footer>
</body>

</html>