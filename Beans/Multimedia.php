<?php

/**
 * Created by PhpStorm.
 * User: curso mañana
 * Date: 11/11/2016
 * Time: 11:38
 */
class Multimedia
{
    //Propiedades
    private $IdMultimedia;

    private $titulo;

    private $IdAlbum;

    private $Imagen; //booleand

    private $fuente;  //ruta al archivo

    private $fechaModificacion;

    //Metodos
    public function getIdMultimedia()
    {
        return $this->IdMultimedia;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getIdAlbum()
    {
        return $this->IdAlbum;
    }
    public function setImagen($Imagen)
    {
        $this->Imagen = $Imagen;
    }
    public function getImagen()
    {
        return $this->Imagen;
    }
    public function setFuente($fuente)
    {
        $this->fuente = $fuente;
    }
    public function getFuente()
    {
        return $this->fuente;
    }
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;
    }
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

}