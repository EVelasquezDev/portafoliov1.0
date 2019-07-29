$("#btninicio").click(function() {
    $('html, body').animate({
        scrollTop: $("#inicio").offset().top
    }, 750);
});

$("#btndatospersonales").click(function() {
    $('html, body').animate({
        scrollTop: $("#datospersonales").offset().top - 100
    }, 750);
});

$("#btnconocimientos").click(function() {
    $('html, body').animate({
        scrollTop: $("#conocimientos").offset().top - 30
    }, 750);
});

$("#btnproyectos").click(function() {
    $('html, body').animate({
        scrollTop: $("#proyectos").offset().top - 75
    }, 750);
});

$("#btncontacto").click(function() {
    $('html, body').animate({
        scrollTop: $("#contacto").offset().top - 30
    }, 750);
});