<?php
$Conexion = mysqli_connect($Host,$UserBD,$PasswordBD,$BD) or die("Error de conexion a la base de datos");

// Obtener datos del formulario
$nombre = $_POST['Años'];
$nombre = $_POST['Nombre'];
$fecha = $_POST['Fecha'];
$estado = $_POST['Estado'];

// Insertar los datos en la tabla
$Consulta = "INSERT INTO asistencias (idAlumno, fechaAsistencia, tipoAsistencia) VALUES ('$nombre', '$fecha', '$estado')";

if ($Conexion->query($Consulta) === TRUE) {
    echo "Asistencia registrada exitosamente.";
} else {
    echo "Error: " . $Consulta . "<br>" . $Conexion->error;
}

?>
