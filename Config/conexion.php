<?php

function conectar() {
    $host = "localhost";
    $user = "root";
    $pass = "masterkey";
    $bd = "cajero";

    $conexion = mysqli_connect($host, $user, $pass);

    mysqli_select_db($conexion, $bd);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    return $conexion;
}