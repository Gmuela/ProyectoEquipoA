<?php

class UtilViews
{
    public static function redirigirA($vista){
        header('Location: http://'.$_SERVER["SERVER_NAME"].'/ProyectoEquipoA/Views/'.$vista);
    }

    public static function importNavigator(){

        //if(!empty($_SESSION["usuarioLogueado"])){
            echo file_get_contents('../Views/index.html');
        //}

    }
}