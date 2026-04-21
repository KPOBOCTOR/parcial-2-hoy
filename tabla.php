<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h2 style="text-align:center; color:white;">Lista de Medicamentos</h2>

<table>
<tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Tipo</th>
    <th>Disponible</th>
    <th>Descripción</th>
</tr>

<?php
$query = "SELECT * FROM medicamentos ORDER BY nombre ASC";
$resultado = $conexion->query($query);

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>
        <td>{$fila['nombre']}</td>
        <td>{$fila['precio']}</td>
        <td>{$fila['tipo']}</td>
        <td>{$fila['disponible']}</td>
        <td>{$fila['descripcion']}</td>
    </tr>";
}
?>

</table>

</body>
</html>