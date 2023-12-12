<?php

namespace App\lib;

class View
{
    public static function render($header, $conteudo, $footer, $valor)
    {
        
        if (is_array($valor))
            extract($valor);
        // Header
        
        if (!empty($header)) {
            if (file_exists(_Headers . $header . ".php")) {
                require _Headers . $header . ".php";
            } else {
                $file = _Headers . $header . ".php";
                require "inc/erro_file.php";
            }
        }

        // Conteudo
        if (!empty($conteudo)) {
            if (file_exists(_Pages . $conteudo . ".php")) {
                require _Pages . $conteudo . ".php";
            } else {
                $file = _Pages . $conteudo . ".php";
                require "inc/erro_file.php";
            }
        }

        // Footer
        if (!empty($footer)) {
            if (file_exists(_Footeres . $footer . ".php")) {
                require _Footeres . $footer . ".php";
            } else {
                $file = _Footeres . $conteudo . ".php";
                require "inc/erro_file.php";
            }
        }
    }
}
