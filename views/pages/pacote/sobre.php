<?php

use App\lib\session;
use App\Model\db;
use Michelf\Markdown;

extract($pacote);
$alunos = "Sem alunos cursando";
$total = 0;
$total = db::Numlinhas("SELECT id from cursar where curso = '$curso' and pacote='$href'");

$ncurso = db::Scoluna("SELECT nome from cursos where href = '$curso'", "nome");
if ($total >= 1) {
    $alunos = "Cursado por " . $total . " alunos";
}
if ($valor == 0 || empty($valor)) {
    $info = "Gratúito";
} else {
    $info = "Valor <b>" . $valor . ",00" . $site["moeda"] . "</b>";
}
?>

<header class="bg-dark text-secondary px-4 py-5 w3-display-container">
    <div class="py-5">
        <h5 class="display-8 fw-bold text-white text-center"><b class="lead">Curso</b><a href="/curso/<?php echo $curso ?>" class="text-white mx-1 text-decoration-none"><?php echo $ncurso ?></a></h5>
        <small class="d-block text-center">Pacote</small>
        <h1 class="display-5 fw-bold text-white text-center"><?php echo $nome ?></h1>
        <div class="col-lg-6 mx-auto">
            <small class="d-block mb-4 text-center lead"><?php echo $alunos; ?></small>
            <small class="d-block text-center"><?php echo $info ?></small>

            <?php
            if (session::existe("xonline_admin")) {
            ?>
                <div class="d-sm-flex justify-content-sm-center text-center container my-3">
                    <a href="/editar/pacote/<?php echo $href ?>/do/curso/<?php echo $curso ?>" type="button" class="btn btn-outline-info  me-sm-2 fw-bold"><i class="fa fa-edit"></i></a>
                </div>
            <?php
            }
            ?>

            <?php
            if (session::existe("xonline_user") && session::get("xonline_user")["tipo"] == 2) {
                $id = session::get("xonline_user")["id"];
                $cursando = db::Numlinhas("SELECT id from cursar where curso = '$curso' and pacote='$href' and conta ='$id'");
                if ($cursando == 1) {
            ?>
                    <div class="justify-content-sm-center text-center container my-3">
                        <small class="d-block lead">Já estas a cursar</small> <br>
                        <a href="/parar-de/cursar/pacote/<?php echo $href ?>/do/curso/<?php echo $curso ?>" type="button" class="btn btn-outline-danger  me-sm-2 lead"><i class="fa fa-trash"></i> Deixar</a>
                    </div>
                <?php
                } else {

                ?>
                    <div class="d-sm-flex justify-content-sm-center text-center container my-3">
                        <a href="/cursar/pacote/<?php echo $href ?>/do/curso/<?php echo $curso ?>" type="button" class="btn btn-outline-info  me-sm-2 lead"><i class="fa fa-plus"></i> Cursar</a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</header>

<section class="container px-4 py-2">
    <p class="fs-5 mb-4"><?php echo Markdown::defaultTransform($sobre); ?></p>
</section>

<script>
    $("#page_cursos").addClass("active");
    $("#page_cursos").attr("aria-current", "page");
</script>