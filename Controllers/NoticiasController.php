<?php

function registrarNoticia(){

    $formulario = $_POST;
    $ficheros = $_FILES;
    $noticiaNueva = new Noticias();
    $noticiaNueva->setCuerpo($formulario["cuerpo"]);
    $noticiaNueva->setFechaCreación(new DateTime());
    $noticiaNueva->setFechaModificacion(new DateTime());

    //TODO mover imágenes a carpeta y coger sus nombres
    $noticiaNueva->setImagen($ficheros["imagen"]);
    $noticiaNueva->setImagenMiniatura($ficheros["imagenMiniatura"]);
    $noticiaNueva->setPieImagen($ficheros["pieImagen"]);
    //TODO---------------------------------

    $noticiaNueva->setSubtitulo($formulario["subtitulo"]);
    $noticiaNueva->setTitulo($formulario["titulo"]);

    //TODO $noticiaDAO = new NoticiaDAO();
    //TODO $noticiaDAO->insert($noticiaNueva);
}