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
    if ($nombreFormulario == "album"){

        if ($datosFormulario["titulo"] == ""){
            $checked = false;
        }

        if(!isset($datosFormulario["tipoAlbum"])){
            $checked = false;
        }


    }
    if ($nombreFormulario == "multimedia"){
        if (trim($datosFormulario["titulo"]) == ""){
            $checked = false;

        }
        if (!is_uploaded_file($_FILES['foto']['tmp_name']) AND trim($datosFormulario["url"]) ==""){
            $checked = false;
        }
        if(is_uploaded_file($_FILES['foto']['tmp_name']) AND trim($datosFormulario["url"]) !==""){
            $checked = false;
        }
        if(trim($datosFormulario["url"]) !==""){
            if(!isImage($datosFormulario["url"]) AND !videoType($datosFormulario["url"])){
                $checked = false;
            }
        }



    }


    return $checked;
}
function isImage( $url )
{
    $pos = strrpos( $url, ".");
    if ($pos === false)
        return false;
    $ext = strtolower(trim(substr( $url, $pos)));
    $imgExts = array(".gif", ".jpg", ".jpeg", ".png", ".tiff", ".tif"); // this is far from complete but that's always going to be the case...
    if ( in_array($ext, $imgExts) )
        return true;
    return false;
}
function videoType($url) {
    if (strpos($url, 'youtube') > 0) {
        return true;
    }  else {
        return false;
    }
}
