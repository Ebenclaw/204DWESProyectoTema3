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
        <h1>Ejercicio 24</h1>
    </header>
    <main>
        <h2>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas</h2>
        <?php
        /*
         * @author Rebeca Sánchez Pérez
         * @version 1.4
         * @since 06/11/2023
         */
        
        // DECLARACION E INICIALIZACION DE VARIABLES
        // Se incuye la libreria de validacion para usar los metodos de validacion de las entradas del formulario
        require_once '../core/231018libreriaValidacion.php';
        // La varible $entradaOK es un interruptor que recibe el valor true cuando no existe ningun error en la entrada
        $entradaOK = true;
        // El array $aRespuestas almacena los valores que son introducidos en cada input del formulario
        $aRespuestas =[
            'nombre' => '',
            'nacimiento' => '',
            'altura' => '',
            'fechaActual' => ''
        ];
        // El array $aErrores almacena los valores que no cumplan los requisitos que se hayan introducido en el formulario
        $aErrores = [
            'nombre' => '',
            'nacimiento' => '',
            'altura' => ''        
        ];
        //Se instancia el objeto $oTimeStamp que almacena un DateTime() con la hora actual que será un campo fijo en el fomulario
        $oTimeStamp = new DateTime('now', new DateTimeZone('Europe/Madrid'));
        
        
        // Si el fromulario ha sido rellenado, se valida la entrada
        if (isset($_REQUEST['enviar'])){
            // VALIDACIONES
            // Se comprueba que el valor introducido en el campo 'nombre' sea un valor alfabetico, si no lo es, se añade un mensaje de error al array $aErrores
            $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],100,1,1);
                
            // Se comprueba que el valor introducido en el campo 'nacimiento' sea una fecha, si no lo es, se añade un mensaje de error al array $aErrores
            $aErrores['nacimiento'] = validacionFormularios::validarFecha($_REQUEST['nacimiento'],$fechaMax = $oTimeStamp->format("d/m/Y"),'01/01/1900',1);
            
            // Se comprueba que el valor introducido en el campo 'altura' sea un numero real, si no lo es, se añade un mensaje de error al array $aErrores
            $aErrores['altura'] = validacionFormularios::comprobarFloat($_REQUEST['altura'],4,0.5,0);
            
            // Se recorre el array de errores 
            foreach($aErrores as $campo => $error){
                // Si existe algun error se cambia el valor de $entradaOK a false y se limpia ese campo
                if($error != null){
                    $_REQUEST[$campo] = '';
                    $entradaOK = false;
                }
            }
            
        // Si el formulario NUNCA ha sido rellenado, se inicializa $entradaOK a false    
        }else{ 
            $entradaOK = false;
        }
        
        // Si todos los valores intruducidos son correctos, se muestran los campos del formulario y sus respuestas
        if ($entradaOK){
            // TRATAMIENTO DE DATOS
            // Se añaden al array $aRespuestas las respuestas cuando son correctas
            $aRespuestas['nombre'] = $_REQUEST['nombre'];
            $aRespuestas['nacimiento'] = $_REQUEST['nacimiento'];
            $aRespuestas['altura'] = $_REQUEST['altura'];
            $aRespuestas['fechaActual'] = $oTimeStamp->format('d/m/Y');
            
            // Se muestran por pantalla los valores del formulario
            echo('<div class="ejercicio">');
            echo('Usuario: <b>'.$aRespuestas['nombre'].'</b><br>');
            echo('Fecha de nacimiento: <b>'.$aRespuestas['nacimiento'].'</b><br>');
            echo('Altura: <b>'.$aRespuestas['altura'].'</b><br>');
            echo('Fecha Actual: <b>'.$aRespuestas['fechaActual'].'</b><br>');
            echo('</div>');
            
        // Si no son correctos los valores de entrada, se muestra el formulario    
        }else{ 
            ?> 
            <div class="ejercicio">
                <h3>Registro:</h3>
                <!-- Se crea un formulario tipo post -->
                <form name= "ejercicio22" action="<?php echo $_SERVER['PHP_SELF'];?>" id="form23" method="post">
                    <table class="formulario">
                        <tr>
                            <td><label for="nombre">Nombre: </label></td>
                            <td><input type="text" name="nombre" id="nombre" class="iObligatorio" value="<?php echo(isset($_REQUEST['nombre'])?$_REQUEST['nombre']:'') ?>"></td>
                            <td><?php // Se muestra el mensaje de error 
                                echo('<p class="error">'.$aErrores['nombre'].'</p>');?>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="nacimiento">Fecha nacimiento: </label></td>
                            <td><input type="text" name="nacimiento" id="nacimiento" class="iObligatorio" value="<?php echo(isset($_REQUEST['nacimiento'])?$_REQUEST['nacimiento']:'') ?>"></td>
                            <td><?php // Se muestra el mensaje de error 
                                echo('<p class="error">'.$aErrores['nacimiento'].'</p>');?>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="altura">Altura (en m): </label></td>
                            <td><input type="text" name="altura" id="altura" value="<?php echo(isset($_REQUEST['altura'])?$_REQUEST['altura']:'') ?>"></td>
                            <td><?php // Se muestra el mensaje de error
                                echo('<p class="error">'.$aErrores['altura'].'</p>');?>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="fechaActual">Fecha actual: </label></td>
                            <td><input type="text" name="fechaActual" id="fechaActual" value="<?php echo($oTimeStamp->format('d/m/Y')) ?>" disabled></td>
                            <td>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" form="form23" value="Enviar" name="enviar">
                </form>
            </div>
        <?php
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