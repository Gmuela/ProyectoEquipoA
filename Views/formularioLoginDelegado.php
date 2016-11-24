<?php
require_once("../Controllers/LoginDelegado.php");
require_once("../Controllers/UtilViews.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Delegado</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/Formularios.css">
</head>
<body>
<nav><?php UtilViews::importNavigator() ?></nav>
<main>
    <h1>Formulario login delegado</h1>
    <form action="../Controllers/LoginDelegado.php" method="post" name="loginDelegdao">
        <label for="usuario">Usuario: </label><input type="text" name="usuario" id="usuario"><br>
        <label for="password">Contraseña: </label><input type="password" name="password" id="password">
        <br>
        <br>
        <button onclick="submit(this)" class="formularioButton">Login</button>
    </form>
</main>
</body>
</html>