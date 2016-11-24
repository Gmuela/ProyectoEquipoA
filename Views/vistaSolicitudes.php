<?php
require_once("../Controllers/DelegadosController.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vista Solicitudes</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/Formularios.css">
</head>
<body>
<nav><?php UtilViews::importNavigator() ?></nav>
<main>
    <?php
    echo mostrarSolicitudes();
    ?>
</main>
</body>
</html>