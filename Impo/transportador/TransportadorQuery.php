<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Transportador2.css">
    <title>Incoterm</title>
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

                echo "<a href='http://localhost/Proyecto_soft/openCVLProyect/impo/transportador/Transportadores.php' class='rutas'>Nivel anterior</a>";
                            
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

        <form action="TransportadorQuery.php" method ="post">
                <fieldset>

                    <div style="margin-bottom: 10px;">
                        <strong style="color:#0D0D0D; font-size: 20px; margin-bottom: 10px;">Consultar / Transportador</strong>
                    </div>
                    <div class="HeaderImportador">
                        <header class="header3">
                            <h1><p>Datos Transportador</p ></h1>
                        </header>
                    </div>
 
        <?php

            $variablefor=$_POST['deletebackgroundbutton'];
                $variablefor;

                    $consultarBD ="SELECT * FROM siatransportador WHERE codigotransportador = '$variablefor' ";
                    $queryconsultarBD = $conection->query($consultarBD);
                        
                    while($l = $queryconsultarBD->fetch_assoc()){
                        
                        echo "<div class ='ContainerGeneralImportador'>";
                                            
                                            echo "<h3>" . "Código Trasportadora " . "</h3>" . "<input type='text' name='codigotransportador' class ='datosinputimportador' value ='". strtoupper($l['codigotransportador'])."' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Trasportadora" . "</h3>" . "<input type='text' name='desctransportador' class ='datosinputimportador1'  value ='{$l['desctransportador']}' disabled>" . "<br>" ;
                                            echo "<h3>" . "Pais Procedencia " . "</h3>" . "<input type='text' name='paisprocedenciadescripcion' class ='datosinputimportador' value ='".strtoupper($l['paisprocedenciadescripcion'])."' disabled >" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Sucursal" . "</h3>" . "<input type='text' name='descsucursal' class ='datosinputimportador1' value ='".strtoupper($l['descsucursal'])."' disabled >" . "<br>" ;
                                            echo "<h3>" . "Estado" . "</h3>" . "<input type='text' name='estado' class ='datosinputimportador'   value ='".strtoupper($l['estado'])."' disabled>" ;       
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
                            <a href="Transportadores.php" class="Salida_Segura2">
                                Salir
                            </a>
                        </button>

                        <?php 
                        if(isset($_POST['ExitBtn'])){
                            header("location:http://localhost/Proyecto_soft/openCVLProyect/impo/transportador/Transportadores.php");
                        }
                        ?>

                    </div>
                    <div>
            

        </form>
        </main>




        
        
</div>
</body>
</html> 
