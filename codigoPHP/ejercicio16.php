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
        <h1>Ejercicio 16</h1>
    </header>
    <main>
        <h2>Recorrer el array anterior utilizando funciones para obtener el mismo resultado</h2>
        
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.4
             * @since 24/10/2023
             */
        
            // DECLARACION E INICIALIZACION DE VARIABLES
            // El array asociativo $aSueldos almacena los sueldos de cada dia de la semana
            $aSueldos =[
                'lunes' => 120,
                'martes' => 140,
                'miercoles' => 160,
                'jueves' => 180,
                'viernes' => 200,
                'sabado' => 220,
                'domingo' => 240
            ];
            // Las variables heredoc se usaran para imprimir la esctrutura de una tabla en html
            $htmlInicioTabla = <<<HIT
            <table class="ej16">
                <tbody>
                    <tr>
                        <th>Dia de la semana</th>
                        <th>Sueldo</th>
                    </tr>
            HIT;
            $htmlFinTabla = <<<HFT
                </tbody>
            </table>
            HFT;
            
            // Se crea una funcion que imprime por pantalla el array en forma de tabla
            function recorrerArrayTabla($arrayARecorrer){
                reset($arrayARecorrer);
                while (key($arrayARecorrer)!=''){
                    echo('<tr><td>'.key($arrayARecorrer).'</td><td>'.current($arrayARecorrer).'€</td></tr>');
                    next($arrayARecorrer);
                }
            }
            
            // Se crea una funcion que calcula el sueldo total semanal
            function sumarTotalSueldos($arrayARecorrer){
                $sueldoSemanalTotal=0;
                reset($arrayARecorrer);
                while (key($arrayARecorrer)!=''){
                    $sueldoSemanalTotal += current($arrayARecorrer); 
                    next($arrayARecorrer);
                }
                return $sueldoSemanalTotal;
            }
            
            // Se crea una funcion que calcula el sueldo semanal excluyendo el fin de semana
            function sumarSueldosLaborales($arrayARecorrer){
                $sueldoSemanalLaboral=0;
                reset($arrayARecorrer);
                while (key($arrayARecorrer)!='sabado'){
                    $sueldoSemanalLaboral += current($arrayARecorrer); 
                    next($arrayARecorrer);
                }
                return $sueldoSemanalLaboral;
            }
            
            // Se muestra el array llamando a la funcion recorrerArrayTabla
            echo('<div class="ejercicio">');
            echo($htmlInicioTabla);
            echo(recorrerArrayTabla($aSueldos));
            echo($htmlFinTabla);
            echo('</div>');
            
            // Se imprime el sueldo laboral
            echo('<div class="ejercicio">');
            echo('El sueldo percibido durante la semana sin contar el fin de semana es: <b>'.sumarSueldosLaborales($aSueldos).'€</b>');
            echo('</div>');
            
            // Se imprime el sueldo total de la semana
            echo('<div class="ejercicio">');
            echo('El sueldo percibido durante la toda semana es: <b>'.sumarTotalSueldos($aSueldos).'€</b>');
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

