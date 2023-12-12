<main class="container">
    <div class="bg text-secondary px-4 py-5">
        <div class="py-5 container">
            <div class="py-2 text-center">
                <h2>Registrar Pacote</h2>
                <p class="lead">Página de registro de pacotes</p>
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
            <div class="container">
                <form action="" method="post" class="row">
                    <input type="text" class="form-control" name="nome" placeholder="Nome do pacote" minlength="2" maxlength="40" required>
                    <input type="text" class="form-control my-3" name="valor" placeholder="Valor do pacote" maxlength="100">
                    <textarea class="form-control my-3" placeholder="Fala um pouco sobre o pacote" name="sobre" rows="10" maxlength="300" ></textarea>
                    <button class="btn text-center btn-dark mt-3" name="btn_add">Registrar</button>
                    <hr class="my-4">
                </form>
            </div>
        </div>
    </div>
</main>