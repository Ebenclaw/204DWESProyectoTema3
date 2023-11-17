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
        <h1>Ejercicio 3</h1>
    </header>
    <main>
        <h2>Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime)</h2>
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.1
             * @since 17/10/2023
             */
        
            // DECLARACION E INICIALIZACION DE VARIABLES
            // Se instancia un objeto tipo DateTime que acumula la hora actual de la franja horaria de Madrid(España)
            $oFecha = new DateTime('now', new DateTimeZone('Europe/Madrid'));
            // Se crea la variable $mes a la que se le pasa el valor del objeto fecha que corresponde al mes numerico
            $mes = $oFecha->format("n");
            
            // Se crea una funcion a la que si se le pasa un numero del 1 al 12, devuelve el mes del año en español
            function obtenerMes($mes){
                $aMeses = [
                1 => "enero",
                2 => "febrero",
                3 => "marzo",
                4 => "abril",  
                5 => "mayo",
                6 => "junio",
                7 => "julio",
                8 => "agosto",
                9 => "septiembre",
                10 => "octubre",
                11 => "noviembre",
                12 => "diciembre"    
            ];
                return $aMeses[$mes];
            }
            
            // Se llama a la funcion obtenerMes() y se acumula su valor en $nombreMes
            $nombreMes = obtenerMes($mes);
            
            echo('<div class="ejercicio">');
            // Se muestra la hora formateada con dd-mm-yyyy, hh:mm:ss
            echo $oFecha->format('d-m-Y, H:i'), "<br>";
            
            // Se muestra la hora formateada con dd/mm/yy, hh:mm:ss
            echo $oFecha->format('d/m/y, H:i:s'), "<br>";
            
            // Se formatea la fecha con el fomato dd de mm de yyyy, hh:mm:ss y la mostramos
            $formateada = $oFecha->format('d') . ' de <u>' . $nombreMes . '</u> de ' . $oFecha->format(' Y, H:i:s');
            echo($formateada);
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

