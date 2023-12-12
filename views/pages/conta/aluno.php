<?php

use App\Model\db;
extract($aluno);
$Nomec = ucwords(db::Scoluna("SELECT nome from cursos where href = '$curso'", "nome"));
?>
<section class="bg-dark text-secondary px-4 py-5 text-center h-100">
  <div class="py-5">
    <h1 class="display-5 fw-bold text-white"><i class="fa fa-user-circle-o"></i></h1>
    <div class="col-lg-6 mx-auto">
      <p class="fs-5 mb-4"><?php echo $nome ?></p>
      <small class="d-block mt-1"><b>Reside</b> <?php echo $resid ?></small>
      <small class="d-block mt-1"><b>Nacionalidade</b> <?php echo $nacionalidade ?></small>
      <small class="d-block mt-1"><b>Natural de</b> <?php echo $naturalidade ?></small>
      <small class="d-block mt-1"><b>Província de</b> <?php echo $provincia ?></small>
      <small class="d-block mt-1"><b>Data de nascimento</b> <?php echo date("d/m/Y", strtotime($nascimento)) ?></small>
      <small class="d-block mt-1"><b>Género</b> <?php echo $genero ?></small>
      <?php
      if ($Nomec != "") {
      ?>
        <small class="d-block"><b>Curso</b><a class="text-decoration-none w3-text-blue-grey" href="/curso/<?php echo $curso ?>"> <?php echo $Nomec; ?></a></small>
      <?php
      }
      ?>
      <p>Matriculado</p>
      <small class="d-block"><?php echo date("d/m/Y h:i", strtotime($emite)) ?></small>
      <form method="post" class=" mt-3 justify-content-sm-center container">
        <!-- <a href="#atualizar" class="btn btn-outline-success d-inline"><i class="fa fa-edit"></i>Editar</a> -->
        <a href="/imprimir/<?php echo $id ?>" target="_blank" class="btn btn-outline-info d-inline"><i class="fa fa-print"></i>Imprimir</a>
        <button name="btn_del" type="submit" class="btn btn-outline-danger d-inline"><i class="fa fa-trash"></i></button>
      </form>
    </div>
  </div>
</section>


<!-- Script -->
<script>
  $("#page_aluno").addClass("active");
  $("#page_aluno").attr("aria-current","page");
</script>
