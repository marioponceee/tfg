<?php
error_reporting(0);
require_once("global/db.php");

session_start();
if (isset($_POST['username'])) {
    $sql = "SELECT `id` FROM `usuarios` WHERE `email` = '" . $_POST['username'] . "' AND pass = '" . $_POST['password'] . "'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1) {
        $_SESSION['login_user'] = $_POST['username'];
        header("location: Inicio.php");
    }else{
        $error = "Usuario incorrecto!";
    }
}
?>
<html>
<title>JUEBOOK</title>

<head>
    <link rel="icon" type="imagene/png" href="Imagenes/ico.png">
    <link rel="stylesheet" href="global/estilosLogin.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="contenedor">
            <h2 class="logotipo">JUEBOOK</h2>
        </div>
    </header>
    <div class="fondo">
        <div class="login-box">
            <h1>Inicar Sesión</h1>
            <p><?php echo $error; ?></p>
            <form action="" method="POST">
                <label for="username">Usuario</label>
                <input type="text" name="username" placeholder="Enter Username">
                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Enter Password">
                <button type="submit">LOG IN</button><br>
                <a href="Registro.php">¿No estás registrado?</a>
            </form>
        </div>
    </div>
</body></html>
