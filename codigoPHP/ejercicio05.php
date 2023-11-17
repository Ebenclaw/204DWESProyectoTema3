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
        <h1>Ejercicio 5</h1>
    </header>
    <main>
        <h2>Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)</h2>
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.2
             * @since 17/10/2023
             */
        
            // DECLARACION E INICIALIZACION DE VARIABLES
            // La variable $timeStamp almacena el timestamp generado por time()
            $timeStamp = time();
            // Se instancia el objeto $oTimeStamp que almacena un DateTime()
            $oTimeStamp = new DateTime();
            // Se instancia el objeto $oFechaConcreta que almacena una fecha concreta (17-10-2023) creada mediante DateTime()
            $oFechaConcreta = new DateTime('2023-10-17');
            
            // Se pasa $timeStamp a una fecha legible
            $time = date('Y-m-d', $timeStamp);
            
            // Se muestran las horas por pantalla
            echo('<div class="ejercicio">');
            echo('Timestamp de '.$time.' con time(): <b>'.$timeStamp.'</b><br>');
            echo('Timestamp de '.$oTimeStamp->format('Y-m-d').' con DateTime(): <b>'.$oTimeStamp->getTimestamp().'</b><br>');
            echo('Timestamp de una fecha concreta con DateTime(): <b>'.$oFechaConcreta->getTimestamp().'</b>');
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

