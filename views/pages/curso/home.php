<!-- Cabeça -->
<header class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-white">Cursos</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">Cursos disponível <?php echo $total ?></p>
        </div>
    </div>
</header>
<!-- ================================== -->

<!-- Cursos -->
<section class="container py-5">

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="row">
            <div class="col-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="pesqc" placeholder="Nome do curso" required="">
                    <span class="input-group-text bg-dark text-white shadow"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>

    </div>

    <div class="container w3-display-container" id="icon-grid">
        <div class="text-dark text-center mt-5" id="load">
            <span class="">Carregando...</span>
            <br>
            <div class="spinner-grow text-dark text-center mx-4" role="status">
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="viewcursos">

        </div>
        <div class="my-5 text-center">
            <nav aria-label="Standard pagination ">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="/cursos/pagina/<?php echo $page["ant"] ?>" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <?php
                    if ($page != null) {
                        for ($i = 1; $i <= $page["paginas"]; $i++) {
                            $active = "";
                            $id_page = "";
                            if ($page["pagina"] == $i) {
                                $active = "active";
                                $id_page = "pga";
                            }
                    ?>
                            <li class="page-item page-item <?php echo $active ?>"><a class="page-link" href="/cursos/pagina/<?php echo $i ?>" id="<?php echo $id_page ?>"><?php echo $i ?></a></li>
                    <?php
                        }
                    }
                    ?>
                    <li class="page-item">
                        <a class="page-link" href="/cursos/pagina/<?php echo $page["prox"] ?>" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- ==================================== -->

<!-- script -->
<script>
    $("#page_cursos").addClass("active");
    $("#page_cursos").attr("aria-current", "page");
</script>
<script src="/assets/js/res/home_cursos.js"></script>