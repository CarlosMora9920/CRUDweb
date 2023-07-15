<?php

$localhost = "localhost";
$username = "root";
$pass = "";
$dbname = "crud";

$conexion = new mysqli($localhost,$username,$pass,$dbname);

if ($conexion->connect_error) {
   die("Conneccion Fiel:" . $conexion->connect_error);
}else{
    echo "";
}