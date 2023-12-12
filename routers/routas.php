<?php
//[a-zA-Z^]+  [a-z-^0-9]+
use App\core\routas;
use App\lib\session;

require 'lista.php';
routas::Inicializar();
// Admin
if (session::existe("xonline_adm")) {
    routas::addArray(admin());
    // Aluno
    routas::addArray(aluno());
    // -----------------
}

// -----------------

// Conta
// pública
if (session::existe("xonline_user")) {
    $tipo = session::get("xonline_user")["tipo"];
    routas::addArray(conta($tipo));
}else{
    routas::add("/criar-conta","conta","nova");
}
// -----------------

// curso
routas::addArray(curso());
// -----------------

// pacote
routas::addArray(pacote());
// -----------------


// Routas públicas
routas::add("/", "home", "index");
routas::add("/contactos", "home", "contactos");
routas::add("/sobre", "home", "sobre");

// Login
if (!session::existe("xonline_user")) {
    routas::add("/login", "home", "login");
}


// Retornado todas as rotas
return routas::getroutas();
