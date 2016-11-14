<?php

require_once ("UtilDB.php");

class EventoDAO
{
    public function insert($evento)
    {
        /*$dbConnection = UtilDB::connectTo("CCOO","root","");
        $query = $dbConnection->query("INSERT INTO eventos 
                                      VALUES(
                                            :tipo,
                                            :fechaInicio,
                                            :hora,
                                            :fechaFin,
                                            :duracion,
                                            :lugar,
                                            :descripion,
                                            :cupo,
                                            :fechaModificacion)");
        $query->bindParam(":tipo", $evento->getTipo());
        $query->bindParam(":fechaInicio", $evento->getFechaInicio());
        $query->bindParam(":hora", $evento->getHora());
        $query->bindParam(":fechaFin", $evento->getFechaFin());
        $query->bindParam(":duracion", $evento->getDuracion());
        $query->bindParam(":lugar", $evento->getLugar());
        $query->bindParam(":descripcion", $evento->getDescripcion());
        $query->bindParam(":cupo", $evento->getCupo());
        $query->bindParam(":fechaModificacion", $evento->getFechaModificacion());
        $query->execute();*/
        echo "Aún no se ha hecho la base de datos";
    }
}