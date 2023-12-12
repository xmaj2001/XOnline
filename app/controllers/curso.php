<?php

use App\lib\pagina;
use App\lib\session;
use App\lib\valida;
use App\Model\db;
use App\Model\where;

class curso extends pagina
{
    public static function index($rota)
    {
        $page = 1;
        $paginas = null;
        if (isset($rota["pagina"]) && $rota["pagina"] != 0) {
            $page = $rota["pagina"];
        }
        $paginas = db::Spagina("SELECT *FROM cursos order by emite desc", 9, $page);
        if ($paginas != null) {
            if ($page > $paginas["paginas"]) {
                header("Location: /cursos/pagina/" . $paginas["paginas"]);
            }
        }
        $site = db::Slinha("SELECT *from xonline where id = 1");

        $dados = [
            "site" => $site,
            "total" => db::Numlinhas("SELECT id from cursos"),
            "page" => $paginas
        ];
        self::titulo("Cursos");
        self::logo($site["logo"]);
        self::header("navbar");
        self::conteudo("curso/home");
        self::LoadLayout(null, $dados);
    }
    public static function detalhes($rota)
    {
        $href = $rota["curso"];
        db::validar_post();
        $curso = db::Slinha("SELECT *FROM cursos where href= '$href'");
        if (!isset($curso)) {
            header("Location: /cursos");
        }
        // SELEÇÃO NA BASE DE DADOS
        $site = db::Slinha("SELECT *from xonline where id = 1");
        $total_alunos = db::Numlinhas("SELECT id from cursar where curso = '$href'");
        $pacotes = db::Numlinhas("SELECT id from pacotes where curso = '$href'");
        // Predifinição de valores padrão
        $alunos = "Sem alunos cursando";
        $pacote = false;
        $info = "";
        if ($total_alunos >= 1) {
            if (session::existe("xonline_adm")) {
                if ($pacotes > 0) {
                    $salunos = db::SELECIONA("SELECT aluno from cursar where curso = '$href'");
                    $numl = array();
                    foreach ($salunos as $key => $value) {
                        if (!in_array($value["aluno"], $numl)) {
                            array_push($numl, $value["aluno"]);
                        }
                    }
                    $alunos = "Cursado por " . count($numl) . " <a class='text-decoration-none text-success' href='/alunos/cursando/$href'><i class='fa fa-users'></i> alunos</a>";
                }else{

                    $alunos = "Cursado por " . $total_alunos . " <a class='text-decoration-none text-success' href='/alunos/cursando/$href'><i class='fa fa-users'></i> alunos</a>";
                }
            } else {

                if ($pacotes > 0) {
                    $salunos = db::SELECIONA("SELECT aluno from cursar where curso = '$href'");
                    $numl = array();
                    foreach ($salunos as $key => $value) {
                        if (!in_array($value["aluno"], $numl)) {
                            array_push($numl, $value["aluno"]);
                        }
                    }
                    $alunos = "Cursado por " . count($numl) . " <a class='text-decoration-none text-success'><i class='fa fa-users'></i> alunos</a>";
                }else{
                    $alunos = "Cursado por " . $total_alunos . " <a class='text-decoration-none text-success'><i class='fa fa-users'></i> alunos</a>";
                }
            }
        }
        
        if ($pacotes > 0) {
            // $info = "Este curso é dividido por $pacotes pacotes";
            $pacote = true;
        } else if ($curso["valor"] == 0 || empty($curso["valor"])) {
            $info = "Gratúito";
        } else {
            $info = "Valor <b>" . $curso["valor"] . ",00" . $site["moeda"] . "</b>";
        }
        $dados = [
            "site" => $site,
            "curso" => $curso,
            "alunos" => $alunos,
            "info" => $info,
            "pacote" => $pacote
        ];
        self::titulo($curso["nome"]);
        self::logo($site["logo"]);
        self::header("navbar");
        self::conteudo("curso/detalhes");
        self::LoadLayout(null, $dados);
    }

    public static function cursar($rota)
    {
        $us = session::get("xonline_user");
        $id = $us["id"];
        $aluno = db::Scoluna("SELECT id FROM alunos where usuario = '$id'", "id");
        if (!isset($aluno)) {
            header("Location: /perfil");
        }

        $curso = $rota["curso"];
        $Ocurso = db::Slinha("SELECT *FROM cursos where href= '$curso'");
        if (!isset($Ocurso)) {
            header("Location: /cursos");
        }
        $sq = "SELECT *FROM cursar where curso = '$curso' and aluno = '$aluno'";
        if (isset($rota["pacote"])) {
            $pacote = $rota["pacote"];
            $sq = "SELECT *FROM cursar where pacote = '$pacote' and curso = '$curso' and aluno = '$aluno'";
        }

        // Confirmar se já existe
        $h = "Location: /curso/" . $curso;
        if (isset($rota["pacote"])) {
            $pacote = $rota["pacote"];
            $h = "Location: /pacote/$pacote/do/curso/" . $curso;
        }
        if (db::Numlinhas($sq) == 0) {
            $cursar["conta"] = $us["id"];
            $cursar["aluno"] = $aluno;
            $cursar["curso"] = $curso;
            $cursar["pacote"] = $pacote;
            db::Registrar("cursar", $cursar);
        }

        header($h);
    }

    public static function cursar_del($rota)
    {
        $us = session::get("xonline_user");
        $id = $us["id"];
        $aluno = db::Scoluna("SELECT id FROM alunos where usuario = '$id'", "id");
        if (!isset($aluno)) {
            header("Location: /perfil");
        }

        $curso = $rota["curso"];
        $Ocurso = db::Slinha("SELECT *FROM cursos where href= '$curso'");
        if (!isset($Ocurso)) {
            header("Location: /cursos");
        }
        $sq = "SELECT *FROM cursar where curso = '$curso' and aluno = '$aluno'";
        if (isset($rota["pacote"])) {
            $pacote = $rota["pacote"];
            $sq = "SELECT *FROM cursar where pacote = '$pacote' and curso = '$curso' and aluno = '$aluno'";
        }

        // Confirmar se já existe
        $h = "Location: /curso/" . $curso;
        if (isset($rota["pacote"])) {
            $pacote = $rota["pacote"];
            $h = "Location: /pacote/$pacote/do/curso/" . $curso;
        }
        if (db::Numlinhas($sq) >= 1) {
            $idc = db::Scoluna($sq, "id");
            db::Deletar("cursar", where::id($idc));
        }

        header($h);
    }
    public static function ajax_cursos()
    {
        if (self::is_ajax()) {
            if (isset($_POST["buscarc"])) {
                db::validar_post();
                $busca = valida::char_not($_POST["buscarc"]);
                $iv = 9;
                $pg = valida::char_not($_POST["page"]);
                $dados = db::Spagina("SELECT *FROM cursos where nome like '%$busca%' order by emite desc", $iv, $pg);
                if ($dados != null) {
                    $cursos = $dados["itens"];
                    foreach ($cursos as $key => $value) {
                        require "res/curso.php";
                    }
                }
            }
        } else {
            header("Location: /cursos");
        }
    }
}
