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
        <h1>Ejercicio 17</h1>
    </header>
    <main>
        <h2>Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan</h2>
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.1
             * @since 18/10/2023
             */

            // DECLARACION E INICIALIZACION DE VARIABLES
            // Se declara un array bidimensional para representar el teatro
            $aTeatro[][];
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
            echo('Asientos ocupados (foreach()):<br>');
            foreach ($aTeatro as $filas => $asientos) {
                foreach ($asientos as $asiento => $persona) {
                    echo('Fila '.$filas.', Asiento '.$asiento.': '.$persona.'<br>');
                }
            }
            
            // Se recorre el array con while() para mostrar los asientos ocupados
            echo('<br>Asientos ocupados (while()):<br>');
            reset($aTeatro);
            while (list($fila, $asientos) = each($aTeatro)) {
                while (list($asiento, $persona) = each($asientos)) {
                    echo('Fila $fila, Asiento '.$asiento.': '.$persona.'<br>');
                }
            }

            // Recorrer el array con for() para mostrar los asientos ocupados
            echo('<br>Asientos ocupados (for()):<br>');
            for ($fila = 1; $fila <= $filas; $fila++) {
                for ($asiento = 1; $asiento <= $asientos_por_fila; $asiento++) {
                    if (isset($aTeatro[$fila][$asiento])) {
                        echo('Fila '.$fila.', Asiento '.$asiento.': '.$aTeatro[$fila][$asiento].'<br>');
                    }
                }
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