<?php

use App\lib\pagina;
use App\lib\valida;
use App\Model\db;

class aluno extends pagina
{
    public static function cursando($rota)
    {

        // SELEÇÃO NA BASE DE DADOS
        $site = db::Slinha("SELECT *from xonline where id = 1");
        $curso = $rota["cursando"];
        $total = db::Numlinhas("SELECT *FROM alunos where curso = '$curso'");
        db::validar_post();
        $curso = db::Slinha("SELECT nome,href FROM cursos where href = '$curso'");
        if (!isset($curso)) {
            header("Location: /cursos");
        }
        $dados = [
            "site" => $site,
            "curso" => $curso,
            "total" => $total
        ];
        self::titulo($curso["nome"]);
        self::header("navbar");
        self::conteudo("aluno/cursando");
        self::LoadLayout(null, $dados);
    }

    public static function ajax_alunos_cursando()
    {
        if (self::is_ajax() && isset($_POST["buscarc"])) {
            db::validar_post();
            $page = 1;
            $busca = valida::char_not($_POST["buscarc"]);
            $curso = valida::char_not($_POST["curso"]);
            if (isset($_POST["page"])) {
                $vpage = valida::char_not($_POST["page"]);
                if (is_numeric($vpage))
                    $page = $vpage;
            }
            $q = "SELECT *FROM alunos where curso = '$curso' and nome like '%$busca%' order by emite desc";
            $Spagina = db::Spagina($q, 12, $page);
            if (isset($Spagina)) {
                extract($Spagina);
                $alunos = $itens;
                require "res/pagina.php";
                foreach ($alunos as $key => $value) {
                    require "res/aluno.php";
                }
            } else {
                echo "<h4>Nenhum</h4>";
            }
        } else {
            header("Location: /alunos");
        }
    }
}
