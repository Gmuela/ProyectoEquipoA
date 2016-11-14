<?php
require_once ("../../Beans/Noticias.php");

class NoticiasDAO
{
    public function insert($noticias)
    {
      $dbConnection = UtilDB::connectTo("CCOO","root","");
      $query = $dbConnection->query("INSERT INTO noticias (titulo, subtitulo, cuerpo, imagen, pieImagen, imagenMiniatura, fehaCreacion, fechaModificaion)
                                      VALUES(
                                             :titulo,
                                             :subtitulo,
                                             :cuerpo,
                                             :imagen,
                                             :pieImagen,
                                             :imagenMiniatura,
                                             :fehaCreacion,
                                             :fechaModificaion)");
        $query->bindParam(":titulo", $noticias->getTitulo());
        $query->bindParam(":subtitulo", $noticias->getSubitulo());
        $query->bindParam(":imagen", $noticias->getImagen());
        $query->bindParam(":pieImagen", $noticias->getPieImagen());
        $query->bindParam(":imagenMiniatura", $noticias->getImagenMiniatura());
        $query->bindParam(":fehaCreacion", $noticias->getFehaCreacion());
        $query->bindParam(":fechaModificaion", $noticias->getFechaModificacion());
        //TODO other bindParams()
        $query->execute();
    }
}

/**
 * Created by PhpStorm.
 * User: curso mañana
 * Date: 14/11/2016
 * Time: 11:55
 */