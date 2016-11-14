<?php

//Establecer las propiedades que se recogen del formulario
require_once("../Beans/Album.php");
//require_once("../Models/MultimediaDAO.php");
//require_once("../Models/DAOS/AlbumDAO.php");
require_once("UtilForms.php");

//Función para comprobar datos
$formulario = $_POST;
if(validarFormulario("album", $formulario)){
    echo "formulario valido";
    registrarAlbum();
}
else
    echo "formulario no valido";

//Función para registar un album
function registrarAlbum(){
    global $formulario;

    $newAlbum = new Album();
    $newAlbum->setTitulo($formulario["titulo"]);
    if ($formulario["tipoAlbum"] == "imagen") {
        $newAlbum->setImagen(true);
    } elseif ($formulario["tipoAlbum"] == "video") {
        $newAlbum->setImagen(false);
    }
    $newAlbum->setFechaModificacion(new DateTime());
    //$multimediaDAO = new MultimediaDAO();
    //$newAlbum->setArrayMultimedia = $multimediaDAO->selectAll();

    //$multimediaDAO->insert($newAlbum);


}


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

