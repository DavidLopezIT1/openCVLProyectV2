<?php
include "../conection.php";

class importadordatos {

    public $nit;
    public $tipodocumento;
    public $razonsocial;
    public $nivelcomercialcod;
    public $nivelcomercialdesc;
    public $telefono;
    public $direccion;
    public $correoelectronico;
    public $pais;
    public $depto;
    public $administracionmercancia;
    public $CodigoOEA;
    public $actividadeconomicacod;
    public $actividadeconomicadesc;
    public $estado;
   
        public function __Construct($nit,
                                    $tipodocumento,
                                    $razonsocial,
                                    $nivelcomercialcod,
                                    $nivelcomercialdesc,
                                    $telefono,
                                    $direccion,
                                    $correoelectronico,
                                    $pais,
                                    $depto,
                                    $administracionmercancia,
                                    $CodigoOEA,
                                    $actividadeconomicacod,
                                    $actividadeconomicadesc,
                                    $estado){
                                            $this->nit =$nit ;
                                            $this->tipodocumento =$tipodocumento ;
                                            $this->razonsocial =$razonsocial ;
                                            $this->nivelcomercialcod =$nivelcomercialcod ;
                                            $this->nivelcomercialdesc =$nivelcomercialdesc ;
                                            $this->telefono =$telefono ;
                                            $this->direccion =$direccion ;
                                            $this->correoelectronico =$correoelectronico ;
                                            $this->pais =$pais ;
                                            $this->depto =$depto ;
                                            $this->administracionmercancia =$administracionmercancia ;
                                            $this->CodigoOEA =$CodigoOEA ;
                                            $this->actividadeconomicacod =$actividadeconomicacod ;
                                            $this->actividadeconomicadesc =$actividadeconomicadesc ;
                                            $this->estado =$estado ;
                                    }


            public function imprimirenpantalla(){
                echo "<div class ='ContainerGeneralImportador'>";
                    echo "<h3>" . "Tipodocumento " . "</h3>" . "<input type='text' value ='$this->tipodocumento' class ='datosinputimportador'>" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Nit " . "</h3>" . "<input type='text' value ='$this->nit' class ='datosinputimportador1'>" . "<br>" ;
                    echo "<h3>" . "Razonsocial " . "</h3>" . "<input type='text' value ='$this->razonsocial' class ='datosinputimportador'>" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Nivelcomercialcod " . "</h3>" . "<input type='text' value ='$this->nivelcomercialcod' class ='datosinputimportador1'>" . "<br>" ;
                    echo "<h3>" . "Nivelcomercialdesc " . "</h3>" . "<input type='text' value ='$this->nivelcomercialdesc' class ='datosinputimportador'>" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Telefono " . "</h3>" . "<input type='text' value ='$this->telefono' class ='datosinputimportador1'>" . "<br>" ;
                    echo "<h3>" . "Direccion " . "</h3>" . "<input type='text' value ='$this->direccion' class ='datosinputimportador'>" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Correoelectronico " . "</h3>" . "<input type='text' value ='$this->correoelectronico' class ='datosinputimportador1'>" . "<br>" ;
                    echo "<h3>" . "Pais " . "</h3>" . "<input type='text' value ='$this->pais' class ='datosinputimportador'>" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Depto " . "</h3>" . "<input type='text' value ='$this->depto' class ='datosinputimportador1'>" . "<br>" ;
                    echo "<h3>" . "Administracionmercancia " . "</h3>" . "<input type='text' value ='$this->administracionmercancia' class ='datosinputimportador'>" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "CodigoOEA " . "</h3>" . "<input type='text' value ='$this->CodigoOEA' class ='datosinputimportador1'>" . "<br>" ;
                    echo "<h3>" . "Actividadeconomicacod " . "</h3>" . "<input type='text' value ='$this->actividadeconomicacod' class ='datosinputimportador'>" . "<br>" ;
                    echo "<h3 class='datosinputimportador1'>" . "Actividadeconomicadesc " . "</h3>" . "<input type='text' value ='$this->actividadeconomicadesc' class ='datosinputimportador1'>" . "<br>" ;
                    echo "<h3>" . "Estado " . "</h3>" . "<input type='text' value ='$this->estado' class ='datosinputimportador'>" ;           
                echo "</div>";
                }

                
               public function ConsultareInsertImportador($conection){

                                    $selectImportador ="SELECT * FROM siaimportador";
                                    $Selectquery = $conection->query($selectImportador);
                                    $datosIguales=false;
                                    
                                    while($e = $Selectquery->fetch_assoc()){
                                        
                                        if ($e['nit'] === $this->nit || 
                                            $e['razonsocial'] === $this->razonsocial || 
                                            $e['telefono'] === $this->telefono  || 
                                            $e['direccion'] === $this->direccion  || 
                                            $e['correoelectronico'] === $this->correoelectronico || 
                                            $e['CodigoOEA'] ===$this->CodigoOEA
                                            )  {

                                                $datosIguales=true;
                                                if($datosIguales){ 
                                                $ResultadoError = "<script>alert('Datos del importador existen en la base de datos, verifique.')</script>";
                                                echo $ResultadoError;
                                                }

                                            }elseif(!$datosIguales){
                                            
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
                                                ) VALUES ('$this->nit',
                                                            '$this->tipodocumento',
                                                            '$this->razonsocial',
                                                            '$this->nivelcomercialcod',
                                                            '$this->nivelcomercialdesc',
                                                            '$this->telefono',
                                                            '$this->direccion',
                                                            '$this->correoelectronico',
                                                            '$this->pais',
                                                            '$this->depto',
                                                            '$this->administracionmercancia',
                                                            '$this->CodigoOEA',
                                                            '$this->actividadeconomicacod',
                                                            '$this->actividadeconomicadesc',
                                                            '$this->estado'
                                                            )";
                
                                                $Insertquery = $conection->query($insertImportador);
                                    }
                                }

                            }
}

    // class Estructura_importadores{
    //     public $conection;
    //     public $variable;
    //     public $botonenviar;
    //     // public $direccion;
    //     // public $estado;


    //     public function __construct($conection, $variable, $botonenviar){
    //         $this->conection = $conection;
    //         $this->variable = $variable;
    //         $this->botonenviar = $botonenviar;
    //     //     $this->direccion = $direccion;
    //     //     $this->estado = $estado;

    //     }

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

        
            function shoyimportadortemplate(){
                
            }





?>