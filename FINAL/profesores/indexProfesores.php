<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="Estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDE - Profesores</title>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>SIDE</h1>
        <p>Plataforma de Gestión Educativa Integral</p>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#alumnos">Alumnos</a></li>
                <li><a href="#profesores">Profesores</a></li>
                <li><a href="#directivos">Directivos</a></li>
                <li><a href="#ayuda">Ayuda</a></li>
            </ul>
        </nav>
    </header>

    <!-- Cuerpo Principal -->
    <main>
        <section id="tablero-directivos">
            <h2>Tablero de Directivos</h2>
            <p>Accede al tablero de comunicación con los directivos para visualizar reportes y anuncios importantes.</p>
        </section>

        <section id="materias">
            <h2>Materias</h2>
            <p>Listado de materias en las que estás inscrito como docente, junto con el curso y los alumnos asignados.</p>
            <!-- Ejemplo de tabla de materias -->
            <table>
                <thead>
                    <tr>
                        <th>Materia</th>
                        <th>Curso</th>
                        <th>Alumnos Inscritos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Matemáticas</td>
                        <td>3º A</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Historia</td>
                        <td>2º B</td>
                        <td>28</td>
                    </tr>
                    <!-- Agrega más filas según sea necesario -->
                </tbody>
            </table>
        </section>

        <section id="calificar">
            <h2>Calificar Alumnos</h2>
            <p>Introduce las calificaciones de los alumnos según sus asignaturas correspondientes.</p>
            <!-- Ejemplo de campo para calificar -->
            <form>
                <label for="alumno">Seleccionar Alumno:</label>
                <select id="alumno" name="alumno">
                    <option value="alumno1">Juan Pérez</option>
                    <option value="alumno2">María López</option>
                    <!-- Agrega más opciones de alumnos -->
                </select>
                <label for="calificacion">Calificación:</label>
                <input type="number" id="calificacion" name="calificacion" min="1" max="10">
                <button type="submit">Enviar Calificación</button>
            </form>
        </section>

        <section id="comunicados">
            <h2>Generar Comunicados</h2>
            <p>Envía comunicados a alumnos y padres sobre información importante relacionada a las asignaturas.</p>
            <!-- Ejemplo de formulario para comunicados -->
            <form>
                <label for="comunicado">Escribir comunicado:</label><br>
                <textarea id="comunicado" name="comunicado" rows="4" cols="50"></textarea><br>
                <button type="submit">Enviar Comunicado</button>
            </form>
        </section>

        <section id="subir-actas">
            <h2>Subir Actas y Módulos</h2>
            <p>Sube actas y módulos de las asignaturas que impartes.</p>
            <!-- Ejemplo de campo para subir archivos -->
            <form>
                <label for="acta">Subir Acta:</label>
                <input type="file" id="acta" name="acta" accept=".pdf"><br>
                <label for="modulo">Subir Módulo:</label>
                <input type="file" id="modulo" name="modulo" accept=".pdf"><br>
                <button type="submit">Subir Archivos</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>Información de contacto: Dirección, teléfono, correo electrónico.</p>
        <p><a href="#privacidad">Política de Privacidad</a> | <a href="#terminos">Términos de Servicio</a></p>
        <p>Redes sociales:
            <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
            <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
        </p>
        <p>&copy; 2024 SIDE - Todos los derechos reservados.</p>
    </footer>
</body>
</html>
