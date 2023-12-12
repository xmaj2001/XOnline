<style>
    html,
    body {
        height: 100%;
    }


    .form-signin {
        max-width: 330px;
        padding: 15px;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
        background-color: red;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
<?php

use App\Model\db;

extract($user);
$cd = db::Numlinhas("SELECT id from cursos");
$aluno = "/matricular-se";
if($tipo == 2){
    $aluno = "/perfil-do/aluno"; 
}
?>
<main class="h-100">
    <div class="bg-dark text-secondary px-4 py-5 text-center">

        <div class="py-5">
            <h2 class="display-7 fw-bold py-5"><?php echo $nome ?></h2>
            <div class="mx-auto">
                <small class="d-block mb-4">Email <b><?php echo $email ?></b></small>
                <small class="d-block mb-4">Cursos disponives <b><?php echo $cd ?></b></small>
                <small class="d-block mb-4">Aluno</small>
                <div class="mt-auto text-white-50 text-center">
                    <small class=""><a href="/editar/perfil" class="btn btn-outline-light"><i class="fa fa-edit"></i></a></small>
                    <small class=""><a href="<?php echo $aluno ?>" class="btn btn-outline-info"><i class="fa fa-user"></i></a></small>
                    <small class=""><a class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></small>
                    <p class="mt-3"><a href="/sair" class="btn btn-outline-light"><i class="fa fa-sign-out"></i>Terminar sessão</a></p>
                </div>
            </div>
        </div>
    </div>
</main>