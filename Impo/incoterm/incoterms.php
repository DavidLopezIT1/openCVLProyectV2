<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incoterms</title>
    <script src="../general_scripts.js"></script>
    <script src="https://kit.fontawesome.com/5bcdd05e64.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/Proyecto_soft/openCVLProyect/Styles/GeneralStyleEverithing.css">
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
                echo "<a href='http://localhost/Proyecto_soft/openCVLProyect/impo//ModuleImpo.php' class='rutas'>Nivel anterior</a>";           
        ?>

        <button class="Salida_Segura">
            <a href="http://localhost/Proyecto_soft/openCVLProyect/cierre_sesion.php" class="salida_segura_a">Salida Segura</a>
        </button>
</header>

<main>

<script>

function changedform1(parameter, param2){
    document.getElementById('miFormulario');
    let generalformethod = document.getElementById('miFormulario');
    generalformethod.action = parameter;
    generalformethod.method = param2;

    // document.getElementById('miFormulario').submit();
}

function changedform2(parameter, param3){
    document.getElementById('miFormulario');
    let generalformethod = document.getElementById('miFormulario');
    generalformethod.action = parameter;
    generalformethod.method = param2;

    // document.getElementById('miFormulario').submit();
}

</script>

    <form action="incoterms.php" method="post" id="miFormulario">
    <div class="container">
        <header class="header2">
            <h1>INCOTERMS</h1>
        </header>
        
        <main>
            <div class="search-container">
                <div class="search-form">
                    <input type="text" id="querybd" name="querbd" placeholder="Consulta Inducida" class="querybd">
                    <button type="submit" name ="botonconsultaGeneral" >
                    <i class="fa-solid fa-eye"></i>
                    </button>
                </div>
            </div>
            
            <section class="results">
                <h2>RESULTADOS DE LA CONSULTA</h2>

            <div class="icon_Table_Functions">
                <button name ="createReg" title="Crear"><i class="fa-solid fa-plus" id="icon_Table_Functions"></i></button>
                <button name ="editReg" title="Editar" onclick="changedform1('incotermEdit.php', 'post')"><i class="fa-solid fa-pen" id="icon_Table_Functions" ></i></button>
                <button name="deletefrom" title="Eliminar"><i class="fa-solid fa-trash" id="icon_Table_Functions"></i></button>
                <button name="statusfrom" title="Cabiar Estado"><i class="fa-solid fa-rotate" id="icon_Table_Functions"></i></button>

            <?php 

                    if(isset($_POST['createReg'])){
                        header("location:http://localhost/Proyecto_soft/openCVLProyect/impo/incoterm/incotermCreate.php");
                    }
                    if(isset($_POST['editReg'])){
                        $editReg = $_POST['editReg'];
                    }else{
                        $editReg ="";
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
                <th>CÓDIGO</th>
                <th>INCOTERM</th>
                <th>LUGAR ENTREGA</th>
                <th>ESTADO</th>
                <th><input type="checkbox" style=" accent-color: yellow;" id="generalCheckbox" onclick="selectorChecked ()"></th>
            </thead>
            
            <tbody>

                <?php 
                            
                    $variabledecontrol = false;                   
                    $querbd = "";
                            
                            if(isset($_POST['querbd'])) {
                                $querbd = $_POST['querbd'];
                                $variabledecontrol = true;
                            }
                            if($variabledecontrol && $querbd != "") {
                                $query1 = "SELECT * FROM siaincoterm WHERE codincoterm LIKE '%" . mysqli_real_escape_string($conection, $querbd) . "%' OR incotermdesc LIKE '%" . mysqli_real_escape_string($conection, $querbd) . "%'" ;

                                $resultquery = $conection->query($query1);
                            
                                while($a = $resultquery->fetch_assoc()) {
                                    echo "<tr>" .
                                    "<td><button class='deletebackground' name='deletebackgroundbutton' value='" . htmlspecialchars($a['codincoterm']) . "' onclick=\"changedform2('incotermquery.php', 'post')\">" . htmlspecialchars($a['codincoterm']) . "</button></td>" . 
                                         "<td>" . htmlspecialchars(strtoupper($a['incotermdesc'])) . "</td>" .
                                         "<td>" . htmlspecialchars($a['lugarentrega']) . "</td>" .
                                         
                                         "<td>" . htmlspecialchars(strtoupper($a['estado'])) . "</td>" .
                                         "<td><input type='checkbox' style='accent-color: yellow' class='checkboxitem' name='checkboxitemv[]' value='" . htmlspecialchars($a['codincoterm']) . "'></td>" .
                                         "</tr>";
                                }
                            } else{
                                $query2 = "SELECT * FROM siaincoterm";
                                $resultquery2 = $conection->query($query2);
                            
                                while($a = $resultquery2->fetch_assoc()) {
                                    echo "<tr>" .
                                    "<td><button class='deletebackground' name='deletebackgroundbutton' value='" . htmlspecialchars($a['codincoterm']) . "' onclick=\"changedform2('incotermquery.php', 'post')\">" . htmlspecialchars($a['codincoterm']) . "</button></td>" . 
                                         "<td>" . htmlspecialchars(strtoupper($a['incotermdesc'])) . "</td>" .
                                         "<td>" . htmlspecialchars($a['lugarentrega']) . "</td>" .
                                         "<td>" . "<span name = 'statusUpdate[]' value='" . htmlspecialchars(strtoupper($a['estado'])) . "'>" . htmlspecialchars(strtoupper($a['estado'])) . "</span>" . "</td>" .
                                         "<td><input type='checkbox' style='accent-color: yellow' class='checkboxitem' name='checkboxitemv[]' value='" . htmlspecialchars($a['codincoterm']) . "'></td>" .
                                         "</tr>";
                                }
                            }
                            if(isset($_POST['checkboxitemv']) && isset($_POST['deletefrom'])) {

                                foreach($_POST['checkboxitemv'] AS $selectedId) {

                                    $selectedId = mysqli_real_escape_string($conection, $selectedId);
                                    $querydelete = "DELETE FROM siaincoterm WHERE codincoterm = '$selectedId'";
                                    $querydeleteresult = $conection->query($querydelete);
                                    
                                    if ($querydeleteresult) {
                                        echo "<script>alert('Incoterm eliminado con éxito')</script>";
                                    } else {
                                        echo "<script>alert('No se eliminó el Incoterm')</script>";
                                    }
                                }
                            }
                                if(isset($_POST['checkboxitemv']) && isset($_POST['statusfrom'])){

                                        foreach($_POST['checkboxitemv'] AS $keystatus1){
                                            $querystatussql ="SELECT * FROM siaincoterm";
                                            $resultquerystatussql = $conection->query($querystatussql);
                                            $statusInact = "INACTIVO";
                                            $statusAct = "ACTIVO";

                                                while($keystatus2 = $resultquerystatussql->fetch_assoc()){ 
                                                    
                                                    if($keystatus2['estado'] =="ACTIVO" && $keystatus1 == $keystatus2['codincoterm']){

                                                        foreach($_POST['checkboxitemv'] AS $selectedIdstatus){
                                                            $selectedIdstatus = mysqli_real_escape_string($conection, $selectedIdstatus);
                                                            $querystatus = "UPDATE siaincoterm SET estado = 'INACTIVO' WHERE codincoterm = '$selectedIdstatus'";
                                                            $resulrQuerystatus = $conection->query($querystatus);
                                                            echo"<script>alert('Incoterm Inactivado exitosamente')</script>";
                                                            break;
                                                        }

                                                    }elseif($keystatus2['estado'] =="INACTIVO" && $keystatus1 == $keystatus2['codincoterm']){

                                                            foreach($_POST['checkboxitemv'] AS $selectedIdstatus){
                                                            $selectedIdstatus = mysqli_real_escape_string($conection, $selectedIdstatus);
                                                            $querystatus2 = "UPDATE siaincoterm SET estado = 'ACTIVO' WHERE codincoterm = '$selectedIdstatus'";
                                                            $resulrQuerystatus = $conection->query($querystatus2);
                                                            echo"<script>alert('Incoterm Activado exitosamente')</script>";
                                                            break;
                                                            }
                                                        }
                                                
                                                }
                                            }
                                    }  

                            if(isset($_POST['checkboxitemv']) && $editReg!=""){
                               
                                foreach($_POST['checkboxitemv'] AS $queryEditV1){
                                     $queryEditV1 = urlencode($queryEditV1);
                                    echo $queryEditV1;
                                }
                            }

                            if(isset($_POST['deletebackgroundbutton'])){
                                $variablefor= urlencode($_POST['deletebackgroundbutton']);
                            }
                ?>
                                
        </tbody>

    </table>

</section>
</main>
        
<footer>
    <p>&copy; 2024 IMPORTACIONES - DAVID L</p>
</footer>
    </div>

    </form>

            <script>
                
            </script>





</body>
</html>

