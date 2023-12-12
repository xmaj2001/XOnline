<?php

namespace App\Model;

use App\Model\conector;

class db extends conector
{
    // modelos
    use modelo_select;
    use modelo_insert;
    use modelo_update;
    use modelo_deletar;
    use modelo_validar;
    // Model query
    public static function query($query, $conector = null)
    {
        try {
            $db = $conector;
            if (!isset($db)) {
                $db = self::Get_Conector();
            }
            if ($db != null) {
                $resut = $db->query($query);
                return $resut;
            }
        } catch (\Throwable $th) {
            die("Erro no query : " . $th);
        }
    }
}
