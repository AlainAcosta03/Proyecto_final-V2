<?php require 'controlador.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>REGISTRO</title>
</head>
<body>
    <form action="" method="post" autocomplete="off">
        <h1>Registro de Usuarios</h1>

        <label for="">Usuario</label>
        <input type="text" name="Usuario" id=""  pattern="[A-Za-z].{3,}" placeholder="3 A 30 caracteres" maxlength="30" required>
        
        <label for="">Password</label>
        <input type="password" name="Clave" id="" pattern="{4,}" placeholder="4 A 8 caracteres" maxlength="8" required>
        
        <label for="">Nombre Completo</label>
        <input type="text" name="Fname" id="" pattern="[A-Za-z].{10,}" placeholder="10 A 30 caracteres" maxlength="30"required>

        <button type="submit" name="registro">Registrarse</button>

    </form>

    
</body>
</html>