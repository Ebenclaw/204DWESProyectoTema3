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
        <h1>Ejercicio 22</h1>
    </header>
    <main>
        <h2>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas</h2>
        <?php
        /*
         * @author Rebeca Sánchez Pérez
         * @version 1.0
         * @since 23/10/2023
         */
        // REVISAR
        
//        // DECLARACION E INICIALIZACION DE VARIABLES
//        // La varible $nombre recoge el valor intruducido en el campo "Nombre de usuario" del formulario
//        $nombre = $_REQUEST['Nombre'];
//        // La varible $edad recoge el valor intruducido en el campo "Edad" del formulario
//        $edad = $_REQUEST['Edad'];
//        // La varible $genero recoge el valor intruducido en el campo "Genero" del formulario
//        $altura = $_REQUEST['Altura'];
        
        // La primera condicion del if muestra el valor de las variables si el fromulario está rellenado (si se ha pulsado el boton enviar)
        if (isset($_REQUEST['enviar'])){
            // Se muestra el nombre de las variables
            echo('<div class="ejercicio">');
            echo('Usuario: <b>'.$_REQUEST['Nombre'].'</b><br>');
            echo('Edad: <b>'.$_REQUEST['Edad'].'</b><br>');
            echo('Genero: <b>'.$_REQUEST['Altura'].'</b>');
            echo('</div>');
        }else{ // Se muestra el formulario por pantalla si no ha sido rellenado
            ?>
            <div class="ejercicio">
                <h3>Registro:</h3>
                <!-- Se crea un formulario tipo post -->
                <form name= "ejercicio22" action="<?php echo $_SERVER['PHP_SELF'];?>" id="form22" method="post">
                    <label for="nombre">Nombre de usuario: </label><input type="text" name="Nombre" id="nombre"><br>
                    <label for="edad">Edad: </label><input type="text" name="Edad" id="edad"><br>
                    <label for="altura">Altura (en m): </label><input type="text" name="Altura" id="altura"><br>
                    <input type="submit" form="form22" value="Enviar" name="enviar">
                </form>
            </div>
        <?php
        }
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