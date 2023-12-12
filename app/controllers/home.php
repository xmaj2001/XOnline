<?php

use App\lib\pagina;
use App\lib\session;
use App\lib\valida;
use App\Model\db;
use Respect\Validation\Validator;

class home extends pagina
{
    public static function index()
    {
        $site = db::Slinha("SELECT nome,logo,facebook,instagram,linkdin,simg,stitulo,sinfo from xonline where id = 1");
        $dados = [
            "site" => $site
        ];
        self::titulo($site["nome"]);
        self::logo($site["logo"]);
        self::header("navbar");
        self::conteudo("home");
        self::LoadLayout(null, $dados);
    }

    public static function contactos()
    {
        $site = db::Slinha("SELECT *from xonline where id = 1");
        $dados = [
            "site" => $site
        ];
        self::titulo("Contactos");
        self::logo($site["logo"]);
        self::header("navbar");
        self::conteudo("contactos");
        self::LoadLayout(null, $dados);
    }

    public static function sobre()
    {
        $site = db::Slinha("SELECT *from xonline where id = 1");
        $dados = [
            "site" => $site
        ];
        self::titulo("sobre");
        self::logo($site["logo"]);
        self::header("navbar");
        self::conteudo("sobre");
        self::LoadLayout(null, $dados);
    }

    public static function login()
    {
        $site = db::Slinha("SELECT *from xonline where id = 1");
        $erro = array();
        if (isset($_POST["btn_login"])) {
            db::remove("btn_login");
            db::validar_post();
            extract($_POST);
            $email = $cp1;
            $senha = $cp2;
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

            if (count($erro) == 0) {
                $senha = md5($cp2 . "_xmaj_11112022::-,,");
                $user = db::Slinha("SELECT * from x_conta where email = '$email' && senha = '$senha'");
                if (isset($user)) {
                    if($user["tipo"] > 2){
                        session::set("xonline_adm",$user);
                        header("Location: /perfil");
                    }else{
                        session::set("xonline_user",$user);
                        header("Location: /perfil");
                    }
                } else {
                    array_push($erro, "Usuário não encontrado verfica se o <b>Email</b> ou a <b>Senha</b> estão corretas.");
                }
            }
        }
        $dados = [
            "site" => $site,
            "erro" => $erro
        ];
        self::titulo("Login");
        self::logo($site["logo"]);
        self::header("navbar");
        self::conteudo("login");
        self::LoadLayout(null, $dados);
    }
  
}
