<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="importador2.css">
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

        <form action="importadorQuery.php" method ="post">
                <fieldset>
                    <legend>
                        Consultar / Importador
                    </legend>

                    <div class="HeaderImportador">
                        <header>
                            <h1><p>Datos Importador</p></h1>
                        </header>
                    </div>

        <?php

    $variablefor=$_POST['deletebackgroundbutton'];
        $variablefor;
    //     $varPru ="";

            $consultarBD ="SELECT * FROM siaimportador WHERE nit = '$variablefor' ";
            $queryconsultarBD = $conection->query($consultarBD);
                
            while($l = $queryconsultarBD->fetch_assoc()){
                echo "<div class ='ContainerGeneralImportador'>";
                                            
                                            echo "<h3>" . "Tipodocumento " . "</h3>" . "<input type='text' name='tipodocumento' class ='datosinputimportador' name='prueba1' value ='{$l['tipodocumento']}' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Nit " . "</h3>" . "<input type='text' name='nit' class ='datosinputimportador1'  value ='{$l['nit']}' disabled>" . "<br>" ;
                                            echo "<h3>" . "Razonsocial " . "</h3>" . "<input type='text' name='razonsocial' class ='datosinputimportador' value ='{$l['razonsocial']}' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Nivelcomercialcod " . "</h3>" . "<input type='text' name='nivelcomercialcod' class ='datosinputimportador1' value ='{$l['nivelcomercialcod']}' disabled>" . "<br>" ;
                                            echo "<h3>" . "Nivelcomercialdesc " . "</h3>" . "<input type='text' name='nivelcomercialdesc' class ='datosinputimportador'   value ='{$l['nivelcomercialdesc']}' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Telefono " . "</h3>" . "<input type='text' name='telefono' class ='datosinputimportador1'   value ='{$l['telefono']}' disabled>" . "<br>" ;
                                            echo "<h3>" . "Direccion " . "</h3>" . "<input type='text' name='direccion' class ='datosinputimportador'   value ='{$l['direccion']}' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Correoelectronico " . "</h3>" . "<input type='text' name='correoelectronico' class ='datosinputimportador1'   value ='{$l['correoelectronico']}' disabled>" . "<br>" ;
                                            echo "<h3>" . "Pais " . "</h3>" . "<input type='text' name='pais' class ='datosinputimportador'   value ='{$l['pais']}' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Depto " . "</h3>" . "<input type='text' name='depto' class ='datosinputimportador1'   value ='{$l['depto']}' disabled>" . "<br>" ;
                                            echo "<h3>" . "Administracionmercancia " . "</h3>" . "<input type='text' name='administracionmercancia' class ='datosinputimportador'   value ='{$l['administracionmercancia']}' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "CodigoOEA " . "</h3>" . "<input type='text' name='CodigoOEA' class ='datosinputimportador1'   value ='{$l['CodigoOEA']}' disabled>" . "<br>" ;
                                            echo "<h3>" . "Actividadeconomicacod " . "</h3>" . "<input type='text' name='actividadeconomicacod' class ='datosinputimportador'   value ='{$l['actividadeconomicacod']}' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Actividadeconomicadesc " . "</h3>" . "<input type='text' name='actividadeconomicadesc' class ='datosinputimportador1'   value ='{$l['actividadeconomicadesc']}' disabled>" . "<br>" ;
                                            echo "<h3>" . "Estado " . "</h3>" . "<input type='text' name='estado' class ='datosinputimportador'   value ='{$l['estado']}' disabled>" ;       
                                            echo "</div>";

                //  $queryimportcustom = new ImportadorQueryGeneral($conection,$variablefor);
                //  echo $queryimportcustom->imprimirenpantallaqueryimport($conection,$variablefor );
                }
                            // $nit = 1012458898;
                            // $tipodocumento = "NIT";
                            // $razonsocial = "Agencia de Aduanas master Escobar 2";
                            // $nivelcomercialcod = 1;
                            // $nivelcomercialdesc = "Mayorista";
                            // $telefono = 3212197189;
                            // $direccion = "KLLE 58H #92 Bis-1";
                            // $correoelectronico = "escobar2.aleja2@gmail.com";
                            // $pais = "Colombia";
                            // $depto = "Soacha";
                            // $administracionmercancia = "Armenia";
                            // $CodigoOEA ="RRJ55A";
                            // $actividadeconomicacod = "1271";
                            // $actividadeconomicadesc = "Prueba version 4 de actividad economica";
                            // $estado = "Activo"; 

                    
                                
        ?>

            <div>
            <footer>
                <!-- <button><a href="ModuleImpo.php">volver</a></button><br><br> -->
                <p>&copy; 2024 Importaciones - David L</p>
            </footer>
            </div>

            </fieldset>

                <br>
                    <div class="Buttons_Container_Send"> 
                            <?php
                                    
                            
                                    
                                    // if(isset($_POST['SendInfo'])){
                                    //     $prueba->ConsultareInsertImportador($conection);
                                    // }
                                        
                            ?>
                            
                        <button name="ExitBtn">
                            <a href="importadores.php" class="Salida_Segura2">
                                Salir
                            </a>
                        </button>

                        <?php 
                        if(isset($_POST['ExitBtn'])){
                            header("location:http://localhost/Proyecto_soft/openCVLProyect/impo/importadores.php");
                        }
                        
                        ?>

                    </div>
                    <div>
            

        </form>





        
        
</div>
</body>
</html> 
