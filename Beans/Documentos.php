<?php

class Documentos
{
    private $idDocumentos;
    private $tipo;
    private $titulo;
    private $descripcion;
    private $fechaPublicacion;
    private $enlaceDocumento;
    private $documento;
    private $fechaModificacion;

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

    public function getEnlaceDocumento()
    {
        return $this->enlaceDocumento;
    }

    public function getDocumento()
    {
        return $this->documento;
    }

    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
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

    public function setEnlaceDocumento($enlaceDocumento)
    {
        $this->enlaceDocumento = $enlaceDocumento;
    }

    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;
    }
}