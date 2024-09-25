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
                                                echo "<script>window.location.href = 'http://localhost/Proyecto_soft/openCVLProyect/impo/importador/importadores.php';</script>";
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
                                echo "<script>window.location.href = 'http://localhost/Proyecto_soft/openCVLProyect/impo/importador/importadores.php';</script>";

                            }
                        } else {
                            echo "<script>alert('Error al actualizar los datos');</script>";
                        }
                    }
                }
            }
            
            function imprimirenpantallaProveedor($conection){
                echo "<div class ='ContainerGeneralImportador'>";
                    // echo"<form action='' method='POST'>";
                    echo "<h3>" . "Código Proveedor " . "</h3>" . "<input type='text' name='codigoproveedor' class ='datosinputimportador' name='prueba1'>" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Nombre Proveedor " . "</h3>" . "<input type='text' name='nombreproveedor' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Pais " . "</h3>" . "<input type='text' name='pais' class ='datosinputimportador' >" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Ciudad " . "</h3>" . "<input type='text' name='cuidad' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Teléfono " . "</h3>" . "<input type='text' name='Telefono' class ='datosinputimportador' >" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "E-mail " . "</h3>" . "<input type='text' name='email' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Condicion Proveedor " . "</h3>" . "<input type='text' name='condicionproveedor' class ='datosinputimportador' >" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Especifique " . "</h3>" . "<input type='text' name='especifique' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Estado " . "</h3>" . "<input type='text' name='estado' class ='datosinputimportador' >" . "<br>" ;
                    // echo "</form>";       
                    echo "</div>";
                    echo "<div class='Buttons_Container_Send'> 
                                            <button name='SendInfo' class='SendInfo'>Crear Prov</button>
                                            <button name='SalidaImportador'>
                                                <a href='proveedores.php' class='Salida_Segura2'>
                                                    Salir
                                                </a>
                                            </button>
                                        </div>  ";  

                        if(isset($_POST['codigoproveedor'])){
                            $codigoproveedor = strtoupper($_POST['codigoproveedor']);
                        }else{
                            $codigoproveedor = "";
                        }
                        
                        if(isset($_POST['nombreproveedor'])){
                            $nombreproveedor = $_POST['nombreproveedor'];
                        }else{
                            $nombreproveedor = "";
                        }
                        if(isset($_POST['pais'])){
                            $pais = strtoupper($_POST['pais']);
                        }else{
                            $pais = "";
                        }
                        if(isset($_POST['cuidad'])){
                            $ciudad = $_POST['cuidad'];
                        }else{
                            $ciudad = "";
                        }
                        if(isset($_POST['Telefono'])){
                            $Telefono = strtoupper($_POST['Telefono']);
                        }else{
                            $Telefono = "";
                        }
                        if(isset($_POST['email'])){
                            $email = $_POST['email'];
                        }else{
                            $email = "";
                        }
                        if(isset($_POST['condicionproveedor'])){
                            $condicionproveedor = strtoupper($_POST['condicionproveedor']);
                        }else{
                            $condicionproveedor = "";
                        }
                        if(isset($_POST['especifique'])){
                            $especifique = strtoupper($_POST['especifique']);
                        }else{
                            $especifique = "";
                        }
                        if(isset($_POST['estado'])){
                            $estado2 = $_POST['estado'];
                        }else{
                            $estado2 = "";
                        }
                
                        if(isset($_POST['SendInfo'])){ 
            
                        $selectImportador ="SELECT * FROM siaproveedor";
                        $Selectquery = $conection->query($selectImportador);
            
                        $datosIguales=false;
                        $datosVacios = false;
            
                        while($e = $Selectquery->fetch_assoc()){
                            
                        if ($e['codigoproveedor'] === $codigoproveedor) {
                                    $datosIguales = true;
            
                                    if($datosIguales){ 
                                    $ResultadoError = "<script>alert('Datos del proveedor existen en la base de datos, verifique.')</script>";
                                    echo $ResultadoError;
                                    die();
                                    }
                                }if($codigoproveedor ==""){
                                    $datosVacios = true;
            
                                    if ($datosVacios) {
                                        $ResultadoError2 = "<script>alert('Debe completar todos los datos del proveedor, verifique.')</script>";
                                    echo $ResultadoError2;
                                    die();
                                    }
                                }
            
                            if ($e['nombreproveedor'] === $nombreproveedor) {
                                    $datosIguales = true;
            
                                    if($datosIguales){ 
                                    $ResultadoError = "<script>alert('Datos del proveedor existen en la base de datos, verifique.')</script>";
                                    echo $ResultadoError;
                                    die();
                                    }
                                }if($nombreproveedor ==""){
                                    $datosVacios = true;
            
                                    if ($datosVacios) {
                                        $ResultadoError2 = "<script>alert('Debe completar todos los datos del proveedor, verifique.')</script>";
                                    echo $ResultadoError2;
                                    die();
                                    }
                                }

                        
                            if ($e['Telefono'] === $Telefono) {
                                $datosIguales = true;
            
                                    if($datosIguales){ 
                                    $ResultadoError = "<script>alert('Datos del proveedor existen en la base de datos, verifique.')</script>";
                                    echo $ResultadoError;
                                    die();
                                    }
                                }if($Telefono ==""){
                                $datosVacios = true;
            
                                    if ($datosVacios) {
                                        $ResultadoError2 = "<script>alert('Debe completar todos los datos del proveedor, verifique.')</script>";
                                    echo $ResultadoError2;
                                    die();
                                    }
                                }
            
                            if ($e['email'] === $email) {
                                $datosIguales = true;
            
                                    if($datosIguales){ 
                                    $ResultadoError = "<script>alert('Datos del proveedor existen en la base de datos, verifique.')</script>";
                                    echo $ResultadoError;
                                    die();
                                    }
                                }if($email ==""){
                                $datosVacios = true;
            
                                    if ($datosVacios) {
                                        $ResultadoError2 = "<script>alert('Debe completar todos los datos del proveedor, verifique.')</script>";
                                    echo $ResultadoError2;
                                    die();
                                    }
                                }
                        
                                elseif(!$datosIguales){
                                
                                    $insertproveedor = "INSERT INTO siaproveedor (codigoproveedor, 
                                    nombreproveedor,  
                                    pais, 
                                    cuidad, 
                                    Telefono, 
                                    email,
                                    condicionproveedor, 
                                    especifique,
                                    estado
                                    ) VALUES ('$codigoproveedor',
                                                '$nombreproveedor',
                                                '$pais',
                                                '$ciudad',
                                                '$Telefono',
                                                '$email',
                                                '$condicionproveedor',
                                                '$especifique',
                                                '$estado2'
                                                )";
            
                                    $Insertquery = $conection->query($insertproveedor);
            
                                    $estadoDelProveedor = "ACTIVO";
                                    $SelectEstadoDelProveedor = "UPDATE siaproveedor SET estado ='$estadoDelProveedor' WHERE codigoproveedor = '$codigoproveedor'";
            
                                    if($Insertquery){
                                        echo "<script>alert('Datos del proveedor insertados con exito.')</script>";
                                        $constestatusImport = $conection->query($SelectEstadoDelProveedor);
                                        if($constestatusImport){
                                            
                                            //Opción para ventanas emergentes
                                            // echo "<script>window.close()</script>";

                                            echo "<script>window.location.href = 'http://localhost/Proyecto_soft/openCVLProyect/impo/proveedor/proveedores.php';</script>";
                                        }
                                    }
                                    break;
                                    } 
                    }
                }
                
            }

            class ProveedorEdit {

                public $conection;
                public $parampostscript;
            
                public function __construct($conection, $parampostscript) {
                    $this->conection = $conection;
                    $this->parampostscript = $parampostscript;
                }
            
                public function imprimirenpantallaProveedorEdit() {
                    
                    $queryBD = "SELECT * FROM siaproveedor WHERE codigoproveedor = '$this->parampostscript'";
                    $ExecutequeryBD = $this->conection->query($queryBD);
            
                    
                    if ($ExecutequeryBD) {
                        while ($varR = $ExecutequeryBD->fetch_assoc()) {
                            $codigoproveedor = htmlspecialchars(strtoupper($varR['codigoproveedor']), ENT_QUOTES);
                            $nombreproveedor = htmlspecialchars(strtoupper($varR['nombreproveedor']), ENT_QUOTES);
                            $pais = htmlspecialchars(strtoupper($varR['pais']), ENT_QUOTES);
                            $cuidad = htmlspecialchars(strtoupper($varR['cuidad']), ENT_QUOTES);
                            $Telefono = htmlspecialchars(strtoupper($varR['Telefono']), ENT_QUOTES);
                            $email = htmlspecialchars(strtoupper($varR['email']), ENT_QUOTES);
                            $condicionproveedor = htmlspecialchars(strtoupper($varR['condicionproveedor']), ENT_QUOTES);
                            $especifique = htmlspecialchars(strtoupper($varR['especifique']), ENT_QUOTES);
                            $estado = htmlspecialchars(strtoupper($varR['estado']), ENT_QUOTES);
            
                            // Mostrar el formulario con los datos actuales
                            echo "<div class='ContainerGeneralImportador'>";
                            echo "<form method='POST' action=''>";
                            echo "<h3>Código Proveedor</h3><input type='text' name='codigoproveedor' class='datosinputimportador' value='$codigoproveedor' disabled><br>";
                            echo "<h3 class='datosinputimportador1'>Nombre Proveedor</h3><input type='text' name='nombreproveedor' class='datosinputimportador1' value='$nombreproveedor' ><br>";
                            echo "<h3>Pais</h3><input type='text' name='pais' class='datosinputimportador' value='$pais'><br>";
                            echo "<h3 class='datosinputimportador1'>Ciudad</h3><input type='text' name='cuidad' class='datosinputimportador1' value='$cuidad'><br>";
                            echo "<h3>Telefono</h3><input type='text' name='Telefono' class='datosinputimportador' value='$Telefono'><br>";
                            echo "<h3 class='datosinputimportador1'>E-Mail</h3><input type='text' name='email' class='datosinputimportador1' value='$email'><br>";
                            echo "<h3>Condición Proveedor</h3><input type='text' name='condicionproveedor' class='datosinputimportador' value='$condicionproveedor'><br>";
                            echo "<h3 class='datosinputimportador1'>Especifique</h3><input type='text' name='especifique' class='datosinputimportador1' value='$especifique'><br>";
                            echo "<h3>Estado</h3><input type='text' name='estado' class='datosinputimportador' value='$estado' disabled><br>";
                            echo "<input type='hidden' name='id' value='$this->parampostscript'>";
                            echo "<input type='submit' name='update' value='Actualizar' class='Actualizar'>";
                            echo "</form>";
                            echo "</div>";
                        }
                    }
            
                    // Procesar el formulario cuando se envía
                    if (isset($_POST['update'])) {
                        $id = $this->conection->real_escape_string($_POST['id']);
                        $nombreproveedor =  $this->conection->real_escape_string($_POST['nombreproveedor']);
                        $pais =  $this->conection->real_escape_string($_POST['pais']);
                        $cuidad =  $this->conection->real_escape_string($_POST['cuidad']);
                        $Telefono =  $this->conection->real_escape_string($_POST['Telefono']);
                        $email =  $this->conection->real_escape_string($_POST['email']);
                        $condicionproveedor =  $this->conection->real_escape_string($_POST['condicionproveedor']);
                        $especifique =  $this->conection->real_escape_string($_POST['especifique']);
                        $estado =  $this->conection->real_escape_string($_POST['estado']);
            
                        $selectqueryUpdate2 = "UPDATE siaproveedor SET
                                                                        nombreproveedor = '$nombreproveedor',
                                                                        pais = '$pais',
                                                                        cuidad = '$cuidad',
                                                                        Telefono = '$Telefono',
                                                                        email = '$email',
                                                                        condicionproveedor = '$condicionproveedor',
                                                                        especifique = '$especifique'
                                                                        WHERE codigoproveedor = '$id'";
                        
                        $selectqueryUpdate2Execute = $this->conection->query($selectqueryUpdate2);
            
                        if ($selectqueryUpdate2Execute) {
                            echo "<script>alert('Datos del proveedor actualizados con éxito');</script>";
                            echo "<script>window.location.href = 'http://localhost/Proyecto_soft/openCVLProyect/impo/proveedor/proveedores.php';</script>";

                        } else {
                            echo "<script>alert('Error al actualizar los datos');</script>";
                        }
                    }
                }
            }

            function imprimirenpantallaIncoterm($conection){
                echo "<div class ='ContainerGeneralImportador'>";
                    echo "<h3>" . "Código Incoterm " . "</h3>" . "<input type='text' name='codincoterm' class ='datosinputimportador'>" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Nombre Incotetm " . "</h3>" . "<input type='text' name='incotermdesc' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Lugar de Entrega " . "</h3>" . "<input type='text' name='lugarentrega' class ='datosinputimportador' >" . "<br>" ;
                    echo "<h3 style ='margin-left: 40px ;'>" . "Estado " . "</h3>" . "<input type='text' name='estado' class ='datosinputimportador1' >" . "<br>" ;
                    echo "</div>";
                    echo "<div class='Buttons_Container_Send'> 
                                            <button name='SendInfo' class='SendInfo'>Crear Incoterm</button>
                                            <button name='SalidaImportador'>
                                                <a href='proveedores.php' class='Salida_Segura2'>
                                                    Salir
                                                </a>
                                            </button>
                                        </div>  ";  
                    
                
            
                        if(isset($_POST['codincoterm'])){
                            $codincoterm = strtoupper($_POST['codincoterm']);
                        }else{
                            $codincoterm = "";
                        }
                        
                        if(isset($_POST['incotermdesc'])){
                            $incotermdesc = $_POST['incotermdesc'];
                        }else{
                            $incotermdesc = "";
                        }
                        if(isset($_POST['lugarentrega'])){
                            $lugarentrega = strtoupper($_POST['lugarentrega']);
                        }else{
                            $lugarentrega = "";
                        }
                        if(isset($_POST['estado'])){
                            $estado2 = $_POST['estado'];
                        }else{
                            $estado2 = "";
                        }
                
                        if(isset($_POST['SendInfo'])){ 
            
                                $selectImportador ="SELECT * FROM siaincoterm";
                                $Selectquery = $conection->query($selectImportador);
                    
                                $datosIguales=false;
                                $datosVacios = false;
                    
                                while($e = $Selectquery->fetch_assoc()){
                                    
                                if ($e['codincoterm'] === $codincoterm) {
                                            $datosIguales = true;
                    
                                            if($datosIguales){ 
                                            $ResultadoError = "<script>alert('Datos del Incoterm existen en la base de datos, verifique.')</script>";
                                            echo $ResultadoError;
                                            die();
                                            }
                                        }if($codincoterm ==""){
                                            $datosVacios = true;
                    
                                            if ($datosVacios) {
                                                $ResultadoError2 = "<script>alert('Debe completar todos los datos del Incoterm, verifique.')</script>";
                                            echo $ResultadoError2;
                                            die();
                                            }
                                        }
                    
                                    if ($e['incotermdesc'] === $incotermdesc) {
                                            $datosIguales = true;
                    
                                            if($datosIguales){ 
                                            $ResultadoError = "<script>alert('Datos del Incoterm existen en la base de datos, verifique.')</script>";
                                            echo $ResultadoError;
                                            die();
                                            }
                                        }if($incotermdesc ==""){
                                            $datosVacios = true;
                    
                                            if ($datosVacios) {
                                                $ResultadoError2 = "<script>alert('Debe completar todos los datos del Incoterm, verifique.')</script>";
                                            echo $ResultadoError2;
                                            die();
                                            }
                                        }

                                
                                    if ($e['lugarentrega'] === $lugarentrega) {
                                        $datosIguales = true;
                    
                                            if($datosIguales){ 
                                            $ResultadoError = "<script>alert('Datos del Incoterm existen en la base de datos, verifique.')</script>";
                                            echo $ResultadoError;
                                            die();
                                            }
                                        }if($lugarentrega ==""){
                                        $datosVacios = true;
                    
                                            if ($datosVacios) {
                                                $ResultadoError2 = "<script>alert('Debe completar todos los datos del Incoterm, verifique.')</script>";
                                            echo $ResultadoError2;
                                            die();
                                            }
                                        }
            
                            elseif(!$datosIguales){
                                
                                    $insertincoterm = "INSERT INTO siaincoterm (codincoterm, 
                                                                                incotermdesc,  
                                                                                lugarentrega,
                                                                                estado
                                                                                ) 
                                                                        VALUES ('$codincoterm',
                                                                                '$incotermdesc',
                                                                                '$lugarentrega',
                                                                                '$estado2'
                                                                                )";
            
                                    $Insertquery = $conection->query($insertincoterm);
            
                                    $estadoDelIncoterm = "ACTIVO";
                                    $SelectEstadoDelIncoterm = "UPDATE siaincoterm SET estado ='$estadoDelIncoterm' WHERE codincoterm = '$codincoterm'";
            
                                    if($Insertquery){
                                        echo "<script>alert('Datos del Incoterm insertados con exito.')</script>";
                                        $constestatusImport = $conection->query($SelectEstadoDelIncoterm);
                                        if($constestatusImport){
                                            
                            echo "<script>window.location.href = 'http://localhost/Proyecto_soft/openCVLProyect/impo/incoterm/incoterms.php';</script>";
                                            
                                        }
                                    }
                                    break;
                                    } 
                    }
                }
            }

            class IncotermEdit {

                public $conection;
                public $parampostscript;
            
                public function __construct($conection, $parampostscript) {
                    $this->conection = $conection;
                    $this->parampostscript = $parampostscript;
                }
                public function imprimirenpantallaIncotermEdit() {
                    
                    $queryBD = "SELECT * FROM siaincoterm WHERE codincoterm = '$this->parampostscript'";
                    $ExecutequeryBD = $this->conection->query($queryBD);
                    
                    if ($ExecutequeryBD) {
                        while ($varR = $ExecutequeryBD->fetch_assoc()) {

                            $codincoterm = htmlspecialchars(strtoupper($varR['codincoterm']), ENT_QUOTES);
                            $incotermdesc = htmlspecialchars(strtoupper($varR['incotermdesc']), ENT_QUOTES);
                            $lugarentrega = htmlspecialchars(strtoupper($varR['lugarentrega']), ENT_QUOTES);
                            $estado = htmlspecialchars(strtoupper($varR['estado']), ENT_QUOTES);

                            // Mostrar el formulario con los datos actuales
                            echo "<div class='ContainerGeneralImportador'>";
                            echo "<form action='' method='POST'>";
                            echo "<h3>Código Incoterm</h3><input type='text' name='codincoterm' class='datosinputimportador' value='$codincoterm' disabled><br>";
                            echo "<h3 class='datosinputimportador1'>Descripción Incoterm</h3><input type='text' name='incotermdesc' class='datosinputimportador1' value='$incotermdesc' ><br>";
                            echo "<h3>Lugar Entrega</h3><input type='text' name='lugarentrega' class='datosinputimportador' value='$lugarentrega'><br>";
                            echo "<h3 class='datosinputimportador1'>Estado</h3><input type='text' name='estado' class='datosinputimportador1' value='$estado' disabled><br>";
                            echo "<input type='hidden' name='id' value='$this->parampostscript'>";
                            echo "<input type='submit' name='update' value='Actualizar' class='Actualizar'>";
                            echo "</form>";
                            echo "</div>";
                        }
                    }

                    if (isset($_POST['update'])) {
                        $id = $this->conection->real_escape_string($_POST['id']);
                        $codincoterm = $this->conection->real_escape_string($_POST['codincoterm']);
                        $incotermdesc = $this->conection->real_escape_string($_POST['incotermdesc']);
                        $lugarentrega = $this->conection->real_escape_string($_POST['lugarentrega']);
                        $estado = $this->conection->real_escape_string($_POST['estado']);
                        
                        // Actualizar datos en la base de datos
                        $selectqueryUpdate2 = "UPDATE siaincoterm 
                                            SET incotermdesc = '$incotermdesc',
                                                lugarentrega = '$lugarentrega'
                                            WHERE codincoterm = '$id'"; 
                    
                        $selectqueryUpdate2Execute = $this->conection->query($selectqueryUpdate2);
                    
                        if ($selectqueryUpdate2Execute) {
                            echo "<script>alert('Datos del Incoterm actualizados con éxito');</script>";
                            // Redirigir después de mostrar el mensaje
                            echo "<script>window.location.href = 'http://localhost/Proyecto_soft/openCVLProyect/impo/incoterm/incoterms.php';</script>";
                        } else {
                            echo "<script>alert('Error al actualizar los datos');</script>";
                        }
                    }
                    
                }
            }


            function imprimirenpantallaTransportadora($conection){

                echo "<div class ='ContainerGeneralImportador'>";
                echo "<h3>" . "Código Transportador " . "</h3>" . "<input type='text' name='codigotransportador' class ='datosinputimportador'>" . "<br>" ;
                echo "<h3 class='datosinputimportador1'>" . "Nombre Transportador " . "</h3>" . "<input type='text' name='desctransportador' class ='datosinputimportador1' >" . "<br>" ;
                echo "<h3>" . "Cod Pais Procedencia " . "</h3>" . "<input type='text' name='paisprocedencia' class ='datosinputimportador'>" . "<br>" ;
                echo "<h3 class='datosinputimportador1'>" . "Pais Procedencia " . "</h3>" . "<input type='text' name='paisprocedenciadescripcion' class ='datosinputimportador1' >" . "<br>" ;
                echo "<h3>" . "Código Sucursal " . "</h3>" . "<input type='text' name='idsucursal' class ='datosinputimportador'>" . "<br>" ;
                echo "<h3 class='datosinputimportador1'>" . "Sucursal" . "</h3>" . "<input type='text' name='descsucursal' class ='datosinputimportador1' >" . "<br>" ;
                echo "<h3 style ='margin-left: 0px ;'>" . "Estado " . "</h3>" . "<input type='text' name='estado' class ='datosinputimportador' >" . "<br>" ;
                echo "</div>";
                echo "<div class='Buttons_Container_Send'> 
                            <button name='SendInfo' class='SendInfo'>Crear Transp</button>
                            <button name='SalidaImportador'>
                                <a href='Transportadores.php' class='Salida_Segura2'>
                                    Salir
                                </a>
                            </button>
                    </div>  ";  

                if(isset($_POST['codigotransportador'])){
                    $codigotransportador = $_POST['codigotransportador'];
                }

                if(isset($_POST['desctransportador'])){
                    $desctransportador = $_POST['desctransportador'];
                }
                
                if(isset($_POST['paisprocedencia'])){
                    $paisprocedencia = $_POST['paisprocedencia'];
                }
                
                if(isset($_POST['paisprocedenciadescripcion'])){
                    $paisprocedenciadescripcion = $_POST['paisprocedenciadescripcion'];
                }
                
                if(isset($_POST['idsucursal'])){
                    $idsucursal = $_POST['idsucursal'];
                }

                if(isset($_POST['descsucursal'])){
                    $descsucursal = $_POST['descsucursal'];
                }

                if(isset($_POST['estado'])){
                    $estado = $_POST['estado'];
                }

                if(isset($_POST['SendInfo'])){

                    $queryGeneral = "SELECT * FROM siatransportador";
                    $queryGeneralExecute = $conection->query($queryGeneral);
                    $datosIguales = false;
                    $datosVacios = false;

                    while($r = $queryGeneralExecute->fetch_assoc()){ 

                        if($codigotransportador === $r['codigotransportador']){
                            $datosIguales = true;
                            if($datosIguales){
                                echo "<script>alert('Datos del Transportador existen en la base de datos. Verifique')</script>";
                                die();
                            }if($codigotransportador ==""){
                                $datosVacios=true;
                                if($datosVacios){
                                    $ResultadoError ="<script>alert('Debe completar todos los datos del Transportador, verifique.')</script>";
                                echo $ResultadoError;
                                die();
                            }
                            }
                        }

                        if($desctransportador === $r['desctransportador']){
                            $datosIguales = true;
                            if($datosIguales){
                                echo "<script>alert('Datos del Transportador existen en la base de datos. Verifique')</script>";
                                die();
                            }if($desctransportador ==""){
                                $datosVacios=true;
                                if($datosVacios){ 
                                    $ResultadoError ="<script>alert('Debe completar todos los datos del Transportador, verifique.')</script>";
                                echo $ResultadoError;                            
                                die();
                            }
                            }
                        }
                            
                            if($paisprocedencia ==""){
                                $datosVacios=true;
                                if($datosVacios){
                                    $ResultadoError ="<script>alert('Debe completar todos los datos del Transportador, verifique.')</script>";
                                echo $ResultadoError;
                                die();
                            }
                            }
                        
                            if($paisprocedenciadescripcion ==""){
                                $datosVacios=true;
                                if($datosVacios){
                                    $ResultadoError ="<script>alert('Debe completar todos los datos del Transportador, verifique.')</script>";
                                echo $ResultadoError;
                                die();
                            }
                            }
                        
                            if($idsucursal ==""){
                                $datosVacios=true;
                                if($datosVacios){
                                    $ResultadoError ="<script>alert('Debe completar todos los datos del Transportador, verifique.')</script>";
                                echo $ResultadoError;
                                die();
                            }
                            }

                            if($descsucursal ==""){
                                $datosVacios=true;
                                if($datosVacios){
                                    $ResultadoError ="<script>alert('Debe completar todos los datos del Transportador, verifique.')</script>";
                                echo $ResultadoError;
                                die();
                            }
                            }

                            elseif(!$datosIguales){
                                $insertqueryG= "INSERT INTO siatransportador(codigotransportador,
                                                                                desctransportador,
                                                                                paisprocedencia,
                                                                                paisprocedenciadescripcion,
                                                                                idsucursal,
                                                                                descsucursal,
                                                                                estado)
                                                                        VALUES('$codigotransportador',
                                                                                '$desctransportador',
                                                                                '$paisprocedencia',
                                                                                '$paisprocedenciadescripcion',
                                                                                '$idsucursal',
                                                                                '$descsucursal',
                                                                                '$estado')
                                                                                ";
                                $insertqueryGExecute= $conection->query($insertqueryG);

                                $estadotrasportadorAct = "ACTIVO";
                                $alterstatusTrnaport = "UPDATE siatransportador SET estado = '$estadotrasportadorAct' WHERE codigotransportador = '$codigotransportador'";
                                
                                if($insertqueryGExecute){
                                    echo "<script>alert('Datos del Transportador insertados con exito.')</script>";
                                    $alterstatusTrnaportExecute = $conection->query($alterstatusTrnaport);
                                    if($alterstatusTrnaportExecute){
                                        echo "<script>window.location.href = 'http://localhost/Proyecto_soft/openCVLProyect/impo/transportador/transportadores.php';</script>";
                                    }
                                }
                                break;
                                } 
                            }
                        }
                    
                    }


                    class TransportadorEdit {

                        public $conection;
                        public $parampostscript;
                    
                        public function __construct($conection, $parampostscript) {
                            $this->conection = $conection;
                            $this->parampostscript = $parampostscript;
                        }
                        public function imprimirenpantallaTransportadorEdit() {
                            
                            $queryBD = "SELECT * FROM siatransportador WHERE codigotransportador = '$this->parampostscript'";
                            $ExecutequeryBD = $this->conection->query($queryBD);
                            
                            if ($ExecutequeryBD) {
                                while ($varR = $ExecutequeryBD->fetch_assoc()) {
        
                                    $codigotransportador = htmlspecialchars(strtoupper($varR['codigotransportador']), ENT_QUOTES);
                                    $desctransportador = htmlspecialchars(strtoupper($varR['desctransportador']), ENT_QUOTES);
                                    $paisprocedencia = htmlspecialchars(strtoupper($varR['paisprocedencia']), ENT_QUOTES);
                                    $paisprocedenciadescripcion = htmlspecialchars(strtoupper($varR['paisprocedenciadescripcion']), ENT_QUOTES);
                                    $dsucursal = htmlspecialchars(strtoupper($varR['idsucursal']), ENT_QUOTES);
                                    $descsucursal = htmlspecialchars(strtoupper($varR['descsucursal']), ENT_QUOTES);
                                    $estado = htmlspecialchars(strtoupper($varR['estado']), ENT_QUOTES);
        
                                    // Mostrar el formulario con los datos actuales
                                    echo "<div class='ContainerGeneralImportador'>";
                                    echo "<form action='' method='POST'>";
                                    echo "<h3>Código Transportador</h3><input type='text' name='codigotransportador' class='datosinputimportador' value='$codigotransportador' disabled><br>";
                                    echo "<h3 class='datosinputimportador1'>Descripción Transportador</h3><input type='text' name='desctransportador' class='datosinputimportador1' value='$desctransportador' ><br>";
                                    echo "<h3>Cod. Pais Transportador</h3><input type='text' name='paisprocedencia' class='datosinputimportador' value='$paisprocedencia' ><br>";
                                    echo "<h3 class='datosinputimportador1'>Pais Transportador</h3><input type='text' name='paisprocedenciadescripcion' class='datosinputimportador1' value='$paisprocedenciadescripcion' ><br>";
                                    echo "<h3>Id Sucursal</h3><input type='text' name='dsucursal' class='datosinputimportador' value='$dsucursal'><br>";
                                    echo "<h3 class='datosinputimportador1'>Desc. Sucursal</h3><input type='text' name='descsucursal' class='datosinputimportador1' value='$descsucursal'><br>";
                                    echo "<h3>Estado</h3><input type='text' name='estado' class='datosinputimportador' value='$estado' disabled><br>";
                                    echo "<input type='hidden' name='id' value='$this->parampostscript'>";
                                    echo "<input type='submit' name='update' value='Actualizar' class='Actualizar'>";
                                    
                                    echo "</form>";
                                    echo "</div>";
                                }
                            }
        
                            if (isset($_POST['update'])) {
                                $id = $this->conection->real_escape_string($_POST['id']);
                                $codigotransportador = $this->conection->real_escape_string($_POST['codigotransportador']);
                                $desctransportador = $this->conection->real_escape_string($_POST['desctransportador']);
                                $paisprocedencia = $this->conection->real_escape_string($_POST['paisprocedencia']);
                                $paisprocedenciadescripcion = $this->conection->real_escape_string($_POST['paisprocedenciadescripcion']);
                                $dsucursal = $this->conection->real_escape_string($_POST['idsucursal']);
                                $descsucursal = $this->conection->real_escape_string($_POST['descsucursal']);
                                $estado = $this->conection->real_escape_string($_POST['estado']);
                                
                                // Actualizar datos en la base de datos
                                $selectqueryUpdate2 = "UPDATE siatransportador
                                                    SET desctransportador = '$desctransportador',
                                                        paisprocedencia = '$paisprocedencia',
                                                        paisprocedenciadescripcion = '$paisprocedenciadescripcion',
                                                        idsucursal = '$dsucursal',
                                                        descsucursal = '$descsucursal'
                                                    WHERE codigotransportador = '$id'"; 
                            
                                $selectqueryUpdate2Execute = $this->conection->query($selectqueryUpdate2);
                            
                                if ($selectqueryUpdate2Execute) {
                                    echo "<script>alert('Datos del Transportador actualizados con éxito');</script>";
                                    // Redirigir después de mostrar el mensaje
                                    echo "<script>window.location.href = 'http://localhost/Proyecto_soft/openCVLProyect/impo/transportador/transportadores.php';</script>";
                                } else{
                                    echo "<script>alert('Datos NO fueron Actualizados');</script>";
                                }
                                
                            }
                            
                        }
                    }
        





            function imprimirenpantallaPais($conection){
                echo "<div class ='ContainerGeneralImportador'>";
                    echo "<h3>" . "Código Pais " . "</h3>" . "<input type='text' name='codigopais' class ='datosinputimportador'>" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Num. Pais " . "</h3>" . "<input type='text' name='numeropais' class ='datosinputimportador1' >" . "<br>" ;
                    echo "<h3>" . "Descri Pais " . "</h3>" . "<input type='text' name='descpais' class ='datosinputimportador' >" . "<br>" ;
                    echo "<h3 style ='margin-left: 40px ;'>" . "Estado " . "</h3>" . "<input type='text' name='estado' class ='datosinputimportador1' >" . "<br>" ;
                    echo "</div>";
                    echo "<div class='Buttons_Container_Send'> 
                                            <button name='SendInfo' class='SendInfo'>Crear Pais</button>
                                            <button name='SalidaImportador'>
                                                <a href='paises.php' class='Salida_Segura2'>
                                                    Salir
                                                </a>
                                            </button>
                                        </div>  ";  
                    
                
            
                        if(isset($_POST['codigopais'])){
                            $codigopais = strtoupper($_POST['codigopais']);
                        }else{
                            $codigopais = "";
                        }
                        
                        if(isset($_POST['numeropais'])){
                            $numeropais = $_POST['numeropais'];
                        }else{
                            $numeropais = "";
                        }
                        if(isset($_POST['descpais'])){
                            $descpais = strtoupper($_POST['descpais']);
                        }else{
                            $descpais = "";
                        }
                        if(isset($_POST['estado'])){
                            $estado2 = $_POST['estado'];
                        }else{
                            $estado2 = "";
                        }
                
                        if(isset($_POST['SendInfo'])){ 
            
                                $selectPais ="SELECT * FROM siapais";
                                $Selectquery = $conection->query($selectPais);
                    
                                $datosIguales=false;
                                $datosVacios = false;
                    
                                while($e = $Selectquery->fetch_assoc()){
                                    
                                if ($e['codigopais'] === $codigopais) {
                                            $datosIguales = true;
                    
                                            if($datosIguales){ 
                                            $ResultadoError = "<script>alert('Datos del Pais existen en la base de datos, verifique.')</script>";
                                            echo $ResultadoError;
                                            die();
                                            }
                                        }if($codigopais ==""){
                                            $datosVacios = true;
                    
                                            if ($datosVacios) {
                                                $ResultadoError2 = "<script>alert('Debe completar todos los datos del Pais, verifique.')</script>";
                                            echo $ResultadoError2;
                                            die();
                                            }
                                        }
                    
                                    if ($e['numeropais'] === $numeropais) {
                                            $datosIguales = true;
                    
                                            if($datosIguales){ 
                                            $ResultadoError = "<script>alert('Datos del Pais existen en la base de datos, verifique.')</script>";
                                            echo $ResultadoError;
                                            die();
                                            }
                                        }if($numeropais ==""){
                                            $datosVacios = true;
                    
                                            if ($datosVacios) {
                                                $ResultadoError2 = "<script>alert('Debe completar todos los datos del Pais, verifique.')</script>";
                                            echo $ResultadoError2;
                                            die();
                                            }
                                        }

                                
                                    if ($e['descpais'] === $descpais) {
                                        $datosIguales = true;
                    
                                            if($datosIguales){ 
                                            $ResultadoError = "<script>alert('Datos del Pais existen en la base de datos, verifique.')</script>";
                                            echo $ResultadoError;
                                            die();
                                            }
                                        }if($descpais ==""){
                                        $datosVacios = true;
                    
                                            if ($datosVacios) {
                                                $ResultadoError2 = "<script>alert('Debe completar todos los datos del Pais, verifique.')</script>";
                                            echo $ResultadoError2;
                                            die();
                                            }
                                        }
            
                            elseif(!$datosIguales){
                                
                                    $insertPais = "INSERT INTO siapais (codigopais, 
                                                                                numeropais,  
                                                                                descpais,
                                                                                estado
                                                                                ) 
                                                                        VALUES ('$codigopais',
                                                                                '$numeropais',
                                                                                '$descpais',
                                                                                '$estado2'
                                                                                )";
            
                                    $Insertquery = $conection->query($insertPais);
            
                                    $estadoDelPais = "ACTIVO";
                                    $SelectEstadoDelPais = "UPDATE siapais SET estado ='$estadoDelPais' WHERE codigopais = '$codigopais'";
            
                                    if($Insertquery){
                                        echo "<script>alert('Datos del Pais insertados con exito.')</script>";
                                        $constestatuspais = $conection->query($SelectEstadoDelPais);
                                        if($constestatuspais){

                                            echo "<script>window.location.href = 'http://localhost/Proyecto_soft/openCVLProyect/impo/Pais/Paises.php';</script>";
                                        }
                                    }
                                    break;
                                    } 
                    }
                }
            }


            