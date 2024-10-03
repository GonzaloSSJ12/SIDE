<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro Matriz</title>
    <!-- Incluyendo Bootstrap para mejorar el diseño -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">

<?php
    include("conexion.php");

    // Crear conexión
    $con = mysqli_connect($host, $user, $pwd, $BD);

    // Verificar conexión
    if (!$con) {
        echo "<div class='alert alert-danger'>Conexión fallida: " . mysqli_connect_error() . "</div>";
        exit();
    }

    // Capturar DNI desde la URL con validación
    $dni = isset($_GET['alumno']) ? $_GET['alumno'] : null;

    // Validar el DNI (ejemplo: 8 dígitos)
    if (!$dni || !preg_match("/^[0-9]{8}$/", $dni)) {
        echo "<div class='alert alert-danger'>No se ha proporcionado un DNI válido.</div>";
        exit();
    }

    // Consulta segura utilizando sentencias preparadas
    $query = "SELECT 
                alumnos.DNI_alumno,
                alumnos.nombre,
                alumnos.apellido,
                alumnos.idcurso,
                curso.especialidad,
                materias.nombreMateria,
                libroMatriz.notaFinal,
                MAX(libroMatriz.fecha) AS ultima_fecha
            FROM 
                alumnos
            INNER JOIN 
                libroMatriz ON alumnos.DNI_alumno = libroMatriz.DNI_alumno
            INNER JOIN 
                materias ON libroMatriz.codigoMateria = materias.codigoMateria
            WHERE 
                alumnos.DNI_alumno = ?
            GROUP BY 
                materias.codigoMateria, libroMatriz.notaFinal";

    if ($stmt = mysqli_prepare($con, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $dni); // 's' para cadena (string)
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Verificar si hay resultados
        if (mysqli_num_rows($result) > 0) {
            // Obtener los datos del alumno (solo de la primera fila)
            $row = mysqli_fetch_array($result);
    ?>

    <!-- Mostrar los datos del alumno -->
    <div class="card mt-4">
        <div class="card-header">
            <h4>Datos del Alumno</h4>
        </div>
        <div class="card-body">
            <p><strong>DNI:</strong> <?php echo $row['DNI_alumno']; ?></p>
            <p><strong>Nombre y Apellido:</strong> <?php echo $row['nombre'] . " " . $row['apellido']; ?></p>
            <p><strong>Curso:</strong> <?php echo $row['curso']; ?></p>
            <p><strong>Especialidad:</strong> <?php echo $row['especialidad']; ?></p>
        </div>
    </div>

    <!-- Mostrar la última fecha en la que se cargaron notas -->
    <div class="mt-4">
        <h3>Boletín de Notas</h3>
        <h5>Última fecha de carga de notas: 
            <?php
                // Formatear la fecha para mostrarla en un formato legible
                $date = new DateTime($row['ultima_fecha']);
                echo $date->format('d \d\e F \d\e Y');
            ?>
        </h5>
    </div>

    <!-- Tabla de notas del alumno -->
    <table class="table table-bordered table-hover mt-3">
        <thead>
            <tr>
                <th>Materia</th>
                <th>TP</th>
                <th>Examen</th>
                <th>Concepto</th>
                <th>Promedio</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
    <?php
            // Volver al primer registro y mostrar todas las materias y notas
            mysqli_data_seek($result, 0);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["nombreMateria"] . "</td>";
                echo "<td>" . (isset($row["notaTP"]) ? $row["notaTP"] : '-') . "</td>";
                echo "<td>" . (isset($row["notaExamen"]) ? $row["notaExamen"] : '-') . "</td>";
                echo "<td>" . (isset($row["notaConcepto"]) ? $row["notaConcepto"] : '-') . "</td>";
                echo "<td>" . $row["promedio"] . "</td>";
                echo "<td>" . $row["ultima_fecha"] . "</td>";
                echo "</tr>";
            }
    ?>
        </tbody>
    </table>

    <?php
        } else {
            echo "<div class='alert alert-danger'>No se encontraron resultados para el DNI: " . $dni . "</div>";
        }

        // Cerrar el statement y la conexión
        mysqli_stmt_close($stmt);
    } else {
        echo "<div class='alert alert-danger'>Error en la consulta: " . mysqli_error($con) . "</div>";
    }

    mysqli_close($con);
    ?>

    <!-- Botón para volver -->
    <div class="text-center mt-4">
        <a href="../alumnos/listarAlumnos.php" class="btn btn-primary">VOLVER</a> 

        <!-- Formulario para agregar nuevas notas -->
        <form method="POST" action="registrar-notas-alumno.php" style="display:inline;">
            <input type="hidden" name="DNI" value="<?php echo $dni; ?>">
            <button type="submit" class="btn btn-success">
                <img src="../SVG/add.svg" alt="Agregar" width="24px" height="24px"> Agregar Nota
            </button>
        </form>
    </div>

</body>
</html>
