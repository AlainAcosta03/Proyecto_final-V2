<?php
/* Iniciar las variable sesion*/
session_start();
include('conexion.php');

if(isset($_POST['Usuario']) && isset($_POST['Clave'])){

    function validar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validar($_POST['Usuario']);
    $Clave = validar($_POST['Clave']);


if(empty($Usuario)){
    header("Location: login.php?error=Usuario requerido");
    exit();

}elseif(empty($Clave)){
    header("Location: login.php?error=Clave requerida");
    exit();
    
}else{
    //
    $sql        =   "SELECT * FROM alumnos WHERE Usuario = '$Usuario' AND Clave = '$Clave'";
    $result     =   mysqli_query($conexion, $sql); //El resultado debe ser TRUE para continuar

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if($row['Usuario'] === $Usuario && $row['Clave'] === $Clave){
            //En este momento se generan las variables de sesión
            $_SESSION['Usuario']            = $row['Usuario'];
            $_SESSION['Nombre_completo']    = $row['Nombre_completo'];
            $_SESSION['id']                 = $row['id'];
            header("Location: mostrar.php");
            exit();
        }else{
            header("Location: login.php?error=El usuario o la clave son erroneas");
            exit();
        }
        }else{
            header("Location: login.php?error=El usuario o la clave son erroneas");
            exit();
        }
    }

}else{
    header("Location: login.php?error=El usuario o la clave son erroneas");
    exit();
}

?>


