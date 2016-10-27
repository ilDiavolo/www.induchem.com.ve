$(document).ready(function() {

// ------------------------ AJUSTAR CONTENEDOR DE ACUERDO A AL TAMAÑO DE LA PANTALLA -------------------------
	/******** NOTA: tengo q ver si la pagina sera con el width completo o no *****/

	// $(function(){
 //    	if(screen.width> 1370){   	
 //    		$("#sectores, #banerPrincipal, #intro").removeClass('container-fluid').addClass('container');
 //   		}else{
 //   			$("#sectores, #banerPrincipal, #intro").removeClass('container').addClass('container-fluid');
 //   		}
 //    });


// ------------------------------------------------------------------------------------------------------------

	// 			Efecto de barra con aparicion de abajo arriba 
	
	// offset.top: me da la distancia que hay del top hasta el elemento 
	// scrolltop: me da la distancia que hay del top al scroll
	// la clase 'slideanmin' solo sirve de marca para dispdarar el efecto que se hace agregando la clase 'slider'

	$(window).scroll(function() {

			$(".slideanim").each(function(){

				var pos = $(this).offset().top;

				var winTop = $(window).scrollTop();

				if (pos < winTop + 600) {
					$(this).addClass("slideAnimation");
				}
			});
		});

// ------------------------------------------------------------------------------------------------------------

	//						SLIDER PRINCIPAL 					

	/* Demo Scripts for Bootstrap Carousel and Animate.css article
	* on SitePoint by Maria Antonietta Perna
	*/

	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#carousel-example-generic'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel  
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	// $myCarousel.carousel({
	//   interval: 4000
	// });			
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  

// ------------------------------------------------------------------------------------------------------------
	
	// 				Slick
	// Carrusel Slick usado en nuestros aliados 

	$(".regular").slick({
  		autoplay: true,
  		arrows: false,
    	dots: false,
    	infinite: true,
    	// centerMode: true,
    	slidesToShow: 5,
    	slidesToScroll: 3
  	});

});