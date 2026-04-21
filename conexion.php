<?php
$conexion = new mysqli("localhost", "root", "", "farmacia");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>