<?php

namespace App\Model;

class where
{
    /**
     * @param int $valor O id do registro
     */
    public static function id($valor)
    {
        return array("id", "=", $valor);
    }
     /**
     * @param string $valor a referencia do registro
     */
    public static function href($valor)
    {
        return array("href", "=", $valor);
    }
    /**
     * @param string $coluna nome da coluna
     * @param string $operador tipo do operador
     * @param string $valor valor a ser comparado
     */
    public static function onde($coluna = "id", $operdor = "=", $valor)
    {
        return array($coluna, $operdor, $valor);
    }
    /**
     * @param string $coluna nome da coluna
     * @param string $valor valor a ser comparado
     */
    public static function like($coluna = "id", $valor)
    {
        return array($coluna, "like", '%'.$valor.'%');
    }
}
