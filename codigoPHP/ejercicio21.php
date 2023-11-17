<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/css/style.css">
    <link rel="icon" type="image/x-icon" href="../webroot/image/flora.png">
    <title>Rebeca Sánchez Pérez</title>
</head>

<body>
    <header>
        <a href="../../index.html"><img id="logo" src="../webroot/image/logo.png" alt="Logo"></a>
        <h1>Ejercicio 21</h1>
    </header>
    <main>
        <!-- 
        @author Rebeca Sánchez Pérez
        @version 1.1
        @since 23/10/2023
        -->
        <h2>Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas</h2>
        <!-- Se crea un formulario tipo post -->
        <div class="ejercicio">
            <h3>Registro:</h3>
            <form name= "ejercicio21" action="tratamiento.php" id="formTratamiento" method="post">
                <label for="nombre">Nombre de usuario: </label><input type="text" name="Nombre" id="nombre"><br>
                <label for="edad">Edad: </label><input type="text" name="Edad" id="edad"><br>
                <label for="altura">Altura (en m): </label><input type="text" name="Altura" id="altura"><br>
                <input type="submit" form="formTratamiento" value="Enviar" name="enviar">
            </form>
        </div>
    </main>
    <footer>
        <div id="derechos">2023-2024 © Todos los derechos reservados: <a href="../../index.html">Rebeca Sánchez Pérez</a></div>
        <div id="fotos">
            <a href="https://github.com/Ebenclaw" target="_blank"><img id="git" src="../webroot/image/GitHub.png" alt="GitHub"></a>
            <a href="http://ieslossauces.centros.educa.jcyl.es/sitio/" target="_blank"><img id="sauces" src="../webroot/image/sauces.png" alt="Sauces"></a>
            <a href="../indexProyectoTema3.php"><img id="home" src="../webroot/image/home.png" alt="Inicio"></a>
        </div>
    </footer>
</body>

</html>