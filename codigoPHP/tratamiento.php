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
        <h1>Tratamiento</h1>
    </header>
    <main>
        <h2>Resultado del formulario</h2>
        <?php
        /*
         * @author Rebeca Sánchez Pérez
         * @version 1.1
         * @since 23/10/2023
         */
        
        // DECLARACION E INICIALIZACION DE VARIABLES
        // La varible $nombre recoge el valor intruducido en el campo "Nombre de usuario" del formulario al que esta asociado este fichero (ejercicio21.php)
        $nombre = $_REQUEST['Nombre'];
        // La varible $edad recoge el valor intruducido en el campo "Edad" del formulario al que esta asociado este fichero (ejercicio21.php)
        $edad = $_REQUEST['Edad'];
        // La varible $genero recoge el valor intruducido en el campo "Genero" del formulario al que esta asociado este fichero (ejercicio21.php)
        $altura = $_REQUEST['Altura'];

        // Se muestra el nombre de las variables
        echo('<div class="ejercicio">');
        echo('Usuario: <b>'.$nombre.'</b><br>');
        echo('Edad: <b>'.$edad.'</b><br>');
        echo('Genero: <b>'.$altura.'</b>');
        echo('</div>');
        ?>
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