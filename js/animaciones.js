$("#btndatospersonales").click(function() {
    $('html, body').animate({
        scrollTop: $("#datospersonales").offset().top - 100
    }, 1000);
});

$("#btnconocimientos").click(function() {
    $('html, body').animate({
        scrollTop: $("#conocimientos").offset().top - 30
    }, 1000);
});

$("#btnproyectos").click(function() {
    $('html, body').animate({
        scrollTop: $("#proyectos").offset().top - 75
    }, 1000);
});

$("#btncontacto").click(function() {
    $('html, body').animate({
        scrollTop: $("#contacto").offset().top - 30
    }, 1000);
});