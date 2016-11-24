<?php
require_once("../Controllers/UtilViews.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Album</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/Formularios.css">
</head>
<body>
<nav><?php UtilViews::importNavigator() ?></nav>
<main>
    <h1>Formulario de Delegados</h1>
    <form action="../Controllers/SolicitudDelegadosController.php" name="formularioSolicitudDelegados" method="post">

        <label for="nombre">Nombre</label> <input type="text" name="nombre" id="nombre">
        <label for="apellidos">Apellidos</label> <input type="text" name="apellidos" id="apellidos">
        <label for="email">Email</label> <input type="email" name="email" id="email">
        <label for="telefono">Telefono</label> <input type="number" name="telefono" id="telefono">
        <label for="razon">Razon</label> <textarea name="razon" id="razon"></textarea>
        <br>
        <br>
        <button onclick="submit(this)" class="formularioButton">Enviar Solicitud</button>

    </form>
</main>
</body>
</html>