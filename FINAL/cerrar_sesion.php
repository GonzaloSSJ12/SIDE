<?php
    session_start(); // Inicia la sesión
    session_unset(); // Libera todas las variables de sesión
    session_destroy(); // Destruye la sesión
    header("Location: login.php"); // Redirige a la página de inicio
    exit();
?>
