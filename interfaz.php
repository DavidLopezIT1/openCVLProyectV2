<?php
include "conection.php";    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleInterfaz.css">
    <title>Interfaz de Usuario</title>
    
</head>
<body>

    <div id="sidebar">
    <?php
        session_start();
        
        // echo 'Nombre del archivo anterior: ' . $GLOBALS['previous_file'];
        $sesion = $_SESSION['nombre'];
            if($sesion == null || $sesion ==""){
                echo "<script>alert('Error grave de seguridad, Uster no tiene acceso para este sitio')</script>";
                header("location:http://localhost/Proyecto_soft/openCVLProyect/cierre_sesion.php");
                die();
                }
                    echo "Bienvenido : " . "<strong>$sesion</strong>";
                    $SpecificRouteVar = __FILE__;
            $palabraEspecifica = "htdocs";
            
            // Encuentra la posición de la palabra específica
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
           
    ?>
        <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
        
        <div class="user-info">
            <div class="user-info2">
                <img src="images\FotoCorporativa.jpg" alt="Usuario" class="fotography">
            </div>

            <?php 
            $consultadatosUsuario = "SELECT * FROM users2";
            $resultconsultadatosUsuario = $conection->query(query: $consultadatosUsuario); 
            ?>

            <p>Nombre del Usuario : 
                    <?php echo "<strong>$sesion</strong>" ?>
            </p>

            <p>Email:   <?php
                            foreach($resultconsultadatosUsuario AS $row){
                                echo "<strong>" . $row['correoelect'] . "</strong>";
                            }
                        ?>
            </p>

            <p>Teléfono: <?php foreach($resultconsultadatosUsuario AS $row){
                                echo "<strong>" . $row['nrotel'] . "</strong>";
                                } 
                            ?>
            </p>

            <p>Dirección:   <?php foreach($resultconsultadatosUsuario AS $row){
                                echo "<strong>" . $row['direccion'] . "</strong>";
                                } 
                            ?>
            </p>

        </div>

        <div id="sidebar2">
            <footer>
                <p>&copy; 2024 Importaciones - David L</p>
            </footer>
        </div>

    </div>

            <div id="main" scroll>

                <header>
                    <p class="Panel_Principal">Modulos Generales del sistema</p>
                    <button class="Salida_Segura"><a href="cierre_sesion.php">Salida Segura</a></button>
                </header>

                <div class="submodule">
                    <h2><a href="./impo//ModuleImpo.php" class="ModButtons"> -> Importaciones</a></h2>
                    
                </div>

                <div class="submodule">
                <h2><a href="" class="ModButtons"> -> Exportaciones</a></h2>
                </div>

                <div class="submodule">
                <h2><a href="" class="ModButtons"> -> Vuce</a></h2>
                </div>

                <div class="submodule">
                <h2><a href="" class="ModButtons"> -> Temporales</a></h2>
                </div>

                <div class="submodule">
                <h2><a href="" class="ModButtons"> -> Alertas</a></h2>               
                </div>

                <div class="submodule">
                <h2><a href="" class="ModButtons"> -> Indicadores</a></h2>
                </div>

                <div class="submodule">
                <h2><a href="" class="ModButtons"> -> Modulos internos del sistema</a></h2>
                </div>
        
            </div>
 

    <script>
        function toggleSidebar() {
            let sidebar = document.getElementById('sidebar');
            let sidebar2 = document.getElementById('sidebar2');
            sidebar.classList.toggle('hidden');
            sidebar2.classList.toggle('hidden')
        }
    </script>
      
   

</body>
</html>
