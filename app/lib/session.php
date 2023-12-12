<?php

namespace App\lib;

class session
{
    public static function init()
    {
        session_start();
    }

    public static function existe($nome)
    {
        if (isset($_SESSION[$nome])) {
            return true;
        } else {
            return false;
        }
    }

    public static function set($nome, $valor)
    {
        $_SESSION[$nome] = $valor;
    }

    public static function get($nome)
    {
        return $_SESSION[$nome];
    }
    public static function limpar()
    {
        if ($_SESSION != null)
            session_destroy();
    }
    public static function deletar($nome)
    {
        if (isset($_SESSION[$nome])) {
            unset($_SESSION[$nome]);
        }
    }
}
