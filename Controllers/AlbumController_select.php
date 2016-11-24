<?php

require_once("../Beans/Album.php");
require_once("../Models/DAOS/AlbumDAO.php");

function crearSelectAlbum()
{
    $albumDAO = new AlbumDAO();
    $arrayAlbums = $albumDAO->selectAll();
    $options=0;
    foreach ($arrayAlbums as $value) {
        $options.= "<option value='".$value['idAlbum']."'>".$value['titulo']."</option>";
    }
    return $options;
}

