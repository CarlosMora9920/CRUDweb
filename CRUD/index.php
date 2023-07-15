<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3dd999189e.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <h1 class = "text-center p-3">Hellou</h1>
    <div class = "container-fluid row">
    <form class = "col-4 p-3" method="POST">
        <h3 class = "text-center text-secondary">Registro de usuarios</h3>

        <?php
            include "modelo/conexion.php";
            include "controlador/registro_usuario.php";
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

    <div class = "col-8 p-4">
        <table class="table">
            <thead class = "bg-info">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Cedula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php  
                include "modelo/conexion.php";
                $sql = $conexion->query("select * from usuarios ");
                while($datos=$sql->fetch_object()) { ?>
                    <tr>

                        <td><?= $datos->id_user ?></td> 
                        <td><?= $datos->cedula ?></td>
                        <td><?= $datos->nombre ?></td>
                        <td><?= $datos->correo ?></td>
                        <td><?= $datos->usuario ?></td>
                        <td><?= $datos->contrasenia ?></td>                                      

                        <td>
                            <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>



            <?php }?>       
                
            </tbody>
        </table>  
    </div>

    </div>

</body>
</html>