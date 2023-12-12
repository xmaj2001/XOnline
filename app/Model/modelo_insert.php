<?php

namespace App\Model;

trait modelo_insert
{
    // Model Registrar
    public static function Registrar($tabela, $dados = null, $conector = null)
    {
        try {
            $db = $conector;
            if (!isset($db)) {
                $db = self::Get_Conector();
            }
            $campos = "";
            $vls = "";
            if (!isset($dados)) {
                if (isset($_POST)) {
                    db::remove("btn_add");
                    db::remove("btn_sv");
                    db::remove("btn_del");
                    $num = count($_POST);
                    $conte = 0;
                    foreach ($_POST as $key => $value) {
                        $value = $_POST[$key];
                        $conte++;
                        if ($conte >= $num) {
                            $campos .=  $key;
                            $vls .= "'$value'";
                            break;
                        }
                        $campos .=  $key . ",";
                        $vls .= "'$value',";
                    }
                } else {
                    die("Não existe nenhum poste");
                }
            } else {
                if (!is_array($dados)) {
                    echo ("<h4> A variável <b>dados</b> precisa ser um array de <b>Key</b></h4>");
                    die("<pre>Onde terá as colunas e valores que queres registrar</pre>");
                }
                $num = count($dados);
                $conte = 0;
                foreach ($dados as $key => $value) {
                    $value = $dados[$key];
                    $conte++;
                    if ($conte >= $num) {
                        $campos .=  $key;
                        $vls .= "'$value'";
                        break;
                    }
                    $campos .=  $key . ",";
                    $vls .= "'$value',";
                }
            }
            if ($db != null) {
                $query = "INSERT INTO {$tabela} ($campos) value ($vls)";
                $resut = $db->query($query);
                return $resut;
            }
        } catch (\Throwable $th) {
            die("<h4> Não possivel criar um novo registro:</h4> <br> <pre>$th</pre>");
        }
    }

    public static function Rid($tabela, $dados = null,$conector = null)
    {
        try {
            $db = $conector;
            if (!isset($db)) {
                $db = self::Get_Conector();
            }
            $campos = "";
            $vls = "";
            if (!isset($dados)) {
                if (isset($_POST)) {
                    db::remove("btn_add");
                    db::remove("btn_sv");
                    db::remove("btn_del");
                    $num = count($_POST);
                    $conte = 0;
                    foreach ($_POST as $key => $value) {
                        $value = $_POST[$key];
                        $conte++;
                        if ($conte >= $num) {
                            $campos .=  $key;
                            $vls .= "'$value'";
                            break;
                        }
                        $campos .=  $key . ",";
                        $vls .= "'$value',";
                    }
                } else {
                    die("Não existe nenhum poste");
                }
            } else {
                if (!is_array($dados)) {
                    echo ("<h4> A variável <b>dados</b> precisa ser um array de <b>Key</b></h4>");
                    die("<pre>Onde terá as colunas e valores que queres registrar</pre>");
                }
                $num = count($dados);
                $conte = 0;
                foreach ($dados as $key => $value) {
                    $value = $dados[$key];
                    $conte++;
                    if ($conte >= $num) {
                        $campos .=  $key;
                        $vls .= "'$value'";
                        break;
                    }
                    $campos .=  $key . ",";
                    $vls .= "'$value',";
                }
            }
            if ($db != null) {
                $query = "INSERT INTO {$tabela} ($campos) value ($vls)";
                $resut = $db->query($query);
                if ($resut === true) {
                    return $db->insert_id;
                } else {
                    return 0;
                }
            }
        } catch (\Throwable $th) {
            die("<h4> Não possivel criar um novo registro:</h4> <br> <pre>$th</pre>");
        }
    }
}
