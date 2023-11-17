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
        <h1>Ejercicio 12</h1>
    </header>
    <main>
        <h2>Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach())</h2>
        <?php
            /*
             * @author Rebeca Sánchez Pérez
             * @version 1.2
             * @since 06/11/2023
             */
        
            // DECLARACION E INICIALIZACION DE VARIABLES
            $value="valor";
            $_SESSION["nuevasesion"]=$value;
             
            // Se recorre la variable server y se imprime por pantalla con print_r()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_SERVER</u> con print_r():</h3>');
            print_r($_SERVER);
            echo('</div>');
            
            // Se recorre la variable server y se imprime por pantalla con foreach()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_SERVER</u> con foreach():</h3>');
            foreach($_SERVER as $clave => $valor){
                print_r("$clave => $valor,<br>");
            }
            echo('</div>');
            
            // Se recorre la variable globals y se imprime por pantalla con print_r()
            echo('<div class="ejercicio">');
            echo('<h3><u>$GLOBALS</u> con print_r():</h3>');
            print_r($GLOBALS);
            echo('</div>');
            
            // Se recorre la variable globals y se imprime por pantalla con foreach()
            echo('<div class="ejercicio">');
            echo('<h3><u>$GLOBALS</u> con foreach():</h3>');
            foreach ($GLOBALS as $key => $valor) {
                foreach ($valor as $clave => $valor2) {
                    echo "$clave => $valor2<br>";
                }
            }
            echo('</div>');
            
            // Se recorre la variable get y se imprime por pantalla con print_r()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_GET</u> con print_r():</h3>');
            print_r($_GET);
            echo('</div>');
            
            // Se recorre la variable get y se imprime por pantalla con foreach()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_GET</u> con foreach():</h3>');
            foreach($_GET as $clave => $valor){
                print_r("$clave => $valor,<br>");
            }
            echo('</div>');
            
            // Se recorre la variable post y se imprime por pantalla con print_r()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_POST</u> con print_r():</h3>');
            print_r($_POST);
            echo('</div>');
            
            // Se recorre la variable post y se imprime por pantalla con foreach()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_POST</u> con foreach():</h3>');
            foreach($_POST as $clave => $valor){
                print_r("$clave => $valor,<br>");
            }
            echo('</div>');
            
            // Se recorre la variable files y se imprime por pantalla con print_r()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_FILES</u> con print_r():</h3>');
            print_r($_FILES);
            echo('</div>');
            
            // Se recorre la variable files y se imprime por pantalla con foreach()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_FILES</u> con foreach():</h3>');
            foreach($_FILES as $clave => $valor){
                print_r("$clave => $valor,<br>");
            }
            echo('</div>');
            
            // Se recorre la variable cookie y se imprime por pantalla con print_r()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_COOKIE</u> con print_r():</h3>');
            print_r($_COOKIE);
            echo('</div>');
            
            // Se recorre la variable cookie y se imprime por pantalla con foreach()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_COOKIE</u> con foreach():</h3>');
            foreach($_COOKIE as $clave => $valor){
                print_r("$clave => $valor,<br>");
            }
            echo('</div>');
            
            // Se recorre la variable session y se imprime por pantalla con print_r()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_SESSION</u> con print_r():</h3>');
            print_r($_SESSION);
            echo('</div>');
            
            // Se recorre la variable session y se imprime por pantalla con foreach()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_SESSION</u> con foreach():</h3>');
            foreach($_SESSION as $clave => $valor){
                print_r("$clave => $valor,<br>");
            }
            echo('</div>');
            
            // Se recorre la variable request y se imprime por pantalla con print_r()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_REQUEST</u> con print_r():</h3>');
            print_r($_REQUEST);
            echo('</div>');
            
            // Se recorre la variable request y se imprime por pantalla con foreach()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_REQUEST</u> con foreach():</h3>');
            foreach($_REQUEST as $clave => $valor){
                print_r("$clave => $valor,<br>");
            }
            echo('</div>');
            
            // Se recorre la variable env y se imprime por pantalla con print_r()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_ENV</u> con print_r():</h3>');
            print_r($_ENV);
            echo('</div>');
            
            // Se recorre la variable env y se imprime por pantalla con foreach()
            echo('<div class="ejercicio">');
            echo('<h3><u>$_ENV</u> con foreach():</h3>');
            foreach($_ENV as $clave => $valor){
                print_r("$clave => $valor,<br>");
            }
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

