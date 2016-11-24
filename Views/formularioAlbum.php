<?php
require_once("../Controllers/UtilViews.php")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Álbum</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/Formularios.css">
</head>
<body>
<nav><?php UtilViews::importNavigator() ?></nav>
<main>
    <h1>Formulario para añadir contenido multimedia a un Album ya existente</h1>
    <form action="../Controllers/AlbumController.php" method="post" name="formularioAlbum">
        <label for="titulo">Titulo del nuevo Album: </label><input type="text" name="titulo" id="titulo"><br>
        <label>Tipo de Album</label><br>
        <label for="albumImagen">Imagen</label><input type="radio" name="tipoAlbum" value="imagen" id="albumImagen">
        <label for="albumVideo">Video</label><input type="radio" name="tipoAlbum" value="video" id="albumVideo">
        <br>
        <button onclick="submit(this)" class="formularioButton">Crear Album</button>
    </form>
</main>

</body>
</html>