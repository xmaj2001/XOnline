<?php

use App\lib\pagina;
use App\lib\session;
use App\lib\valida;
use App\Model\db;
use App\Model\where;
use Respect\Validation\Validator;

class conta extends pagina
{
    public static function index()
    {
        $site = db::Slinha("SELECT nome,logo,facebook,instagram,linkdin,simg,stitulo,sinfo from xonline where id = 1");
        $user = session::get("xonline_user");
        $dados = [
            "site" => $site,
            "user" => $user
        ];
        self::titulo($site["nome"]);
        self::logo($site["logo"]);
        self::header("navbar");
        self::conteudo("conta/home");
        self::LoadLayout(null, $dados);
    }
    public static function nova()
    {
        $success = false;
        $erro = array();
        if (isset($_POST["btn_add"])) {
            db::validar_post();
            extract($_POST);
            // Validar Campo Nome
            if (!Validator::notEmpty()->validate($nome)) {
                array_push($erro, "O campo <b>nome</b> não pode ser vazia.");
            }
            if (valida::char_num_in($nome)) {
                array_push($erro, "O campo <b>nome</b> não pode ter numero.");
            }

            if (valida::char_in($nome)) {
                array_push($erro, "O campo <b>nome</b> não pode ter carateres especiais como () + - : | / & % ?.");
            }

            // Validar Campo Email
            if (!Validator::notEmpty()->validate($email)) {
                array_push($erro, "O campo <b>Email</b> não pode ser vazia.");
            }

            if (!Validator::email()->validate($email)) {
                array_push($erro, "O valor no campo <b>Email</b> não é email.");
            }

            // Validar Campo Senha
            if (!Validator::notEmpty()->validate($senha)) {
                array_push($erro, "O campo <b>Senha</b> não pode ser vazia.");
            }
            $igual = db::Numlinhas("SELECT * from x_conta where email = '$email'");
            // Validar Conta
            if ($igual > 0) {
                array_push($erro, "Já foi criada uma conta com este email <b>$email</b> tenta outro Email.");
            }
            if (count($erro) == 0) {
                $_POST["senha"] = md5($senha . "_xmaj_11112022::-,,");
                $id = db::Rid("x_conta");
                $user = db::Slinha("SELECT *from x_conta where id = $id");
                session::set("xonline_user", $user);
                header("Location:/perfil");
                $success = true;
            }
        }
        $site = db::Slinha("SELECT nome,logo,facebook,instagram,linkdin,simg,stitulo,sinfo from xonline where id = 1");
        $dados = [
            "site" => $site,
            "erro" => $erro,
            "success" => $success
        ];
        self::titulo("Criar uma conta");
        self::logo($site["logo"]);
        self::header("navbar");
        self::conteudo("conta/nova");
        self::LoadLayout(null, $dados);
    }
    public static function matricular()
    {
        $us = session::get("xonline_user");
        $id = $us["id"];
        $success = false;
        $erro = array();
        if (isset($_POST["btn_add"])) {
            db::validar_post();
            $_POST["nome"]  = $_POST["cp1"];
            unset($_POST["cp1"]);
            // ----------------------
            $_POST["resid"]  = $_POST["cp4"];
            unset($_POST["cp4"]);
            // ----------------------
            $_POST["nacionalidade"]  = $_POST["cp5"];
            unset($_POST["cp5"]);
            // ----------------------
            $_POST["naturalidade"]  = $_POST["cp6"];
            unset($_POST["cp6"]);
            // ----------------------
            $_POST["provincia"]  = $_POST["cp7"];
            unset($_POST["cp7"]);
            // ----------------------
            $_POST["nascimento"]  = $_POST["cp8"];
            unset($_POST["cp8"]);
            // ----------------------
            $_POST["genero"]  = $_POST["cp9"];
            unset($_POST["cp9"]);
            // ----------------------
            $_POST["usuario"]  = $id;
            db::Registrar("alunos");
            db::Atualiza("x_conta", where::id($id),["tipo"=>2]);
            $user = db::Slinha("SELECT *from x_conta where id = $id");
            session::set("xonline_user", $user);
            header("Location: /perfil-do/aluno");
        }
        $site = db::Slinha("SELECT nome,logo,facebook,instagram,linkdin,simg,stitulo,sinfo from xonline where id = 1");
        $dados = [
            "cursos" => db::SELECIONA("SELECT nome,href FROM cursos order by nome"),
            "site" => $site,
            "erro" => $erro,
            "success" => $success
        ];
        self::titulo("Matrícular-se");
        self::logo($site["logo"]);
        self::header("navbar");
        self::conteudo("aluno/matricular_se");
        self::LoadLayout(null, $dados);
    }
    public static function editar()
    {
        $us = session::get("xonline_user");
        $id = $us["id"];
        $success = false;
        $erro = array();
        if (isset($_POST["btn_sv"])) {
            db::validar_post();
            extract($_POST);
            // Validar Campo Nome
            if (!Validator::notEmpty()->validate($nome)) {
                array_push($erro, "O campo <b>nome</b> não pode ser vazia.");
            }
            if (valida::char_num_in($nome)) {
                array_push($erro, "O campo <b>nome</b> não pode ter numero.");
            }

            if (valida::char_in($nome)) {
                array_push($erro, "O campo <b>nome</b> não pode ter carateres especiais como () + - : | / & % ?.");
            }

            // Validar Campo Email
            if (!Validator::notEmpty()->validate($email)) {
                array_push($erro, "O campo <b>Email</b> não pode ser vazia.");
            }

            if (!Validator::email()->validate($email)) {
                array_push($erro, "O valor no campo <b>Email</b> não é email.");
            }
            $igual = db::Numlinhas("SELECT * from x_conta where email = '$email'");
            // Validar Conta
            if ($igual > 0) {
                array_push($erro, "Já foi criada uma conta com este email <b>$email</b> tenta outro Email.");
            }
            if (count($erro) == 0) {
                db::Atualiza("x_conta", where::id($us["id"]));
                $user = db::Slinha("SELECT *from x_conta where id = $id");
                session::set("xonline_user", $user);
                $success = true;
            }
        }
        $site = db::Slinha("SELECT nome,logo,facebook,instagram,linkdin,simg,stitulo,sinfo from xonline where id = 1");
        $id = $us["id"];
        $user = session::get("xonline_user");
        $dados = [
            "site" => $site,
            "user" => $user,
            "erro" => $erro,
            "success" => $success
        ];
        self::titulo("Editar Perfil");
        self::logo($site["logo"]);
        self::header("navbar");
        self::conteudo("conta/editar");
        self::LoadLayout(null, $dados);
    }
    public static function senha()
    {
        $us = session::get("xonline_user");
        $id = $us["id"];
        $success = false;
        $erro = array();
        if (isset($_POST["btn_sv"])) {
            db::validar_post();
            extract($_POST);

            // Validar Campo Senha
            if (!Validator::notEmpty()->validate($cp1)) {
                array_push($erro, "O campo <b>Senha atual</b> não pode ser vazia.");
            }
            if (!Validator::notEmpty()->validate($cp2)) {
                array_push($erro, "O campo <b>Nova senha</b> não pode ser vazia.");
            }

            if (count($erro) == 0) {
                $senha_atual = md5($cp1 . "_xmaj_11112022::-,,");
                $senha = md5($cp2 . "_xmaj_11112022::-,,");
                if ($senha_atual == $us["senha"]) {
                    $_POST["senha"] = $senha;

                    unset($_POST["cp1"]);
                    unset($_POST["cp2"]);

                    db::Atualiza("x_conta", where::id($id));
                    $user = db::Slinha("SELECT *from x_conta where id = $id");
                    session::set("xonline_user", $user);
                    $success = true;
                } else {
                    array_push($erro, "O Senha <b>Errada</b>");
                }
            }
        }
        $site = db::Slinha("SELECT nome,logo,facebook,instagram,linkdin,simg,stitulo,sinfo from xonline where id = 1");

        $user = session::get("xonline_user");
        $dados = [
            "site" => $site,
            "user" => $user,
            "erro" => $erro,
            "success" => $success
        ];
        self::titulo("Alterar Senha");
        self::logo($site["logo"]);
        self::header("navbar");
        self::conteudo("conta/senha");
        self::LoadLayout(null, $dados);
    }

    public static function aluno()
    {
        $us = session::get("xonline_user");
        $id = $us["id"];
        $aluno = db::Slinha("SELECT *FROM alunos where usuario = '$id'");
        if (!isset($aluno)) {
            header("Location: /perfil");
        }
        $site = db::Slinha("SELECT nome,logo,facebook,instagram,linkdin,simg,stitulo,sinfo from xonline where id = 1");
        $user = session::get("xonline_user");
        $dados = [
            "site" => $site,
            "aluno" => $aluno,
            "user" => $user
        ];
        self::titulo($aluno["nome"]);
        self::logo($site["logo"]);
        self::header("navbar");
        self::conteudo("conta/aluno");
        self::LoadLayout(null, $dados);
    }

    public static function sair()
    {
        session::deletar("xonline_user");
        header("Location: /");
    }
}
