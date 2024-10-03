<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Asistencia</title>
</head>
<body>
    <h2>Ingresar Asistencia</h2>
    <form action="asistencias2.php" method="POST">
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

        <input type="submit" value="Siguiente">
    </form>
</body>
</html>