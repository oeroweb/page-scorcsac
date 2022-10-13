$(function(){	
	var ancho = $(window).width(),
		navbar = $('#navbar'),
		btnMenu = $('#btn-menu'),
		icono = $('#btn-menu .icono');

	if(ancho < 1000){
		navbar.hide();
	}

	btnMenu.on('click', function(){
		navbar.slideToggle();
		icono.toggleClass('fa-bars');
		icono.toggleClass('fa-times');
	});

	$(window).on('resize', function(){
		if($(this).width() > 1000){
			navbar.show();
			icono.addClass('fa-times');
			icono.removeClass('fa-bars');
		}else{
			navbar.hide();
			icono.addClass('fa-bars');
			icono.removeClass('fa-times');
		}
	});
});

//whatsapp
$("#ico-whatsapp").click(function(){
	console.log("click");
	$(this).css("transition","all 1s ease" );
	$(this).toggleClass("rotar180");
	$(".ico-whatsapp i").toggleClass("fab fa-whatsapp");
	$(".ico-whatsapp i").toggleClass("fas fa-times");
	$("#popup-what").slideToggle('slow');
	$("#text-whatsapp").slideToggle('slow');		
});

$(".btn-aside").click(function(){	
	$(this).css("transition","all 1s ease" );
	$(".btn-aside i").toggleClass("fas fa-ellipsis-v");
	$(".btn-aside i").toggleClass("fas fa-ellipsis-h");
	$(".texto-aside-header").slideToggle('slow');
});

$(document).ready(function(){	
	//alert('cargado');
	$('.ir-arriba').click(function(){
		// body...
		$('body, html').animate({
			scrollTop: '0px'
		}, 2000);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 200){
			$('.ir-arriba').slideDown(1900);
		} else{
			$('.ir-arriba').slideUp(1900); 
		}
	});

	// CERRAR SUBMENU
	$("#cerrar").click(function () {		
		$(".submenu").toggle("slideUp");
	});	

	//CARUSSEL
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,	
		nav:true,
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:false,
		responsive:{
			0:{
				items:2,
				nav:false
			},			
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:4,
				nav:false
			}
		}
	});

	// $(".owl-prev").html('<span class="btn-owl"><i class="fas fa-angle-double-left"></i> </span>');
	// $(".owl-next").html('<span class="btn-owl"><i class="fas fa-angle-double-right"></i> </span>');

	//fixed
	if(window.location.href.indexOf('index') > -1){
		var altura = $(".header").offset().top;	
		$(window).on('scroll', function(){
			if($(window).scrollTop() > altura){
				$(".header").addClass('fixed');
			}else{
				$(".header").removeClass('fixed');
			}
		});
	}	
});

$(document).ready(function() { 
	//fixed	
	var altura2 = $(".header_2").offset().top;	
	$(window).on('scroll', function(){		
		if($(window).scrollTop() > altura2){
			$(".header_2").addClass('fixed2');
		}else{
			$(".header_2").removeClass('fixed2');
		}
	});	
});


$(document).ready(function () {
	$('.aniview').AniView(options);
	var options = {
		animateThreshold: 100,
		scrollPollInterval: 50
	}
});	

$(document).ready(function(){
	$(".btn-servicios").click(function(){
		console.log("click");
		$(".dropdown-box").slideToggle();
	})
});

/**
 * Enlaces
 * https://programacion.net/articulo/15_librerias_de_javascript_para_hacer_efectos_de_scroll_impresionantes_1308
 * 
 * https://github.com/jjcosgrove/jquery-aniview
 * https://jjcosgrove.github.io/jquery-aniview/
*/