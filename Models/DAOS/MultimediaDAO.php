<?php

class MultimediaDAO
{
    public function insert($multimedia)
    {
        $dbConnection = UtilDB::connectTo("ccoo","root","");

        $query = $dbConnection->prepare("INSERT INTO multimedia(imagen, titulo, id_album, fechaModificacion) VALUES(:imagen,:titulo,:id_album,:fechaModificacion)");

        $query->bindParam(":imagenes",$multimedia->getImagen());
        $query->bindParam(":titulo", $multimedia->getTitulo());
        $query->bindParam(":id_album", $multimedia->getIdAlbum());
        $query->bindParam(":fechaModificacion", $multimedia->getFechaModificacion()->format('Y-m-d H:i:s'));

        $query->execute();
    }
}