<?php

namespace App\core;

use Exception;

class routaconfig
{
    public static function start()
    {
        $uri = parse_url(($_SERVER['REQUEST_URI']), PHP_URL_PATH);
        $routes = self::routas();
        $rota = self::InArrayRoute($routes, $uri);
        $parametros = [];
        if (empty($rota)) {
            $rota = self::regularExpre($routes, $uri);
            $uri = explode('/', ltrim($uri));
            $parametros = self::parametros($uri, $rota);
            $parametros = self::Formatarparametros($uri, $parametros);
        }
        if (!empty($rota)) {
            return controller::init($rota, $parametros);
        } else {
            return controller::erro();
        }
        throw new Exception("Erro ao carregar Routaconfig");
    }

    private static function routas()
    {
        return require PASTA_ROUTAS;
    }

    private static function parametros($uri, $rota)
    {
        if (!empty($rota)) {
            $parametro_rotas = array_keys($rota)[0];
            return array_diff(
                $uri,
                explode('/', ltrim($parametro_rotas))
            );
        }
        return [];
    }

    private static function Formatarparametros($uri, $parametro)
    {
        $parametrodados = [];
        foreach ($parametro as $key => $value) {
            $parametrodados[$uri[$key - 1]] = $value;
        }
        return $parametrodados;
    }

    public static function InArrayRoute($routes, $uri)
    {
        if (array_key_exists($uri, $routes)) {
            return [$uri => $routes[$uri]];
        }
        return [];
    }
    public static function regularExpre($routes, $uri)
    {
        return array_filter(
            $routes,
            function ($value) use ($uri) {
                $regex = str_replace('/', '\/', ltrim($value, '/'));
                return preg_match("/^$regex$/", ltrim($uri, '/'));
            },
            ARRAY_FILTER_USE_KEY
        );
    }
}
