<?php

    $conexion = new mysqli ("localhost", "id20243129_alumno64", "C0ntr4s3n4.", "id20243129_universidad");
    if($conexion){
        //echo "conexión exitosa";
    }else{
        echo "falló la conexión";
    }


?>