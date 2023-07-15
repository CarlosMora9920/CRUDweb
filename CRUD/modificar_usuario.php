<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3dd999189e.js" crossorigin="anonymous"></script>

</head>
<body>
<form class = "col-4 p-3 m-auto" method="POST">
        <h3 class = "text-center text-secondary">Registro de usuarios</h3>

        <?php
            include "modelo/conexion.php";
            
        ?>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cedula</label>
            <input type="text" class="form-control" name = "cedula">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" name="correo">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name = "contrasenia">
        </div>

       <button type="submit" class="btn btn-primary" name = "btnRegistro" value = "ok">Submit</button>
    </form>
</body>
</html>