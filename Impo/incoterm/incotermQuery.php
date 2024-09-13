<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="incoterm2.css">
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

                echo "<a href='http://localhost/Proyecto_soft/openCVLProyect/impo/incoterm/incoterms.php' class='rutas'>Nivel anterior</a>";
                            
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

        <form action="incotermQuery.php" method ="post">
                <fieldset>

                    <div style="margin-bottom: 10px;">
                        <strong style="color:#0D0D0D; font-size: 20px; margin-bottom: 10px;">Consultar / Incoterm</strong>
                    </div>
                    <div class="HeaderImportador">
                        <header class="header3">
                            <h1><p>Datos Incoterm</p ></h1>
                        </header>
                    </div>
 
        <?php

            $variablefor=$_POST['deletebackgroundbutton'];
                $variablefor;

                    $consultarBD ="SELECT * FROM siaincoterm WHERE codincoterm = '$variablefor' ";
                    $queryconsultarBD = $conection->query($consultarBD);
                        
                    while($l = $queryconsultarBD->fetch_assoc()){
                        
                        echo "<div class ='ContainerGeneralImportador'>";
                                            
                                            echo "<h3>" . "Código Incoterm " . "</h3>" . "<input type='text' name='codincoterm' class ='datosinputimportador' value ='". strtoupper($l['codincoterm'])."' disabled>" . "<br>" ;
                                            echo "<h3 class='datosinputimportador1'>" . "Descripción Incoterm" . "</h3>" . "<input type='text' name='incotermdesc' class ='datosinputimportador1'  value ='{$l['incotermdesc']}' disabled>" . "<br>" ;
                                            echo "<h3>" . "Lugar Entrega " . "</h3>" . "<input type='text' name='lugarentrega' class ='datosinputimportador' value ='".strtoupper($l['lugarentrega'])."' disabled >" . "<br>" ;
                                            echo "<h3 style='margin-left:40px'>" . "Estado" . "</h3>" . "<input type='text' name='estado' class ='datosinputimportador1'   value ='".strtoupper($l['estado'])."' disabled>" ;       
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
                            <a href="incoterms.php" class="Salida_Segura2">
                                Salir
                            </a>
                        </button>

                        <?php 
                        if(isset($_POST['ExitBtn'])){
                            header("location:http://localhost/Proyecto_soft/openCVLProyect/impo/incoterm/incoterms.php");
                        }
                        ?>

                    </div>
                    <div>
            

        </form>
        </main>




        
        
</div>
</body>
</html> 
