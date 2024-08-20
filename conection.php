<?php

$bd ="localhost";
$user ="root";
$database ="local_generic";
$passs ="";

$conection =mysqli_connect($bd, $user, $passs, $database);

if($conection->connect_errno){
    echo"<script>alert('Error al conectar con la base de datos')</script>";
    die;
}

// echo __DIR__;

?>