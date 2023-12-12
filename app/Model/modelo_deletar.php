<?php

namespace App\Model;

trait modelo_deletar
{

    public static function Deletar($tabela, array $where, $conector = null)
    {
        try {
            $db = $conector;
            if (!isset($db)) {
                $db = self::Get_Conector();
            }
            if (!is_array($where)) {
                echo ("<h4> A variável <b>where</b> precisa ser um array </h4>");
                die("<pre>where[0] = <b> coluna && </b> where[1] = <b> Operador </b> where[2] = <b> valor </b></pre>");
            }
            if ($db != null) {
                $query = "DELETE FROM {$tabela} where $where[0] $where[1] '$where[2]'";
                $resut = $db->query($query);
                return $resut;
            }
        } catch (\Throwable $th) {
            die("Erro deletar o item: " . $th);
        }
    }
    /**
     * * @param string $key remover poste para não afetar o registro
     */
    public static function remove($key)
    {
        unset($_POST[$key]);
    }
    
    public static function Trancate($tabela, $conector = null)
    {
        try {
            $db = $conector;
            if (!isset($db)) {
                $db = self::Get_Conector();
            }
            if ($db != null) {
                $query = "TRUNCATE TABLE {$tabela}";
                $resut = $db->query($query);
                return $resut;
            }
        } catch (\Throwable $th) {
            die("Erro ao limpar a Tabela: " . $th);
        }
    }
}
