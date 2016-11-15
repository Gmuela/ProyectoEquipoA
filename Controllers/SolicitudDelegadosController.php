<?php

require_once("../Beans/SolicitudDelegados.php");
require_once("../Models/DAOS/SolicitudDelegadosDAO.php");
require_once("UtilViews.php");
require_once("UtilForms.php");

function registrarSolicitud()
{
    $formulario = $_POST;

    if (validarFormulario("solicitudDelegados", $formulario)) {
        $solicitudNueva = new Solicitud();
        $solicitudNueva->setNombre($formulario["nombre"]);
        $solicitudNueva->setApellidos($formulario["apellidos"]);
        $solicitudNueva->setRazon($formulario["razon"]);
        $solicitudNueva->setEmail($formulario["email"]);
        $solicitudNueva->setTelefono($formulario["telefono"]);

        $solicitudDAO = new SolicitudDelegadosDAO();
        $solicitudDAO->insert($solicitudNueva);
    }
}

/*
function mostrarSolicitud()
{
    //$solicitudDAO = new SolicitudDelegadosDAO();
    //$solicitudDAO->selectAll();
    //UtilViews::redirigirA("");
}
*/

if(!empty($_POST)){
    registrarSolicitud();
}