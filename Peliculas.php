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
    <link rel="stylesheet" href="global/estilosPeliculas.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="contenedor">
            <h2 class="logotipo">JUEBOOK</h2>
            <nav>
                <a href="Inicio.php">Inicio</a>
                <a href="Series.php">Series</a>
                <a href="Peliculas.php" class="activo">Pel&iacute;culas</a>
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
        <div class="pelicula1"  width="210px" height="290px">
            <a href="https://www.pelisplus2.me/pelicula/bad-boys-for-life/" target="_blank">
                <img src="global/Imagenes/BADBOYS.jpg" width="210px" height="290px" title="BAD BOYS FOR LIFE">
            </a>
        </div>

        <div class="pelicula2">
            <a href="https://www.pelisplus2.me/pelicula/guason/" target="_blank">
                <img src="global/Imagenes/JOKER.jpg" width="210px" height="290px" title="JOKER">
            </a>
        </div>
        <div class="pelicula3">
            <a href="https://www.pelisplus2.me/pelicula/jovenes-brujas-nueva-hermandad/" target="_blank">
                <img src="global/Imagenes/JYB.jpg" width="210px" height="290px" title="JÓVENES Y BRUJAS">
            </a>
        </div>
        <div class="pelicula4">
            <a href="https://www.pelisplus2.me/pelicula/malasana-32/" target="_blank">
                <img src="global/Imagenes/MALASA%C3%91A.jpg" width="210px" height="290px" title="MALASAÑA 32">
            </a>
        </div>
        <div class="pelicula5">
            <a href="https://www.pelisplus2.me/pelicula/el-hombre-invisible-oojss5c/" target="_blank">
                <img src="global/Imagenes/EHI.jpg" width="210px" height="290px" title="EL HOMBRE IMVISIBLE">
            </a>
        </div>
        <div class="pelicula6">
            <a href="https://www.pelisplus2.me/pelicula/365-dias/" target="_blank">
                <img src="global/Imagenes/365DIAS.jpg" width="210px" height="290px" title="365 DÍAS">
            </a>
        </div>
        <div class="pelicula7">
            <a href="https://www.pelisplus2.me/pelicula/mulan-2020-oow5cvp/" target="_blank">
                <img src="global/Imagenes/MULAN.jpg" width="210px" height="290px" title="MULÁN">
            </a>
        </div>
        <div class="pelicula8">
            <a href="https://www.pelisplus2.me/pelicula/1917/" target="_blank">
                <img src="global/Imagenes/1917.jpg" width="210px" height="290px" title="1917">
            </a>
        </div>
        <div class="pelicula9">
            <a href="https://www.pelisplus2.me/pelicula/rapidos-y-furiosos-hobbs-y-shaw-oogkn9t/" target="_blank">
                <img src="global/Imagenes/F&F.jpg" width="210px" height="290px" title="FAST & FURIOUS: HOBBS & SHAW">
            </a>
        </div>
        <div class="pelicula10">
            <a href="https://www.pelisplus2.me/pelicula/after-en-mil-pedazos/" target="_blank">
                <img src="global/Imagenes/AFTER.jpg" width="210px" height="290px" title="AFTER">
            </a>
        </div>
        <div class="pelicula11">
            <a href="https://www.pelisplus2.me/pelicula/padre-no-hay-mas-que-uno/" target="_blank">
                <img src="global/Imagenes/PADRE.jpg" width="210px" height="290px" title="PADRE NO HAY MÁS QUE UNO">
            </a>
        </div>
        <div class="pelicula12">
            <a href="https://www.pelisplus2.me/pelicula/inyectado-en-sangre/" target="_blank">
                <img src="global/Imagenes/BLOODSHOT.jpg" width="210px" height="290px" title="BLOODSHOT">
            </a>
        </div>
    </div>
</body></html>
