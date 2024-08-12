<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Consulta de Datos</title>
    <script src="general_scripts.js"></script>
    <script src="https://kit.fontawesome.com/5bcdd05e64.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="importadores.css">
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

                echo "<a href='http://localhost/Proyecto_soft/openCVLProyect/impo/ModuleImpo.php' class='rutas'>Nivel anterior</a>";
                            
        ?>

        <button class="Salida_Segura">
            <a href="http://localhost/Proyecto_soft/openCVLProyect/cierre_sesion.php">Salida Segura</a>
        </button>
</header>

<main>
    <form action="importadores.php" method="post" id="miFormulario">
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

            <div class="icon_Table_Functions">
                <button style="border:none; background: #33333300;" name="editarbutton"><i class="fa-solid fa-pen" id="icon_Table_Functions"></i></button>
                <!-- <i class="fa-solid fa-check" id="icon_Table_Functions"></i> -->
                <button style="border:none; background: #33333300;" name="deletebutton"><i class="fa-solid fa-trash" id="icon_Table_Functions"></i></button>
                <button style="border:none; background: #33333300;" name="stausbutton"><i class="fa-solid fa-rotate" id="icon_Table_Functions"></i></button>
            <?php 
            $editarbutton2 =false;
            $deletebutton2 = false;
            $stausbutton2 = false;

            if(isset($_POST['editarbutton'])){
                $editarbutton = $_POST['editarbutton'];
                $editarbutton2 =true;
            }
            if(isset($_POST['deletebutton'])){
                $deletebutton = $_POST['deletebutton'];
                $deletebutton2 = true;
            }
            if(isset($_POST['stausbutton'])){
                $stausbutton = $_POST['stausbutton'];
                $stausbutton2 = true;
            }








            ?>
            
            
            </div>
                <table>
                <br>
                    <thead>
                        <th>Nit</th>
                        <th>Importador</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Estado</th>
                        <th><input type="checkbox" style=" accent-color: yellow;" id="generalCheckbox" onclick="selectorChecked ()"></th>
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
                                            "<td>" . $a['estado'] . "</td>" .  
                                            "<td>" . "<input type='checkbox' style='accent-color: yellow' id='checkboxitem'>" . "</td>" . "<tr>" ;
                                            }   
                                    }else{
                                        $query2="SELECT * FROM siaimportador";
                                        $resultquery2 = $conection->query($query2);

                                        while($a = $resultquery2->fetch_assoc()){
                                            echo "<tr>" . "<td><a href='http://localhost/Proyecto_soft/openCVLProyect/impo/importador.php'>" . $a['nit'] . "<a></td>" .
                                            "<td>" . $a['razonsocial'] . "</td>" .
                                            "<td>" . $a['telefono'] . "</td>" .
                                            "<td>" . $a['direccion'] . "</td>" .
                                            "<td>" . $a['estado'] . "</td>" .  
                                            "<td>" . "<input type='checkbox' style='accent-color: yellow' class='checkboxitem'>" . "</td>" . "<tr>" ;
                                        }
                                    }
                                    
                   
                            ?>



                    </tbody>

                </table>

            </section>
        </main>
        
        <footer>

            <p>&copy; 2024 Importaciones - David L</p>
        </footer>
    </div>

    </form>

</body>
</html>