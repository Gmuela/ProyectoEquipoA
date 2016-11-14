<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" >
    <title>Formulario de multimedia a Album</title>
</head>
<body>

<?php
require_once("../Beans/Multimedia.php");
require_once ("./UtilViews.php");
//require_once ("../Models/DAOS/MultimediaDAO.php");
require_once("UtilForms.php");

$formulario = $_POST;

function registarMultimedia(){
    global $formulario;
    echo "form valido";
    $multimedia = new Multimedia();
    //Establecer Titulo y fecha
    $multimedia->setTitulo($formulario["titulo"]);
    $multimedia->setFechaModificacion(new DateTime());

    //Establecer ruta imagen
    $fileSelect = $_FILES['foto']['name'];
    $urlSelect = $formulario["url"];

    if (trim($urlSelect) !== "") {
        echo "entra en select url. URL = " . $urlSelect;
        $multimedia->setFuente($urlSelect);

    } elseif (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $dir_archivo = '../Views/Resources/Multimedia/';
        $foto_path = $dir_archivo . $_FILES['foto']['name'];
        $extension = pathinfo($foto_path, PATHINFO_EXTENSION);
        $archivo_subido = $dir_archivo . $formulario["titulo"] . "." . $extension;
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido))
            $multimedia->setFuente($archivo_subido);
        else
            echo "Posible ataque de subida de ficheros";
    } else
        echo "No ha seleccionado ningún archivo";

    //Se comprueba si el archivo elegido es una imagen o no
    $mime = mime_content_type($multimedia->getFuente());
    if (strstr($mime, "image/")) {
        $multimedia->setImagen(true);
    } else {
        $multimedia->setImagen(false);
    }

    //Se añade el identificador del album al que pertenece
    $albumSeleccionado = $formulario["albumSelect"];
    $multimedia->setIdAlbum($albumSeleccionado);

    //$multimediaDAO = new MultimediaDAO();
    //$multimediaDAO->insert($multimedia);
    //UtilViews::redirigirA("vista Multimedia");

}
if(validarFormulario("multimedia", $formulario)) {
    registarMultimedia();
    echo "formulario valido";
}
else{
    echo "formulario no valido";
}
function mostarMultimedia(){
    //$multimediaDAO = new MultimediaDAO();
    //$multimediaDAO->selectAll();
    //UtilViews::redirigirA("vista Multimedia");
}
