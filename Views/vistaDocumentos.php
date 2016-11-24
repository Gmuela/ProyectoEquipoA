<?php
require_once("../Controllers/DocumentosController.php");
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
    <?php
    echo mostrarDocumentos();
    echo mostrarLeyes();
    ?>
</main>
</body>
</html>