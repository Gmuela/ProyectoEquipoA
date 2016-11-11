<?php

class delegados
{
    private $idDelegados;
    private $nombre;
    private $password;
    private $email;
    private $telefono;

    /**
     * GET
     */

    public function getIdDelegados()
    {
        return $this->idDelegados;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPassword()
    {
        return $this->password;
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

    public function setPassword($password)
    {
        $this->password = $password;
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