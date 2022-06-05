$(function() { /* Ejecutar una funcion cuando el documento haya cargado */
	$('[data-toggle="popover"]').popover({ html : true }); // Buscar en la pagina todos los elementos que tienen el atributo data-toggle="popover" vas a ejecutar el metodo .popover()
})

$(document).ready(function(){
	var alto = $('.headerbox').offset().top;
	$(window).on('scroll', function(){
		if ($(window).scrollTop() > alto){
			$('.headerbox').addClass('headerboxp')
		} else {
			$('.headerbox').removeClass('headerboxp');
		}
	});
});





