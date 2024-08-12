<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="importador.css">
    <title>Importador</title>
</head>
<body >

<header>
        
    <?php

    /* The lines `include "../functions.php";` and `include "../conection.php";` are including external PHP
    files into the current PHP script. */

    include "../functions.php";
    include "../conection.php";

   /* `session_start();` is a PHP function that initializes a new session or resumes the existing
   session based on a session identifier passed via a GET or POST request, or a cookie. It is
   typically used at the beginning of a PHP script to start or resume a session, allowing you to
   store and retrieve session variables across multiple pages or requests. This function must be
   called before any output is sent to the browser. */

    session_start();

           /* This block of PHP code is responsible for checking the session variable 'nombre' to
           determine if a user is logged in. Here's a breakdown of what it does: */

            $sesion = $_SESSION['nombre'];

                if($sesion == null || $sesion ==""){
                    echo "<script>alert('Error grave de seguridad, Uster no tiene acceso para este sitio')</script>";
                    header("location:http://localhost/Proyecto_soft/openCVLProyect/cierre_sesion.php");
                    die();     
                }


                /* The code snippet `= "<strong class='Bienvenida'>Bienvenido : </strong>"
                . "<strong></strong>"; echo ;` is creating a string variable
                `` that contains an HTML string for displaying a welcome message. */

                $sesionValue= "<strong class='Bienvenida'>Bienvenido : </strong>" . "<strong>$sesion</strong>";
                echo $sesionValue;

                echo "<a href='http://localhost/Proyecto_soft/openCVLProyect/impo/importadores.php' class='rutas'>Nivel anterior</a>";
                            
                /* The code snippet ` = __FILE__;  = "htdocs";` is
                assigning the value of the magic constant `__FILE__` to the variable
                ``. */
                $SpecificRouteVar = __FILE__;

                /* The line `  = "htdocs";` in the PHP code is assigning the string
                value "htdocs" to the variable ``. This variable is used later in
                the code to help identify a specific substring within another string using the
                `strpos()` function. */

                $palabraEspecifica = "htdocs";
                
                /* The line ` = strpos(, );` in the PHP
                code is using the `strpos()` function to find the position of a specific substring
                within another string. */
                
                $posicionname = strpos($SpecificRouteVar, $palabraEspecifica);
                
                if ($posicionname !== false) {
                    // Calcula la posición inicial del texto que quieres extraer
                    $posicionname += strlen($palabraEspecifica);
                    
                    // Extrae el texto desde la posición encontrada hasta el final del SpecificRouteVar$SpecificRouteVar
                    $resultado = substr($SpecificRouteVar, $posicionname);
                    
                    // Muestra el resultado
                    $RutaAbsoluta = "http://localhost" . $resultado;
                    // echo $RutaAbsoluta;
                } 

                    $ruta5 ="<a href='$RutaAbsoluta' class='rutas'>Nivel Anterior</a>";
        ?>

        <button class="Salida_Segura">
            <a href="http://localhost/Proyecto_soft/openCVLProyect/cierre_sesion.php">Salida Segura</a>
        </button>
</header>

        <form action="importador.php" method ="post">
                <fieldset>
                    <legend>
                        Datos del importador como objeto
                    </legend>

                    <div class="HeaderImportador">
                        <header>
                            <h1><p>Datos Importador</p></h1>
                        </header>
                    </div>

        <?php
                        /* The block of code you provided is initializing variables with specific values
                        related to an importador (importer) entity. Here's a breakdown of what each
                        variable represents: */

                            $nit = 1012458898;
                            $tipodocumento = "NIT";
                            $razonsocial = "Agencia de Aduanas master Escobar 2";
                            $nivelcomercialcod = 1;
                            $nivelcomercialdesc = "Mayorista";
                            $telefono = 3212197189;
                            $direccion = "KLLE 58H #92 Bis-1";
                            $correoelectronico = "escobar2.aleja2@gmail.com";
                            $pais = "Colombia";
                            $depto = "Soacha";
                            $administracionmercancia = "Armenia";
                            $CodigoOEA ="RRJ55A";
                            $actividadeconomicacod = "1271";
                            $actividadeconomicadesc = "Prueba version 4 de actividad economica";
                            $estado = "Activo"; 

            /* The code snippet `  = new importadordatos(, , ,
            , , , , , ,
            , , , , ,
            );` is creating a new instance of a class named `importadordatos` and initializing it
            with the provided parameters. */

                $prueba = new importadordatos($nit, 
                                                $tipodocumento,
                                                $razonsocial,
                                                $nivelcomercialcod,
                                                $nivelcomercialdesc,
                                                $telefono,
                                                $direccion,
                                                $correoelectronico,
                                                $pais,
                                                $depto,
                                                $administracionmercancia,
                                                $CodigoOEA,
                                                $actividadeconomicacod,
                                                $actividadeconomicadesc,
                                                $estado
                                            );
                                            
                                    /* The line `echo ->imprimirenpantalla();` is calling a method named
                                    `imprimirenpantalla()` on the object `` and then outputting the
                                    result of that method to the screen. */

                                    echo $prueba->imprimirenpantalla();        
                                
        ?>

            <div>
            <footer>
                <!-- <button><a href="ModuleImpo.php">volver</a></button><br><br> -->
                <p>&copy; 2024 Importaciones - David L</p>
            </footer>
            </div>

            </fieldset>

                <br><br>

                    <div class="Buttons_Container_Send"> 
                        <button name="SendInfo">Enviar Datos</button>
                        
                            <?php
                                    
                                /* This PHP code block is checking if the form with the name "SendInfo" has been
                                submitted. If the form has been submitted, it calls the method
                                `ConsultareInsertImportador()` on the object `` passing the ``
                                variable as a parameter. This method likely handles the logic to consult or insert data
                                related to the importador based on the form submission. */
                                    
                                    
                                    if(isset($_POST['SendInfo'])){
                                        $prueba->ConsultareInsertImportador($conection);
                                    }
                                        
                            ?>
                            
                        <button name="SalidaImportador">
                            <a href="importadores.php" class="Salida_Segura2">
                                Salir
                            </a>
                        </button>

                    </div>
                    <div>
            

        </form>
        
</div>
</body>
</html>
