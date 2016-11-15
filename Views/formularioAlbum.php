<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario creacion Albums</title>
</head>
<body>
    <h1>Formulario para añadir contenido multimedia a un Album ya existente</h1>
    <form action="../Controllers/AlbumController.php" method="post" name="formularioAlbum">
        <label for="titulo">Titulo del nuevo Album: </label><input type="text" name="titulo" id="titulo"><br>
        <label>Tipo de Album</label><br>
        <label for="albumImagen">Imagen</label><input type="radio" name="tipoAlbum" value="imagen" id="albumImagen">
        <label for="albumVideo">Video</label><input type="radio" name="tipoAlbum" value="video" id="albumVideo">
        <button onclick="submit(this)">Crear Album</button>

    </form>
    <iframe width="560" height="315" src="https://youtu.be/6ja3rlcgbn8" frameborder="0" allowfullscreen=""></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/6ja3rlcgbn8" frameborder="0" allowfullscreen></iframe>

</body>
</html>