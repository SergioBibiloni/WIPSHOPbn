<DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="../img/logo_footer.ico">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/estilosperfil.css">
        <title>INDEX - WIP SHOP</title>
    </head>

    <body>
        <header>
            <a class="textoheadder" href="#">WIP - SHOP
        </header>
        <hr class="separador">
        <main class="mainuser">

            <section class="bloquedat">
                <?php
                session_start();
                echo "<h2 class='textodatos'>Datos Actuales de ". $_SESSION['nombre'] ."</h2>";
                echo "<br>";
                echo "<p>Nombre:</p>";
                echo "<p>" . $_SESSION['nombre'] . "</p>";
                echo "<p>Correo:</p>";
                echo "<p>" . $_SESSION['email'] . "</p>";
                
                echo "<br>";
                echo "<form action='logout.php'>";
                echo "<button style='background-color:transparent; border: solid 1px white; color:white;; type='submit'>Cerrar sesión</button>";
                echo "</form>";
                ?>
                <section class="headeruser">
                    <button style='background-color:transparent; border: solid 1px white; color:white;' class="botoncategorias1" onclick="window.history.back()">Volver atrás</button>
                </section>
            </section>
        </main>
        <hr class="separador">
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