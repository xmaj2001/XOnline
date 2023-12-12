<?php

function admin()
{
    return [
        "/admin" => "home@index",
        "/sair" => "conta@sair"
    ];
}

function conta($tipo)
{
    if($tipo == 1){
        return [
            "/perfil" => "conta@index",
            "/editar/perfil" => "conta@editar",
            "/alterar/senha" => "conta@senha",
            "/matricular-se" => "conta@matricular",
            "/sair" => "conta@sair"
        ];
    }else if($tipo == 2){
        return [
            "/perfil" => "conta@index",
            "/cursar/curso/".href => "curso@cursar",
            "/parar-de/cursar/curso/".href => "curso@cursar_del",
            "/cursar/pacote/".href."/do/curso/".href => "curso@cursar",
            "/parar-de/cursar/pacote/".href."/do/curso/".href => "curso@cursar_del",
            "/editar/perfil" => "conta@editar",
            "/perfil-do/aluno" => "conta@index",
            "/editar/perfil-do/aluno" => "conta@editar_aluno",
            "/alterar/senha" => "conta@senha",
            "/perfil-do/aluno" => "conta@aluno",
            "/sair" => "conta@sair"
        ];
    }
    
}

function curso()
{
    return [
        "/curso/".href => "curso@detalhes",
        "/cursos" => "curso@index",
        "/cursos/pagina/".numerico => "curso@index",
        "/ajax_cursos" => "curso@ajax_cursos"
        
    ];
}


function pacote()
{
    return [
        "/pacote/".href."/do/curso/".href => "pacote@detalhes",
        "/editar/pacote/".href."/do/curso/".href => "pacote@editar",
        "/apagar/pacote/".href."/do/curso/".href => "pacote@del",
        "/ajax_pacotes" => "pacote@ajax_pacotes"
    ];
}

function aluno()
{
    return [
        "/alunos/cursando/".href => "aluno@cursando",
        "/ajax_alunos_cursando" => "aluno@ajax_alunos_cursando",
    ];
}