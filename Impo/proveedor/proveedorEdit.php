<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="proveedor.css">
    <title>Importaciones - David L</title>
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
        <form action="" method ="post">
                <fieldset>
                    
                    <div style="margin-bottom: 20px;">
                        <strong style="color:#0D0D0D; font-size: 20px; margin-bottom: 10px;">Editar / Proveedor</strong>
                    </div>

                    <div class="HeaderImportador">
                        <header  class="HeaderImportador2">
                            <h1><p  style=" margin-bottom: 20px;">Editar Datos Proveedor</p></h1>
                        </header>
                    </div>

<?php
            $recibirvariable = $_POST['checkboxitemv'];
            $recibirvariable;
            
            foreach($recibirvariable AS $rowID){
                $rowID;
            }
            
                  $impresionEditImportador = new ProveedorEdit($conection, $rowID);
                    echo $impresionEditImportador->imprimirenpantallaProveedorEdit( );
            
?>
            <div>
            <footer>
                <p>&copy; 2024 Importaciones - David L</p>
            </footer>
            </div>

            </fieldset>

                <br><br>
                <script>
                    function
                    let varpru = document.getElementById('SalidaImportadorId');

                </script>

                    <div class="Buttons_Container_Send"> 

                        <button name="SalidaImportador" id="Salida_Segura2">
                            <a href="proveedores.php" class="Salida_Segura23" style ="font-size: 16px;">
                                Salir
                            </a>
                        </button>

                                <?php 
                                if(isset($_POST['SalidaImportador'])){
                                    $buttonfef=$_POST['SalidaImportador'];
                                    header("location:http://localhost/Proyecto_soft/openCVLProyect/impo/proveedor/proveedores.php ");
                                }
                                ?>

                    </div>
                    <div>
            

        </form>
        </main>      
        <?php 
        
        
        ?>


</div>
</body>
</html>