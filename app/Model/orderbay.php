<?php

namespace App\Model;

class orderbay
{
    public static function set($atributo,$orden = "DESC")
    {
        return "order by"." {$atributo} ".$orden;
    }

    public static function desc($atributo)
    {
        return "order by" . " {$atributo} DESC";
    }

    public static function cresc($atributo)
    {
        return "order by" . " {$atributo} ASC";
    }
}
