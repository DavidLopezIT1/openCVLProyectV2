<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="proveedor2.css">
    <title>Importador</title>
</head>
<body >

<header class="header2">
         
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

                echo "<a href='http://localhost/Proyecto_soft/openCVLProyect/impo/proveedor/proveedores.php' class='rutas'>Nivel anterior</a>";
                            
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

        <form action="proveedorQuery.php" method ="post">
                <fieldset>

                    <div style="margin-bottom: 10px;">
                        <strong style="color:#0D0D0D; font-size: 20px; margin-bottom: 10px;">Consultar / Proveedor</strong>
                    </div>
                    <div class="HeaderImportador">
                        <header class="header3">
                            <h1><p>Datos Proveedor</p ></h1>
                        </header>
                    </div>
 
        <?php

            $variablefor=$_POST['deletebackgroundbutton'];
                $variablefor;

                    $consultarBD ="SELECT * FROM siaproveedor WHERE codigoproveedor = '$variablefor' ";
                    $queryconsultarBD = $conection->query($consultarBD);
                        
                    while($l = $queryconsultarBD->fetch_assoc()){
                        
                        echo "<div class ='ContainerGeneralImportador'>";
                                            
                            echo "<h3>" . "Cod Proveedor " . "</h3>" . "<input type='text' name='tipodocumento' class ='datosinputimportador' name='prueba1' value ='". strtoupper($l['codigoproveedor'])."' disabled>" . "<br>" ;
                            echo "<h3 class='datosinputimportador1'>" . "Nombre Proveedor " . "</h3>" . "<input type='text' name='nit' class ='datosinputimportador2'  value ='". strtoupper($l['nombreproveedor']) ."' disabled>" . "<br>" ;
                            echo "<h3>" . "Pais " . "</h3>" . "<input type='text' name='razonsocial' class ='datosinputimportador' value ='".strtoupper($l['pais'])."' disabled >" . "<br>" ;
                            echo "<h3 class='datosinputimportador1'>" . "Cuidad " . "</h3>" . "<input type='text' name='nivelcomercialcod' class ='datosinputimportador2' value ='". strtoupper($l['cuidad']) ."' disabled>" . "<br>" ;
                            echo "<h3>" . "Telefono " . "</h3>" . "<input type='text' name='nivelcomercialdesc' class ='datosinputimportador'   value ='".strtoupper($l['Telefono'])."' disabled>" . "<br>" ;
                            echo "<h3 class='datosinputimportador1'>" . "E-mail " . "</h3>" . "<input type='text' name='telefono' class ='datosinputimportador2'   value ='".strtoupper($l['email'])."' disabled>" . "<br>" ;
                            echo "<h3>" . "Cond. Proveedor " . "</h3>" . "<input type='text' name='direccion' class ='datosinputimportador'   value ='".strtoupper($l['condicionproveedor'])."' disabled>" . "<br>" ;
                            echo "<h3 class='datosinputimportador1'>" . "Especifique " . "</h3>" . "<input type='text' name='correoelectronico' class ='datosinputimportador2'   value ='".strtoupper($l['especifique'])."' disabled>" . "<br>" ;
                            echo "<h3>" . "Estado " . "</h3>" . "<input type='text' name='pais' class ='datosinputimportador'   value ='".strtoupper($l['estado'])."' disabled>" . "<br>" ;
                        
                            echo "</div>";
                        }                                        
        ?>

            <div>
            <footer>
               
                <p>&copy; 2024 Importaciones - David L</p>
            </footer>
            </div>

            </fieldset>

                <br>
                    <div class="Buttons_Container_Send"> 

                        <button name="ExitBtn">
                            <a href="proveedores.php" class="Salida_Segura2">
                                Salir
                            </a>
                        </button>

                        <?php 
                        if(isset($_POST['ExitBtn'])){
                            header("location:http://localhost/Proyecto_soft/openCVLProyect/impo/proveedor/proveedores.php");
                        }
                        ?>

                    </div>
                    <div>
            

        </form>
        </main>




        
        
</div>
</body>
</html> 
