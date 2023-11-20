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
             * @version 1.0
             * @since 20/11/2023
             */
            
             /**
            * 
            * Funcion comprobarMayusculas
            * 
            * Funcion que compueba si el parametro recibido (tipo String) esta compuesto por caracteres en mayusculas
            * 
            * @author Rebeca Sánchez Pérez
            * @version 1.0 Creacion de la funcion
            * @since 2023-11-20
            * @param string $cadena Cadena que se va a comprobar.
            * @param int $maxTamanio Tamaño máximo de la cádena.
            * @param int $minTamanio Tamaño mínimo de la cadena.
            * @param boolean $obligatorio Valor booleano indicado mediante 1, si es obligatorio o 0 si no lo es.
            * @return null|string Devuelve null si es correcto o un mensaje de error en caso de que lo haya.
            */
        
            function comprobarMayusculas($cadena, $maxTamanio = 1000, $minTamanio = 1, $obligatorio = 0){
                // Se comprueba que cadena sea mayuscula con ctype_upper()
                if (!ctype_upper($cadena)) {
                    $mensajeError = "Solo se admiten mayusculas";
                }
                
                // Si comprueba si esta vacia la cadena de texto si es obligatorio ($obligatorio=1)
                if ($obligatorio == 1) {
                    $mensajeError = self::comprobarNoVacio($cadena);
                }
                
                // Se comprueba que la cadena de texto cumpla con los valores de longitud maxima y minima
                $mensajeError .= self::comprobarMaxTamanio($cadena, $maxTamanio);
                $mensajeError .= self::comprobarMinTamanio($cadena, $minTamanio);
                
                // Se devulve el mensaje de error
                return $mensajeError;
            }
            
            // Ejemplo para comprobar la funcionalidad de comprobarMayusculas()
            echo comprobarMayusculas('asd');
            
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