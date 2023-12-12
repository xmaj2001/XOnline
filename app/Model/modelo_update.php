<?php

namespace App\Model;

trait modelo_update
{
    // Model Atualizar --------------------
    public static function Atualiza($tabela, array $where, $dados = null, $conector = null)
    {
        try {
            $db = $conector;
            if (!isset($db)) {
                $db = self::Get_Conector();
            }
            $campos = "";
            if (!isset($dados)) {
                if (isset($_POST)) {
                    db::remove("btn_add");
                    db::remove("btn_sv");
                    db::remove("btn_del");
                    $num = count($_POST);
                    $conte = 0;
                    foreach ($_POST as $key => $value) {
                        $conte++;
                        if ($conte >= $num) {
                            $campos .=  $key . " = " . "'$value'";
                            break;
                        }
                        $campos .=  $key . " = " . "'$value',";
                    }
                } else {
                    die("Não existe nenhum poste");
                }
            } else {
                if (!is_array($dados)) {
                    echo ("<h4> A variável <b>dados</b> precisa ser um array de <b>Keys</b> </h4>");
                    die("<pre>Onde terá as colunas e os valores que queres atualizar</pre>");
                }
                $num = count($dados);
                $conte = 0;
                foreach ($dados as $key => $value) {
                    $conte++;
                    if ($conte >= $num) {
                        $campos .=  $key . " = " . "'$value'";
                        break;
                    }
                    $campos .=  $key . " = " . "'$value',";
                }
            }

            if ($db != null) {
                if (!is_array($where)) {
                    echo ("<h4> A variável <b>where</b> precisa ser um array </h4>");
                    die("<pre><b> where[0] = coluna && </b> where[1] = valor</b></p>");
                }
                $query = "UPDATE {$tabela} SET $campos where $where[0] $where[1] '$where[2]'";
                $resut = $db->query($query);
                return $resut;
            }
        } catch (\Throwable $th) {
            die("<h4> Não possivel fazer update:</h4> <br> <pre>$th</pre>");
        }
    }
   
}
