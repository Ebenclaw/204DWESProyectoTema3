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
        <h1>Ejercicio 15</h1>
    </header>
    <main>
        <h2>Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la semana</h2>
        
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.2
             * @since 23/10/2023
             */
        
            // DECLARACION E INICIALIZACION DE VARIABLES
            // El array asociativo $aSueldos almacena los sueldos de cada dia de la semana
            $aSueldos =[
                "lunes" => 120,
                "martes" => 140,
                "miercoles" => 160,
                "jueves" => 180,
                "viernes" => 200,
                "sabado" => 220,
                "domingo" => 240
            ];
            // Las variables heredoc se usaran para imprimir la estructura de una tabla en html
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
            // La variable $sueldoSemanalLaboral almacena el sueldo total de la semana sin contar el fin de semana
            $sueldoSemanalLaboral = 0; 
            // La variable $sueldoSemanalTotal almacena el sueldo total de la semana
            $sueldoSemanalTotal = 0; 
            // Las variables $sueldoAux son variables auxiliares para recorrer el array mediante while() y dowhile()
            $sueldoAux1 = 0;
            $sueldoAux2 = 0;
            
            // Se recorre el array y se muestra por pantalla mediante diferentes metodos:
            // Con FOREACH()
            echo('<div class="ejercicio">');
            echo('<h3>Foreach():</h3>');
            echo($htmlInicioTabla);
            foreach($aSueldos as $clave => $valor) {
                print "<tr>";
                print "<td>".$clave."</td>";
                print "<td>".$valor."€</td>";
                print "</tr>";
            }
            echo($htmlFinTabla);
            echo('</div>');
            
            // Con DO{}WHILE()
            echo('<div class="ejercicio">');
            echo('<h3>DoWhile():</h3>');
            do{
                echo("<u>".key($aSueldos)."</u> = <b>".current($aSueldos)."€</b><br>");
                next($aSueldos);
            }while($sueldoAux1 != current($aSueldos));
            echo('</div>');
            
            // Con WHILE()
            echo('<div class="ejercicio">');
            echo('<h3>While():</h3>');
            reset($aSueldos);
            while($sueldoAux2 = current($aSueldos)) {
                echo("El sueldo del <u>".key($aSueldos)."</u> es de <b>".current($aSueldos)."€</b><br>");
                next($aSueldos);
            }
            echo('</div>');

            // Se recorre el array para calcular el sueldo percibido durante la semana excluyendo sabado y domingo
            foreach ($aSueldos as $dia => $sueldo) {    
                // Se excluye sábado y domingo del cálculo    
                if ($dia != "sabado" && $dia != "domingo") {        
                    $sueldoSemanalLaboral += $sueldo;     
                }
            } 
            // Se recorre el array para calcular el sueldo percibido durante toda la semana
            foreach ($aSueldos as $dia => $sueldo) {       
                $sueldoSemanalTotal += $sueldo;     
            }

            // Se imprime el sueldo laboral
            echo('<div class="ejercicio">');
            echo('El sueldo percibido durante la semana sin contar el fin de semana es: <b>'.$sueldoSemanalLaboral.'€</b>');
            echo('</div>');
            
            // Se imprime el sueldo total de la semana
            echo('<div class="ejercicio">');
            echo('El sueldo percibido durante la toda semana es: <b>'.$sueldoSemanalTotal.'€</b>');
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

