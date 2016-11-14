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
        $query->bindParam(":titulo", $delegados->getTitulo());
        $query->bindParam(":password", $delegados->getpassword());
        $query->bindParam(":nombre", $delegados->getnombre());
        $query->bindParam(":apellidos", $delegados->getapellidos());
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