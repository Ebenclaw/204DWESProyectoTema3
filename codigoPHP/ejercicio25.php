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
            <h1>Ejercicio 25</h1>
        </header>
        <main>
            <h2>Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros</h2>
            <?php
            /**
             * @author Carlos García Cachón, Rebeca Sánchez Pérez
             * @version 1.3
             * @since 15/11/2023
             */
            
            // DECLARACION E INICIALIZACION DE VARIABLES
            // Se incuye la libreria de validacion para usar los metodos de validacion de las entradas del formulario
            require_once '../core/231018libreriaValidacion.php';

            //Declaración de constantes por OBLIGATORIEDAD
            define('OPCIONAL', 0);
            define('OBLIGATORIO', 1);

            //Declaración de los limites para el metodo comprobar ALFABETICO
            define('TAM_MAX_ALFABETICO', 1000);
            define('TAM_MIN_ALFABETICO', 1);

            //Declaración de los limites para el metodo comprobar ALFANUMERICO
            define('TAM_MAX_ALFANUMERICO', 1000);
            define('TAM_MIN_ALFANUMERICO', 1);

            //Declaración de los limites para el metodo comprobar ENTERO
            define('TAM_MAX_ENTERO', PHP_INT_MAX);
            define('TAM_MIN_ENTERO', PHP_INT_MIN);

            //Declaración de los limites para el metodo comprobar FLOAT
            define('TAM_MAX_FLOAT', PHP_FLOAT_MAX);
            define('TAM_MIN_FLOAT', PHP_FLOAT_MIN);

            //Declaración de los limites para el metodo comprobar FECHA
            define('FECHA_MAX', date('d-m-Y'));
            define('FECHA_MIN', "01/01/1950");

            //Declaración de los limites para el metodo comprobar PASSWORD
            define('LONG_MAX', 16);
            define('LONG_MIN', 2);
            //Hace referencia a los tipos de complejidad de la contraseña
            define('LOW', 1);
            define('MEDIUM', 2);
            define('HARD', 3);

            //Declaración del limite de caracteres para metodos que comprueben un MAXIMO y MINIMO (MINTAMANIO/MAXTAMANIO/NOMBREARCHIVO)
            define('TAM_MAX_CARACTERES', 16);
            define('TAM_MIN_CARACTERES', 1);

            //Declaración del limite de alfanumericos dentro del campo TEXTAREA
            define("TAM_MAX_TEXTO", 255);
            define("TAM_MIN_TEXTO", 1);

            //Declaración de un array para que almacene las EXTENSIONES por defecto de la función validarNombreArchivo
            $aExtensiones = ['txt', 'json'];

            //Declaración de un array LISTA
            $aLista = ['listItem1', 'listItem2'];

            // La varible $entradaOK es un interruptor que recibe el valor true cuando no existe ningun error en la entrada
            $entradaOK = true;
            
            // El array $aRespuestas almacena los valores que son introducidos en cada input del formulario
            $aRespuestas = [
                'alfabeticoObligatorio' => '',
                'alfabeticoOpcional' => '',
                'alfanumericoObligatorio' => '',
                'alfanumericoOpcional' => '',
                'enteroObligatorio' => '',
                'enteroOpcional' => '',
                'floatObligatorio' => '',
                'floatOpcional' => '',
                'correoObligatorio' => '',
                'correoOpcional' => '',
                'urlObligatorio' => '',
                'urlOpcional' => '',
                'fechaObligatorio' => '',
                'fechaOpcional' => '',
                'dniObligatorio' => '',
                'dniOpcional' => '',
                'cpObligatorio' => '',
                'cpOpcional' => '',
                'passwordObligatorio' => '',
                'passwordOpcional' => '',
                'telefonoObligatorio' => '',
                'telefonoOpcional' => '',
                'fileObligatorio' => '',
                'fileOpcional' => '',
                'colorOpcional' => '',
                'rangeOpcional' => '',
                'listaObligatorio' => '',
                'radioButtonObligatorio' => '',
                'checkBoxObligatorio' => '',
                'textAreaObligatorio' => '',
                'textAreaOpcional' => ''
            ];

            // El array $aErrores almacena los valores que no cumplan los requisitos que se hayan introducido en el formulario
            $aErrores = [
                'alfabeticoObligatorio' => '',
                'alfabeticoOpcional' => '',
                'alfanumericoObligatorio' => '',
                'alfanumericoOpcional' => '',
                'enteroObligatorio' => '',
                'enteroOpcional' => '',
                'floatObligatorio' => '',
                'floatOpcional' => '',
                'correoObligatorio' => '',
                'correoOpcional' => '',
                'urlObligatorio' => '',
                'urlOpcional' => '',
                'fechaObligatorio' => '',
                'fechaOpcional' => '',
                'dniObligatorio' => '',
                'dniOpcional' => '',
                'cpObligatorio' => '',
                'cpOpcional' => '',
                'passwordObligatorio' => '',
                'passwordOpcional' => '',
                'telefonoObligatorio' => '',
                'telefonoOpcional' => '',
                'fileObligatorio' => '',
                'fileOpcional' => '',
                'colorOpcional' => '',
                'rangeOpcional' => '',
                'listaObligatorio' => '',
                'radioButtonObligatorio' => '',
                'checkBoxObligatorio' => '',
                'textAreaObligatorio' => '',
                'textAreaOpcional' => ''
            ];
            
            // Si el fromulario ha sido rellenado, se valida la entrada
            if (isset($_REQUEST['enviar'])) {                
                // VALIDACIONES
                $aErrores = [
                    'alfabeticoObligatorio' => validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoObligatorio'], TAM_MAX_ALFABETICO, TAM_MIN_ALFABETICO, OBLIGATORIO),
                    'alfabeticoOpcional' => validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoObligatorio'], TAM_MAX_ALFABETICO, TAM_MIN_ALFABETICO, OPCIONAL),
                    'alfanumericoObligatorio' => validacionFormularios::comprobarAlfanumerico($_REQUEST['alfanumericoObligatorio'], TAM_MAX_ALFANUMERICO, TAM_MIN_ALFANUMERICO, OBLIGATORIO),
                    'alfanumericoOpcional' => validacionFormularios::comprobarAlfanumerico($_REQUEST['alfanumericoOpcional'], TAM_MAX_ALFANUMERICO, TAM_MIN_ALFANUMERICO, OPCIONAL),
                    'enteroObligatorio' => validacionFormularios::comprobarEntero($_REQUEST['enteroObligatorio'], TAM_MAX_ENTERO, TAM_MIN_ENTERO, OBLIGATORIO),
                    'enteroOpcional' => validacionFormularios::comprobarEntero($_REQUEST['enteroOpcional'], TAM_MAX_ENTERO, PHP_INT_MIN, OPCIONAL),
                    'floatObligatorio' => validacionFormularios::comprobarFloat($_REQUEST['floatObligatorio'], TAM_MAX_FLOAT, TAM_MIN_FLOAT, OBLIGATORIO),
                    'floatOpcional' => validacionFormularios::comprobarFloat($_REQUEST['floatOpcional'], TAM_MAX_FLOAT, TAM_MIN_FLOAT, OPCIONAL),
                    'correoObligatorio' => validacionFormularios::validarEmail($_REQUEST['correoObligatorio'], OBLIGATORIO),
                    'correoOpcional' => validacionFormularios::validarEmail($_REQUEST['correoOpcional'], OPCIONAL),
                    'urlObligatorio' => validacionFormularios::validarURL($_REQUEST['urlObligatorio'], OBLIGATORIO),
                    'urlOpcional' => validacionFormularios::validarURL($_REQUEST['urlObligatorio'], OPCIONAL),
                    'fechaObligatorio' => validacionFormularios::validarFecha($_REQUEST['fechaObligatorio'], FECHA_MAX, FECHA_MIN, OBLIGATORIO),
                    'fechaOpcional' => validacionFormularios::validarFecha($_REQUEST['fechaOpcional'], FECHA_MAX, FECHA_MIN, OPCIONAL),
                    'dniObligatorio' => validacionFormularios::validarDni($_REQUEST['dniObligatorio'], OBLIGATORIO),
                    'dniOpcional' => validacionFormularios::validarDni($_REQUEST['dniOpcional'], OPCIONAL),
                    'cpObligatorio' => validacionFormularios::validarCp($_REQUEST['cpObligatorio'], OBLIGATORIO),
                    'cpOpcional' => validacionFormularios::validarCp($_REQUEST['cpOpcional'], OPCIONAL),
                    'passwordObligatorio' => validacionFormularios::validarPassword($_REQUEST['passwordObligatorio'], LONG_MAX, LONG_MIN, LOW, OBLIGATORIO),
                    'passwordOpcional' => validacionFormularios::validarPassword($_REQUEST['passwordOpcional'], LONG_MAX, LONG_MIN, LOW, OPCIONAL),
                    'telefonoObligatorio' => validacionFormularios::validarTelefono($_REQUEST['telefonoObligatorio'], OBLIGATORIO),
                    'telefonoOpcional' => validacionFormularios::validarTelefono($_REQUEST['telefonoOpcional'], OPCIONAL),
                    'fileObligatorio' => validacionFormularios::validarNombreArchivo($_REQUEST['fileObligatorio'], $aExtensiones, TAM_MAX_CARACTERES, TAM_MIN_CARACTERES, OBLIGATORIO),
                    'fileOpcional' => validacionFormularios::validarNombreArchivo($_REQUEST['fileOpcional'], $aExtensiones, TAM_MAX_CARACTERES, TAM_MIN_CARACTERES, OPCIONAL),
                    'colorOpcional' => NULL, // validacionFormularios::validarColorHex($_REQUEST['colorOpcional'], OPCIONAL)
                    'rangeOpcional' => validacionFormularios::comprobarEntero($_REQUEST['rangeOpcional'], TAM_MAX_ENTERO, TAM_MIN_ENTERO, OPCIONAL),
                    'radioButtonObligatorio' => NULL,
                    'listaObligatorio' => validacionFormularios::validarElementoEnLista($_REQUEST['listaObligatorio'], $aLista),
                    'checkBoxObligatorio' => NULL,
                    'textAreaObligatorio' => validacionFormularios::comprobarAlfanumerico($_REQUEST['textAreaObligatorio'], TAM_MAX_TEXTO, TAM_MIN_TEXTO, OBLIGATORIO),
                    'textAreaOpcional' => validacionFormularios::comprobarAlfanumerico($_REQUEST['textAreaOpcional'], TAM_MAX_TEXTO, TAM_MIN_TEXTO, OPCIONAL)
                ];

                /*
                 * En los siguientes 'if' comprobamos que existe valor dentro de las siguientes variables y en caso negativo mostramos un mensaje error.
                 * Ya que dentro de la función validarElementoLista' no tenemos manera de hacerlo obligatorio, lo hacemos por el siguiente 'if'.
                 */
                if (!isset($_REQUEST['radioButtonObligatorio'])) {
                    $aErrores['radioButtonObligatorio'] = "Debes elegir al menos 1 opción.";
                }
                if (!isset($_REQUEST['checkBoxObligatorio'])) {
                    $aErrores['checkBoxObligatorio'] = "Debes elegir al menos 1 opción.";
                }

                // Se recorre el array de errores 
                foreach ($aErrores as $campo => $error) {
                    // Si existe algun error se cambia el valor de $entradaOK a false y se limpia ese campo
                    if ($error != null) {
                        $_REQUEST[$campo] = '';
                        $entradaOK = false;
                    }
                }
            
            // Si el formulario NUNCA ha sido rellenado, se inicializa $entradaOK a false    
            } else {
                $entradaOK = false;
            }
            
            // Si todos los valores intruducidos son correctos, se muestran los campos del formulario y sus respuestas
            if ($entradaOK) {
                // TRATAMIENTO DE DATOS
                // Se añaden al array $aRespuestas las respuestas cuando son correctas
                $aRespuestas = [
                    'alfabeticoObligatorio' => $_REQUEST['alfabeticoObligatorio'],
                    'alfabeticoOpcional' => $_REQUEST['alfabeticoOpcional'],
                    'alfanumericoObligatorio' => $_REQUEST['alfanumericoObligatorio'],
                    'alfanumericoOpcional' => $_REQUEST['alfanumericoOpcional'],
                    'enteroObligatorio' => $_REQUEST['enteroObligatorio'],
                    'enteroOpcional' => $_REQUEST['enteroOpcional'],
                    'floatObligatorio' => $_REQUEST['floatObligatorio'],
                    'floatOpcional' => $_REQUEST['floatOpcional'],
                    'correoObligatorio' => $_REQUEST['correoObligatorio'],
                    'correoOpcional' => $_REQUEST['correoOpcional'],
                    'urlObligatorio' => $_REQUEST['urlObligatorio'],
                    'urlOpcional' => $_REQUEST['urlOpcional'],
                    'fechaObligatorio' => $_REQUEST['fechaObligatorio'],
                    'fechaOpcional' => $_REQUEST['fechaOpcional'],
                    'dniObligatorio' => $_REQUEST['dniObligatorio'],
                    'dniOpcional' => $_REQUEST['dniOpcional'],
                    'cpObligatorio' => $_REQUEST['cpObligatorio'],
                    'cpOpcional' => $_REQUEST['cpOpcional'],
                    'passwordObligatorio' => $_REQUEST['passwordObligatorio'],
                    'passwordOpcional' => $_REQUEST['passwordOpcional'],
                    'telefonoObligatorio' => $_REQUEST['telefonoObligatorio'],
                    'telefonoOpcional' => $_REQUEST['telefonoOpcional'],
                    'fileObligatorio' => $_REQUEST['fileObligatorio'],
                    'fileOpcional' => $_REQUEST['fileOpcional'],
                    'colorOpcional' => $_REQUEST['colorOpcional'],
                    'rangeOpcional' => $_REQUEST['rangeOpcional'],
                    'listaObligatorio' => $_REQUEST['listaObligatorio'],
                    'radioButtonObligatorio' => $_REQUEST['radioButtonObligatorio'],
                    'checkBoxObligatorio' => $_REQUEST['checkBoxObligatorio'],
                    'textAreaObligatorio' => $_REQUEST['textAreaObligatorio'],
                    'textAreaOpcional' => $_REQUEST['textAreaOpcional']
                ];
                
                // Se muestran por pantalla los valores del formulario
                echo('<div class="ejercicio">');
                foreach ($aRespuestas as $campo => $respuesta) {
                    if ($campo == 'checkBoxObligatorio') {
                        echo "<p class='d-flex justify-content-start'>" . strtoupper($campo) . " : [</p>";
                        foreach ($_REQUEST['checkBoxObligatorio'] as $campo => $respuesta) {
                            echo "<p>" . $campo . " = " . $respuesta . "</p>";
                        }
                        echo "]";
                    } else {
                        echo(strtoupper($campo) . " : <b>" . $respuesta.'</b>');
                    }
                }
                echo("</div>");
                
            // Si no son correctos los valores de entrada, se muestra el formulario 
            } else {
                ?>
                <div class="ejercicio">
                    <h3>Plantilla de formularios:</h3>
                    <!-- Se crea un formulario tipo post -->
                    <form name="plantilla" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form23">
                        <table class="formulario">
                            <!-- Alfabético Obligatorio -->
                            <tr>
                                <td><label for="alfabeticoObligatorio">Alfabético Obligatorio:</label></td>
                                <td><input class="iObligatorio" type="text" name="alfabeticoObligatorio" placeholder="cadena_de_letras" value="<?php echo (isset($_REQUEST['alfabeticoObligatorio']) ? $_REQUEST['alfabeticoObligatorio'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error 
                                    echo('<p class="error">'.$aErrores['alfabeticoObligatorio'].'</p>');?> 
                                </td>
                            </tr>

                            <!-- Alfabético Opcional -->
                            <tr>
                                <td><label for="alfabeticoOpcional">Alfabético Opcional:</label></td>
                                <td><input type="text" name="alfabeticoOpcional" placeholder="cadena_de_letras" value="<?php echo (isset($_REQUEST['alfabeticoOpcional']) ? $_REQUEST['alfabeticoOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['alfabeticoOpcional'].'</p>');?> 
                                </td>
                            </tr>

                            <!-- Alfanumerico Obligatorio -->
                            <tr>
                                <td><label for="alfanumericoObligatorio">Alfanumérico Obligatorio:</label></td>
                                <td><input class="iObligatorio" type="text" placeholder="cadena_de_letras_y_numeros" name="alfanumericoObligatorio" value="<?php echo (isset($_REQUEST['alfanumericoObligatorio']) ? $_REQUEST['alfanumericoObligatorio'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['alfanumericoObligatorio'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Alfanumerico Opcional -->
                            <tr>
                                <td><label for="alfanumericoOpcional">Alfanumérico Opcional:</label></td>
                                <td><input type="text" name="alfanumericoOpcional" placeholder="cadena_de_letras_y_numeros" value="<?php echo (isset($_REQUEST['alfanumericoOpcional']) ? $_REQUEST['alfanumericoOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['alfanumericoOpcional'].'</p>');?>
                                </td>
                            </tr>
                            
                            <!-- Entero Obligatorio -->
                            <tr>
                                <td><label for="enteroObligatorio">Entero Obligatorio:</label></td>
                                <td><input class="iObligatorio" type="text" name="enteroObligatorio" placeholder="numeros_enteros" value="<?php echo (isset($_REQUEST['enteroObligatorio']) ? $_REQUEST['enteroObligatorio'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['enteroObligatorio'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Entero Opcional -->
                            <tr>
                                <td><label for="enteroOpcional">Entero Opcional:</label></td>
                                <td><input type="text" name="enteroOpcional" placeholder="numeros_enteros" value="<?php echo (isset($_REQUEST['enteroOpcional']) ? $_REQUEST['enteroOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['enteroOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Float Obligatorio -->
                            <tr>
                                <td><label for="floatObligatorio">Float Obligatorio:</label></td>
                                <td><input class="iObligatorio" type="text" name="floatObligatorio" placeholder="numeros_reales" value="<?php echo (isset($_REQUEST['floatObligatorio']) ? $_REQUEST['floatObligatorio'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['floatObligatorio'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Float Opcional -->
                            <tr>
                                <td><label for="floatOpcional">Float Opcional:</label></td>
                                <td><input type="text" name="floatOpcional" placeholder="numeros_reales" value="<?php echo (isset($_REQUEST['floatOpcional']) ? $_REQUEST['floatOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['floatOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Correo Obligatorio -->
                            <tr>
                                <td><label for="correoObligatorio">Correo Obligatorio:</label></td>
                                <td><input class="iObligatorio" type="text" name="correoObligatorio" placeholder="tunombre@gmail.com" value="<?php echo (isset($_REQUEST['correoObligatorio']) ? $_REQUEST['correoObligatorio'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['correoObligatorio'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Correo Opcional -->
                            <tr>
                                <td><label for="correoOpcional">Correo Opcional:</label></td>
                                <td><input type="text" name="correoOpcional" placeholder="tunombre@gmail.com" value="<?php echo (isset($_REQUEST['correoOpcional']) ? $_REQUEST['correoOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['correoOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- URL Obligatorio -->
                            <tr>
                                <td><label for="urlObligatorio">URL Obligatorio:</label></td>
                                <td><input class="iObligatorio" type="text" name="urlObligatorio" placeholder="https://www.ejemplo.com" value="<?php echo (isset($_REQUEST['urlObligatorio']) ? $_REQUEST['urlObligatorio'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['urlObligatorio'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- URL Opcional -->
                            <tr>
                                <td><label for="urlOpcional">URL Opcional:</label></td>
                                <td><input type="text" name="urlOpcional" placeholder="https://www.ejemplo.com" value="<?php echo (isset($_REQUEST['urlOpcional']) ? $_REQUEST['urlOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['urlOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Fecha Obligatorio -->
                            <tr>
                                <td><label for="fechaObligatorio">Fecha Obligatorio:</label></td>
                                <td><input class="iObligatorio" type="text" name="fechaObligatorio" placeholder="Año-Mes-dia/2000-01-01" value="<?php echo (isset($_REQUEST['fechaObligatorio']) ? $_REQUEST['fechaObligatorio'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['fechaObligatorio'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Fecha Opcional -->
                            <tr>
                                <td><label for="fechaOpcional">Fecha Opcional:</label></td>
                                <td><input type="text" name="fechaOpcional" placeholder="Año-Mes-dia/2000-01-01" value="<?php echo (isset($_REQUEST['fechaOpcional']) ? $_REQUEST['fechaOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['fechaOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- DNI Obligatorio -->
                            <tr>
                                <td><label for="dniObligatorio">DNI Obligatorio:</label></td>
                                <td><input class="iObligatorio" type="text" name="dniObligatorio" placeholder="80957774M" value="<?php echo (isset($_REQUEST['dniObligatorio']) ? $_REQUEST['dniObligatorio'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['dniObligatorio'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- DNI Opcional -->
                            <tr>
                                <td><label for="dniOpcional">DNI Opcional:</label></td>
                                <td><input type="text" name="dniOpcional" placeholder="80957774M" value="<?php echo (isset($_REQUEST['dniOpcional']) ? $_REQUEST['dniOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['dniOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- CP Obligatorio -->
                            <tr>
                                <td><label for="cpObligatorio">CP Obligatorio:</label></td>
                                <td><input class="iObligatorio" type="text" name="cpObligatorio" placeholder="37500" value="<?php echo (isset($_REQUEST['cpObligatorio']) ? $_REQUEST['cpObligatorio'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['cpObligatorio'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- CP Opcional -->
                            <tr>
                                <td><label for="cpOpcional">CP Opcional:</label></td>
                                <td><input type="text" name="cpOpcional" placeholder="37500" value="<?php echo (isset($_REQUEST['cpOpcional']) ? $_REQUEST['cpOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['cpOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Password Obligatorio -->
                            <tr>
                                <td><label for="passwordObligatorio">Password Obligatorio:</label></td>
                                <td><input class="iObligatorio" type="password" name="passwordObligatorio" placeholder="paso" value="<?php echo (isset($_REQUEST['passwordObligatorio']) ? $_REQUEST['passwordObligatorio'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['passwordObligatorio'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Password Opcional -->
                            <tr>
                                <td><label for="passwordOpcional">Password Opcional:</label></td>
                                <td><input type="password" name="passwordOpcional" placeholder="paso" value="<?php echo (isset($_REQUEST['passwordOpcional']) ? $_REQUEST['passwordOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['passwordOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Telefono Obligatorio -->
                            <tr>
                                <td><label for="telefonoObligatorio">Telefono Obligatorio:</label></td>
                                <td><input class="iObligatorio" type="tel" name="telefonoObligatorio" placeholder="666555444" value="<?php echo (isset($_REQUEST['telefonoObligatorio']) ? $_REQUEST['telefonoObligatorio'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['telefonoObligatorio'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Telefono Opcional -->
                            <tr>
                                <td><label for="telefonoOpcional">Telefono Opcional:</label></td>
                                <td><input type="tel" name="telefonoOpcional" placeholder="666555444" value="<?php echo (isset($_REQUEST['telefonoOpcional']) ? $_REQUEST['telefonoOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['telefonoOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Archivo Obligatorio -->
                            <tr>
                                <td><label for="fileObligatorio">Archivo Obligatorio:</label></td>
                                <td><input class="iObligatorio" type="file" name="fileObligatorio" value="<?php echo (isset($_REQUEST['fileObligatorio']) ? $_REQUEST['fileObligatorio'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['fileObligatorio'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Archivo Opcional -->
                            <tr>
                                <td><label for="fileOpcional">Archivo Opcional:</label></td>
                                <td><input type="file" name="fileOpcional" value="<?php echo (isset($_REQUEST['fileOpcional']) ? $_REQUEST['fileOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['fileOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Color Opcional -->
                            <tr>
                                <td><label for="colorOpcional">Color Opcional:</label></td>
                                <td><input type="color" name="colorOpcional" value="<?php echo (isset($_REQUEST['colorOpcional']) ? $_REQUEST['colorOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['colorOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Rango Opcional -->
                            <tr>
                                <td><label for="rangeOpcional">Rango Opcional:</label></td>
                                <td><input type="range" min="1" max="100" name="rangeOpcional" value="<?php echo (isset($_REQUEST['rangeOpcional']) ? $_REQUEST['rangeOpcional'] : ''); ?>"></td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['rangeOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- Lista Obligatorio -->
                            <tr>
                                <td><label for="listaObligatorio">Lista Obligatorio:</label></td>
                                <td>
                                    <select class="iObligatorio" name="listaObligatorio">
                                        <option value="listItem1" <?php if (isset($_REQUEST['listaObligatorio'])){echo 'selected';}?>>listItem1</option>
                                        <option value="listItem2" <?php if (isset($_REQUEST['listaObligatorio'])){echo 'selected';}?>>listItem2</option>
                                        <option value="listItem3" <?php if (isset($_REQUEST['listaObligatorio'])){echo 'selected';}?>>listItem3</option>
                                    </select>    
                                </td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['listaObligatorio'].'</p>');?> 
                                </td>
                            </tr>    
                            
                            <!-- Radio Obligatorio -->
                            <tr>
                                <td><label for="radioButtonObligatorio">RadioButton Obligatorio:</label></td>
                                <td>
                                    <input class="iRadio" type="radio" id="radioButtonItem1" name="radioButtonObligatorio" value="radioButtonItem1" 
                                    <?php if (is_null($aErrores['radioButtonObligatorio']) && isset($_REQUEST['radioButtonObligatorio']) && $_REQUEST['radioButtonObligatorio'] == 'radioButtonItem1') { echo 'checked';} ?>>
                                    <label for="radioButtonObligatorio">OpcionRadioButton 1</label>
                                    <br>
                                    
                                    <input class="iRadio" type="radio" id="radioButtonItem2" name="radioButtonObligatorio" value="radioButtonItem2" 
                                    <?php if (is_null($aErrores['radioButtonObligatorio']) && isset($_REQUEST['radioButtonObligatorio']) && $_REQUEST['radioButtonObligatorio'] == 'radioButtonItem2') { echo 'checked';} ?>>
                                    <label for="radioButtonObligatorio">OpcionRadioButton 2</label>
                                </td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['radioButtonObligatorio'].'</p>');?>
                                </td>
                            </tr>
                            
                            <!-- CheckBox Obligatorio -->
                            <tr>
                                <td><label for="checkBoxObligatorio">CheckBox Obligatorio:</label></td>
                                <td>
                                    <input class="iRadio" type="checkbox" id="cbItem1" name="checkBoxObligatorio[cbItem1]" value="cbItem1" 
                                    <?php if (isset($_REQUEST['checkBoxObligatorio']['cbItem1'])){echo 'checked';}?>>
                                    <label for="cbItem1">OpcionCheckbox 1</label>
                                    <br>
                                    
                                    <input class="iRadio" type="checkbox" id="cbItem2" name="checkBoxObligatorio[cbItem2]" value="cbItem2" 
                                    <?php if (isset($_REQUEST['checkBoxObligatorio']['cbItem2'])){echo 'checked';}?>>
                                    <label for="cbItem2">OpcionCheckbox 2</label>
                                    <br>
                                    
                                    <input class="iRadio" type="checkbox" id="cbItem3" name="checkBoxObligatorio[cbItem3]" value="cbItem3" 
                                    <?php if (isset($_REQUEST['checkBoxObligatorio']['cbItem3'])){echo 'checked';}?>>
                                    <label for="cbItem3">OpcionCheckbox 3</label>
                                </td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['checkBoxObligatorio'].'</p>');?>
                                </td>
                            </tr>

                            <!-- TextArea Obligatorio -->
                            <tr>
                                <td><label for="textAreaObligatorio">TextArea Obligatorio:</label></td>
                                <td>
                                    <textarea class="iObligatorio" rows="4" cols="50" name="textAreaObligatorio" placeholder="cadena_de_letras_y_numeros"><?php if ($aErrores['textAreaObligatorio'] == null && isset($_REQUEST['textAreaObligatorio'])) { echo ($_REQUEST['textAreaObligatorio']);} ?></textarea>
                                </td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['textAreaObligatorio'].'</p>');?> 
                                </td>
                            </tr>
                            
                            <!-- TextArea Opcional -->
                            <tr>
                                <td><label for="textAreaOpcional">TextArea Opcional:</label></td>
                                <td>
                                    <textarea rows="4" cols="50" name="textAreaOpcional" placeholder="cadena_de_letras_y_numeros"><?php if ($aErrores['textAreaOpcional'] == null && isset($_REQUEST['textAreaOpcional'])) { echo ($_REQUEST['textAreaOpcional']);} ?></textarea>
                                </td>
                                <td><?php // Se muestra el mensaje de error
                                    echo('<p class="error">'.$aErrores['textAreaOpcional'].'</p>');?> 
                                </td>
                            </tr>
                            
                    </table>
                    <button type="submit" name="enviar">Enviar</button>                    
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