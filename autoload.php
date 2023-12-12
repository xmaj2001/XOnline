<?php
// Rigistrar todas as Class
spl_autoload_register(function ($class) {
    if (file_exists("app/controllers/" . $class . ".php")) {
        // Rigistrar todos os Controller
        require "app/controllers/" . $class . ".php";
    }
});
