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
        <h1>Ejercicio 7</h1>
    </header>
    <main>
        <h2>Mostrar el nombre del fichero que se está ejecutando</h2>
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.2
             * @since 19/10/2023
             */
        
            // DECLARACION E INICIALIZACION DE VARIABLES
            // La variable $nombreBasename devuelve "ejercicio07.php"
            $nombreBasename = basename("ejercicio07.php");
            // Las siguientes varibles almacenan el nombre del fichero mediante diferentes valores de la variable superglobal $_SERVER 
            $nombreServer1 = $_SERVER['PHP_SELF'];
            $nombreServer2 = $_SERVER['REQUEST_URI'];
            $nombreServer3 = $_SERVER['SCRIPT_NAME'];
            $nombreServer4 = $_SERVER['SCRIPT_FILENAME'];
            
            
            // Se muestra el valor de las variables
            echo('<div class="ejercicio">');
            echo('basename(): <b>'.$nombreBasename.'</b><br>');
            echo('$_SERVER["PHP_SELF"]: <b>'.$nombreServer1.'</b><br>');
            echo('$_SERVER["REQUEST_URI"]: <b>'.$nombreServer2.'</b><br>');
            echo('$_SERVER["SCRIPT_NAME"]: <b>'.$nombreServer3.'</b><br>');
            echo('$_SERVER["SCRIPT_FILENAME"]: <b>'.$nombreServer4.'</b><br>');
            echo('<div>');
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

