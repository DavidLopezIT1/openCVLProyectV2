<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Consulta de Datos</title>
    <script src="https://kit.fontawesome.com/5bcdd05e64.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="importadores.css">
</head>
<body >

<header>
        
    <?php

    /* The lines `include "../functions.php";` and `include "../conection.php";` are including external PHP
    files into the current PHP script. */

    include "../functions.php";
    include "../conection.php";

   /* `session_start();` is a PHP function that initializes a new session or resumes the existing
   session based on a session identifier passed via a GET or POST request, or a cookie. It is
   typically used at the beginning of a PHP script to start or resume a session, allowing you to
   store and retrieve session variables across multiple pages or requests. This function must be
   called before any output is sent to the browser. */

    session_start();

           /* This block of PHP code is responsible for checking the session variable 'nombre' to
           determine if a user is logged in. Here's a breakdown of what it does: */

            $sesion = $_SESSION['nombre'];

                if($sesion == null || $sesion ==""){
                    echo "<script>alert('Error grave de seguridad, Uster no tiene acceso para este sitio')</script>";
                    header("location:http://localhost/proyect_manager_v1/cierre_sesion.php");
                    die();     
                }


                /* The code snippet `= "<strong class='Bienvenida'>Bienvenido : </strong>"
                . "<strong></strong>"; echo ;` is creating a string variable
                `` that contains an HTML string for displaying a welcome message. */

                $sesionValue= "<strong class='Bienvenida'>Bienvenido : </strong>" . "<strong>$sesion</strong>";
                echo $sesionValue;

                echo "<a href='http://localhost/proyect_manager_v1/impo/ModuleImpo.php' class='rutas'>Nivel anterior</a>";
                            
                /* The code snippet ` = __FILE__;  = "htdocs";` is
                assigning the value of the magic constant `__FILE__` to the variable
                ``. */
                // $SpecificRouteVar = __FILE__;

                // /* The line `  = "htdocs";` in the PHP code is assigning the string
                // value "htdocs" to the variable ``. This variable is used later in
                // the code to help identify a specific substring within another string using the
                // `strpos()` function. */

                // $palabraEspecifica = "htdocs";
                
                // /* The line ` = strpos(, );` in the PHP
                // code is using the `strpos()` function to find the position of a specific substring
                // within another string. */
                
                // $posicionname = strpos($SpecificRouteVar, $palabraEspecifica);
                
                // if ($posicionname !== false) {
                //     // Calcula la posición inicial del texto que quieres extraer
                //     $posicionname += strlen($palabraEspecifica);
                    
                //     // Extrae el texto desde la posición encontrada hasta el final del SpecificRouteVar$SpecificRouteVar
                //     $resultado = substr($SpecificRouteVar, $posicionname);
                    
                //     // Muestra el resultado
                //     $RutaAbsoluta = "http://localhost/proyect_manager_v1/impo/ModuleImpo.php";
                //     // echo $RutaAbsoluta;
                // } 

                //     $ruta5 ="<a href='$RutaAbsoluta' class='rutas'>Nivel Anterior</a>";
        ?>

        <button class="Salida_Segura">
            <a href="http://localhost/proyect_manager_v1/cierre_sesion.php">Salida Segura</a>
        </button>
</header>

<main>
    <form action="importadores.php" method="post">
    <div class="container">
        <header class="header2">
            <h1>Importadores</h1>
        </header>
        
        <main>
            <div class="search-container">
                <div class="search-form">
                    <input type="text" id="querybd" name="querbd" placeholder="Introduce tu consulta" >
                    <button type="submit" name ="botonconsultaImportadores" >
                    <i class="fa-solid fa-eye"></i>
                    </button>
                </div>
            </div>
            
            <section class="results">
                <h2>Resultados de la Consulta</h2>

                <table>
                <br>
                    <thead>
                        <th>Nit</th>
                        <th>Importador</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Estado</th>
                    </thead>

                    <tbody>
                            <?php 
                                 $variabledecontrol =false;                   
                                 $querbd="";

                                 if(isset($_POST['querbd'])){
                                    $querbd=$_POST['querbd'];
                                    $variabledecontrol =true;
                                }

                                    if($variabledecontrol =true && $querbd !=""){
                                        $query1="SELECT * FROM siaimportador WHERE nit = '$querbd'";
                                        $resultquery = $conection->query($query1);

                                        while($a = $resultquery->fetch_assoc()){
                                            echo "<tr>" . "<td><a href=''>" . $a['nit'] . "<a></td>" . 
                                            "<td>" . $a['razonsocial'] . "</td>" .
                                            "<td>" . $a['telefono'] . "</td>" .
                                            "<td>" . $a['direccion'] . "</td>" .
                                            "<td>" . $a['estado'] . "</td>" . "<tr>";
                                            }   
                                    }else{
                                        $query2="SELECT * FROM siaimportador";
                                        $resultquery2 = $conection->query($query2);

                                        while($a = $resultquery2->fetch_assoc()){
                                            echo "<tr>" . "<td><a href=''>" . $a['nit'] . "<a></td>" .
                                            "<td>" . $a['razonsocial'] . "</td>" .
                                            "<td>" . $a['telefono'] . "</td>" .
                                            "<td>" . $a['direccion'] . "</td>" .
                                            "<td>" . $a['estado'] . "</td>" . "<tr>";
                                        }
                                    }
                                    


                            ?>

                    </tbody>

                </table>


                <!-- <div class="result-item">
                    <h3><a href="importador.php">1001287656</a></h3>
                    <p>Descripción del resultado 1.</p>
                </div>
                <div class="result-item">
                    <h3>Resultado 2</h3>
                    <p>Descripción del resultado 2.</p>
                </div> -->
                <!-- Más resultados pueden añadirse aquí -->
            </section>
        </main>
        
        <footer>
            <!-- <button><a href="ModuleImpo.php">volver</a></button><br><br> -->
            <p>&copy; 2024 Importadores - David L</p>
        </footer>
    </div>

    </form>

</body>
</html>