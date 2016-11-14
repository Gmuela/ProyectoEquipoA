<?php

require_once ("../../Beans/Documentos.php");

class DocumentosDAO
{
    public function insert($documentos)
    {
        $dbConnection = UtilDB::connectTo("CCOO","root","");
        $query = $dbConnection->prepare("INSERT INTO documentacion(titulo, descripcion, fechaPublicacion, archivo, privado, ley, fechaModificacion)
                                      VALUES(                                           
                                            :titulo,
                                            :descripcion,
                                            :fechaPublicacion,
                                            :archivo,
                                            :privado, 
                                            :ley, 
                                            :fechaModificacion)");
        $query->bindParam(":titulo", $documentos->getTitulo());
        $query->bindParam(":password", $documentos->getpassword());
        $query->bindParam(":nombre", $documentos->getnombre());
        $query->bindParam(":apellidos", $documentos->getapellidos());
        //TODO other bindParams()
        $query->execute();
    }
    public function selectAll()
    {
        $dbConnection = UtilDB::connectTo("ccoo", "root", "");
        $query = $dbConnection->prepare('SELECT * FROM documentacion');

        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
/**
 * Created by PhpStorm.
 * User: curso mañana
 * Date: 14/11/2016
 * Time: 12:57
 */