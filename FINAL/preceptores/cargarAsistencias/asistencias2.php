<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Asistencia</title>
</head>
<body>
    <h2>Ingresar Asistencia</h2>
    <form action="asistencias_verificar.php" method="POST">
    <h3>Seleccione el año y curso que corresponda: </h3>
    <select name="Años" required>
            <option value="1">1ro</option>
            <option value="2">2do</option>
            <option value="3">3ro</option>
            <option value="4">4to</option>
            <option value="5">5to</option>
            <option value="6">6to</option>
            <option value="7">7mo</option>
    </select>
<?php

$Años = $_POST['Años'];


if($Años == 1){
    echo('
    <select name="Años" required>
            <option value="1">Primera</option>
            <option value="2">Segunda</option>
            <option value="3">Tercera</option>
            <option value="4">Cuarta</option>
            <option value="5">Quinta</option>
    </select><br><br>
    ');
}else
    if($Años == 2){
        echo('
        <select name="Años" required>
                <option value="1">Primera</option>
                <option value="2">Segunda</option>
                <option value="3">Tercera</option>
                <option value="4">Cuarta</option>
        </select><br><br>
        ');
}else
if($Años == 3){
    echo('
    <select name="Años" required>
            <option value="1">Primera</option>
            <option value="2">Segunda</option>
            <option value="3">Tercera</option>
            <option value="4">Cuarta</option>
    </select><br><br>
    ');
}else
//Agregar Cartel de Informatica y de Construcciones.
//<option value="1">Informatica</option>
//<option value="2">Construcciones</option>

if($Años == 4){
    echo('
    <select name="Años" required>
            <option value="1">1ra</option>
            <option value="1">2da</option>
    </select><br><br>
    ');
}else
if($Años == 5){
    echo('
    <select name="Años" required>
            <option value="1">Informatica</option>
            <option value="2">Construcciones</option>
    </select><br><br>
    ');
}else
if($Años == 6){
    echo('
    <select name="Años" required>
            <option value="1">Informatica</option>
            <option value="2">Construcciones</option>
    </select><br><br>
    ');
}else
if($Años == 7){
    echo('
    <select name="Años" required>
            <option value="1">Informatica</option>
            <option value="2">Construcciones</option>
    </select><br><br>
    ');
}
?>
        <input type="submit" value="Registrar Asistencia">
    </form>
</body>
</html>