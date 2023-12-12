<section class="container">
  <div class="bg text-secondary px-4 py-5">
    <div class="py-5 container">
      <div class="py-2 text-center">
        <h2>Matrícular-se</h2>
        <p class="lead">Página de matrícula de aluno</p>
      </div>
      <div class="container">
        <form class="needs-validation row" method="post">

          <div class="col-sm-12 mt-3 form-floating">
            <input name="cp1" type="text" class="form-control" placeholder="Nome do aluno" required>
            <label for="floating" class="mx-2">Nome do aluno</label>
          </div>

          <div class="col-12 col-md-6 col-lg-6 mt-3">
            <label for="username" class="form-label">Residência</label>
            <div class="input-group has-validation">
              <span class="input-group-text">🏚</span>
              <input name="cp4" type="text" class="form-control" required>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-6 mt-3">
            <label for="text" class="form-label"> Nacionalidade</label>
            <div class="input-group has-validation">
              <span class="input-group-text">🏳</span>
              <input name="cp5" type="text" class="form-control" require>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg-4 mt-3">
            <label for="text" class="form-label">Natural de</label>
            <input name="cp6" type="text" class="form-control" require>
          </div>

          <div class="col-12 col-md-4 col-lg-4 mt-3">
            <label for="text" class="form-label">Província de</label>
            <input name="cp7" type="text" class="form-control" require>
          </div>

          <div class="col-12 col-md-4 col-lg-4 mt-3">
            <label for="date" class="form-label">Data de Nascimento</label>
            <input name="cp8" type="date" class="form-control" require>
          </div>

          <div class="col-12 col-md-4 col-lg-4 mt-3">
            <label for="Genero" class="form-label">Género</label>
            <select name="cp9" class="form-select" required>
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
            </select>
          </div>

          <hr class="my-4">

          <div class="col-12 col-md-5 col-lg-5 mt-3">
            <label for="Curso" class="form-label">Curso</label>
            <select name="cp10" id="curso" class="form-select" required>
              <option>Nenhum</option>
              <?php
              foreach ($cursos as $key => $value) {
              ?>
                <option value="<?php echo $value["href"] ?>"><?php echo $value["nome"] ?></option>
              <?php
              }
              ?>
            </select>

          </div>

          <div class="col-sm-2 my-3">
            <label for="Classe" class="form-label">Classe</label>
            <select name="cp11" id="classe" class="form-select" required>
              <?php
              for ($i = 1; $i <= 13; $i++) {
                $nomede = "mede";
                if ($i < 10) {
                  $nomede = "nomede";
                }
              ?>
                <option class="<?php echo $nomede ?>" value="<?php echo $i ?>"><?php echo $i ?>ª</option>
              <?php
              }
              ?>
            </select>
          </div>

          <div class="col-sm-2 my-3">
            <label for="Turno" class="form-label">Turno</label>
            <select name="cp12" class="form-select" id="Turno" required>
              <option value="Manhã">Manhã</option>
              <option value="Tarde">Tarde</option>
              <option value="Noite">Noite</option>
            </select>
          </div>

          <div class="col-sm-2 my-3">
            <label for="Sala" class="form-label">Sala</label>
            <select name="cp13" class="form-select" id="Sala" required>
            <?php
              for ($i = 1; $i <= 50; $i++) {
              ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          
          <hr class="my-4">
          <button class="btn btn-dark" name="btn_add" type="submit">Matrícular</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  $(".mede").hide();
  $("#curso").change(function() {
    if ($(this).val() != 0) {
      $("#classe").val(10);
      $(".nomede").hide();
      $(".mede").show();
    } else {
      $(".nomede").show();
      $(".mede").hide();
      $("#classe").val(1);
    }
  });
</script>