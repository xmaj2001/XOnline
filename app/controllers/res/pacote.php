<?php

use App\lib\session;
use App\Model\db;
use Michelf\Markdown;
$moeda = db::Scoluna("SELECT moeda from xonline where id = 1", "moeda");
if ($value["valor"] == 0 || empty($value["valor"])) {
    $info = "Gratúito";
} else {
    $info = "Valor <b>" . $value["valor"] . ",00" . $moeda . "</b>";
}

$pp = "";
if (strlen($value["sobre"]) >= 150) {
    $pp = "...";
}

?>
<div class="col">
    <div class="card shadow-sm">
        <div class="bd-placeholder-img card-img-top w3-display-container bg-dark" style="height: 225px; width: 100%;">
            <h4 style="color: #eceeef;" class="w3-display-middle"><?php echo $value["nome"] ?></h4>
        </div>
        <div class="card-body">
            <p class="card-text"><?php echo Markdown::defaultTransform(substr($value["sobre"], 0, 200) . $pp); ?></p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="<?php echo "/pacote/".$value["href"]."/do/curso/".$value["curso"] ?>" class="btn btn-outline-info">Ver</a>
                    <?php
                    if (session::existe("xonline_admin")) {
                    ?>
                        <a href="<?php echo "/editar/pacote/".$value["href"]."/do/curso/".$value["curso"] ?>" class="btn btn-outline-success">
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