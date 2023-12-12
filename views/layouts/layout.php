<?php

use App\lib\View;

?>
<!DOCTYPE html>
<html lang="pt-PT">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="<?php echo self::$Page_author ?>" />
  <meta name="keywords" content="<?php echo self::$Page_keywords ?>" />
  <meta name="description" content="<?php echo self::$Page_description ?>" />
  <title>
    <?php echo self::$Page_titulo ?>
  </title>
  <meta property="og:title" content="<?php echo self::$Page_titulo ?>" />
  <meta property="og:image" content="<?php echo self::$Page_image ?>" />
  <meta property="og:url" content="<?php echo self::$Page_url ?>" />
  <meta property="og:site_name" content="<?php echo self::$Page_titulo ?>" />
  <meta property="og:description" content="<?php echo self::$Page_description ?>" />
  <meta name="twitter:title" content="<?php echo self::$Page_titulo ?>" />
  <meta name="twitter:image" content="<?php echo self::$Page_image ?>" />
  <meta name="twitter:url" content="<?php echo self::$Page_url ?>" />
  <meta name="twitter:card" content="<?php echo self::$Page_card ?>" />
  <link rel="shortcut icon" href="<?php echo self::$Page_logo ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo _Assets . "app.css" ?>">
  <script src="/assets/plugins/jquery/jquery.min.js"></script>
  <style>
    /* Custom default button */
    .btn-light,
    .btn-light:hover,
    .btn-light:focus {
      color: #333;
      text-shadow: none;
      /* Prevent inheritance from `body` */
    }

    body {
      padding-top: 0px;

    }

    .cover-container {
      max-width: 42em;
      text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
      box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    }
  </style>
</head>

<body>
  <main>
    <?php View::render(self::$Page_header, self::$Page_conteudo, self::$Page_footer, $dados);  ?>
  </main>
  <!-- loader -->
  <div id="loader" class="loader w3-display-middle">
    <svg class="circular" width="56px" height="56px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
  </div>
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/fresco.min.js"></script>

  <script>
    // loader
    var loader = function() {
      setTimeout(function() {
        if ($('#loader').length > 0) {
          $('#loader').hide();
        }
      }, 1);
    };
    loader();
  </script>
</body>

</html>