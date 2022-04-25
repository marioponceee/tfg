<?php
//Importamos conexion a db
require_once("global/db.php");

if (isset($_POST['nombre'])) {
    $consulta="SELECT * FROM `usuarios` WHERE `email`= '". $_POST['correo'] ."';";
    $resultado = mysqli_query($conn, $consulta) or die (mysqli_error());
    if (mysqli_num_rows($resultado) == 0)
    {
        $query = "INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `pass`) VALUES (NULL, 
    '" . $_POST['nombre'] . "', 
    '" . $_POST['apellidos'] . "', 
    '" . $_POST['correo'] . "', 
    '" . $_POST['password'] . "');";
    mysqli_query($conn, $query);
    $msg = "Usuario registrado!";
    }else{
        $msg = "Email existente!";
    }
}
?>
<html>
<title>JUEBOOK</title>
<style>
    .form-register .botons {
        width: 100%;
        background: #E50914;
        border: none;
        padding: 12px;
        color: white;
        margin: 16px 0;
        font-size: 16px;
    }

    .controls {
        width: 100%;
        background-color: black;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 16px;
        border: 1px solid #E50914;
        font-family: 'calibri';
        font-size: 18px;
        color: white;
    }
</style>

<head>
    <link rel="icon" type="imagene/png" href="Imagenes/ico.png">
    <link rel="stylesheet" href="global/estilosRegistro.css" type="text/css">
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
                <a href="Peliculas.php">Pel&iacute;culas</a>
                <a href="MiLista.php">Mi Lista</a>
                <a href="login.php">Acceso</a>
                <a href="Registro.php" class="activo">Registrarse</a>
            </nav>
        </div>
    </header>

    <section class="form-register">
        <h4>Formulario Registro</h4>
        <?php if (isset($_POST['nombre'])) { ?>
            <p style="color: green;"><?php echo $msg; ?></p>
        <?php } ?>
        <form action="" method="POST">
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
            <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
            <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
            <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
            <input type="checkbox">Estoy de acuerdo con <a href="#">Terminos y Condiciones</a>
            <a href="Inicio.php"><input class="botons" type="submit" value="Registrar"></a>
            <p><a href="Login.php">¿Ya tengo Cuenta?</a></p>
        </form>
    </section>



</body></html>
