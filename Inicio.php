<?php
error_reporting(0);
session_start();
?>
<html>
<title>JUEBOOK</title>

<head>
    <link rel="icon" type="imagene/png" href="Imagenes/ico.png">
    <link rel="stylesheet" href="global/estilosInicio.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <audio src="Imagenes/Chevaucher.mp3" autoplay loop></audio>
</head>

<body>
    <header>
        <div class="contenedor">
            <h2 class="logotipo">JUEBOOK</h2>
            <nav>
                <a href="Inicio.php" class="activo">Inicio</a>
                <a href="Series.php">Series</a>
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
    <div class="pelicula-principal">
        <div class="contenedor">
            <h3 class="titulo">Godzilla vs Kong</h3>
            <p class="descripcion">
                Godzilla y Kong, dos de las fuerzas más poderosas de un planeta habitado por todo tipo de aterradoras criaturas, se enfrentan en un espectacular combate que sacude los cimientos de la humanidad. Monarch (Kyle Chandler) se embarca en una misión de alto riesgo y pone rumbo hacia territorios inexplorados para descubrir los orígenes de estos dos titanes, en un último esfuerzo por tratar de salvar a dos bestias que parecen tener las horas contadas sobre la faz de la Tierra.
            </p>
            <button role="button" class="boton"><a href="https://www.youtube.com/watch?v=RIKOJP9PHP0" target="_blank">Reproducir</a></button>
            <button role="button" class="boton"><a href="https://www.filmaffinity.com/es/film451274.php" target="_blank">Más información</a></button>
        </div>
    </div>
</body></html>
