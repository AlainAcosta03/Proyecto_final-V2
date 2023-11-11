<?php
    $host   = "localhost";
    $user   =  "id20243129_alumno64" ;
    $pass   =   "C0ntr4s3n4.";
    $db     =   "id20243129_universidad";


    $conexion = mysqli_connect($host, $user, $pass, $db);

    /*if(!$conexion){*/
    if(!$conexion){
        echo "fallo la conexion";
    }


    
?>