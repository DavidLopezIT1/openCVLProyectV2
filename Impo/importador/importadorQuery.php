<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Proyecto_soft/openCVLProyect/Styles/GeneralStyleQuery.css">
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

        <form action="importadorQuery.php" method ="post">
                <fieldset>

                    <div style="margin-bottom: 10px;">
                        <strong style="color:#0D0D0D; font-size: 20px; margin-bottom: 10px;">Consultar / Importador</strong>
                    </div>
                    <div class="HeaderImportador">
                        <header class="header3">
                            <h1><p>Datos Importador</p ></h1>
                        </header>
                    </div>
 
        <?php

            $variablefor=$_POST['deletebackgroundbutton'];
                $variablefor;

                    $consultarBD ="SELECT * FROM siaimportador WHERE nit = '$variablefor' ";
                    $queryconsultarBD = $conection->query($consultarBD);
                        
                    while($l = $queryconsultarBD->fetch_assoc()){
                        
                        echo "<div class ='ContainerGeneralImportador'>";
                                            
                                            echo "<h3>" . "Tipodocumento " . "</h3>" . "<input type='text' name='tipodocumento' class ='datosinputimportador' name='prueba1' value ='". strtoupper($l['tipodocumento'])."' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Nit " . "</h3>" . "<input type='text' name='nit' class ='datosinputimportador1'  value ='{$l['nit']}' disabled>" . "<br>" ;
                                            echo "<h3>" . "Razonsocial " . "</h3>" . "<input type='text' name='razonsocial' class ='datosinputimportador' value ='".strtoupper($l['razonsocial'])."' disabled >" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Nivelcomercialcod " . "</h3>" . "<input type='text' name='nivelcomercialcod' class ='datosinputimportador1' value ='{$l['nivelcomercialcod']}' disabled>" . "<br>" ;
                                            echo "<h3>" . "Nivelcomercialdesc " . "</h3>" . "<input type='text' name='nivelcomercialdesc' class ='datosinputimportador'   value ='".strtoupper($l['nivelcomercialdesc'])."' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Telefono " . "</h3>" . "<input type='text' name='telefono' class ='datosinputimportador1'   value ='{$l['telefono']}' disabled>" . "<br>" ;
                                            echo "<h3>" . "Direccion " . "</h3>" . "<input type='text' name='direccion' class ='datosinputimportador'   value ='".strtoupper($l['direccion'])."' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Correoelectronico " . "</h3>" . "<input type='text' name='correoelectronico' class ='datosinputimportador1'   value ='".strtoupper($l['correoelectronico'])."' disabled>" . "<br>" ;
                                            echo "<h3>" . "Pais " . "</h3>" . "<input type='text' name='pais' class ='datosinputimportador'   value ='".strtoupper($l['pais'])."' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Depto " . "</h3>" . "<input type='text' name='depto' class ='datosinputimportador1'   value ='".strtoupper($l['depto'])."' disabled>" . "<br>" ;
                                            echo "<h3>" . "Administracionmercancia " . "</h3>" . "<input type='text' name='administracionmercancia' class ='datosinputimportador'   value ='".strtoupper($l['administracionmercancia'])."' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "CodigoOEA " . "</h3>" . "<input type='text' name='CodigoOEA' class ='datosinputimportador1'   value ='".strtoupper($l['CodigoOEA'])."' disabled>" . "<br>" ;
                                            echo "<h3>" . "Actividadeconomicacod " . "</h3>" . "<input type='text' name='actividadeconomicacod' class ='datosinputimportador'   value ='{$l['actividadeconomicacod']}' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Actividadeconomicadesc " . "</h3>" . "<input type='text' name='actividadeconomicadesc' class ='datosinputimportador1'   value ='".strtoupper($l['actividadeconomicadesc'])."' disabled>" . "<br>" ;
                                            echo "<h3>" . "Estado " . "</h3>" . "<input type='text' name='estado' class ='datosinputimportador'   value ='".strtoupper($l['estado'])."' disabled>" ;       
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
                            <a href="importadores.php" class="Salida_Segura2">
                                Salir
                            </a>
                        </button>

                        <?php 
                        if(isset($_POST['ExitBtn'])){
                            header("location:http://localhost/Proyecto_soft/openCVLProyect/impo/importador/importadores.php");
                        }
                        ?>

                    </div>
                    <div>
            

        </form>
        </main>




        
        
</div>
</body>
</html> 
