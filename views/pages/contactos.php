<section class="px-4 pt-5 my-5 text-center">
    <h1 class="display-4 fw-bold">Contactos</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead  mb-4">Para saber mais entre em contacto conosco</p>
    </div>
    <div class="container col-xxl-8 px-4 py-2">
        <div class="row align-items-center g-5 py-4">

            <div class="col-12">
                <small class="d-block">Telefone <b><?php echo $site["telefone"] ?></b></small>
                <small class="d-block">Email <b><?php echo $site["email"] ?></b></small>
                <small class="d-block">Local <b><?php echo $site["local"] ?></b></small>
                <h4 class="lead lh-1 mb-3 my-3">Rede Socias</h4>
                <small class=""><a href="https://wwww.facebook.com/<?php echo $site["facebook"] ?>" class="btn btn-outline-dark"><i class="fa fa-facebook"></i></a></small>
        <small class=""><a href="https://www.instagram.com/<?php echo $site["instagram"] ?>" class="btn btn-outline-dark"><i class="fa fa-instagram"></i></a></small>
        <small class=""><a href="https://www.linkdin.com/<?php echo $site["linkdin"] ?>" class="btn btn-outline-dark"><i class="fa fa-linkedin"></i></a></small>
            </div>
        </div>
    </div>
</section>

<!-- ~Script -->
<script>
  $("#page_contactos").addClass("active");
  $("#page_contactos").attr("aria-current","page");
</script>