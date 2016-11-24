<?php
require_once("../Controllers/EventosController.php");
require_once("../Controllers/UtilViews.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Eventos</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/Formularios.css">
</head>
<body>
<nav><?php UtilViews::importNavigator() ?></nav>
<main>
    <h1>Formulario de creación de Eventos</h1>
    <form action="../Controllers/EventosController.php" name="formularioEventos" method="post"
          enctype="multipart/form-data">

        <label for="tipo">Tipo</label><input type="text" name="tipo" id="tipo">
        <label for="fechaInicio">Fecha Inicio</label> <input type="date" name="fechaInicio" id="fechaInicio">
        <label for="hora">Hora</label> <input type="text" name="hora" id="hora">
        <label for="fechaFin">Fecha Fin</label> <input type="date" name="fechaFin" id="fechaFin">
        <label for="duracion">Duración</label> <input type="number" name="duracion" id="duracion">
        <label for="lugar">Lugar</label> <input type="text" name="lugar" id="lugar">
        <label for="descripcion">Descripción</label> <textarea name="descripcion" id="descripcion"></textarea>
        <label for="cupo">Cupo</label> <input type="number" name="cupo" id="cupo">
        <br>
        <br>
        <button onclick="submit(this)" class="formularioButton">Crear</button>

    </form>
</main>
</body>
</html>