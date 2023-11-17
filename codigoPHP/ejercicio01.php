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
        <h1>Ejercicio 1</h1>
    </header>
    <main>
        <h2>Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r, var_dump)</h2>
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.1
             * @since 17/10/2023
             */
        
            // DECLARACION E INICIALIZACION DE VARIABLES
            // La variable $cadena almacena un String (Hola, que tal?)
            $cadena = "Hola, que tal? :)";
            // La variable entero almacena un numero entero (1452)
            $entero = 1452;
            // La variable real almacena un numero real (3.15)
            $real = 3.15;
            // La variable booleano alamcena un dato booleano (true o false)
            $booleano = true;
            
            // Mostrar datos por pantalla con la funcion echo()
            echo('<div class="ejercicio">');
            echo('<h3>Echo()</h3>');
            echo('La variable <u>$cadena</u> es del tipo <u>'.gettype($cadena).'</u> y tiene como valor <b>'.$cadena.'</b><br>');
            echo('La variable <u>$entero</u> es del tipo <u>'.gettype($entero).'</u> y tiene como valor <b>'.$entero.'</b><br>');
            echo('La variable <u>$real</u> es del tipo <u>'.gettype($real).'</u> y tiene como valor <b>'.$real.'</b><br>');
            echo('La variable <u>$booleano</u> es del tipo <u>'.gettype($booleano).'</u> y tiene como valor <b>'.$booleano.'</b><br>');
            echo('</div>');
            
            // Mostrar datos por pantalla con la funcion print()
            echo('<div class="ejercicio">');
            print('<h3>Print()</h3>');
            print('La variable <u>$cadena</u> es del tipo <u>'.gettype($cadena).'</u> y tiene como valor <b>'.$cadena.'</b><br>');
            print('La variable <u>$entero</u> es del tipo <u>'.gettype($entero).'</u> y tiene como valor <b>'.$entero.'</b><br>');
            print('La variable <u>$real</u> es del tipo <u>'.gettype($real).'</u> y tiene como valor <b>'.$real.'</b><br>');
            print('La variable <u>$booleano</u> es del tipo <u>'.gettype($booleano).'</u> y tiene como valor <b>'.$booleano.'</b><br>');
            echo('</div>');
            
            // Mostrar datos por pantalla con la funcion printf()
            echo('<div class="ejercicio">');
            printf('<h3>Printf()</h3>');
            printf('La variable <u>$cadena</u> es del tipo <u>%s</u> y tiene como valor <b>%s</b> <br>', gettype($cadena), $cadena);
            printf('La variable <u>$entero</u> es del tipo <u>%s</u> y tiene como valor <b>%d</b> <br>', gettype($entero), $entero);
            printf('La variable <u>$real</u> es del tipo <u>%s</u> y tiene como valor <b>%f</b> <br>', gettype($real), $real);
            printf('La variable <u>$booleano</u> es del tipo <u>%s</u> y tiene como valor <b>%b</b> <br>', gettype($booleano), $booleano);
            echo('</div>');
            
            // Mostrar datos por pantalla con la funcion print_r()
            echo('<div class="ejercicio">');
            echo('<h3>Print_r()</h3>');
            echo('La variable <u>$cadena</u> es del tipo <u>'.gettype($cadena).'</u> y tiene como valor ');
            print_r('<b>'.$cadena.'</b><br>');
            echo('La variable <u>$entero</u> es del tipo <u>'.gettype($entero).'</u> y tiene como valor ');
            print_r('<b>'.$entero.'</b><br>');
            echo('La variable <u>$real</u> es del tipo <u>'.gettype($real).'</u> y tiene como valor ');
            print_r('<b>'.$real.'</b><br>');
            echo('La variable <u>$booleano</u> es del tipo <u>'.gettype($booleano).'</u> y tiene como valor ');
            print_r('<b>'.$booleano.'</b><br>');
            echo('</div>');
            
            // Mostrar datos por pantalla con la funcion var_dump()
            echo('<div class="ejercicio">');
            echo('<h3>Var_dump()</h3>');
            var_dump($cadena);
            echo("<br>");
            var_dump($entero);
            echo("<br>");
            var_dump($real);
            echo("<br>");
            var_dump($booleano);
            echo("<br>");
            echo('</div>');
        ?>
    </main>
    <footer>
        <div id="derechos">2023-2024 © Todos los derechos reservados: <a href="../../index.html">Rebeca Sánchez Pérez</a></div>
        <div id="fotos">
            <a href="https://github.com/Ebenclaw" target="_blank"><img id="git" src="../webroot/image/GitHub.png" alt="GitHub"></a>
            <a href="http://ieslossauces.centros.educa.jcyl.es/sitio/" target="_blank"><img id="sauces" src="../webroot/image/sauces.png" alt="Sauces"></a>
            <a href="../indexProyectoTema3.php"><img id="home" src="../webroot/image/home.png" alt="Inicio"></a>
    </footer>
</body>

</html>

