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
        <h1>Ejercicio 23</h1>
    </header>
    <main>
        <h2>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente</h2>
        <?php
        /*
         * @author Rebeca Sánchez Pérez
         * @version 1.1
         * @since 24/10/2023
         */
        
        // DECLARACION E INICIALIZACION DE VARIABLES
        // Se incuye la libreria de validacion para usar los metodos de validacion de las entradas del formulario
        require_once '../core/231018libreriaValidacion.php';
        // La varible $entradaOK es un interruptor que recibe el valor true cuando no existe ningun error en la entrada
        $entradaOK = true;
        // El array $aRespuestas almacena los valores que son introducidos en cada input del formulario
        $aRespuestas =[
            'nombre' => '',
            'edad' => '',
            'altura' => ''
        ];
        // El array $aErrores almacena los valores que no cumplan los requisitos que se hayan introducido en el formulario
        $aErrores = [
            'nombre' => '',
            'edad' => '',
            'altura' => ''
        ];
        
        // Si el fromulario ha sido rellenado, se valida la entrada
        if (isset($_REQUEST['enviar'])){
            // VALIDACIONES
            // Se comprueba que el valor introducido en el campo 'Nombre' sea un valor alfabetico, si no lo es, se añade al array $aERrrores
            $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['Nombre'],100,1,1);
                
            // Se comprueba que el valor introducido en el campo 'Edad' sea un numero entero, si no lo es, se añade al array $aERrrores
            $aErrores['edad'] = validacionFormularios::comprobarEntero($_REQUEST['Edad'],100,1,1);
            
            // Se comprueba que el valor introducido en el campo 'Altura' sea un numero real, si no lo es, se añade al array $aERrrores
            $aErrores['altura'] = validacionFormularios::comprobarFloat($_REQUEST['Altura'],4,0.5,1);
            
            // Se recorre el array de errores 
            foreach($aErrores as $campo => $error){
                // Si existe algun error se cambia el valor de $entradaOK a false
                if($error != null){
                    $entradaOK = false;
                }
            }
            
        // Si el formulario NUNCA ha sido rellenado, se inicializa $entradaOK a false    
        }else{ 
            $entradaOK = false;
        }
        
        // Si todos los valores intruducidos son correctos, se muestran los campos del formulario y sus respuestas
        if ($entradaOK){
            // Se añaden al array $aRespuestas las respuestas cuando son correctas
            $aRespuestas['nombre'] = $_REQUEST['Nombre'];
            $aRespuestas['edad'] = $_REQUEST['Edad'];
            $aRespuestas['altura'] = $_REQUEST['Altura'];
            
            // Se muestran por pantalla los valores introducidos
            echo('<div class="ejercicio">');
            echo('Usuario: <b>'.$aRespuestas['nombre'].'</b><br>');
            echo('Edad: <b>'.$aRespuestas['edad'].'</b><br>');
            echo('Altura: <b>'.$aRespuestas['altura'].'</b><br>');
            echo('</div>');
            
        // Si no son correctos los valores de la entrada, se muestra el formulario    
        }else{ 
            ?> 
            <div class="ejercicio">
                <h3>Registro:</h3>
                <!-- Se crea un formulario tipo post -->
                <form name= "ejercicio22" action="<?php echo $_SERVER['PHP_SELF'];?>" id="form23" method="post">
                    <label for="nombre">Nombre de usuario: </label><input type="text" name="Nombre" id="nombre" class="iObligatorio"><?php echo('<p class="error">'.$aErrores['nombre'].'</p>');?><br>
                    <label for="edad">Edad: </label><input type="text" name="Edad" id="edad" class="iObligatorio"><?php echo('<p class="error">'.$aErrores['edad'].'</p>');?><br>
                    <label for="altura">Altura (en m): </label><input type="text" name="Altura" id="altura" class="iObligatorio"><?php echo('<p class="error">'.$aErrores['altura'].'</p>');?><br>
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