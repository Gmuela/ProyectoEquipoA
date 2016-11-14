<?php

require_once ("../../Beans/SolicitudesDelegados.php");

class SolicitudDelegadosDAO
{
    public function insert($solicitudDelegados)
    {
        $dbConnection = UtilDB::connectTo("CCOO","root","");
        $query = $dbConnection->prepare("INSERT INTO solicitudDelegados (nombre, apellidos, telefono, email, razon)
                                      VALUES(
                                            
                                            :nombre,
                                            :apellidos,
                                            :telefono,
                                            :email,
                                            :razon)");
        $query->bindParam(":nombre", $solicitudDelegados->getNombre());
        $query->bindParam(":idapellidos", $solicitudDelegados->getApellidos());
        $query->bindParam(":telefono", $solicitudDelegados->getTelefono());
        $query->bindParam(":email", $solicitudDelegados->getEmail());
        $query->bindParam(":razon", $solicitudDelegados->getRazon());

        //TODO other bindParams()
        $query->execute();
    }
}
/**
 * Created by PhpStorm.
 * User: curso mañana
 * Date: 14/11/2016
 * Time: 12:02
 */