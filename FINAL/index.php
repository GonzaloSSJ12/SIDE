<?php
    include('session_manager.php');
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="cerrar_sesion.php" method="post">
            <button type="submit">Cerrar sesión</button>
        </form>
        <h1>Bienvenid@: <?php print($_SESSION['APELLIDO'].", ".$_SESSION['NOMBRE']);?></h1>
        <h2><?php print("DNI:".$_SESSION['USERNAME'])?></h2>
        <?php
            if($_SESSION['PERMISO'] == "Invitado") { // invitados
                include('./invitados/indexInvitados.php');
            }else if($_SESSION['PERMISO'] == "Padre") { // padres
                include('./padres/indexPadres.php');
            }else if($_SESSION['PERMISO'] == "Alumno") { // alumnos
                include('./alumnos/indexAlumnos.php');
            }else if($_SESSION['PERMISO'] == "Preceptor") { // preceptores
                include('./preceptores/indexPreceptores.php');
            }else if($_SESSION['PERMISO'] == "Profesor") { // Profesores
                include('./profesores/indexProfesores.php');
            }else if($_SESSION['PERMISO'] == "Directivo") { // Directores
                include('./directivos/indexDirectivos.php');
            }else if($_SESSION['PERMISO'] == "Administrador") { // Administrador
                include('./invitados/indexInvitados.php');
                echo(str_repeat('<b>Linea divisora</b>--',10));
                include('./padres/indexPadres.php');
                echo(str_repeat('<b>Linea divisora</b>--',10));
                include('./alumnos/indexAlumnos.php');
                echo(str_repeat('<b>Linea divisora</b>--',10));
                include('./preceptores/indexPreceptores.php');
                echo(str_repeat('<b>Linea divisora</b>--',10));
                include('./profesores/indexProfesores.php');
                echo(str_repeat('<b>Linea divisora</b>--',10));
                include('./directivos/indexDirectivos.php');                
            }
        ?>
    </body>
</html>

