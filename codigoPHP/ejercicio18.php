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
        <h1>Ejercicio 18</h1>
    </header>
    <main>
        <h2>Recorrer el array anterior utilizando funciones para obtener el mismo resultado</h2>
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.1
             * @since 06/11/2023
             */
            // NO SE HACERLO CON FUNCIONES

            // DECLARACION E INICIALIZACION DE VARIABLES
            // Se declara un array bidimensional para representar el teatro
            $aTeatro = [];
            // La variable $filas almacena el numero de filas que tiene la matriz
            $filas = 20;
            // La variable $asientos almacena el numero de columnas que tiene la matriz
            $asientos = 15;
            // Se inicializa el array con algunos asientos ocupados
            $aTeatro[2][4] = "Rebeca";
            $aTeatro[5][8] = "Alvaro";
            $aTeatro[10][12] = "Ismael";
            $aTeatro[15][6] = "Borja";
            $aTeatro[18][10] = "Carlos";
            
            // Se recorre el array con foreach() para mostrar los asientos ocupados
            echo('<div class="ejercicio">');
            echo('<h3>Foreach():</h3>');
//            foreach ($aTeatro as $fila => $asientos) {
//                foreach ($asientos as $asiento => $persona) {
//                    echo('Fila <u>'. $fila.'</u>, Asiento <u>'. $asiento.'</u>: <b>'. $persona.'</b><br>');
//                }
//            }
            echo('</div>');
            
            // Se recorre el array con while() para mostrar los asientos ocupados
            echo('<div class="ejercicio">');
            echo('<h3>While():</h3>');
//            reset($aTeatro);
//            while (key($aTeatro)!=''){
//                echo(key($aTeatro).'='.current($aTeatro));
//                    next($aTeatro);
//            }
            echo('</div>');

            // Se recorre el array con for() para mostrar los asientos ocupados
            echo('<div class="ejercicio">');
            echo('<h3>For():</h3>');
//            for ($fila = 1; $fila <= 20; $fila++) {
//                for ($asiento = 1; $asiento <= 15; $asiento++) {
//                    if (isset($aTeatro[$fila][$asiento])) {
//                        echo('Fila <u>'. $fila.'</u>, Asiento <u>'. $asiento.'</u>: <b>' . $aTeatro[$fila][$asiento] . '</b><br>');
//                    }
//                }
//            }
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