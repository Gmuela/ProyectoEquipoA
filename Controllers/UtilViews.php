<?php

class UtilViews
{
    public static function redirigirA($vista){
        header('Location: http://localhost/ProyectoEquipoA/Views/'.$vista);
    }
}