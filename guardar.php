<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$tipo = $_POST['tipo'];
$disponible = $_POST['disponible'];
$descripcion = $_POST['descripcion'];

if ($nombre == "" || $precio == "") {
    echo "Campos obligatorios";
    exit();
}

$query = "INSERT INTO medicamentos(nombre, precio, tipo, disponible, descripcion)
VALUES('$nombre','$precio','$tipo','$disponible','$descripcion')";

$conexion->query($query);

header("Location: tabla.php");
?>