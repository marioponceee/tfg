<?php
session_start();
if (is_null($_SESSION['login_user'])) {
    header("Location: acceso.php");
 }
    echo $_SESSION['login_user'];
?>