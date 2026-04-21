<?php
session_start();
include("conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios 
WHERE usuario='$usuario' AND password='$password'";

$resultado = $conexion->query($query);

if ($resultado && $resultado->num_rows > 0) {
    $_SESSION['usuario'] = $usuario;
    header("Location: dashboard.php");
    exit();
} else {
    echo "<script>alert('Datos incorrectos'); window.location='index.php';</script>";
}
?>