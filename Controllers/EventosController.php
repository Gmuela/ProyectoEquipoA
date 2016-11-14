<?php

require_once("../Beans/Eventos.php");
require_once("../Models/DAOS/EventoDAO.php");
require_once("UtilViews.php");
require_once("UtilForms.php");

function registrarEvento()
{
    $formulario = $_POST;
    $eventoNuevo = new Eventos();

    if(validarFormulario("eventos",$formulario)){

        $eventoNuevo->setCupo($formulario["cupo"]);
        $eventoNuevo->setDescripcion($formulario["descripcion"]);
        $eventoNuevo->setDuracion($formulario["duracion"]);
        $eventoNuevo->setFechaFin($formulario["fechaFin"]);
        $eventoNuevo->setFechaInicio($formulario["fechaInicio"]);
        $eventoNuevo->setFechaModificación(new DateTime());
        $eventoNuevo->setHora($formulario["hora"]);
        $eventoNuevo->setLugar($formulario["lugar"]);
        $eventoNuevo->setTipo($formulario["tipo"]);

        $eventoDAO = new EventoDAO();
        $eventoDAO->insert($eventoNuevo);
        //TODO preparar vistas mostrar -> UtilViews::redirigirA("formularioNoticias.html");


    }

    else{
        echo "Formulario erróneo";
    }

}

function crearSelectTipo()
{
    $arrayTipos = ["reunion" => "Renión Informativa", "social" => "Evento Social", "huelga" => "Huelga", "congreso" => "Congreso"];
    $options=0;
    foreach ($arrayTipos as $value => $innerOptionTag) {
        $options.= "<option value='".$value."'>".$innerOptionTag."</option>";
    }
    return $options;
}

if(!empty($_POST)){
    registrarEvento();
}
