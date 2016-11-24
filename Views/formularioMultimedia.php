<?php
require_once("../Controllers/AlbumController_select.php");
require_once("../Controllers/UtilViews.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Album</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/Formularios.css">
</head>
<body>
<nav><?php UtilViews::importNavigator() ?></nav>
<main>
    <h1>Formulario Multimedia</h1>
    <form action="../Controllers/MultimediaController.php" method="post" enctype="multipart/form-data"
          name="formularioMultimedia">
        <label for="titulo">Titulo del archivo multimedia</label> <input type="text" name="titulo" id="titulo">
        <label for="albumSelect">Seleccione album</label><select id="albumSelect" name="albumSelect"><?php echo crearSelectAlbum() ?></select>
        <label for="url">Añadir URL</label><input type="text" name="url" id="url">
        <label for="selectFile">Seleccionar archivo</label><input type="file" name="foto" id="selectFile">
        <br>
        <br>
        <button onclick="submit(this)" class="formularioButton">Añadir multimedia</button>

    </form>
</main>
</body>
</html>