<?php
extract($user);
?>
<section class="container">
  <div class="bg text-secondary px-4 py-5">
    <div class="py-5 container">
      <div class="py-2 text-center">
        <i class="fa fa-user fa-4x"></i>
        <h2>Perfil</h2>
        <p class="lead">Atualizar os dados</p>
        <?php
        foreach ($erro as $key => $value) {
        ?>
          <p class="lead text-danger">
            <?php echo $value; ?>
          </p>
        <?php
        }

        if ($success) {
        ?>
          <p class="lead text-success">
            Conta atualizada
          </p>
        <?php
        }

        ?>
      </div>
      <div class="container ">
        <form class="needs-validation" method="post">
          <div class="row justify-content-center">
            <div class="col-sm-6 form-floating">
              <input name="nome" autocomplete="off" type="text" class="form-control border-0 border-bottom" value="<?php echo $nome ?>" placeholder="Nome da conta" required>
              <label for="floating" class="mx-2">Nome</label>
            </div>
            <div class="col-sm-12"></div>
            <div class="col-sm-6 mt-3 form-floating">
              <input name="email" type="email" class="form-control border-0 border-bottom" value="<?php echo $email ?>" placeholder="email da conta" required>
              <label for="floating" class="mx-2">Email</label>
            </div>
            <hr class="my-4">
          </div>
          <div class="text-center">
            <button class="btn btn-success" name="btn_sv" type="submit">Salvar</button>
            <a href="/alterar/senha" class="btn btn-outline-dark"><i class="fa fa-lock"></i> Alterar Senha</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>