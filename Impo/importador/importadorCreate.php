<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="importador3.css">
    <script src='../general_scripts.js'></script>
    <title>Importador</title>
</head>
<body >

<header class="headergeneral">
        
    <?php

    include 'C:/xampp\htdocs\Proyecto_soft\openCVLProyect/functions.php';
    include "C:/xampp\htdocs\Proyecto_soft\openCVLProyect/conection.php";

    session_start();

            $sesion = $_SESSION['nombre'];

                if($sesion == null || $sesion ==""){
                    echo "<script>alert('Error grave de seguridad, Uster no tiene acceso para este sitio')</script>";
                    header("location:http://localhost/Proyecto_soft/openCVLProyect/cierre_sesion.php");
                    die();     
                }

                $sesionValue= "<strong class='Bienvenida'>Bienvenido : </strong>" . "<strong>$sesion</strong>";
                echo $sesionValue;

                echo "<a href='http://localhost/Proyecto_soft/openCVLProyect/impo/importador/importadores.php' class='rutas'>Nivel anterior</a>";

                $SpecificRouteVar = __FILE__;

                $palabraEspecifica = "htdocs";
                
                $posicionname = strpos($SpecificRouteVar, $palabraEspecifica);
                
                if ($posicionname !== false) {
                    $posicionname += strlen($palabraEspecifica);
                    
                    $resultado = substr($SpecificRouteVar, $posicionname);
                    
                    $RutaAbsoluta = "http://localhost" . $resultado;
                } 
                    $ruta5 ="<a href='$RutaAbsoluta' class='rutas'>Nivel Anterior</a>";
        ?>

        <button class="Salida_Segura">
            <a href="http://localhost/Proyecto_soft/openCVLProyect/cierre_sesion.php">Salida Segura</a>
        </button>
</header>

<main>
        <form action="importadorCreate.php" method ="post">
                <fieldset>
                   
                <strong><p style=" color:#0D0D0D; font-size:20px; font-family:black;">Crear Importador</p></strong>

                    <div class="HeaderGeneral2">
                        <header>
                            <h1><p>Datos creación Importador</p></h1>
                        </header>
                    </div>

        <?php

                $Generalobject = new importadordator($conection);                               
                        echo $Generalobject->imprimirenpantalla($conection);     
      
        ?>            
            <footer>
                <!-- <button><a href="ModuleImpo.php">volver</a></button><br><br> -->
                <p>&copy; 2024 Importaciones - David L</p>
            </footer>
            

            </fieldset>

                <br><br>

                    
                    
            

        </form>
        </main>     

</body>
</html>
