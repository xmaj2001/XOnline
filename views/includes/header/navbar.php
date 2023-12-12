<?php

use App\lib\session;

$titulo = "X-MAJ";
if ($site["nome"] == "X Online") {
  $titulo = "<b>X</b> <span class='lead'>Online</span>";
} else {
  $titulo = $site["nome"];
}

?>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Dark offcanvas navbar">
  <div class="container-fluid">

    <a class="navbar-brand mx-4" href="#"><?php echo $titulo ?></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sibardark" aria-controls="sibardark">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
      <ul class="navbar-nav col-lg-10 justify-content-lg-end">
        <?php
        if (!session::existe("xonline_adm")) {
          if (session::existe("xonline_user") && session::get("xonline_user")["tipo"] == 2) {
            require "res/usn2.php";
          } else {
            require "res/usn.php";
          }
        } else {
          require "res/adm.php";
        }
        ?>
        <li class="nav-item dropdown bg-dark">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Conta</a>
          <ul class="dropdown-menu bg-dark text-white">
            <?php
            if (session::existe("xonline_user")) {
              $tipo = session::get("xonline_user")["tipo"];
              if ($tipo == 1) {
                require "res/us1.php";
              } else if ($tipo == 2) {
                require "res/us2.php";
              }
            } else {
              require "res/us.php";
            }
            ?>
          </ul>
        </li>

      </ul>
      <div class="d-lg-flex col-lg-2 justify-content-lg-end">
        <?php
        if (session::existe("xonline_user")) {
          $nome = session::get("xonline_user")["nome"];
        ?>
          <a href="/perfil" class="btn btn-dark">
            <small><i class="fa fa-user"></i> <?php echo substr($nome, 0, 20); ?></small>
          </a>
        <?php
        } else {
        ?>
          <a href="/login" class="btn btn-dark">
            <i class="fa fa-sign-in"></i> Entrar
          </a>
        <?php
        }
        ?>

      </div>
    </div>


    <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="sibardark" aria-labelledby="sibardarkLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title text-white"><b>X</b> <span class="lead">Online</span></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>

      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav col-lg-10 justify-content-lg-end">
          <?php
          if (!session::existe("xonline_adm")) {
            if (session::existe("xonline_user") && session::get("xonline_user")["tipo"] == 2) {
              require "res/usn2.php";
            } else {
              require "res/usn.php";
            }
          } else {
            require "res/adm.php";
          }
          ?>
          <li class="nav-item dropdown bg-dark">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Conta</a>
            <ul class="dropdown-menu bg-dark text-white">
              <?php
              if (session::existe("xonline_user")) {
                $tipo = session::get("xonline_user")["tipo"];
                if ($tipo == 1) {
                  require "res/us1.php";
                } else if ($tipo == 2) {
                  require "res/us2.php";
                }
              } else {
                require "res/us.php";
              }
              ?>
            </ul>
          </li>

        </ul>
        <div class="d-lg-flex col-lg-2 justify-content-lg-end">
          <?php
          if (session::existe("xonline_user")) {
            $nome = session::get("xonline_user")["nome"];
          ?>
            <a href="/perfil" class="btn btn-dark">
              <i class="fa fa-use"></i> <?php echo $nome; ?>
            </a>
          <?php
          } else {
          ?>
            <a href="/login" class="btn btn-dark">
              <i class="fa fa-sign-in"></i> Entrar
            </a>
          <?php
          }
          ?>

        </div>
      </div>
    </div>
  </div>
</nav>