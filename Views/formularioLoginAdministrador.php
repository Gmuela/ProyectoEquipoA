<?php
require_once("../Controllers/LoginAdmin.php");
require_once("../Controllers/UtilViews.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/Formularios.css">
</head>
<body>
<nav><?php UtilViews::importNavigator() ?></nav>
<main>
    <h1>Formulario login administrador
    </h1>
    <form action="../Controllers/LoginAdmin.php" method="post" name="loginAdmin">
        <label for="password">Contraseña: </label><input type="password" name="password" id="password">
        <br>
        <br>
        <button onclick="submit(this)" class="formularioButton">Login</button>
    </form>
</main>
</body>
</html>