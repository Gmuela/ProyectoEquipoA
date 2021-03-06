<?php

require_once("../Beans/Delegados.php");
require_once("../Models/DAOS/DelegadosDAO.php");
require_once("UtilViews.php");
require_once("UtilForms.php");

function registrarDelegados()
{
    $formulario = $_POST;

    if (validarFormulario("delegados", $formulario)) {
        $delegadosNuevo = new Delegados();
        $delegadosNuevo->setUsuario($formulario["usuario"]);
        $delegadosNuevo->setPassword($formulario["password"]);
        $delegadosNuevo->setNombre($formulario["nombre"]);
        $delegadosNuevo->setApellidos($formulario["apellidos"]);

        $delegadosDAO = new DelegadosDAO();
        $delegadosDAO->insert($delegadosNuevo);
        solicitudAceptada();
    }
}

function solicitudAceptada()
{

    UtilViews::redirigirA("../Views/vistaDelegados.html");
}

if(!empty($_POST)){
    registrarDelegados();
}

function mostrarSolicitudes(){

    $result = "";

    $delegadoDAO = new DelegadosDAO();
    $arraySolicitudes = $delegadoDAO->selectAllSolicitudes();

    foreach ($arraySolicitudes as $fila) {
        $result .= "<div>";
        $result .= "<h3>" . $fila["nombre"]. $fila["apellidos"] . "</h3>";
        $result .= "<ul>";
        $result .= "<li>Email: " . $fila["email"] . "</li>";
        $result .= "<li>Teléfono: " . $fila["telefono"] . "</li>";
        $result .= "<li>Razón: " . $fila["razon"] . " horas</li>";
        $result .= "</div>";
    }

    return $result;
}

