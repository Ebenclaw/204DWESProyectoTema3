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
        <h1>Ejercicio 6</h1>
    </header>
    <main>
        <h2>Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días</h2>
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.1
             * @since 17/10/2023
             */
        
            // DECLARACION E INICIALIZACION DE VARIABLES
            // La variable $fecha tiene el valor de la fecha actual
            $fecha = date('d-m-Y');
            
            // Se declara una nueva variable cuyo valor sera la fecha actual mas 60 dias
            $futuro = date('d-m-Y', strtotime($fecha."+60 days"));
            
            // Se muestran ambas fechas
            echo('<div class="ejercicio">');
            echo("Fecha actual: <b>$fecha</b><br>");
            echo("Fecha dentro de 60 dias: <b>$futuro</b>");
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

