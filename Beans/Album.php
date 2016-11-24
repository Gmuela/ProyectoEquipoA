<?php

/**
 * Created by PhpStorm.
 * User: curso mañana
 * Date: 11/11/2016
 * Time: 12:19
 */
class Album
{
    //Propiedades
    private $IdAlbum;

    private $titulo;

    private $imagen;

    private $fechaModificacion;

    private $arrayMultimedia;

    //Métodos
    public function getIdAlbum()
    {
        return $this->IdAlbum;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }
    public function getImagen()
    {
        return $this->imagen;
    }
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;
    }
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }
    public function setArrayMultimedia($arrayMultimedia)
    {
        $this->arrayMultimedia = $arrayMultimedia;
    }
    public function getArrayMultimedia()
    {
        return $this->arrayMultimedia;
    }

}