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
                                    
                   
                            ?>