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

<section class="h-100">
  <div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="form-signin w-100 m-auto">
      <form method="post" class="w3-centered w3-center">
        <i class="fa fa-user text-center" style="font-size: 70px;"></i>
        <h4 class="h3 mb-3 fw-normal">Login</h4>
        <?php
        foreach ($erro as $key => $value) {
        ?>
          <p class="lead text-danger">
            <?php echo $value; ?>
          </p>
        <?php
        }
        ?>
        <div class="form-floating mb-3">
          <input type="email" class="form-control bg-dark w3-border-0 w3-border-bottom text-white" name="cp1" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control bg-dark w3-border-0 w3-border-bottom text-white" name="cp2" id="floatingPassword" placeholder="Senha">
          <label for="floatingPassword">Senha</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="btn_login">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; X-MAJ</p>
      </form>
    </div>
  </div>
</section>