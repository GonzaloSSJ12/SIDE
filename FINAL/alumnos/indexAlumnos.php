<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="Estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDE - Alumnos</title>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>SIDE</h1>
        <p>Este es el index destinado a los Alumnos</p>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#horarios">Horarios</a></li>
                <li><a href="#calificaciones">Calificaciones</a></li>
                <li><a href="#tareas">Tareas</a></li>
                <li><a href="#materiales">Materiales</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Cuerpo Principal -->
    <main>
        <section id="horarios">
            <h2>Horarios de Clases</h2>
            <p>Consulta tus horarios de clases según tu curso y materias.</p>
            <!-- Ejemplo de tabla de horarios -->
            <table>
                <thead>
                    <tr>
                        <th>Día</th>
                        <th>Hora</th>
                        <th>Materia</th>
                        <th>Aula</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lunes</td>
                        <td>08:00 - 09:30</td>
                        <td>Matemáticas</td>
                        <td>Aula 101</td>
                    </tr>
                    <tr>
                        <td>Martes</td>
                        <td>10:00 - 11:30</td>
                        <td>Historia</td>
                        <td>Aula 202</td>
                    </tr>
                    <!-- Agrega más filas según sea necesario -->
                </tbody>
            </table>
        </section>

        <section id="calificaciones">
            <h2>Calificaciones</h2>
            <p>Consulta tus calificaciones en las materias que cursas.</p>
            <!-- Ejemplo de tabla de calificaciones -->
            <table>
                <thead>
                    <tr>
                        <th>Materia</th>
                        <th>Calificación</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Matemáticas</td>
                        <td>8</td>
                        <td>Buen desempeño</td>
                    </tr>
                    <tr>
                        <td>Historia</td>
                        <td>7</td>
                        <td>Falta de entrega en una tarea</td>
                    </tr>
                    <!-- Agrega más filas según sea necesario -->
                </tbody>
            </table>
        </section>

        <section id="tareas">
            <h2>Tareas Pendientes</h2>
            <p>Revisa las tareas que tienes pendientes por entregar.</p>
            <!-- Ejemplo de lista de tareas -->
            <ul>
                <li><strong>Matemáticas:</strong> Resolver problemas del capítulo 5 (fecha límite: 15/09/2024).</li>
                <li><strong>Historia:</strong> Ensayo sobre la Revolución Francesa (fecha límite: 20/09/2024).</li>
                <!-- Agrega más tareas según sea necesario -->
            </ul>
        </section>

        <section id="materiales">
            <h2>Materiales de Estudio</h2>
            <p>Descarga los materiales de estudio proporcionados por tus profesores.</p>
            <!-- Ejemplo de enlaces de descarga -->
            <ul>
                <li><a href="matematicas_modulo.pdf" download>Modulo de Matemáticas - Capítulo 5</a></li>
                <li><a href="historia_modulo.pdf" download>Modulo de Historia - Revolución Francesa</a></li>
                <!-- Agrega más enlaces según sea necesario -->
            </ul>
        </section>

        <section id="contacto">
            <h2>Contacto con Profesores y Preceptores</h2>
            <p>Envía mensajes a tus profesores o preceptores para aclarar dudas o solicitar asistencia.</p>
            <!-- Ejemplo de formulario de contacto -->
            <form>
                <label for="contacto">Escribe tu mensaje:</label><br>
                <textarea id="contacto" name="contacto" rows="4" cols="50"></textarea><br>
                <button type="submit">Enviar Mensaje</button>
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
