<?php

require_once("../../Beans/Eventos.php");

class InscripcionDAO
{
    public function insert($inscripcion)
    {
        $dbConnection = UtilDB::connectTo("CCOO","root","");
        $query = $dbConnection->prepare("INSERT INTO inscripciones(id_evento, nombre, apellido, email, telefono)
                                      VALUES(                                           
                                            :id_evento,
                                            :nombre,
                                            :apellidos,
                                            :email,
                                            :telefono)");
        $query->bindParam(":id_evento", $inscripcion->getIdEvento());
        $query->bindParam(":nombre", $inscripcion->getNombre());
        $query->bindParam(":apellidos", $inscripcion->getApellidos());
        $query->bindParam(":email", $inscripcion->getEmail());
        $query->bindParam(":telefono", $inscripcion->getTelefono());

        $query->execute();
    }
}