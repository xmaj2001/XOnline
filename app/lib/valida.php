<?php

namespace App\lib;

class valida
{
    public static function char_not(string $valor , $chacteres = array('/','£', '$' ,'<', '>', '@', '#', '%', '?', ';', ':', '=', '|', "\\", '(', ')', '{', '}', '[', ']', '_', '-','+'))
    {
        foreach ($chacteres as $key => $value) {
            $valor = str_replace($value, '', $valor);
        }
        return  $valor;
    }

    public static function char_in($valor, $chacteres = array('/', '$' , '<', '>', '@', '#', '%', '?', ';', ':', '=', '|', "\\", '(', ')', '{', '}', '[', ']','_', '-','+','.','/\\'))
    {
        $bl = false;
        for ($i = 0; $i < strlen($valor); $i++) {
            if (in_array($valor[$i], $chacteres)) {
                $bl = true;
                break;
            }
        }
        return  $bl;
    }

    public static function char_num_not($valor)
    {
        for ($i = 0; $i < strlen($valor); $i++) {
            if (is_numeric($valor[$i])) {
                $valor = str_replace($valor[$i],'', $valor);
            }
        }

        for ($i = 0; $i < strlen($valor); $i++) {
            if (is_numeric($valor[$i])) {
                $valor = str_replace($valor[$i], '', $valor);
            }
        }
        return  $valor;
    }

    public static function char_one_num_not($valor)
    {
        if(is_string($valor) && !empty($valor)){
            for ($i = 0; $i < strlen($valor); $i++) {
                if (is_numeric($valor[0])) {
                    $valor = str_replace($valor[0], "", $valor);
                }
            }
        }
        return  $valor;
    }

    public static function char_one_num_in($valor)
    {
        $bl = false;
        if (is_string($valor) && !empty($valor)) {
            if (is_numeric($valor[0])) {
                $bl = true;
            }
        }
        return  $bl;
    }
    public static function char_num_in($valor)
    {
        $bl = false;
        for ($i = 0; $i < strlen($valor); $i++) {
            if (is_numeric($valor[$i])) {
                $bl = true;
                break;
            }
        }
        return  $bl;
    }
}
