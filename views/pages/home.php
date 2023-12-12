<?php

use App\lib\session;
use Michelf\Markdown;

extract($site);
$titulo = "X-MAJ";
if($site["nome"] == "X Online"){
  $titulo = "<b>X</b> Online";
}else{
  $titulo = $site["nome"];
}

if($site["simg"] == ""){
  $simg = "/assets/img/logo/".$site["logo"];
}else{
  $simg = $site["simg"];
}
$sobre = Markdown::defaultTransform($sinfo);
?>

  <!-- Cabeça -->
  <header class="py-4">
    <div class="bg-dark text-white text-secondary px-4 py-5 w3-display-container">
      <div class="py-5 text-center">
        <h1 class="mb-5"><?php echo $nome ?></h1>

        <p class="lead">
          <?php
          if (session::existe("smcs")) {
          ?>
            <a href="/criar-conta" class="btn btn btn-outline-success bg-dark">Criar conta</a>
            <a href="/cursos" class="btn btn-info bg-dark text-info">Ver Cursos</a>
          <?php
          } else {
          ?>
            <a href="/login" class="btn btn btn-outline-success bg-dark">Entrar</a>
            <a href="/cursos" class="btn btn-info bg-dark text-info">Cursos</a>
          <?php
          }
          ?>
        </p>
      </div>

      <div class="mt-auto text-white-50 text-center">
        <small class=""><a href="https://wwww.facebook.com/<?php echo $facebook ?>" class="btn btn-outline-light"><i class="fa fa-facebook"></i></a></small>
        <small class=""><a href="https://www.instagram.com/<?php echo $instagram ?>" class="btn btn-outline-light"><i class="fa fa-instagram"></i></a></small>
        <small class=""><a href="https://www.linkdin.com/<?php echo $linkdin ?>" class="btn btn-outline-light"><i class="fa fa-linkedin"></i></a></small>
        <p class="mt-3"><a href="https://xmaj.epzy.com" class="text-white">X-MAJ</a></p>
      </div>
    </div>
  </header>

  <!-- Cursos -->
  <section class="container col-xxl-8 px-4 py-5">
    <h4 class="display-10 fw-bold lh-1 mb-3">Cursos <span class="lead">Disponível</span></h4>
    <div class="container" id="icon-grid">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="viewcursos">

      </div>
      <a href="/cursos/pagina/2" class="btn btn-outline-dark mt-3">
        Ver mais cursos
      </a>
    </div>
  </section>

  <!-- Sobre -->
  <section class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-12 col-sm-8 col-lg-6">
        <img src="<?php echo $simg ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="100%" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-8 fw-bold lh-1 mb-3"><?php echo $titulo ?></h1>
        <p class="lead">
          <?php echo $sobre ?>
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="/sobre" class="btn btn-primary btn-sm px-4 me-md-2">Mais detalhes</a>
          <a href="/criar-conta" class="btn btn-outline-secondary btn-sm px-4"><i class="fa fa-sign-in"></i> Criar uma conta</a>
        </div>
      </div>
    </div>
  </section>

<!-- Script -->
<script>
  $("#page_home").addClass("active");
  $("#page_home").attr("aria-current","page");
</script>
<script src="/assets/js/res/home.js"></script>