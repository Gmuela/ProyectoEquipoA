<?php
require_once("../Controllers/UtilViews.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Noticias</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/Formularios.css">
</head>
<body>
<nav><?php UtilViews::importNavigator() ?></nav>
<main>
    <h1>Formulario de creación de Noticias</h1>
    <form action="../Controllers/NoticiasController.php" name="formularioNoticias" method="post"
          enctype="multipart/form-data">

        <label for="titulo">Titulo</label> <input type="text" name="titulo" id="titulo">
        <label for="subtitulo">Subtitulo</label> <input type="text" name="subtitulo" id="subtitulo">
        <label for="cuerpo">Cuerpo</label> <input type="text" name="cuerpo" id="cuerpo">
        <label for="imagen">Imagen</label> <input type="file" name="imagen" id="imagen">
        <label for="pieImagen">Pie Imagen</label> <input type="file" name="pieImagen" id="pieImagen">
        <label for="imagenMiniatura">Imagen Miniatura</label> <input type="file" name="imagenMiniatura" id="imagenMiniatura">
        <br>
        <br>
        <button value="Crear" onclick="submit(this)" class="formularioButton">Crear</button>

    </form>
</main>
</body>
</html>