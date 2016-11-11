<?php


class Solicitudes
{
    private $idSolicitudes;
    private $nombre;
    private $apellidos;
    private $fechaNacimiento;
    private $email;
    private $telefono;

    /**
     * SET
     */

    public function getIdSolicitudes()
    {
        return $this->idSolicitudes;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * SET
     */

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fecha_nacimiento = $fechaNacimiento;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

}