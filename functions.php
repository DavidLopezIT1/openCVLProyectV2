<?php

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
                            $tipodocumento = strtoupper($_POST['tipodocumento']);
                        }else{
                            $tipodocumento = "";
                        }
                        
                        if(isset($_POST['nit'])){
                            $nit = $_POST['nit'];
                        }else{
                            $nit = "";
                        }
                        if(isset($_POST['razonsocial'])){
                            $razonsocial = strtoupper($_POST['razonsocial']);
                        }else{
                            $razonsocial = "";
                        }
                        if(isset($_POST['nivelcomercialcod'])){
                            $nivelcomercialcod = $_POST['nivelcomercialcod'];
                        }else{
                            $nivelcomercialcod = "";
                        }
                        if(isset($_POST['nivelcomercialdesc'])){
                            $nivelcomercialdesc = strtoupper($_POST['nivelcomercialdesc']);
                        }else{
                            $nivelcomercialdesc = "";
                        }
                        if(isset($_POST['telefono'])){
                            $telefono = $_POST['telefono'];
                        }else{
                            $telefono = "";
                        }
                        if(isset($_POST['direccion'])){
                            $direccion = strtoupper($_POST['direccion']);
                        }else{
                            $direccion = "";
                        }
                        if(isset($_POST['correoelectronico'])){
                            $correoelectronico = strtoupper($_POST['correoelectronico']);
                        }else{
                            $correoelectronico = "";
                        }
                        if(isset($_POST['pais'])){
                            $pais = strtoupper($_POST['pais']);
                        }else{
                            $pais = "";
                        }
                        if(isset($_POST['depto'])){
                            $depto = strtoupper($_POST['depto']);
                        }else{
                            $depto = "";
                        }
                        if(isset($_POST['administracionmercancia'])){
                            $administracionmercancia = strtoupper($_POST['administracionmercancia']);
                        }else{
                            $administracionmercancia = "";
                        }
                        if(isset($_POST['CodigoOEA'])){
                            $CodigoOEA = strtoupper($_POST['CodigoOEA']);
                        }else{
                            $CodigoOEA = "";
                        }
                        if(isset($_POST['actividadeconomicacod'])){
                            $actividadeconomicacod = $_POST['actividadeconomicacod'];
                        }else{
                            $actividadeconomicacod = "";
                        }
                        if(isset($_POST['actividadeconomicadesc'])){
                            $actividadeconomicadesc = strtoupper($_POST['actividadeconomicadesc']);
                        }else{
                            $actividadeconomicadesc = "";
                        }
                        if(isset($_POST['actividadeconomicadesc'])){
                            $actividadeconomicadesc = strtoupper($_POST['actividadeconomicadesc']);
                        }else{
                            $actividadeconomicadesc = "";
                        }
                        if(isset($_POST['estado'])){
                            $estado = strtoupper($_POST['estado']);
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

                                    $estadoDelImportador = "ACTIVO";
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

        //  function ShowImportador($conection ){
        //     $selectquerysearchimport = "SELECT * FROM siaimportador";
        //     $resultselectquerysearchimport = $conection->query($selectquerysearchimport);

        //             if($resultselectquerysearchimport->num_rows > 0){

        //                 while($a = $resultselectquerysearchimport->fetch_assoc()){
                            
        //                     echo "<tr>" . "<td>" . $a['nit'] . "</td>" . 
        //                         "<td>" . $a['razonsocial'] . "</td>" .
        //                         "<td>" . $a['telefono'] . "</td>" .
        //                         "<td>" . $a['direccion'] . "</td>" .
        //                         "<td>" . $a['estado'] . "</td>" . "<tr>";
        //                 }
                        
        //             }
                    
        // }

        class ImportadorEdit {

            public $conection;
            public $parampostscript;
        
            public function __construct($conection, $parampostscript) {
                $this->conection = $conection;
                $this->parampostscript = $parampostscript;
            }
        
            public function imprimirenpantallaEdit() {
                // Realiza la consulta para obtener el registro
                $queryBD = "SELECT * FROM siaimportador WHERE id = '$this->parampostscript'";
                $ExecutequeryBD = $this->conection->query($queryBD);
        
                // Verifica si la consulta fue exitosa
                if ($ExecutequeryBD) {
                    while ($varR = $ExecutequeryBD->fetch_assoc()) {
                        $nit = htmlspecialchars($varR['nit'], ENT_QUOTES);
                        $tipodocumento = htmlspecialchars(strtoupper($varR['tipodocumento']), ENT_QUOTES);
                        $razonsocial = htmlspecialchars(strtoupper($varR['razonsocial']), ENT_QUOTES);
                        $nivelcomercialcod = htmlspecialchars($varR['nivelcomercialcod'], ENT_QUOTES);
                        $nivelcomercialdesc = htmlspecialchars(strtoupper($varR['nivelcomercialdesc']), ENT_QUOTES);
                        $telefono = htmlspecialchars($varR['telefono'], ENT_QUOTES);
                        $direccion = htmlspecialchars(strtoupper($varR['direccion']), ENT_QUOTES);
                        $correoelectronico = htmlspecialchars(strtoupper($varR['correoelectronico']), ENT_QUOTES);
                        $pais = htmlspecialchars(strtoupper($varR['pais']), ENT_QUOTES);
                        $depto = htmlspecialchars(strtoupper($varR['depto']), ENT_QUOTES);
                        $administracionmercancia = htmlspecialchars(strtoupper($varR['administracionmercancia']), ENT_QUOTES);
                        $CodigoOEA = htmlspecialchars(strtoupper($varR['CodigoOEA']), ENT_QUOTES);
                        $actividadeconomicacod = htmlspecialchars($varR['actividadeconomicacod'], ENT_QUOTES);
                        $actividadeconomicadesc = htmlspecialchars(strtoupper($varR['actividadeconomicadesc']), ENT_QUOTES);
                        $estado = htmlspecialchars(strtoupper($varR['estado']), ENT_QUOTES);
        
                        // Mostrar el formulario con los datos actuales
                        echo "<div class='ContainerGeneralImportador'>";
                        echo "<form method='POST' action=''>";
                        echo "<h3>Tipodocumento</h3><input type='text' name='tipodocumento' class='datosinputimportador' value='$tipodocumento'><br>";
                        echo "<h3 class='datosinputimportador1'>Nit</h3><input type='text' name='nit' class='datosinputimportador1' value='$nit' disabled><br>";
                        echo "<h3>Razonsocial</h3><input type='text' name='razonsocial' class='datosinputimportador' value='$razonsocial'><br>";
                        echo "<h3 class='datosinputimportador1'>Nivelcomercialcod</h3><input type='text' name='nivelcomercialcod' class='datosinputimportador1' value='$nivelcomercialcod'><br>";
                        echo "<h3>Nivelcomercialdesc</h3><input type='text' name='nivelcomercialdesc' class='datosinputimportador' value='$nivelcomercialdesc'><br>";
                        echo "<h3 class='datosinputimportador1'>Telefono</h3><input type='text' name='telefono' class='datosinputimportador1' value='$telefono'><br>";
                        echo "<h3>Direccion</h3><input type='text' name='direccion' class='datosinputimportador' value='$direccion'><br>";
                        echo "<h3 class='datosinputimportador1'>Correoelectronico</h3><input type='text' name='correoelectronico' class='datosinputimportador1' value='$correoelectronico'><br>";
                        echo "<h3>Pais</h3><input type='text' name='pais' class='datosinputimportador' value='$pais'><br>";
                        echo "<h3 class='datosinputimportador1'>Depto</h3><input type='text' name='depto' class='datosinputimportador1' value='$depto'><br>";
                        echo "<h3>Administracionmercancia</h3><input type='text' name='administracionmercancia' class='datosinputimportador' value='$administracionmercancia'><br>";
                        echo "<h3 class='datosinputimportador1'>CodigoOEA</h3><input type='text' name='CodigoOEA' class='datosinputimportador1' value='$CodigoOEA'><br>";
                        echo "<h3>Actividadeconomicacod</h3><input type='text' name='actividadeconomicacod' class='datosinputimportador' value='$actividadeconomicacod'><br>";
                        echo "<h3 class='datosinputimportador1'>Actividadeconomicadesc</h3><input type='text' name='actividadeconomicadesc' class='datosinputimportador1' value='$actividadeconomicadesc'><br>";
                        echo "<h3>Estado</h3><input type='text' name='estado' class='datosinputimportador' value='$estado' disabled><br>";
                        echo "<input type='hidden' name='id' value='$this->parampostscript'>";
                        echo "<input type='submit' name='update' value='Actualizar' class='Actualizar'>";
                        echo "</form>";
                        echo "</div>";
                    }
                }
        
                // Procesar el formulario cuando se envía
                if (isset($_POST['update'])) {
                    $tipodocumento = $this->conection->real_escape_string($_POST['tipodocumento']);
                    $razonsocial = $this->conection->real_escape_string($_POST['razonsocial']);
                    $nivelcomercialcod = $this->conection->real_escape_string($_POST['nivelcomercialcod']);
                    $nivelcomercialdesc = $this->conection->real_escape_string($_POST['nivelcomercialdesc']);
                    $telefono = $this->conection->real_escape_string($_POST['telefono']);
                    $direccion = $this->conection->real_escape_string($_POST['direccion']);
                    $correoelectronico = $this->conection->real_escape_string($_POST['correoelectronico']);
                    $pais = $this->conection->real_escape_string($_POST['pais']);
                    $depto = $this->conection->real_escape_string($_POST['depto']);
                    $administracionmercancia = $this->conection->real_escape_string($_POST['administracionmercancia']);
                    $CodigoOEA = $this->conection->real_escape_string($_POST['CodigoOEA']);
                    $actividadeconomicacod = $this->conection->real_escape_string($_POST['actividadeconomicacod']);
                    $actividadeconomicadesc = $this->conection->real_escape_string($_POST['actividadeconomicadesc']);
                    $id = $this->conection->real_escape_string($_POST['id']);
        
                    $selectqueryUpdate = "UPDATE siaimportador SET 
                        tipodocumento = '$tipodocumento',
                        razonsocial = '$razonsocial',
                        nivelcomercialcod = '$nivelcomercialcod',
                        nivelcomercialdesc = '$nivelcomercialdesc',
                        telefono = '$telefono',
                        direccion = '$direccion',
                        correoelectronico = '$correoelectronico',
                        pais = '$pais',
                        depto = '$depto',
                        administracionmercancia = '$administracionmercancia',
                        CodigoOEA = '$CodigoOEA',
                        actividadeconomicacod = '$actividadeconomicacod',
                        actividadeconomicadesc = '$actividadeconomicadesc'
                        WHERE id = '$id'";
                    
                    $selectqueryUpdateExecute = $this->conection->query($selectqueryUpdate);
        
                    if ($selectqueryUpdateExecute) {
                        echo "<script>alert('Datos del importador actualizados con éxito');</script>";
                        if($selectqueryUpdateExecute){
                            header("location:http://localhost/Proyecto_soft/openCVLProyect/impo/importador/importadores.php");
                        }
                    } else {
                        echo "<script>alert('Error al actualizar los datos');</script>";
                    }
                }
            }
        }
        



