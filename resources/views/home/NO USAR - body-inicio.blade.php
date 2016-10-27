<head>
	<!-- Animate.css library -->
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
</head>

<style type="text/css">
	
	#intro{
		/*background-image: url("{{ asset('img/fmain.jpg') }}"); 
		background-size: cover;		

	    background-attachment: fixed;	    
	    background-repeat: no-repeat;*/
	}

	.panelc {
	    border: 1px solid #080808; 
	    border-radius:0 !important;
	    transition: box-shadow 0.5s;
	    background-color: transparent;
	}

	.panelc:hover {
	    box-shadow: 0px 0px 50px 2px #232222;
	}

	.panelc-heading {
	    /*color: gainsboro !important;*/
	    background-color: transparent !important;
	    padding: 20px;
	    border-bottom: 0px;
	    /*border-color: transparent;*/
	    border-top-left-radius: 0px;
	    border-top-right-radius: 0px;
	    border-bottom-left-radius: 0px;
	    border-bottom-right-radius: 0px;
	    padding-bottom: 5px;
	}

	.panelc-body{
		padding-top: 5px;
		/*color: black;
		background-color: ghostwhite;*/
	}

	#paneles .col-sm-4{
		padding-right: 0px;
		padding-left: 0px;
	}

	
	@media(min-width:768px) and (max-width:991px){
		#pasion{ height: 367px; }
	}


	.hideme
	{
	    opacity:0;
	}

	#sectores .panelc{
		margin-bottom: 0;
	    height: 160px;
	    padding-top: 56px;
	}
	

/***************** SLICK **************/
	.slider {
        width: 90%;
        margin: 0px auto;
    }

    .slick-slide {
      margin: 0px 20px;
      height: auto;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
	
	/** {
      box-sizing: border-box;
    }*/
/***************** / SLICK **************/


</style>

<style type="text/css">

	.mercados_H4{

		color: #000;

		margin-top: 0px;
		margin-bottom: 0px;

		padding-top: 78px;

		/*position: absolute;
		top: 38%;*/

		font-size: 22px;
		font-weight: 100;

		text-align: center;
		width: 100%;

		text-shadow: 
		0.5px 0.5px 4px #fff,
		-0.5px -0.5px 4px #fff,  
		0.5px -0.5px 4px #fff,
		-0.5px 0.5px 4px #fff,
		0.5px 0.5px 4px #fff;
		/*-webkit-text-stroke: 1px rgba(0,0,0,.7);*/
	}	

	.p0{
	   padding-left: 0px;
	   padding-right: 0px;
	}

	.p0 a:hover{ text-decoration: none; }	

	.img-c{ 
		height: 180px;
		background-repeat: no-repeat;
		border: 0;
	}
	
	/* Este indica cuanto dura y que efecto usa*/
	.img-c, .mercados_fondo h4{
	    -webkit-transition:all .9s ease; /* Safari y Chrome */
	    -moz-transition:all .9s ease; /* Firefox */
	    -o-transition:all .9s ease; /* IE 9 */
	    -ms-transition:all .9s ease; /* Opera */    
	}

	/* Este indica cuanto se tranformara*/
	.img-c:hover, .mercados_fondo:hover h4{
	    -webkit-transform:scale(1.20);
	    -moz-transform:scale(1.20);
	    -ms-transform:scale(1.20);
	    -o-transform:scale(1.20);
	    transform:scale(1.20);
	}

</style>


	<style type="text/css">
		
		.main-container {
		  padding: 0px;
		}
		.skyblue {
		    background-color: #22c8ff;
		}
		.deepskyblue {
		    background-color: #00bfff;
		}
		.darkerskyblue {
		    background-color: #00a6dd;
		}

		.carousel-indicators {
		    bottom: 0;
		}
		.carousel-control.right,
		.carousel-control.left {
		    background-image: none;
		}
		.carousel .item {
		    min-height: 350px; 
		    /*height: 100%;*/
		    width:100%; 
		}
		.carousel-caption h3,
		.carousel .icon-container,
		.carousel-caption button {
		    background-color: #09c;
		}
		.carousel-caption h3 {
		    padding: .5em;
		}
		.carousel .icon-container {
		    display: inline-block;
		    font-size: 25px;
		    line-height: 25px;
		    padding: 1em;
		    text-align: center;
		    border-radius: 50%;
		}
		.carousel-caption button {
		    border-color: #00bfff;
		    margin-top: 1em; 
		}

		/* Animation delays */
		.carousel-caption h3:first-child {
		    animation-delay: 1s;
		}
		.carousel-caption h3:nth-child(2) {
		    animation-delay: 2s;
		}
		.carousel-caption button {
		    animation-delay: 3s;
		}

		h1 {
		  text-align: center;  
		  margin-bottom: 30px;
		  font-size: 30px;
		  font-weight: bold;
		}

		.p {
		  padding-top: 125px;
		  text-align: center;
		}

		.p a {
		  text-decoration: underline;
		}

	</style>

	<body>
	
	<div class="container-fluid main-container">

		<div id="carousel-example-generic" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			
				<!-- First slide -->
				<div class="item active deepskyblue">
					
					<div class="carousel-caption">
						<h3 data-animation="animated bounceInLeft">
							This is the caption for slide 1
						</h3>
						<h3 data-animation="animated bounceInRight">
							This is the caption for slide 1
						</h3>
						<button class="btn btn-primary btn-lg" data-animation="animated zoomInUp">Button</button>
					</div>
				</div> <!-- /.item -->
				
				<!-- Second slide -->
				<div class="item skyblue">
					<div class="carousel-caption">
						<h3 class="icon-container" data-animation="animated bounceInDown">
							<span class="glyphicon glyphicon-heart"></span>
						</h3>
						<h3 data-animation="animated bounceInUp">
							This is the caption for slide 2
						</h3>
						<button class="btn btn-primary btn-lg" data-animation="animated zoomInRight">Button</button>
					</div>
				</div><!-- /.item -->
				
				<!-- Third slide -->
				<div class="item darkerskyblue">
					<div class="carousel-caption">
						<h3 class="icon-container" data-animation="animated zoomInLeft">
							<span class="glyphicon glyphicon-glass"></span>
						</h3>
						<h3 data-animation="animated flipInX">
							This is the caption for slide 3
						</h3>
						<button class="btn btn-primary btn-lg" data-animation="animated lightSpeedIn">Button</button>
					</div>
				</div><!-- /.item -->
			
			</div><!-- /.carousel-inner -->

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div><!-- /.carousel -->

	</div><!-- /.container -->



<!-- <div id="banerPrincipal" class="container-fluid">

	<div class="row">

		<div class="col-xs-12">
			<img src="{{ asset('img/eschema.png') }}" class="img-responsive">
		</div>
		
	</div>		

</div> -->


<div id="intro" class="container-fluid">
	
	<div class="container" style="padding: 50px;">
		
		<div class="row" style="color: #31708f;">
			
			<div class="col-sm-12"> 
				<h1 class="text-center"> A LO QUE NOS DEDICAMOS </h1> 
				<h4 class="text-center">Induchem, C.A., y sus filiales se especializan en la distribución de productos <br> de limpieza, venta de materias primas y productos termoplásticos</h4> 
			</div>
			
			<div class="col-xs-12"><br><br><br></div> 
			
			<div id="paneles" class="hideme">
			

				<div class="col-sm-4" >
					<div class="panel panel-default panelc">
				 		<div class="panel-heading text-center panelc-heading">
				 			<i class="ion-ios-briefcase-outline" style="font-size: 74px;"></i>
				 			<h2> Lo Que Hacemos </h2>
				 		</div>

				 		<div class="panel-body panelc-body"><p  class="text-justify"> Con más de 20 años de experiencia en la industria química, suministramos materias primas, productos terminados, diseñados para cada ciente y proporcionamos asesoría técnica y equipos para la industria. </p></div>
				 		
					</div>
				</div>

				<!-- <div class="col-sm-4" >
					<p class="text-center"> <i class="ion-ios-briefcase-outline" style="font-size: 74px;"></i> </p>			
					<h2 class="text-center"> Lo Que Hacemos </h2>
					<p  class="text-justify"> Con más de 20 años de experiencia en la industria química, suministramos materias primas, productos terminados, diseñados para cada ciente y proporcionamos asesoría técnica y equipos para la industria. </p>
				</div> -->
				
				<div class="col-sm-4" >
					<div class="panel panel-default panelc">
				 		<div class="panel-heading text-center panelc-heading">
				 			<i class="ion-ios-gear-outline" style="font-size: 74px;"></i>
				 			<h2> Nuestros Servicios </h2>
				 		</div>

				 		<div class="panel-body  panelc-body"><p  class="text-justify"> Ofrecemos servicios de transporte y almacenamiento de productos corrosivos líquidos, construir tanques y equipos termoplásticos, brindando un servicio personalizado a las necesidades del cliente. </p></div>
				 		
					</div>
				</div>

				<!-- <div class="col-sm-4" >
					<p class="text-center"> <i class="ion-ios-gear-outline" style="font-size: 74px;"></i> </p>	
					<h2 class="text-center"> Nuestros Servicios</h2>
					<p  class="text-justify"> Asegurar un buen servicio a nuestros clientes es fundamental para conseguir una relación estable y duradera. El conocimiento de nuestros clientes nos permite ofrecerles el servicio más adecuado a sus necesidades. </p>
				</div> -->
				
				<div class="col-sm-4">
					<div class="panel panel-default panelc" id="pasion">
				 		<div class="panel-heading text-center panelc-heading">
				 			<i class="ion-ios-lightbulb-outline" style="font-size: 74px;"></i>
				 			<h2> Qué nos Diferencia? </h2>
				 		</div>

				 		<div class="panel-body  panelc-body"><p  class="text-justify"> Lo que nos distingue es que cada uno de nosotros se ocupa de llevar a nuestros clientes hacia el éxito. fortalecer lazos, exhibir lo que sabemos y podemos hacer, lo que nos impulsa a ser los mejores. </p></div>
				 		
					</div>
				</div>

				<!-- <div class="col-sm-4" >
					<p class="text-center"> <i class="ion-ios-lightbulb-outline" style="font-size: 74px;"></i> </p>
					<h2 class="text-center"> Nuestra Pasión</h2>
					<p  class="text-justify"> Lo que nos distingue es que cada uno de nosotros se ocupa de llevar a nuestros clientes hacia el éxito. fortalecer lazos, exhibir lo que sabemos y podemos hacer, lo que nos impulsa a ser los mejores. </p>
				</div> -->

				
			
			</div>

		</div>

	</div>
</div>

<!-- <div class="container" id="productos">

	<div class="row">
				

		<div class="col-xs-12">
			<br>
			<br>
			<br>
			<h1 class="text-center">Lineas de Productos</h1>
			<hr>
		</div>		
		
		<div class="col-md-4">
			
			<h2>Abrillantadores Desoxidante</h2>
			<a href="">CHEM BRILLINOX</a>

			<h2>Bactericidas</h2>
			<a href="">CHEM GEL SANITIZER</a>

			<h2>Bactericida amonio cuaternario</h2>
			<a href="">CHEM ALGICIDA AMONIO CUATERNARIO</a>
			<a href="">CHEM QUAT</a>

			<h2>Bactericidas clorados</h2>
			<a href="">CHEM CLORO DESINFECTANTE CLORADO</a>

			<h2>Bactericidas de oxígeno activo</h2>
			<a href="">CHEM OXAN</a>
			<a href="">CHEM </a>

			<h2>Desengrasantes</h2>
			<a href="">CHEM DESGRASOL 2006</a>
			<a href="">CHEM MOTORCLEAN</a>

			<h2>Desengrasantes Alcalinos</h2>
			<a href="">CHEM HALSO 2005</a>
			<a href="">CHEM ULTRASOL</a>

			<h2>Desengrasantes de cocinas y hornos </h2>
			<a href="">CHEM DESGRASADOR</a>
		

		</div>

		<div class="col-md-4">
			
			<h2>Desincrustante y Limpiador de porcelana</h2>
			<a href=""> CHEM PORCELANA </a><br>
			<a href=""> LIQUID PLUMBER</a><br>
			<a href=""> TETRASAN</a>

			<h2>Desinfectantes</h2>
			<a href=""> CHEM LEMOPHENE</a><br>
			<a href=""> DESINFECTANTE DE CEREZA</a> <br>
			<a href=""> DESINFECTANTE DE LAVANDA</a><br>
			<a href=""> DESINFECTANTE DE TUTTY FRUTY</a>

			<h2>Detergentes alcalinos clorados</h2>
			<a href=""> CHEM CLOR-L</a><br>
			<a href=""> CLEAR CLOR-P</a><br>
			<a href=""> CLORO ROSADO</a>

			<h2>Detergentes en polvo</h2> 
			<a href=""> AJSEN</a><br>
			<a href=""> CHEM BAN BAN-A </a><br>
			<a href=""> CHEM BASKETT-SF </a><br>
			<a href=""> CLEAR P BANTAX</a><br>
			<a href=""> CLEAR P DETER POLVO</a><br>
			<a href=""> CLEAR P MAVES</a><br>
			<a href=""> EXIT</a><br>
			<a href=""> EXTRA FUERTE</a>

			
		</div>

		<div class="col-md-4">
			
			<h2>Jabones líquidos</h2>
			<a href=""> CHEM FOAM (ESPUMA)</a><br>
			<a href=""> CLEAR RENDIDOR</a><br>
			<a href=""> CLEAR 66</a>

			<h2>Lavandería</h2>
			<a href=""> CHEM ADX</a><br>
			<a href=""> CHEM F-600-L</a><br>
			<a href=""> CHEM F-600-P 160</a>

			<h2>Limpiadores Ácidos</h2>
			<a href=""> CHEM FOAM ACID</a><br>
			<a href=""> P-ACID 1095-N (GRANEL)</a><br>
			<a href=""> P-ACID 61-N-F</a><br>
			<a href=""> P-ACID 68-C</a>

			<h2>Limpiadores Cáusticos</h2>
			<a href=""> CHEM D-PLASTIC</a><br>
			<a href=""> CHEM P-CAUST-L-V-IV </a><br>
			<a href=""> CHEM P-CAUST-LV </a>

			<h2>Lubricantes para Cadenas</h2>
			<a href=""> CHEM LUB LUBRICANTE</a><br>
			<a href=""> CHEM LUB-HH</a>

			<h2>Solventes Dieléctricos</h2> 
			<a href=""> ELECTRO CHEM-300</a><br>
			<a href=""> ELECTRO CHEM-400</a><br>
			<a href=""> ELECTRO CHEM-600</a>

		</div>

	</div>	

</div>

<br>
<br>
 -->

    
<div class="container-fluid" id="sectores">
	
	<div class="row">

		<div class="col-xs-12 text-center" style="padding: 40px; color: black; background-color: aliceblue;">
			
			<div class="slideanim">
				<h1>Productos Hechos A Tus Necesidades </h1>
				<h4>En Induchem nos encontramos comprometidos con el desarrollo y crecimiento de cada uno de los sectores productivos del país.</h4>				
			</div>			
		</div>	
	
		
		<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
			<a href="#">
				<div class="img-c" style="background-image: url('{{ asset('img/mercados/efluentes.jpg') }}');">
					    <h4 class="mercados_H4" > Tratamientos de Efluentes </h4>
				</div>
			</a>	
		</div>

	
		<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
			<a href="#">
				<div class="img-c " style="background-image: url('{{ asset('img/mercados/quimicos.jpg') }}');">
					    <h4 class="mercados_H4"> Químicos </h4>
				</div>
			</a>	
		</div>

		<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
			<a href="#">
				<div class="img-c " style="background-image: url('{{ asset('img/mercados/azucarero.jpg') }}');">
					    <h4 class="mercados_H4"> Azucarero </h4>
				</div>
			</a>	
		</div>

		<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
			<a href="#">
				<div class="img-c " style="background-image: url('{{ asset('img/mercados/aceite.jpg') }}');">
					    <h4 class="mercados_H4"> Aciete </h4>
				</div>
			</a>	
		</div>
		

		<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
			<a href="#">
				<div class="img-c " style="background-image: url('{{ asset('img/mercados/bebidas.jpg') }}');">
					    <h4 class="mercados_H4"> Cervecería y Refresco </h4>
				</div>
			</a>	
		</div>

		<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
			<a href="#">
				<div class="img-c " style="background-image: url('{{ asset('img/mercados/alimentos.jpg') }}');">
					    <h4 class="mercados_H4"> Alimento </h4>
				</div>
			</a>	
		</div>

		<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
			<a href="#">
				<div class="img-c " style="background-image: url('{{ asset('img/mercados/embotelladora.jpg') }}');">
					    <h4 class="mercados_H4"> Embotelladora de Agua </h4>
				</div>
			</a>	
		</div>

		<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
			<a href="#">
				<div class="img-c " style="background-image: url('{{ asset('img/mercados/papel.jpg') }}');">
					    <h4 class="mercados_H4"> Papel </h4>
				</div>
			</a>	
		</div>
	
		<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
			<a href="#">
				<div class="img-c " style="background-image: url('{{ asset('img/mercados/textil.jpg') }}');">
					    <h4 class="mercados_H4"> Textil </h4>
				</div>
			</a>	
		</div>

		<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
			<a href="#">
				<div class="img-c " style="background-image: url('{{ asset('img/mercados/petroleo.jpg') }}');">
					    <h4 class="mercados_H4"> Petroleo </h4>
				</div>
			</a>	
		</div>

		<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
			<a href="#">
				<div class="img-c " style="background-image: url('{{ asset('img/mercados/vidrio.jpeg') }}');">
					    <h4 class="mercados_H4"> Vidrio y Plastico </h4>
				</div>
			</a>	
		</div>

		<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
			<a href="#">
				<div class="img-c " style="background-image: url('{{ asset('img/mercados/auto.jpg') }}');">
					    <h4 class="mercados_H4"> Automotriz </h4>
				</div> 
			</a>	
		</div>
		
		

	</div>

</div>

<br>
<br>
<br>
<hr>
<br>


<div class="container-fluid">
	
	<div class="row">
		
		<div class="">
			
			<h1 class="text-center">Nuestros Aliados Comerciales</h1>

			<section class="regular slider">

			    <div>
			      <img src="{{ asset('img/aliados/affetti.png') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/Asahi.png') }}" class="img-responsive">
			    </div>

			    <div>			    
			      <img src="{{ asset('img/aliados/motive.png') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/munsch.png') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/Plast-O-Matic.png') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/simona.png') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/verder.png') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/widos.png') }}" class="img-responsive">
			    </div>
			    
			</section>

		</div>	

	</div>	

</div>



<script>

$(document).ready(function() {    

	//  Efecto de Aperecer lento del div INTRO. nota: el que le sigue es mejor!
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},2500);
                    
            }
            
        }); 
    
    });
   

    $(function(){
    	if(screen.width> 1370){   	

    		$("#sectores, #banerPrincipal, #intro").removeClass('container-fluid').addClass('container');
   		}else{
   			$("#sectores, #banerPrincipal, #intro").removeClass('container').addClass('container-fluid');
   		}
    });

});

</script>


<!-- Efecto de barra con aparicion de abajo arriba -->

<script type="text/javascript">
	
	$(document).ready(function() {

		$(window).scroll(function() {

			$(".slideanim").each(function(){

				var pos = $(this).offset().top;

				var winTop = $(window).scrollTop();

				if (pos < winTop + 600) {
					$(this).addClass("slider");
				}
			});
		});

	});

</script>

<style type="text/css">

	.slideanim {visibility:hidden;}
	.slider {
		animation-name: slide;
		-webkit-animation-name: slide;
		animation-duration: 1s;
		-webkit-animation-duration: 1s;
		visibility: visible;
	}

	@keyframes slide {
		0% {
			opacity: 0;
			transform: translateY(70%);
		} 

		100% {
			opacity: 1;
			transform: translateY(0%);
		}
	}

	@-webkit-keyframes slide {
		0% {
			opacity: 0;
			-webkit-transform: translateY(70%);
		}

		100% {
			opacity: 1;
			-webkit-transform: translateY(0%);
		}
	}
</style>

<!-- /Efecto de barra con aparicion de abajo arriba -->

<!-- CARRUSEL SLICK (USADO EN ALIADOS COMERCIALES) -->

  <script type="text/javascript">

    $(document).on('ready', function() {

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
  	</script>

  <!-- /CARRUSEL SLICK -->

<!-- SLIDER PRINCIPAL -->
<script type="text/javascript">
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

</script>	
<!-- /SLIDER PRINCIPAL -->

