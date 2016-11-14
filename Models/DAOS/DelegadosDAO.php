<?php

require_once ("../../Beans/Delegados.php");

class DelegadosDAO
{
    public function insert($delegados)
    {
        $dbConnection = UtilDB::connectTo("CCOO","root","");
        $query = $dbConnection->query("INSERT INTO delegados(usuario, password, nombre, apellidos)
                                      VALUES(                                           
                                            :usuario,
                                            :pasword,
                                            :nombre,
                                            :apellidos)");
        $query->bindParam(":usuario", $delegados->getUsuario());
        $query->bindParam(":password", $delegados->getPassword());
        $query->bindParam(":nombre", $delegados->getNombre());
        $query->bindParam(":apellidos", $delegados->getApellidos());
        //TODO other bindParams()
        $query->execute();
    }
}

/**
 * Created by PhpStorm.
 * User: curso mañana
 * Date: 14/11/2016
 * Time: 11:34
 */