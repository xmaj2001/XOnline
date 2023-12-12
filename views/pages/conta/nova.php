<section class="container">
  <div class="bg text-secondary px-4 py-5">
    <div class="py-5 container">
      <div class="py-2 text-center">
        <i class="fa fa-user fa-4x"></i>
        <h2>Criar Conta</h2>
        <p class="lead">Insira os dados</p>
        <?php
        foreach ($erro as $key => $value) {
        ?>
          <p class="lead text-danger">
            <?php echo $value; ?>
          </p>
        <?php
        }

        ?>
      </div>
      <div class="container ">
        <form class="needs-validation" method="post">
          <div class="row justify-content-center">
            <div class="col-sm-6 form-floating">
              <input name="nome" autocomplete="off" type="text" class="form-control border-0 border-bottom"  placeholder="Nome da conta" required>
              <label for="floating" class="mx-2">Nome</label>
            </div>
            <div class="col-sm-12"></div>
            <div class="col-sm-6 mt-3 form-floating">
              <input name="email" type="email" class="form-control border-0 border-bottom" placeholder="email da conta" required>
              <label for="floating" class="mx-2">Email</label>
            </div>
            <div class="col-sm-6 mt-3 form-floating">
              <input name="senha" type="password" class="form-control border-0 border-bottom" placeholder="Senha da conta" required>
              <label for="floating" class="mx-2">Senha</label>
            </div>
            <hr class="my-4">
          </div>
          <div class="text-center">
            <button class="btn btn-success" name="btn_add" type="submit">Criar conta</button>
            <a href="/login" class="btn btn-outline-dark"><i class="fa fa-sign-in"></i> Já tens uma conta?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>