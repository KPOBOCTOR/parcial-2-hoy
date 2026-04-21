<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
<h2>Agregar Medicamento</h2>

<form action="guardar.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="number" step="0.01" name="precio" placeholder="Precio" required>

    <select name="tipo">
        <option>Analgésico</option>
        <option>Antibiótico</option>
        <option>Vitaminas</option>
    </select>

    <p>Disponible:</p>
    <input type="radio" name="disponible" value="Si" required> Sí
    <input type="radio" name="disponible" value="No"> No

    <input type="text" name="descripcion" placeholder="Descripción (opcional)">

    <button type="submit">Guardar</button>
</form>

</div>

</body>
</html>