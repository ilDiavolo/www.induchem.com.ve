<!DOCTYPE html>
<html>
<head>

	@include('layout.head')

	<!-- CARRUSEL SLICK (CSS)-->
	<link rel="stylesheet" type="text/css" href="{{ asset('pluguin/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('pluguin/slick/slick-theme.css') }}">

	<!-- animate.css library (CSS) -->
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">

	<!-- home.css (CSS) -->
	<link href="{{ asset('css/home.css') }}" rel="stylesheet">

	<!-- CARRUSEL SLICK library (JS)-->
	<script src="{{ asset('pluguin/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>

	<!-- home.js (JS) -->
	<script src="{{ asset('js/home.js') }}" type="text/javascript"></script>	

	<title></title>	
</head>

<body>
	
	<header>				
		
		@include('home.navbar-op5')
	</header>

	<div class="container-fluid main-container" id="sliderPrincipal">

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
				<div class="item active deepskyblue" style="background-image: url('{{ asset('img/s1.png') }}');background-size: 100% 100%;" >
					
					<!-- <div class="carousel-caption">
						<h3 data-animation="animated bounceInLeft">
							This is the caption for slide 1
						</h3>
						<h3 data-animation="animated bounceInRight">
							This is the caption for slide 1
						</h3>
						<button class="btn btn-primary btn-lg" data-animation="animated zoomInUp">Button</button>
					</div> -->
				</div> <!-- /.item -->
				
				<!-- Second slide -->
				<div class="item skyblue" style="background-image: url('{{ asset('img/s2.png') }}');background-repeat: no-repeat; background-size: 100% 100%;">
					<!-- <div class="carousel-caption">
						<h3 class="icon-container" data-animation="animated bounceInDown">
							<span class="glyphicon glyphicon-heart"></span>
						</h3>
						<h3 data-animation="animated bounceInUp">
							This is the caption for slide 2
						</h3>
						<button class="btn btn-primary btn-lg" data-animation="animated zoomInRight">Button</button>
					</div> -->
				</div><!-- /.item -->
				
				<!-- Third slide -->
				<div class="item darkerskyblue" style="background-image: url('{{ asset('img/3.jpg') }}'); background-repeat: no-repeat;background-size: cover;">
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
		
	<div id="intro" class="container" style="padding-top: 10px;">
		
		<div class="row"> 
			
			<div class="col-sm-12" style="margin-bottom: 10px; margin-top: 20px;"> 
				<!-- <h1 id="introH1" class="text-center"> A QUE NOS DEDICAMOS </h1>  -->
				<h3 class="text-center" style="margin-bottom: 0px; margin-top: 10px;">Induchem, C.A., y sus filiales nos especializamos en la distribución de productos <br> de limpieza, venta de materias primas y productos termoplásticos</h3> 
			</div>
			
			
			<div id="paneles">
				
				<div class="col-sm-4" >
					<p class="text-center" style="margin: 0px;"> <i class="ion-ios-briefcase-outline" style="font-size: 74px;"></i> </p>			
					<h2 class="text-center" style="margin-top: 0px; margin-bottom: 0px;"> Nuestro Trabajo </h2>
					<p  class="text-justify pt"> Con más de 20 años de experiencia en la industria química, suministramos materias primas, productos terminados, diseñados para cada cliente y proporcionamos asesoría técnica y equipos para la industria. </p>
				</div>
				
				<div class="col-sm-4" >
					<p class="text-center" style="margin: 0px;"> <i class="ion-ios-gear-outline" style="font-size: 74px;"></i> </p>	
					<h2 class="text-center" style="margin-top: 0px; margin-bottom: 0px;"> Nuestros Servicios</h2>
					<p  class="text-justify pt"> Asegurar un buen servicio a nuestros clientes es fundamental para conseguir una relación estable y duradera. El conocimiento de nuestros clientes nos permite ofrecerles el servicio más adecuado a sus necesidades. </p>
				</div>
				
				<div class="col-sm-4" >
					<p class="text-center" style="margin: 0px;"> <i class="ion-ios-lightbulb-outline" style="font-size: 74px;"></i> </p>
					<h2 class="text-center" style="margin-top: 0px;margin-bottom: 0px;"> Nuestra Pasión</h2>
					<p  class="text-justify pt"> Lo que nos distingue es que cada uno de nosotros se ocupa de llevar a nuestros clientes hacia el éxito. fortalecer lazos, exhibir lo que sabemos y podemos hacer, lo que nos impulsa a ser los mejores. </p>
				</div>
			
			</div>
		</div>
	</div>

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
						    <h4 class="mercados_H4"> Aceite </h4>
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
						    <h4 class="mercados_H4"> Petróleo </h4>
					</div>
				</a>	
			</div>

			<div class="col-xs-6 col-sm-4 col-md-3 p0" style="overflow:hidden;" >
				<a href="#">
					<div class="img-c " style="background-image: url('{{ asset('img/mercados/vidrio.jpeg') }}');">
						    <h4 class="mercados_H4"> Vidrio y Plástico </h4>
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

	<div class="container-fluid" id="aliadosComerciales">		
		<div class="row">			
			
			<br>
			<br>
			<hr>	

			<h1 style="margin-bottom: 0px;" class="text-center">Nuestros Aliados Comerciales</h1>

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

				<!-- Aliados Quimicos -->

			    <div>
			      <img src="{{ asset('img/aliados/3vsigma.png') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/am.png') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/dow.jpg') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/eka.jpg') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/huntsman.png') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/vitro.jpg') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/quimpac.png') }}" class="img-responsive">
			    </div>

			    <div>
			      <img src="{{ asset('img/aliados/pequiven.png') }}" class="img-responsive">
			    </div>
			    
			</section>
		</div>
	</div>

</body>

<footer>
	@include('layout.footer')
</footer>

</html>