<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
<h2>🔐 Iniciar Sesión</h2>

<form action="login.php" method="POST">
   <input type="text" name="usuario" required>
<input type="password" name="password" required>
    <button type="submit">Ingresar</button>
</form>

<br>
<a href="tabla.php">Ver medicamentos</a>
</div>

</body>
</html>