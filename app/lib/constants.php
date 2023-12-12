<?php

namespace App\lib;

class constants
{
   public static function init()
   {
      define("SITE", "http://".$_SERVER["HTTP_HOST"]."/");
      define("SITES", "https://".$_SERVER["HTTP_HOST"]."/");
      define("PASTA_CONTROLO", "app/controllers/");
      define("_Assets","/assets/");
      define("PASTA_ROUTAS", dirname(__FILE__, 3) . "/routers/routas.php");
      define("_Views", "views/");
      define("_layouts", "views/layouts/");
      define("_Pages", "views/pages/");
      define("_Footeres", "views/includes/footers/");
      define("_Headers", "views/includes/header/");
   }
}
