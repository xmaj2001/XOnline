<?php
require "vendor/autoload.php";
require "autoload.php";
use App\core\routaconfig;
use App\lib\constants;
use App\lib\session;
try {
    constants::init();
    session::init();
    routaconfig::start();
} catch (\Exception $th) {
   die($th->getMessage());
}

