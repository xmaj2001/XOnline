$.ajax({
    method: "POST",
    url: "/ajax_cursos",
    data: {
        buscarc: "",
        page:'1'
    },
    success: function(Resultado) {
        $("#viewcursos").html(Resultado);
    }
});
