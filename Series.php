<?php
session_start();
if (is_null($_SESSION['login_user'])) {
    header("Location: login.php");
}
?>
<html>
<title>JUEBOOK</title>

<head>
    <link rel="icon" type="imagene/png" href="Imagenes/ico.png">
    <link rel="stylesheet" href="global/estilosSeries.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="contenedor">
            <h2 class="logotipo">JUEBOOK</h2>
            <nav>
                <a href="Inicio.php">Inicio</a>
                <a href="Series.php" class="activo">Series</a>
                <a href="Peliculas.php">Pel&iacute;culas</a>
                <a href="MiLista.php">Mi Lista</a>
                <?php
                if (is_null($_SESSION['login_user'])) {
                ?>
                <a href="login.php">Acceso</a>
                <a href="Registro.php">Registrarse</a>
            <?php }else{
                echo "<a>Bienvenido " . $_SESSION['login_user'] . "!</a>";
            }
            ?>
            </nav>
        </div>
    </header>
    <div class="contenedor">
        <div class="serie1">
            <a href="https://www.pelisplus2.me/serie/juego-de-tronos/" target="_blank">
                <img src="global/Imagenes/JDTronos.jpg" width="210px" height="290px" title="JUEGO DE TRONOS">
            </a>
        </div>

        <div class="serie2">
            <a href="https://www.pelisplus2.me/serie/the-walking-dead/" target="_blank">
                <img src="global/Imagenes/TWD.jpg" width="210px" height="290px" title="THE WALKING DEAD">
            </a>
        </div>
        <div class="serie3">
            <a href="https://www.pelisplus2.me/serie/vikingos/" target="_blank">
                <img src="global/Imagenes/VIKINGOS.jpg" width="210px" height="290px" title="VIKINGOS">
            </a>
        </div>
        <div class="serie4">
            <a href="https://www.pelisplus2.me/serie/spartacus/" target="_blank">
                <img src="global/Imagenes/SPARTACUS.jpg" width="210px" height="290px" title="SPARTACUS">
            </a>
        </div>
        <div class="serie5">
            <a href="https://www.pelisplus2.me/serie/locke-key/" target="_blank">
                <img src="global/Imagenes/L&K.jpg" width="210px" height="290px" title="LOCKE & KEY">
            </a>
        </div>
        <div class="serie6">
            <a href="https://www.pelisplus2.me/serie/riverdale/" target="_blank">
                <img src="global/Imagenes/RIVERDALE.jpg" width="210px" height="290px" title="RIVERDALE">
            </a>
        </div>
        <div class="serie7">
            <a href="https://www.pelisplus2.me/serie/breaking-bad/" target="_blank">
                <img src="global/Imagenes/BB.jpg" width="210px" height="290px" title="BREAKING BAD">
            </a>
        </div>
        <div class="serie8">
            <a href="https://www.pelisplus2.me/serie/stranger-things/" target="_blank">
                <img src="global/Imagenes/ST.jpg" width="210px" height="290px" title="STRANGER THINGS">
            </a>
        </div>
        <div class="serie9">
            <a href="https://www.pelisplus2.me/serie/la-casa-de-papel/" target="_blank">
                <img src="global/Imagenes/LCDP.jpg" width="210px" height="290px" title="LA CASA DE PAPEL">
            </a>
        </div>
        <div class="serie10">
            <a href="https://www.pelisplus2.me/serie/elite/" target="_blank">
                <img src="global/Imagenes/ELITE.jpg" width="210px" height="290px" title="ÉLITE">
            </a>
        </div>
        <div class="serie11">
            <a href="https://www.pelisplus2.me/serie/peaky-blinders/" target="_blank">
                <img src="global/Imagenes/PB.jpg" width="210px" height="290px" title="PEAKY BLINDERS">
            </a>
        </div>
        <div class="serie12">
            <a href="https://www.pelisplus2.me/serie/el-mundo-oculto-de-sabrina/" target="_blank">
                <img src="global/Imagenes/SABRINA.jpg" width="210px" height="290px" title="SABRINA">
            </a>
        </div>
    </div>
</body></html>
