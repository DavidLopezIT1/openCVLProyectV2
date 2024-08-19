<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="impo.css">
    <script src="https://kit.fontawesome.com/5bcdd05e64.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<header>
        
    <?php
           /* This block of code in PHP is responsible for checking the session variable 'nombre'.
           Here's what each part does: */

            session_start();

            /* This block of PHP code is responsible for checking the session variable 'nombre'. Here's
            what each part does: */

            $sesion = $_SESSION['nombre'];
                        if($sesion == null || $sesion ==""){
                            echo "<script>alert('Error grave de seguridad, Uster no tiene acceso para este sitio')</script>";
                            header("location:http://localhost/Proyecto_soft/openCVLProyect/cierre_sesion.php");
                            die();
                            }   


                /* The line `                = "<strong class='Bienvenida'>Bienvenido :
                </strong>" . "<strong></strong>";` is creating a string variable
                `` that contains an HTML structure. */

                $sesionValue= "<strong class='Bienvenida'>Bienvenido : </strong>" . "<strong>$sesion</strong>";
                echo $sesionValue;

                echo "<a href='http://localhost/Proyecto_soft/openCVLProyect/interfaz.php' class='rutas'>Nivel anterior</a>";
                            
                /* The line ` = __FILE__;` in the PHP code is assigning the value of
                the magic constant `__FILE__` to the variable ``. */

                $SpecificRouteVar = __FILE__;
                $palabraEspecifica = "htdocs";
                
                /* The line ` = strpos(, );` in the PHP
                code is using the `strpos()` function to find the position of the first occurrence
                of a substring within a string. */

                $posicionname = strpos($SpecificRouteVar, $palabraEspecifica);

                /* This block of PHP code is checking if the variable `` is not equal to
                `false`. If it's not false, it then adds the length of the string stored in the
                variable `` to the value of ``. */
                
                if ($posicionname !== false) {
                    
                    $posicionname += strlen($palabraEspecifica);
                    
                    $resultado = substr($SpecificRouteVar, $posicionname);
                    
                    $RutaAbsoluta = "http://localhost" . $resultado;
                } 

                    $ruta5 ="<a href='$RutaAbsoluta' class='rutas'>Nivel Anterior</a>";
        ?>

    <button class="Salida_Segura">
        <a href="http://localhost/Proyecto_soft/openCVLProyect/cierre_sesion.php" class="salida_segura_a">Salida Segura</a>
    </button>
</header>
<main> 

    <div>
        <form action="">
            <fieldset> 
                <legend>Procesos</legend>

                <div class="Procesos">
                    <div class="Improceso"><i class="fa-regular fa-square-plus"></i><br><br><a href="">Operaciones</a></div>
                </div>

            </fieldset>
        </form>
    </div>
    
<div>
    <form action=""> 
        <fieldset>
            <legend>Parámetros</legend>

            <!-- /* The above code appears to be HTML markup with Font Awesome icons and links. It seems to
            be creating a list of parameters or categories with corresponding icons and links to
            different pages or sections of a project management system. Each `<div>` element with
            the class "Imparametrica" contains an icon and a link to a specific section such as
            Importador, Proveedor, Productos, Inconterm, Transportador, etc. The links likely lead
            to different functionalities or information related to each category within the project
            management system. */ -->
            
            <div class="Parametros">
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-user-secret"></i><br><br><a href="http://localhost/Proyecto_soft/openCVLProyect/impo/importador/importadores.php">Importador</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-sitemap"></i><br><br><a href="">Proveedor</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-bullseye"></i><br><br><a href="">Productos</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-regular fa-registered"></i><br><br><a href="">Inconterm</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-id-card-clip"></i><br><br><a href="">Transportador</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-copy"></i><br><br><a href="">Tipo Declaración</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-city"></i><br><br><a href="">Oficina Incomex</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-building"></i><br><br><a href="">Administración</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-city"></i><br><br><a href="">Lugar Ingreso</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-sitemap"></i><br><br><a href="">Subpartidas</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-list-check"></i><br><br><a href="">Acuerdos</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-tag"></i><br><br><a href="">Modalidad</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-regular fa-building"></i><br><br><a href="">Depósito</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-user-group"></i><br><br><a href="">Condiciones de transacción</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-magnifying-glass-chart"></i><br><br><a href="">Naturaleza de la transacción</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-globe"></i><br><br><a href="">Pais</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-folder-tree"></i><br><br><a href="">Parametros Generales</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-arrows-to-dot"></i><br><br><a href="">Modo de Transporte</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-square-poll-horizontal"></i><br><br><a href="">Declarante</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-chart-line"></i><br><br><a href="">Tasas de cambio</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-dollar-sign"></i><br><br><a href="">Moneda</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-square-poll-vertical"></i><br><br><a href="">Unidad de medida</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-boxes-packing"></i><br><br><a href="">Embalaje</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-globe"></i><br><br><a href="">Forma de Envío Dav</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-ticket"></i><br><br><a href="">Forma de pago</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-file-lines"></i><br><br><a href="">Descriptores res.057</a></div>
                <div class="Imparametrica" name="parametrica"><i class="fa-solid fa-industry"></i><br><br><a href="">Nivel comercial</a></div>
        </div>

    </fieldset>
</form>
</div>

<div>
    <form action="">    
        <fieldset>
            <legend>Reportes</legend>
            
            <!-- /* The above code is HTML markup with PHP comments. It seems to be a section of a web page
            displaying a list of reports with icons and links for each report. Each report has an
            icon and a link for a specific type of consultation, such as "Consulta General",
            "Consulta Productos", "Consulta Importador", and so on. The code structure suggests that
            it is meant to be a visual representation of a menu or navigation system for accessing
            different types of reports or consultations. */ -->
            
            <div class="Reportes">      
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-circle-info"></i><br><br><a href="">Consulta General</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-qrcode"></i><br><br><a href="">Consulta Productos</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-user-secret"></i><br><br><a href="">Consulta Importador</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-sitemap"></i><br><br><a href="">Consulta Proveedor</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-list-check"></i><br><br><a href="">Consulta Acuerdo</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-tag"></i> <br><br><a href="">Consulta Modalidad</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-boxes-packing"></i><br><br><a href="">Consulta Embalaje</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-file-lines"></i><br><br><a href="">Consulta Descriptores res.057</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-dollar-sign"></i><br><br><a href="">Consulta Moneda</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-arrows-to-dot"></i><br><br><a href="">Consulta Modo de transporte</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-id-card-clip"></i><br><br><a href="">Consulta Transportador</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-regular fa-building"></i><br><br><a href="">Consulta Depósito</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-circle-info"></i><br><br><a href="">Consulta Subpartida</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-circle-info"></i><br><br><a href="">Consulta Administración</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-circle-info"></i><br><br><a href="">Consulta Lugar ingreso</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-circle-info"></i><br><br><a href="">Consulta Subpartidas</a></div>
                <div class="ImReporte" name="ImReporte"><i class="fa-solid fa-circle-info"></i><br><br><a href="">Consulta Subpartidas</a></div>
            </div>
            
        </fieldset>
        
    </form>
    
</div>

<div>
            <footer>
                <!-- <button><a href="ModuleImpo.php">volver</a></button><br><br> -->
                <p>&copy; 2024 Importaciones - David L</p>
            </footer>
</div>



</main>

</body>
</html>