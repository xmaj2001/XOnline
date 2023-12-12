<?php

use Michelf\Markdown;

extract($site);
$titulo = "X-MAJ";
if ($site["nome"] == "X Online") {
    $titulo = "<b>X</b> Online";
} else {
    $titulo = $site["nome"];
}

if ($site["simg"] == "") {
    $simg = "/assets/img/logo/" . $site["logo"];
} else {
    $simg = $site["simg"];
}
?>
<section class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?php echo $simg ?>" class="d-block mx-lg-auto img-fluid" alt="X Online" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $titulo ?></h1>
            <p class="lead">
            <?php echo Markdown::defaultTransform($sinfo) ?>
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="/cursos" class="btn btn-primary btn-lg px-4 me-md-2">Ver cursos</a>
                <a href="/contactos" class="btn btn-outline-secondary btn-lg px-4">Saber mais</a>
            </div>
        </div>
    </div>
</section>

<!-- Script -->
<script>
  $("#page_sobre").addClass("active");
  $("#page_sobre").attr("aria-current","page");
</script>