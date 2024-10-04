<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Proyecto_soft/openCVLProyect/Styles/GeneralStyleCreate.css">
    <title>Importador</title>
</head>
<body >

<header class="headergeneral">
        
    <?php

    /* The lines `include "../functions.php";` and `include "../conection.php";` are including external PHP
    files into the current PHP script. */

    include 'C:/xampp\htdocs\Proyecto_soft\openCVLProyect/functions.php';
    include "C:/xampp\htdocs\Proyecto_soft\openCVLProyect/conection.php";
    
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

                echo "<a href='http://localhost/Proyecto_soft/openCVLProyect/impo/proveedor/proveedores.php' class='rutas'>Nivel anterior</a>";
                            
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

<main>
        <form action="CreateProveedor.php" method ="post">
                
        <fieldset>
                   
                <strong>
                    <p style=" color:#0D0D0D; font-size:20px; font-family:black;">Crear Proveedor</p>
                </strong>

                    <div class="HeaderGeneral2">
                        <header>
                            <h1><p>Datos creación Proveedor</p></h1>
                        </header>
                    </div>

            <?php
                imprimirenpantallaProveedor($conection);
            ?>  

            <footer>
                <p>&copy; 2024 Importaciones - David L</p>
            </footer>
            

            </fieldset>

            <br><br>

                    
                    
            

        </form>
        </main>     

</body>
</html>
