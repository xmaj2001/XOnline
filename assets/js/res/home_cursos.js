var pga = 1;
pga = $("#pga").html();
$.ajax({
    method: "POST",
    url: "/ajax_cursos",
    data: {
        buscarc: "",
        page: pga
    },
    success: function (Resultado) {
        $("#viewcursos").html(Resultado);
        $("#load").hide();
    }
});
$("#pesqc").keyup(function () {
    $("#load").show();
    $.ajax({
        method: "POST",
        url: "/ajax_cursos",
        data: {
            buscarc: $(this).val(),
            page: pga
        },
        success: function (Resultado) {
            $("#viewcursos").html(Resultado);
            $("#load").hide();
        }
    });
});