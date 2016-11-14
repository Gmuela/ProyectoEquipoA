<?php

class AlbumDAO
{
    public function insert($album)
    {
        $dbConnection = UtilDB::connectTo("ccoo","root","");

        $query = $dbConnection->prepare("INSERT INTO album(titulo, fuente, imagenes, fechaModificacion) VALUES(:titulo, :fuente, :imagenes, :fechaModificacion)");

        $query->bindParam(":titulo", $album->getTitulo());
        $query->bindParam(":fuente", $album->getFuente());
        $query->bindParam(":imagenes",$album->getImagen());
        $query->bindParam(":fechaModificacion", $album->getFechaModificacion()->format('Y-m-d H:i:s'));

        $query->execute();
    }
}