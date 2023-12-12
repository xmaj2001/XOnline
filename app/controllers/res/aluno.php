<div class="col-6 col-sm-6 col-md-3 card shadow-sm" style="margin-top: 10px;">
    <a href="/aluno/<?php echo $value["id"] ?>" class="btn btn-dark p-5 text-center">
        <i class="fa fa-user-circle fa-4x w3-text-blue text-center"></i>
        <?php
        if ($value["classe"] > 9) {
        ?>
            <span class="d-block"><?php echo ucwords($value["curso"]) ?></span>
            <!-- <span class="d-block"><?php echo $value["classe"] ?>ª</span> -->
        <?php
        } else {
        ?>
            <!-- <span class="d-block">Classe: <?php echo $value["classe"] ?>ª</span> -->
        <?php
        }
        ?>
    </a>
    <div class="card-body">
        <p class="card-text"><?php echo $value["nome"] ?></p>
    </div>
</div>