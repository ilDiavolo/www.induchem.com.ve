<!DOCTYPE html>
<html>
<head>
	@include('layout.head')
	<title></title>
</head>

<style type="text/css">	
	
	/* tamaño de la imagen que en la cabecera*/
	.bar-icon { 
	    width: 76px;
	    height: 88px;
	    float: left;
	}
	
	.welcome_bar {
	    background: url('{{ asset('img/fondoHeaderContacto.png') }}') 0 0;
	    clear: both;
	    margin-bottom: 44px;
	    position: relative;
	    z-index: 10;
	}

	.bar {
	    background: url('{{ asset('img/title_bar_shadow.gif') }}') 0 106px no-repeat;
	    height: 88px;
	    padding: 21px 0 0 21px;
	    position: relative;
	    z-index: 8;
	}
	
	.bar-title h1, .bar-title .title {
	    font-size: 33px;
	    color: #444e69;
	    text-shadow: 0px 1px 1px #f2f2f2;
	    line-height: 33px;
	    margin: 0 0 4px 0;
	    display: block;
	}

	.breadcrumbs {
	    font-family: Arial, Helvetica, sans-serif;
	    font-size: 13px;
	    line-height: 13px;
	    padding-top: 5px;
	    color: #7e8496;
	    position: relative;
	}

	#cabecera{
		background: url('{{ asset('img/headerQuimicos/3.jpg') }}');		
		background-repeat: no-repeat;
	    clear: both;	   
	}
</style>

<body>
	<header>
		@include('home.navbar-op5')
	</header>

	<div class="container-fluid" style="height: 110px;">

		<div class="row welcome_bar">
			<div class="container">
				<div class="col-sm-7 col-xs-12 bar">
					<div class="bar-icon">
						<img src="{{ asset('img/w1.png') }}" height="63" width="63">
					</div>

					<div class="bar-title">
						<h1><span>Termoplásticos</span> </h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Termoplásticos Soldar Tuberías</div>
				</div>

				<div class="col-sm-5 col-xs-12 bar">				
				</div>

			</div>
		</div>

	</div>

	<!-- <div class="container" >
		<div class="row" style="padding-top: 10px; margin-bottom: 10px;">

			<div class="col-xs-12" id="cabecera" >
				<div style="display: inline-block;" >
					
					<img src="{{ asset('img/te.png') }}" height="63" width="63" class="img-responsive">
				</div>
				<div style="padding-left: 5px; display: inline-block;">
					
					<h1 style="margin-bottom: 0;margin-top: 0;"><span>Termopláticos</span> </h1>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Termopláticos Soldar Tuberías </div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="container">
		<div class="row">
						
			<div class="col-xs-3" >
				<div class="row">

					@include('termoplasticos.sideBarTermo2')
												
				</div>
			</div>
			
			<div class="col-xs-9">
				<div class="row" style="padding: 1em;padding-top: 0;padding-right: 0;">
					
					<div id="itemTermo" class="col-xs-12" style="background-color: #fff; padding: 0;">	

						<div style="padding-left: 15px; padding-right: 15px;">
							<h2>Máquinas de Soldar Tuberías</h2>
							
							<div class="media" style="margin-top: 20px;margin-bottom: 7px;" >
								<div class="media-left media-middle">
									<img src="{{ asset('img/termoplasticos/widos.png') }}" class=" media-object" style="height: 77px;">
							  	</div>
								<div class="media-body media-middle">
									<!-- <h4 class="media-heading">Media heading</h4> -->
								   <p style="line-height: 14px;font-size: 13px;" class="text-justify">
										Tecnología de soldadura de termoplásticos: hoy un término conocido a nivel mundial en la tecnología de soldadura de plásticos y líder reconocido del mercado en muchas áreas de aplicación. WIDOS no sólo ha promovido el desarrollo de la técnica de soldadura de tubo, sino también ha creado una gama completa de herramientas y accesorios que facilitan el manejo y lo hacen más seguro. Esto incluye el desarrollo completo de la técnica de cortar tubos para obra y para la fabricación de fiDngs que hoy alcanza dimensiones de más de 2 metros de diámetro.
								   </p>
								</div>
							</div>					
						</div>

						<!-- columna 1 -->
						<div class="col-sm-12 col-md-6" style="background-color: #fff;"> 

							<div class="row" style="padding: 1em;">
								<h3>Widos 20000</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									 
									<div class="col-xs-12 col-md-6 flex-child">

										<img src="{{ asset('img/termoplasticos/soldar/widos20000.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	Para el uso en terreno y en zanja, la gama de productos contiene una variedad de máquinas de soldadura a tope, soldadoras de anillo (livianas y sólidas) para tubos y fittings con un diámetro de 20 - 2400 mm, así como equipos de electrofusión. </p>
													
									</div>								
								</div>	
							</div>		

							<div class="row" style="padding: 1em;">
								<h3 style="margin-top: 0;">Elemento Calefactor para Polyfusión de WIDOS</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									 
									<div class="col-xs-12 col-md-6 flex-child">

										<img src="{{ asset('img/termoplasticos/soldar/Calefactor.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	Disponible con control de temperatura electrónico termostático para sujetar mandriles y manguitos calefactores con recubrimiento de teflón desde DE 16 hasta DE 125 (según modelo). Para fijar en la obra hay diferentes fijadoras disponibles en el taller. </p>
													
									</div>								
								</div>	
							</div>					
								
						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- columna 2 -->
						<div class="col-sm-12 col-md-6" style="background-color: #fff">

							<div class="row" style="padding: 1em;">
								<h3>Widos 16000</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									 
									<div class="col-xs-12 col-md-6 flex-child">

										<img src="{{ asset('img/termoplasticos/soldar/widos16000.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	La variada gama de máquinas de soldadura para taller contiene máquinas estacionarias para soldadura a tope, con manguito y de asiento, para todos los termoplásticos corrientes y estándares de soldadura de tubos y fittings con una dimensión desde 20 - 2400 mm. Además de juegos de conversión para fittings y piezas T-reducida, piezas cruz y piezas T 45º/60º. </p>
													
									</div>								
								</div>	
							</div>	

							<div class="row" style="padding: 1em;">
								<h3 style="margin-top: 0">Sierra Móvil de WIDOS</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									 
									<div class="col-xs-12 col-md-6 flex-child">

										<img src="{{ asset('img/termoplasticos/soldar/Sierra.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	Sierra móvil para realizar cortes rectangulares en alta velocidad en tubos plásticos para trabajos de construcción. Apropiado para tubos de presión hasta de 2000 mm de diámetro externo dependiendo de la longitud de la espada. De fácil remplazo de cadenas con aparato de rápido tensionamiento. Se recomienda operarla con dos hombres para mayor seguridad. </p>
													
									</div>								
								</div>	
							</div>	


						</div>

					</div>
				</div>
			
				<div class="col-xs-12"> <br><hr><br></div>

			</div>
		</div>
	</div>
	
</body>

<footer>
	@include('layout.footer')
</footer>
</html>

<style type="text/css">

body{
		background-color: rgba(221, 221, 221, 0.5);
	}
p{ 
	margin-bottom: 2px;
	font-size: 12px;
}

#itemTermo h2{
	
    padding-bottom: 3px;
   
    border-bottom: 2px solid #005fb3;
   
    font-size: 24px;
    letter-spacing: 2px;
    text-shadow: 0px 0px 0px #555;
  }
/*---------------------------------------------------------------*/

.flex-parent{
  display: -ms-flex;
  display: -webkit-flex;
  display: flex;
}

.flex-child{
  display: -ms-flex;
  display: -webkit-flex;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
/*---------------------------------------------------------------*/

#fotoSideTermo{
	width: 50px;
}

#fotoSideTermo:hover:before{
	content:url('{{ asset('img/flecha.png') }}');
	margin-right: 5px;
	margin-left: 5px;
	width: 30px;
	height: 10px;
	overflow: hidden;
}


</style>