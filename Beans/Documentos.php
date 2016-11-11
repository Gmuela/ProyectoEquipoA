<?php

class documentos
{
    private $idDocumentos;
    private $tipo;
    private $titulo;
    private $descripcion;
    private $fechaPublicacion;
    private $enlaceDescarga;
    private $descarga;

    /**
     * GET
     */

    public function getIdDocumentos()
    {
        return $this->idDocumentos;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    public function getEnlaceDescarga()
    {
        return $this->enlaceDescarga;
    }

    public function getDescarga()
    {
        return $this->descarga;
    }

    /**
     * SET
     */

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;
    }

    public function setEnlaceDescarga($enlaceDescarga)
    {
        $this->enlaceDescarga = $enlaceDescarga;
    }

    public function setDescarga($descarga)
    {
        $this->descarga = $descarga;
    }
}