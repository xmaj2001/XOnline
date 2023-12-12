<main class="container">
    <div class="bg text-secondary px-4 py-5">
        <div class="py-5 container">
            <div class="py-2 text-center">
                <h2>Editar pacote</h2>
                <p class="lead"><?php echo $pacote["nome"] ?></p>
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
                    <div class="form-floating">
                        <input type="text" class="form-control" name="nome" value="<?php echo $pacote["nome"] ?>" placeholder="Nome do pacote" minlength="2" maxlength="40" required>
                        <label for="nome" class="mx-2">Nome do pacote</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="text" class="form-control" name="valor" value="<?php echo $pacote["valor"] ?>" placeholder="0,00KZ"  maxlength="100">
                        <label for="valor" class="mx-2">Valor</label>
                    </div>
                    <textarea class="form-control my-3" placeholder="Fala um pouco sobre o pacote" name="sobre" rows="10"><?php echo $pacote["sobre"] ?></textarea>
                    <div class="d-inline">
                        <button class="btn text-center btn-dark mt-3" name="btn_sv">Salvar</button>
                        <a href="<?php echo "/curso/".$pacote["curso"]."/pacote/".$pacote["href"] ?>" class="btn text-center btn-outline-info mt-3" name="btn_sv">Ver</a>
                        <button class="btn text-center btn-outline-danger mt-3" name="btn_del"><i class="fa fa-trash"></i></button>
                    </div>
                    <hr class="my-4">
                </form>
            </div>
        </div>
    </div>
</main>