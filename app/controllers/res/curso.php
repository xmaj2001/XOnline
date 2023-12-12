<?php

use App\lib\session;
use App\Model\db;
use Michelf\Markdown;

$moeda = db::Scoluna("SELECT moeda from xonline where id = 1", "moeda");
$href = $value["href"];
$pacotes = db::Numlinhas("SELECT id from pacotes where curso ='$href'");

if ($pacotes > 0) {
    $info = "Este curso é dividido por $pacotes pacotes";
} else if ($value["valor"] == 0 || empty($value["valor"])) {
    $info = "Gratúito";
} else {
    $info = "Valor <b>" . $value["valor"] . ",00" . $moeda. "</b>";
}

$texto = "";


// $pp = "";
// if (strlen($value["sobre"]) >= 50) {
//     $pp = "...";
// }

// $sobre = Markdown::defaultTransform(substr($value["sobre"], 0, 50) . $pp);
?>
<div class="col">
    <div class="card shadow-sm">
        <div class="bd-placeholder-img card-img-top w3-display-container bg-dark" style="height: 225px; width: 100%;">
            <h4 style="color: #eceeef;" class="w3-display-middle"><?php echo $value["nome"] ?></h4>
        </div>
        <div class="card-body ">
            <!-- <p class="card-text"><?php echo $sobre ?></p> -->
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="/curso/<?php echo $value["href"] ?>" class="btn btn-outline-info">Ver</a>
                    <?php
                    if (session::existe("xonline_admin")) {
                    ?>
                        <a href="/editar/curso/<?php echo $value["href"] ?>" class="btn btn-outline-success">
                            <i class="fa fa-edit"></i>
                        </a>
                    <?php
                    }
                    ?>
                </div>
                <small class="text-muted"><?php echo $info ?></small>
            </div>
        </div>
    </div>
</div>