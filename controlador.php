<?php
    /*Conexion a la base de datoss ---------------- */
    $conn = new mysqli("localhost","id20243129_alumno64","C0ntr4s3n4.","id20243129_universidad");

    /*...............Proceso de encriptación. . . . */
    if(isset($_POST['registro'])){
        if(!empty(trim($_POST['Usuario'])) && !empty(trim($_POST['Clave'])) && !empty(trim($_POST['Fname']))){
            $usuario_usu    = $_POST['Usuario'];
            $password_usu   = $_POST['Clave'];
            $Fname_usu    = $_POST['Fname'];

            $enc_password_usu = password_hash($password_usu, PASSWORD_DEFAULT);


            $conn->query("INSERT INTO alumnos (Usuario, Clave, Nombre_completo) VALUES('$usuario_usu','$password_usu', '$Fname_usu')");
            header("Location: mostrar.php");

            if($conn->affected_rows !=1){
                $registro_error = "Hubo un error";
            }

        }else{
            $registro_error = "Todos los campos deben ser llenados";
        }
    }


?>