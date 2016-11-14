<?php
require_once("../Beans/Inscripciones.php");
require_once("../Models/DAOS/InscripcionDAO.php");
require_once("UtilViews.php");
require_once("UtilForms.php");

function registrarInscripcion()
{
    $formulario = $_POST;

    if(validarFormulario("inscripciones",$formulario)){

        $incripcionNueva = new Inscripciones();
        $incripcionNueva->setIdEvento($formulario["idEvento"]);
        $incripcionNueva->setNombre($formulario["nombre"]);
        $incripcionNueva->setApellidos($formulario["apellidos"]);
        $incripcionNueva->setEmail($formulario["email"]);
        $incripcionNueva->setTelefono($formulario["telefono"]);

        $inscripcionDAO = new InscripcionDAO();
        $inscripcionDAO->insert($incripcionNueva);

        //TODO preparar vistas mostrar -> UtilViews::redirigirA("formularioNoticias.html");


    }

    else{
        echo "Formulario erróneo";
    }

}

function crearSelectEventos()
{
    $arrayEventos = ["0" => "Java Conference", "1" => "HolaMundoSQL", "2" => "Heil Gitler!", "3" => "FW are the devil"];
    $options=0;
    foreach ($arrayEventos as $value => $innerOptionTag) {
        $options.= "<option value='".$value."'>".$innerOptionTag."</option>";
    }
    return $options;
}

if(!empty($_POST)){
    registrarInscripcion();
}