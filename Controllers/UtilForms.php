<?php

function validarFormulario($nombreFormulario, $datosFormulario)
{

    $checked = true;

    if ($nombreFormulario == "eventos") {

        if(!isset($datosFormulario["tipo"]) OR !isset($datosFormulario["descripcion"])){
            $checked = false;
        }

        if(!isset($datosFormulario["hora"]) OR !isset($datosFormulario["cupo"])){
            $checked = false;
        }

        if ($datosFormulario["fechaInicio"] == "" OR $datosFormulario["fechaFin"] == "") {
            $checked = false;
        }

    }

    if($nombreFormulario == "noticias"){

        if(!isset($datosFormulario["titulo"]) OR !isset($datosFormulario["subtitulo"])){
            $checked = false;
        }

        if(!isset($datosFormulario["cuerpo"])){
            $checked = false;
        }

    }

    return $checked;
}
