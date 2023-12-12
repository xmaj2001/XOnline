<?php

namespace App\lib;

class pagina
{
    private static $Page_titulo = "Keymaster X-MAJ";
    public static function titulo($valor)
    {
        self::$Page_titulo = $valor;
    }
    private static $Page_author = "X-MAJ,Hunter Keymura";
    public static function author($valor)
    {
        self::$Page_author = $valor;
    }
    private static $Page_keywords = "";
    public static function keywords($valor)
    {
        self::$Page_keywords = $valor;
    }
    private static $Page_image = "";
    public static function image($valor)
    {
        self::$Page_image = $valor;
    }
    private static $Page_description = "Keymaster FrameWork";
    public static function description($valor)
    {
        self::$Page_description = $valor;
    }
    private static $Page_card = "";
    public static function card($valor)
    {
        self::$Page_card = $valor;
    }
    private static $Page_url = "";
    public static function url($valor)
    {
        self::$Page_url = $valor;
    }
    private static $Page_logo =  SITE . "/assets/img/logo/logo.png";
    public static function logo($valor = "logo.png")
    {
        self::$Page_logo =  SITE . "/assets/img/logo/" . $valor;
    }
    /**
     * * @param string $header header da página
     */
    private static $Page_header = "";
    public static function header($valor = "")
    {
        self::$Page_header = $valor;
    }
    /**
     * * @param string $conteudo conteudo da página
     */
    private static $Page_conteudo = null;
    public static function conteudo($valor = "home")
    {
        self::$Page_conteudo = $valor;
    }
    /**
     * * @param string $footer Footer da página
     */
    private static $Page_footer = "";
    public static function footer($valor = "")
    {
        self::$Page_footer = $valor;
    }
    public static function LoadLayout($layout = null, $dados= null)
    {
        if ($layout == null) {
            $layout = "layout";
        }
        if (file_exists(_layouts . $layout . ".php")) {
            require _layouts . $layout . ".php";
        } else {
            $file = _layouts . $layout . ".php";
            require "inc/erro_file.php";
            die("Se o erro continuar fala com X-MAJ ou HUNTER KEYMURA");
        }
    }
    public static function is_ajax()
    {
        return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
    }
}
