<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="GeneralStyles.css">
    <title>Importador</title>
</head>
<body >

<header>
        
    <?php

    include "functions.php";
    include "conection.php";

    session_start();
            $sesion = $_SESSION['nombre'];

                if($sesion == null || $sesion ==""){
                    echo "<script>alert('Error grave de seguridad, Uster no tiene acceso para este sitio')</script>";
                    header("location:http://localhost/Proyecto_soft/openCVLProyect/cierre_sesion.php");
                    die();     
                }

                $sesionValue= "<strong class='Bienvenida'>Bienvenido : </strong>" . "<strong>$sesion</strong>";
                echo $sesionValue;

                echo "<a href='http://localhost/Proyecto_soft/openCVLProyect/impo/importadores.php' class='rutas'>Nivel anterior</a>";

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

        <form action="importadorquery.php" method ="post">
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

           
        ?>

            <div>
            <footer>
                <p>&copy; 2024 Importaciones - David L</p>
            </footer>
            </div>

            </fieldset>

                <br><br>

                    <div class="Buttons_Container_Send"> 
                        <button name="SendInfo">Enviar Datos</button>
                        
                            <?php
                                        
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
