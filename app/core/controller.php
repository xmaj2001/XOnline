<?php

namespace App\core;
use Exception;

class controller
{
    public static function init($rota, $parametros)
    {
        [$controlo, $metodo] = explode("@", array_values($rota)[0]);
        $control = PASTA_CONTROLO.$controlo.".php";
        if (!file_exists($control)) {
           throw new Exception("O controlo {$controlo} não existe");
        }
        $controller = new $controlo();
        if(!method_exists($controller,$metodo)){
            throw new Exception("O metodo {$metodo} não existe no controlo {$controlo}");
        }

       return $controller->$metodo($parametros);
    }
    public static function erro()
    {
        // $uri = parse_url(($_SERVER['REQUEST_URI']), PHP_URL_PATH);
        // $uri = ltrim($uri,"/");
        // throw new Exception("A rota {$uri} não existe");
        header("Location: /");
    }
}
