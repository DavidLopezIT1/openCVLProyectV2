<?php
include "conection.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="undo.css">
    <title>Login</title>
   
</head>
<body>

    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <form action="undo.php" method="post">

            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" placeholder="Ingrese su usuario" required>
            
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" value="Juana101453/*ssh&32" required>

            <div class="error-message" id="error-message">
            <input type="submit" value="Entrar" name="send_Button" class="send_Button">
            </div>

            <?php
            //Si se encientran seteados los input se obtiene su valor en una variable 

                if(isset($_POST['username'])){
                    $username =$_POST['username'];
                    htmlspecialchars($username);
                }
                
                if(isset($_POST['password'])){
                    $passworduser =$_POST['password'];
                    htmlspecialchars($passworduser);
                }
                
                if(isset($_POST['send_Button'])){
                    // Consulta uno para validar el login
                    $consulta = "SELECT * FROM users2 where login2 = '$username'";
                    $resultconsulta = $conection->query($consulta);
                    if($resultconsulta){
                        $Existe = false;
                        while($a = $resultconsulta->fetch_assoc() ){
                            if($a['login2'] === $username){
                                $Existe=true;
                            //    echo " <script>alert('Usuario SI Existe')</script>";
                               break;
                            }
                            if(!$Existe){
                                 echo " <script>alert('Usuario NO Existe, Verifique')</script>";
                                break;
                            }
                        }
                    }
                        // Consulta dos para validar la contraseña
                
                                $consulta2 = "SELECT * FROM users2";
                                $resultconsulta2 = $conection->query($consulta2);
                                if($resultconsulta2){
                                    $ExisteP = false;
                                    while($e = $resultconsulta2->fetch_assoc() ){
                                        if($e['user_password'] === $passworduser){
                                            $ExisteP=true;
                                            //    echo " <script>alert('Contraseña SI Existe')</script>";
                                        break;
                                        }
                                        if(!$ExisteP){  
                                            // echo " <script>alert('Contraseña NO Existe, Verifique')</script>";
                                            break;
                                        }
                                    }
                                }         
                        // Ingresar al sistema una vez validado el usuario y contraseña por medio de un inicio de sesión.
                            
                                        switch ($ExisteP && $Existe) {
                                            case false:
                                                echo " <script>alert('Usuario o Contraseña NO Existen, Verifique')</script>";
                                                break;
                                                case true:
                                                     // echo " <script>alert('Usuario y Contraseña Existen en Base de datos, puede acceder.')</script>";
                                                     session_start();
                                                     $consultaw = "SELECT user_name FROM users2 where login2= '$username'";
                                                     $resultconsultaw = $conection->query($consultaw);
                                                    while($a = $resultconsultaw->fetch_assoc()){
                                                        $_SESSION['nombre']=$a['user_name'];
                                                        // $sesion= $_SESSION['nombre'];

                                                    
                                                if($_SESSION){
                                                    // echo "Sesión iniciada";
                                                }
                                            }
                                                header("location:http://localhost/Proyecto_soft/openCVLProyect/interfaz.php");
                                            
                                                # code...
                                                break;
                                        }
                    }


            ?>

        </form>
    </div>
</body>
</html>