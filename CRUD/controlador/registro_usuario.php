<?php

    if (!empty($_POST["btnRegistro"])){
        if(!empty($_POST["cedula"]) and !empty($_POST["nombre"]) and !empty($_POST["correo"]) and !empty($_POST["usuario"]) and !empty($_POST["contrasenia"])){
           $cedula = $_POST["cedula"];
           $nombre = $_POST["nombre"];
           $correo = $_POST["correo"];
           $usuario = $_POST["usuario"];
           $contrasenia = $_POST["contrasenia"];


           $sql = $conexion -> query("insert into usuarios(cedula,nombre,correo,usuario,contrasenia)values('$cedula','$nombre','$correo','$usuario','$contrasenia')");
           if($sql == 1){
                echo '<div class="alert alert-success">Usuario registrado correctamente</div>';
           }else {
                echo '<div class="alert alert-danger">Error al registrar el usuario</div>';
           }


        }else{
            echo "Por favor verificar los campos";
        }

    }



?>