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

                                        while ($a = $resultquery->fetch_assoc()) {
                                            
                                            echo "<tr>" .
                                                 "<td><a href=''>" . htmlspecialchars($a['nit']) . "</a></td>" .
                                                 "<td>" . htmlspecialchars($a['razonsocial']) . "</td>" .
                                                 "<td>" . htmlspecialchars($a['telefono']) . "</td>" .
                                                 "<td>" . htmlspecialchars($a['direccion']) . "</td>" .
                                                 "<td>" . htmlspecialchars($a['estado']) . "</td>" .
                                                 "<td><input type='checkbox' style='accent-color: yellow' id='checkboxitem' name='checkboxitemv' ></td>" .
                                                 "</tr>";
                                                 
                                                }   
                                                }else{
                                                    $query2="SELECT * FROM siaimportador";
                                                    $resultquery2 = $conection->query($query2);

                                                    while($a = $resultquery2->fetch_assoc()){
                                                        echo "<tr>" . "<td><a href='http://localhost/Proyecto_soft/openCVLProyect/impo/importadorquery.php'>" . $a['nit'] . "<a></td>" .
                                                        "<td>" . $a['razonsocial'] . "</td>" .
                                                        "<td>" . $a['telefono'] . "</td>" .
                                                        "<td>" . $a['direccion'] . "</td>" .
                                                        "<td>" . $a['estado'] . "</td>" . 
                                                        // "<td>" . "<input type='checkbox' style='accent-color: yellow' class='checkboxitem' name='checkboxitemv' value="'$a['id']'" >" . "</td>" . "<tr>" ;
                                                        "<td><input type='checkbox' style='accent-color: yellow' class='checkboxitem' name='checkboxitemv' value='{$a['id']}'></td><tr>";
                                                        if(isset($_POST['checkboxitemv']))
                                                         $valueCheckbox = $_POST['checkboxitemv'];
                                                         global $valueCheckbox;
                                                    
                                                        // echo "<td>" . $valueCheckbox . "</td>";
                                                        //
                                                    }
                                                }
                                                        if($valueCheckbox == $a['id'] && $_POST['deletefrom']){

                                                            $querydelete = "DELETE FROM siaimportador WHERE id = '{$a['id']}'";
                                                                $querydeleteresult = $conection->query($querydelete);
                                                                if($querydeleteresult){
                                                                    echo "<script>alert('Eliminado con exito')</script>";
                                                                }else{
                                                                    echo "<script>alert('No se eliminó el registro')</script>";
                                                                }

                                        }  
                                    
                   



                                      

class importadordator {


    public $conection;

    public function __construct($conection){
        $this->conection =$conection;
    }
   

            public function imprimirenpantalla($conection){
                echo "<div class ='ContainerGeneralImportador'>";
                    echo "<h3>" . "Tipodocumento " . "</h3>" . "<input type='text' name='tipodocumento' class ='datosinputimportador' name='prueba1'>" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Nit " . "</h3>" . "<input type='text' name='nit' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Razonsocial " . "</h3>" . "<input type='text' name='razonsocial' class ='datosinputimportador' >" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Nivelcomercialcod " . "</h3>" . "<input type='text' name='nivelcomercialcod' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Nivelcomercialdesc " . "</h3>" . "<input type='text' name='nivelcomercialdesc' class ='datosinputimportador' >" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Telefono " . "</h3>" . "<input type='text' name='telefono' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Direccion " . "</h3>" . "<input type='text' name='direccion' class ='datosinputimportador' >" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Correoelectronico " . "</h3>" . "<input type='text' name='correoelectronico' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Pais " . "</h3>" . "<input type='text' name='pais' class ='datosinputimportador' >" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Depto " . "</h3>" . "<input type='text' name='depto' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Administracionmercancia " . "</h3>" . "<input type='text' name='administracionmercancia' class ='datosinputimportador' >" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "CodigoOEA " . "</h3>" . "<input type='text' name='CodigoOEA' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Actividadeconomicacod " . "</h3>" . "<input type='text' name='actividadeconomicacod' class ='datosinputimportador' >" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Actividadeconomicadesc " . "</h3>" . "<input type='text' name='actividadeconomicadesc' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Estado " . "</h3>" . "<input type='text' name='estado' class ='datosinputimportador' disabled>" ;       
                    echo "</div>";
                    echo "<div class='Buttons_Container_Send'> 
                                            <button name='SendInfo' class='SendInfo'>Crear Imp</button>
                                            <button name='SalidaImportador'>
                                                <a href='importadores.php' class='Salida_Segura2'>
                                                    Salir
                                                </a>
                                            </button>
                                        </div>  ";  
                    
                

                        if(isset($_POST['tipodocumento'])){
                            $tipodocumento = $_POST['tipodocumento'];
                        }else{
                            $tipodocumento = "";
                        }
                        
                        if(isset($_POST['nit'])){
                            $nit = $_POST['nit'];
                        }else{
                            $nit = "";
                        }
                        if(isset($_POST['razonsocial'])){
                            $razonsocial = $_POST['razonsocial'];
                        }else{
                            $razonsocial = "";
                        }
                        if(isset($_POST['nivelcomercialcod'])){
                            $nivelcomercialcod = $_POST['nivelcomercialcod'];
                        }else{
                            $nivelcomercialcod = "";
                        }
                        if(isset($_POST['nivelcomercialdesc'])){
                            $nivelcomercialdesc = $_POST['nivelcomercialdesc'];
                        }else{
                            $nivelcomercialdesc = "";
                        }
                        if(isset($_POST['telefono'])){
                            $telefono = $_POST['telefono'];
                        }else{
                            $telefono = "";
                        }
                        if(isset($_POST['direccion'])){
                            $direccion = $_POST['direccion'];
                        }else{
                            $direccion = "";
                        }
                        if(isset($_POST['correoelectronico'])){
                            $correoelectronico = $_POST['correoelectronico'];
                        }else{
                            $correoelectronico = "";
                        }
                        if(isset($_POST['pais'])){
                            $pais = $_POST['pais'];
                        }else{
                            $pais = "";
                        }
                        if(isset($_POST['depto'])){
                            $depto = $_POST['depto'];
                        }else{
                            $depto = "";
                        }
                        if(isset($_POST['administracionmercancia'])){
                            $administracionmercancia = $_POST['administracionmercancia'];
                        }else{
                            $administracionmercancia = "";
                        }
                        if(isset($_POST['CodigoOEA'])){
                            $CodigoOEA = $_POST['CodigoOEA'];
                        }else{
                            $CodigoOEA = "";
                        }
                        if(isset($_POST['actividadeconomicacod'])){
                            $actividadeconomicacod = $_POST['actividadeconomicacod'];
                        }else{
                            $actividadeconomicacod = "";
                        }
                        if(isset($_POST['actividadeconomicadesc'])){
                            $actividadeconomicadesc = $_POST['actividadeconomicadesc'];
                        }else{
                            $actividadeconomicadesc = "";
                        }
                        if(isset($_POST['actividadeconomicadesc'])){
                            $actividadeconomicadesc = $_POST['actividadeconomicadesc'];
                        }else{
                            $actividadeconomicadesc = "";
                        }
                        if(isset($_POST['estado'])){
                            $estado = $_POST['estado'];
                        }else{
                            $estado = "";
                        }

                        

                        if(isset($_POST['SendInfo'])){ 

                        $selectImportador ="SELECT * FROM siaimportador";
                        $Selectquery = $conection->query($selectImportador);

                        $datosIguales=false;
                        $datosVacios = false;

                        while($e = $Selectquery->fetch_assoc()){
                            
                           if ($e['nit'] === $nit) {
                                    $datosIguales = true;

                                    if($datosIguales){ 
                                    $ResultadoError = "<script>alert('Datos del importador existen en la base de datos, verifique.')</script>";
                                    echo $ResultadoError;
                                    die();
                                    }
                                }if($nit ==""){
                                    $datosVacios = true;

                                    if ($datosVacios) {
                                        $ResultadoError2 = "<script>alert('Debe completar todos los datos del importador, verifique.')</script>";
                                    echo $ResultadoError2;
                                    die();
                                    }
                                }

                            if ($e['razonsocial'] === $razonsocial) {
                                    $datosIguales = true;

                                    if($datosIguales){ 
                                    $ResultadoError = "<script>alert('Datos del importador existen en la base de datos, verifique.')</script>";
                                    echo $ResultadoError;
                                    die();
                                    }
                                }if($razonsocial ==""){
                                    $datosVacios = true;

                                    if ($datosVacios) {
                                        $ResultadoError2 = "<script>alert('Debe completar todos los datos del importador, verifique.')</script>";
                                    echo $ResultadoError2;
                                    die();
                                    }
                                }

                            if ($e['telefono'] === $telefono) {
                                    $datosIguales = true;

                                    if($datosIguales){ 
                                    $ResultadoError = "<script>alert('Datos del importador existen en la base de datos, verifique.')</script>";
                                    echo $ResultadoError;
                                    die();
                                    }
                                }if($telefono ==""){
                                $datosVacios = true;

                                    if ($datosVacios) {
                                        $ResultadoError2 = "<script>alert('Debe completar todos los datos del importador, verifique.')</script>";
                                    echo $ResultadoError2;
                                    die();
                                    }
                                }

                            if ($e['direccion'] === $direccion) {
                                    $datosIguales = true;

                                    if($datosIguales){ 
                                    $ResultadoError = "<script>alert('Datos del importador existen en la base de datos, verifique.')</script>";
                                    echo $ResultadoError;
                                    die();
                                    }
                                }if($direccion ==""){
                                $datosVacios = true;

                                    if ($datosVacios) {
                                        $ResultadoError2 = "<script>alert('Debe completar todos los datos del importador, verifique.')</script>";
                                    echo $ResultadoError2;
                                    die();
                                    }
                                }

                        
                            if ($e['correoelectronico'] === $correoelectronico) {
                                $datosIguales = true;

                                    if($datosIguales){ 
                                    $ResultadoError = "<script>alert('Datos del importador existen en la base de datos, verifique.')</script>";
                                    echo $ResultadoError;
                                    die();
                                    }
                                }if($correoelectronico ==""){
                                $datosVacios = true;

                                    if ($datosVacios) {
                                        $ResultadoError2 = "<script>alert('Debe completar todos los datos del importador, verifique.')</script>";
                                    echo $ResultadoError2;
                                    die();
                                    }
                                }


                            if ($e['CodigoOEA'] === $CodigoOEA) {
                                $datosIguales = true;
    
                                    if($datosIguales){ 
                                    $ResultadoError = "<script>alert('Datos del importador existen en la base de datos, verifique.')</script>";
                                    echo $ResultadoError;
                                    die();
                                    }
                                }if($CodigoOEA ==""){
                                $datosVacios = true;
    
                                    if ($datosVacios) {
                                        $ResultadoError2 = "<script>alert('Debe completar todos los datos del importador, verifique.')</script>";
                                    echo $ResultadoError2;
                                    die();
                                    }
                                }
                           

                                elseif(!$datosIguales){
                                
                                    $insertImportador = "INSERT INTO siaimportador (nit, 
                                    tipodocumento, 
                                    razonsocial, 
                                    nivelcomercialcod, 
                                    nivelcomercialdesc, 
                                    telefono, 
                                    direccion,
                                    correoelectronico,
                                    pais, 
                                    depto, 
                                    administracionmercancia, 
                                    CodigoOEA,
                                    actividadeconomicacod,
                                    actividadeconomicadesc,
                                    estado
                                    ) VALUES ('$nit',
                                                '$tipodocumento',
                                                '$razonsocial',
                                                '$nivelcomercialcod',
                                                '$nivelcomercialdesc',
                                                '$telefono',
                                                '$direccion',
                                                '$correoelectronico',
                                                '$pais',
                                                '$depto',
                                                '$administracionmercancia',
                                                '$CodigoOEA',
                                                '$actividadeconomicacod',
                                                '$actividadeconomicadesc',
                                                '$estado'
                                                )";
    
                                    $Insertquery = $conection->query($insertImportador);

                                    $estadoDelImportador = "Activo";
                                    $SelectEstadoDelImportador = "UPDATE siaimportador SET estado ='$estadoDelImportador' WHERE nit = $nit";

                                    if($Insertquery){
                                        echo "<script>alert('Datos de importador insertados con exito.')</script>";
                                        $constestatusImport=$conection->query($SelectEstadoDelImportador);
                                        if($constestatusImport){
                                            header("location:http://localhost/Proyecto_soft/openCVLProyect/impo/importador/importadores.php");
                                        }
                                    }
                                    break;
                                    } 
                    }

                }

            }
           
}

         function ShowImportador($conection ){
            $selectquerysearchimport = "SELECT * FROM siaimportador";
            $resultselectquerysearchimport = $conection->query($selectquerysearchimport);

                    if($resultselectquerysearchimport->num_rows > 0){

                        while($a = $resultselectquerysearchimport->fetch_assoc()){
                            
                            echo "<tr>" . "<td>" . $a['nit'] . "</td>" . 
                                "<td>" . $a['razonsocial'] . "</td>" .
                                "<td>" . $a['telefono'] . "</td>" .
                                "<td>" . $a['direccion'] . "</td>" .
                                "<td>" . $a['estado'] . "</td>" . "<tr>";
                        }
                        
                    }
                    
        }

        
                class ImportadorEdit{

                        public $conection;
                        public $parampostscript;
                    
                        public function __construct($conection,$parampostscript){
                            $this->conection =$conection;
                            $this->parampostscript =$parampostscript;
                        }
                    
                                public function imprimirenpantallaEdit($conection, $parampostscript){

                                    $queryBD = "SELECT * FROM siaimportador WHERE id = '$parampostscript'";
                                    $ExecutequeryBD = $this->conection->query($queryBD);
                                    
                                    while($varR = $ExecutequeryBD->fetch_assoc()) {

                                                    $nit = $varR['nit'];
                                                    $tipodocumento = $varR['tipodocumento'];
                                                    $razonsocial = $varR['razonsocial'];
                                                    $nivelcomercialcod = $varR['nivelcomercialcod'];
                                                    $nivelcomercialdesc = $varR['nivelcomercialdesc'];
                                                    $telefono = $varR['telefono'];
                                                    $direccion = $varR['direccion'];
                                                    $correoelectronico = $varR['correoelectronico'];
                                                    $pais = $varR['pais'];
                                                    $depto = $varR['depto'];
                                                    $administracionmercancia = $varR['administracionmercancia'];
                                                    $CodigoOEA = $varR['CodigoOEA'];
                                                    $actividadeconomicacod = $varR['actividadeconomicacod'];
                                                    $actividadeconomicadesc = $varR['actividadeconomicadesc'];
                                                    
                                                    
                                                echo "<div class ='ContainerGeneralImportador'>";
                                                    echo "<h3>" . "Tipodocumento " . "</h3>" . "<input type='text' name='tipodocumento' class ='datosinputimportador' value='$tipodocumento' >" . "<br>" ;
                                                    echo "<h3 class='datosinputimportador1'>" . "Nit " . "</h3>" . "<input type='text' name='nit' class ='datosinputimportador1' value='{$varR['nit']}' disabled>" . "<br>" ;
                                                    echo "<h3>" . "Razonsocial " . "</h3>" . "<input type='text' name='razonsocial' class ='datosinputimportador' value='$razonsocial' >" . "<br>" ;
                                                    echo "<h3 class='datosinputimportador1'>" . "Nivelcomercialcod " . "</h3>" . "<input type='text' name='nivelcomercialcod' class ='datosinputimportador1' value='$nivelcomercialcod' >" . "<br>" ;
                                                    echo "<h3>" . "Nivelcomercialdesc " . "</h3>" . "<input type='text' name='nivelcomercialdesc' class ='datosinputimportador' value='$nivelcomercialdesc' >" . "<br>" ;
                                                    echo "<h3 class='datosinputimportador1'>" . "Telefono " . "</h3>" . "<input type='text' name='telefono' class ='datosinputimportador1' value='$telefono' >" . "<br>" ;
                                                    echo "<h3>" . "Direccion " . "</h3>" . "<input type='text' name='direccion' class ='datosinputimportador' value='$direccion' >" . "<br>" ;
                                                    echo "<h3 class='datosinputimportador1'>" . "Correoelectronico " . "</h3>" . "<input type='text' name='correoelectronico' class ='datosinputimportador1' value='$correoelectronico' >" . "<br>" ;
                                                    echo "<h3>" . "Pais " . "</h3>" . "<input type='text' name='pais' class ='datosinputimportador' value='$pais' >" . "<br>" ;
                                                    echo "<h3 class='datosinputimportador1'>" . "Depto " . "</h3>" . "<input type='text' name='depto' class ='datosinputimportador1' value='$depto' >" . "<br>" ;
                                                    echo "<h3>" . "Administracionmercancia " . "</h3>" . "<input type='text' name='administracionmercancia' class ='datosinputimportador' value='$administracionmercancia' >" . "<br>" ;
                                                    echo "<h3 class='datosinputimportador1'>" . "CodigoOEA " . "</h3>" . "<input type='text' name='CodigoOEA' class ='datosinputimportador1' value='$CodigoOEA' >" . "<br>" ;
                                                    echo "<h3>" . "Actividadeconomicacod " . "</h3>" . "<input type='text' name='actividadeconomicacod' class ='datosinputimportador' value='$actividadeconomicacod' >" . "<br>" ;
                                                    echo "<h3 class='datosinputimportador1'>" . "Actividadeconomicadesc " . "</h3>" . "<input type='text' name='actividadeconomicadesc' class ='datosinputimportador1' value='$actividadeconomicadesc   ' >" . "<br>" ;
                                                    echo "<h3>" . "Estado " . "</h3>" . "<input type='text' name='estado' class ='datosinputimportador' value='{$varR['estado']}' disabled>" ;       
                                                    echo "</div>";
                                                    
                                                    }
                                                    
                                                    if($_SERVER['REQUEST_METHOD'] === "POST"){ 
                                                        
    
                                                        if(isset($_POST['tipodocumento'])){
                                                            $tipodocumento2 = $_POST['tipodocumento'];
                                                            $selectqueryUpdate = "UPDATE siaimportador SET Tipodocumento = '$tipodocumento2' WHERE id = '$parampostscript'";
                                                            $selectqueryUpdateExecute = $conection->query($selectqueryUpdate);
                                                            
                                                        if($selectqueryUpdateExecute){
                                                            echo "<script>alert('Datos del importador actualizados con exito')</script>";
                                                        }
                                                        }
                                                        
                                                        }

                                                }

                                                

                                                    
                                                
            
                }


                    //     class ImportadorQueryGeneral{

                    //         public $conection;
                    //         public $paramid;
                        
                    //         public function __construct($conection, $paramid){
                    //             $this->conection =$conection;
                    //             $this->paramid =$paramid;
                    //         }
                        
                        
                    //                 public function imprimirenpantallaqueryimport($conection, $paramid){

                    //                     $queryBD = "SELECT * FROM siaimportador WHERE id ='$paramid'";
                    //                     $ExecutequeryBD = $this->conection->query($queryBD);

                    //                     while($varR = $ExecutequeryBD->fetch_assoc()) {
                                            
                    //                     echo "<div class ='ContainerGeneralImportador'>";
                                            
                    //                         echo "<h3>" . "Tipodocumento " . "</h3>" . "<input type='text' name='tipodocumento' class ='datosinputimportador' name='prueba1' value ='{$varR['tipodocumento']}'>" . "<br>" ;
                    //                         echo "<h3 class='datosinputimportador1'>" . "Nit " . "</h3>" . "<input type='text' name='nit' class ='datosinputimportador1'  value ='{$varR['nit']}'>" . "<br>" ;
                    //                         echo "<h3>" . "Razonsocial " . "</h3>" . "<input type='text' name='razonsocial' class ='datosinputimportador' >" . "<br>" ;
                    //                         echo "<h3 class='datosinputimportador1'>" . "Nivelcomercialcod " . "</h3>" . "<input type='text' name='nivelcomercialcod' class ='datosinputimportador1' >" . "<br>" ;
                    //                         echo "<h3>" . "Nivelcomercialdesc " . "</h3>" . "<input type='text' name='nivelcomercialdesc' class ='datosinputimportador' >" . "<br>" ;
                    //                         echo "<h3 class='datosinputimportador1'>" . "Telefono " . "</h3>" . "<input type='text' name='telefono' class ='datosinputimportador1' >" . "<br>" ;
                    //                         echo "<h3>" . "Direccion " . "</h3>" . "<input type='text' name='direccion' class ='datosinputimportador' >" . "<br>" ;
                    //                         echo "<h3 class='datosinputimportador1'>" . "Correoelectronico " . "</h3>" . "<input type='text' name='correoelectronico' class ='datosinputimportador1' >" . "<br>" ;
                    //                         echo "<h3>" . "Pais " . "</h3>" . "<input type='text' name='pais' class ='datosinputimportador' >" . "<br>" ;
                    //                         echo "<h3 class='datosinputimportador1'>" . "Depto " . "</h3>" . "<input type='text' name='depto' class ='datosinputimportador1' >" . "<br>" ;
                    //                         echo "<h3>" . "Administracionmercancia " . "</h3>" . "<input type='text' name='administracionmercancia' class ='datosinputimportador' >" . "<br>" ;
                    //                         echo "<h3 class='datosinputimportador1'>" . "CodigoOEA " . "</h3>" . "<input type='text' name='CodigoOEA' class ='datosinputimportador1' >" . "<br>" ;
                    //                         echo "<h3>" . "Actividadeconomicacod " . "</h3>" . "<input type='text' name='actividadeconomicacod' class ='datosinputimportador' >" . "<br>" ;
                    //                         echo "<h3 class='datosinputimportador1'>" . "Actividadeconomicadesc " . "</h3>" . "<input type='text' name='actividadeconomicadesc' class ='datosinputimportador1' >" . "<br>" ;
                    //                         echo "<h3>" . "Estado " . "</h3>" . "<input type='text' name='estado' class ='datosinputimportador' >" ;       
                    //                         echo "</div>";
                    //                     }
                    // }

                    // }




                            ?>