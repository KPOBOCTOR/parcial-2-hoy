<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Registro</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
<h2>📝 Crear Cuenta</h2>

<form action="guardar_usuario.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre completo" required>
    <input type="text" name="usuario" placeholder="Usuario" required>
    <input type="password" name="password" placeholder="Contraseña" required>

    <button type="submit">Registrarse</button>
</form>

<br>
<a href="index.php">Ya tengo cuenta</a>
</div>

</body>
</html>