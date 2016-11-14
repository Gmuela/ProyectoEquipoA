<?php

//Establecer las propiedades que se recogen del formulario
require_once("../Beans/Album.php");

//Función llamada en el formulario de añadir Multimedia ("formularioMultimedia.php") para desplegar un select dinámico
function crearSelectAlbum()
{
    $arrayAlbums = ["1" => "Imagenes Huelga 12/10", "2" => "Videos Huelga 12/10"];
    //$albumDAO = new AlbumDAO();
    //$arrayAlbums = $albumDAO->getArrayAlbums();
    $options=0;
    foreach ($arrayAlbums as $value => $innerOptionTag) {
        $options.= "<option value='".$value."'>".$innerOptionTag."</option>";
    }
    return $options;
}

