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
        <h1>Ejercicio 9</h1>
    </header>
    <main>
        <h2>Mostrar el path donde se encuentra el fichero que se está ejecutando</h2>
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.1
             * @since 17/10/2023
             */
        
            // DECLARACION E INICIALIZACION DE VARIABLES
            // La variable $archivoFile almacena el valor de la constante __FILE__ que devuelve el path del archivo
            $archivoFile = __FILE__;
            // La variable $archivoFile almacena el valor del path del archivo mediante $_SERVER
            $archivoServer = $_SERVER['SCRIPT_FILENAME'];
            
            // Se muestran las variables por pantalla
            echo('<div class="ejercicio">');
            echo('__FILE__: <b>'.$archivoFile.'</b><br>');
            echo('$_SERVER["SCRIPT_FILENAME"]: <b>'.$archivoServer.'</b><br>');
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





                
        


