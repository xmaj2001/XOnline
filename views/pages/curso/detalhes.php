<?php

use App\lib\session;
use App\Model\db;
use Michelf\Markdown;

extract($curso);
?>
<header class="h-100">
    <!-- ----------------------------------------------- -->
    <div class="bg-dark text-secondary px-4 py-5 w3-display-container">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white text-center"><?php echo $nome ?></h1>
            <div class="col-lg-6 mx-auto">
                <small class="d-block mb-2 text-center lead"><?php echo $alunos; ?></small>
                <?php
                if (session::existe("xonline_adm")) {
                ?>
                    <div class="d-sm-flex justify-content-sm-center text-center container my-3">
                        <a href="/editar/curso/<?php echo $href ?>" type="button" class="btn btn-outline-info  me-sm-2 fw-bold"><i class="fa fa-edit"></i></a>
                        <a href="/adicionar/pacote/do/curso/<?php echo $href ?>" type="button" class="btn btn-outline-success me-sm-2 fw-bold"><i class="fa fa-plus"></i></a>
                    </div>
                <?php
                }
                ?>

                <?php
                if (session::existe("xonline_user") && session::get("xonline_user")["tipo"] == 2 && !$pacote) {
                    $id = session::get("xonline_user")["id"];
                    $cursando = db::Numlinhas("SELECT id from cursar where curso = '$href' and conta ='$id'");
                    if ($cursando == 1) {
                ?>
                        <div class="justify-content-sm-center text-center container my-3">
                            <small class="d-block lead">Já estas a cursar</small> <br>
                            <a href="/parar-de/cursar/curso/<?php echo $href ?>" type="button" class="btn btn-outline-danger  me-sm-2 lead"><i class="fa fa-trash"></i> Deixar</a>
                        </div>
                    <?php
                    } else {

                    ?>
                        <div class="d-sm-flex justify-content-sm-center text-center container my-3">
                            <a href="/cursar/curso/<?php echo $href ?>" type="button" class="btn btn-outline-info  me-sm-2 lead"><i class="fa fa-plus"></i> Cursar</a>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- =================================== -->

    <!-- Sobre curso -->
    <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item w3-border-0 ">
                    <h4 class="accordion-header w3-border-0" id="headingOne">
                        <button class="accordion-button bg-dark text-white " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Sobre o curso
                        </button>
                    </h4>
                    <div id="collapseOne" class="accordion-collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body px-5">
                            <p class="fs-5 mb-4"><?php echo Markdown::defaultTransform($sobre); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =================================0 -->
</header>

<!-- Pacotes -->
<section>
    <div class="container mt-3" id="icon-grid">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="viewpacotes">

        </div>
    </div>
</section>

<!-- Scripts -->
<script>
    $("#page_cursos").addClass("active");
    $("#page_cursos").attr("aria-current", "page");
</script>
<script>
    $.ajax({
        method: "POST",
        url: "/ajax_pacotes",
        data: {
            curso: "<?php echo $href ?>",
            buscarc: ""
        },
        success: function(Resultado) {
            $("#viewpacotes").html(Resultado);
        }
    });
    $("#pesqc").keyup(function() {
        $.ajax({
            method: "POST",
            url: "/ajax_pacotes",
            data: {
                curso: "<?php echo $href ?>",
                buscarc: $(this).val()
            },
            success: function(Resultado) {
                $("#viewpacotes").html(Resultado);
            }
        });
    });
</script>