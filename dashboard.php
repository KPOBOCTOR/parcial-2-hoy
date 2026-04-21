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
<h2>Bienvenido <?php echo $_SESSION['usuario']; ?></h2>

<div class="nav">
<a href="agregar.php">➕ Agregar</a><br><br>
<a href="tabla.php">📋 Ver tabla</a><br><br>
<a href="logout.php">🚪 Cerrar sesión</a>
</div>

</div>

</body>
</html>