<?php

require_once("../../Beans/Eventos.php");

class InscripcionesDAO
{
    public function insert($inscripcion)
    {
        $dbConnection = UtilDB::connectTo("CCOO","root","");
        $query = $dbConnection->query("INSERT INTO inscripciones(id_evento, nombre, apellidos, email, telefono)
                                      VALUES(                                           
                                            :id_evento,
                                            :nombre,
                                            :apellidos,
                                            :email,
                                            :telefono)");
        $query->bindParam(":id_evento", $inscripcion->getId_evento());
        $query->bindParam(":nombre", $inscripcion->getNombre());
        $query->bindParam(":apellidos", $inscripcion->getApellidos());
        $query->bindParam(":email", $inscripcion->getEmail());
        $query->bindParam(":telefono", $inscripcion->getTelefono());
        //TODO other bindParams()
        $query->execute();
    }
}
/**
 * Created by PhpStorm.
 * User: curso mañana
 * Date: 14/11/2016
 * Time: 12:41
 */