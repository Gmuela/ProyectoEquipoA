<?php

function validarFormulario($nombreFormulario, $datosFormulario)
{

    $checked = true;

    if ($nombreFormulario == "eventos") {
        if (!isset($datosFormulario["tipo"]) OR $datosFormulario["fechaInicio"] == "") {
            $checked = false;
        }
    }

    return $checked;
}
