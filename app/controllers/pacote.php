<?php

use App\lib\pagina;
use App\lib\valida;
use App\Model\db;

class pacote extends pagina
{
    public static function detalhes($rota)
    {

        // SELEÇÃO NA BASE DE DADOS
        $site = db::Slinha("SELECT *from xonline where id = 1");
        $href = $rota["pacote"];
        $curso = $rota["curso"];
        db::validar_post();
        $pacote = db::Slinha("SELECT *FROM pacotes where href= '$href' and curso = '$curso'");
        if (!isset($pacote)) {
            header("Location: /cursos");
        }
        $dados = [
            "site" => $site,
            "pacote" => $pacote
        ];
        self::titulo($pacote["nome"]);
        self::header("navbar");
        self::conteudo("pacote/sobre");
        self::LoadLayout(null, $dados);
    }
    public static function ajax_pacotes()
    {
        if (self::is_ajax()) {
            if (isset($_POST["buscarc"]) && isset($_POST["curso"])) {
                db::validar_post();
                $busca = valida::char_not($_POST["buscarc"]);
                $curso = $_POST["curso"];
                $cursos = db::SELECIONA("SELECT *FROM pacotes where curso = '$curso' and nome like '%$busca%' order by emite desc");
                foreach ($cursos as $key => $value) {
                    require "res/pacote.php";
                }
            }
        } else {
            header("Location: /cursos");
        }
    }
}
