<?php

require_once("../Beans/Eventos.php");

function recogerDatos()
{
    $formulario = $_POST;
    $eventoNuevo = new Eventos();
    $eventoNuevo->setCupo($formulario["cupo"]);
    $eventoNuevo->setDescripcion($formulario["descripcion"]);
    $eventoNuevo->setDuracion($formulario["duracion"]);
    $eventoNuevo->setFechaFin($formulario["fechaFin"]);
    $eventoNuevo->setFechaInicio($formulario["fechaInicio"]);
    $eventoNuevo->setFechaModificación(new DateTime());

}

function crearSelectTipo()
{
    $arrayTipos = ["reunion" => "Renión Informativa", "social" => "Evento Social", "huelga" => "Huelga", "congreso" => "Congreso",];
    $options=0;
    foreach ($arrayTipos as $value => $innerOptionTag) {
        $options.= "<option value='".$value."'>".$innerOptionTag."</option>";
    }
    return $options;
}

