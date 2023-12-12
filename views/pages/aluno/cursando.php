<header class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-6 fw-bold text-gray">Alunos cursando</h1>
        <a class="text-decoration-none display-7 fw-bold text-white" href="/curso/<?php echo $curso["href"] ?>"><?php echo $curso["nome"] ?></a>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4"></p>
            <small>Total <?php echo $total ?> <i class="fa fa-users"></i> </small>
            <div class="d-grid gap-2 mt-4 d-sm-flex justify-content-sm-center container">
                <a href="/novo/aluno/cursando/<?php echo $curso["href"] ?>" class="btn btn-outline-info  me-sm-2 fw-bold">Matricular</a>
            </div>
        </div>
    </div>
</header>

<section class="container">

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="row" id="resultv">
            <div class="col-12 col-md-12">
                <input type="text" class="form-control" id="pesqc" placeholder="Nome do aluno" required="">
            </div>
        </div>
    </div>
    
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div id="result" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        </div>
        <small class="d-block text-end mt-3">
            <a href="#resultv" id="btnant" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-o-left"></i></a>
            <a href="#resultv" id="btnprox" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-o-right"></i></a>
        </small>
    </div>
</section>


<script>
    $("#page_alunos").addClass("active");
    $("#page_alunos").attr("aria-current", "page");
</script>
<script>
    function pg() {
        if ($("#page").html() <= 1) {
            $("#btnant").hide(100);
        } else {
            $("#btnant").show(20);
        }
        if ($("#page").html() == $("#prox").html()) {
            $("#btnprox").hide(100);
        } else {
            $("#btnprox").show(20);
        }
    }

    $(".mede").hide();


    $.ajax({
        method: "POST",
        url: "/ajax_alunos_cursando",
        data: {
            buscarc: "",
            curso: "<?php echo $curso["href"] ?>"
        },
        success: function(Resultado) {
            $("#result").html(Resultado);
            pg();
        }
    });

    $("#pesqc").keyup(function() {
        $.ajax({
            method: "POST",
            url: "/ajax_alunos_cursando",
            data: {
                buscarc: $(this).val(),
                curso: "<?php echo $curso["href"] ?>"
            },
            success: function(Resultado) {
                $("#result").html(Resultado);
                pg();
            }
        });
    });

    // Prox Ant
    $("#btnprox").click(function() {

        $.ajax({
            method: "POST",
            url: "/ajax_alunos_cursando",
            data: {
                buscarc: $("#pesqc").val(),
                curso: "<?php echo $curso["href"] ?>",
                page: $("#prox").html()
            },
            success: function(Resultado) {
                $("#result").html(Resultado);
                if ($("#page").html() > 1) {
                    $("#btnant").show(20);
                }

                if ($("#page").html() == $("#prox").html()) {
                    $("#btnprox").hide(100);
                }
            }
        });
    });

    $("#btnant").click(function() {
        $.ajax({
            method: "POST",
            url: "/ajax_alunos_cursando",
            data: {
                buscarc: $("#pesqc").val(),
                curso: "<?php echo $curso["href"] ?>",
                page: $("#ant").html()
            },
            success: function(Resultado) {
                $("#result").html(Resultado);
                if ($("#page").html() == 1) {
                    $("#btnant").hide(100);
                }
                if ($("#page").html() < $("#prox").html()) {
                    $("#btnprox").show(20);
                }
            }
        });
    });
</script>