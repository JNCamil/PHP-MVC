<?php

class Database
{
    //Se crea una función estática para no tener que instanciar
    public static function conectar()
    {

        #Setear los resultados de la base de datos en utf8 (tildes, ñ, ..)
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );

        $bd = new PDO('mysql:dbname=notas_master;host=localhost', "root", "", $options);
        #Excepciones para cuando ocurra un error
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bd;

    }
}

?>