<?php
require("../Controllers/AlbumController.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vista Galeria</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/Formularios.css">
</head>
<body>
<nav><?php UtilViews::importNavigator() ?></nav>
<main>
    <?php echo mostrarAlbum(); ?>
</main>
</body>
</html>
