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

    include "../functions.php";
    include "../conection.php";

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

        <form action="importadorEdit.php" method ="post">
                <fieldset>
                    <legend>
                        Editar / Importador 
                    </legend>

                    <div class="HeaderImportador">
                        <header>
                            <h1><p>Editar Datos Importador</p></h1>
                        </header>
                    </div>

<?php
            $recibirvariable = $_GET['checkboxitemv'];
            foreach($recibirvariable AS $rowID){
                $rowID ;
            }


                    
                  $impresionEditImportador = new ImportadorEdit($conection, $rowID);
                    echo $impresionEditImportador->imprimirenpantallaEdit($conection, $rowID);

                    // if(isset($_POST['SendInfo'])){
                    //     $prueba->ConsultareInsertImportador($conection);
                    // }
                        
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
                        
                            
                            
                        <button name="SalidaImportador">
                            <a href="importadores.php" class="Salida_Segura2">
                                Salir
                            </a>
                        </button>

                    </div>
                    <div>
            

        </form>
        
        <?php 
        
        
        ?>


</div>
</body>
</html>
