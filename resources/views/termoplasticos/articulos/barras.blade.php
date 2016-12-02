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
						<img src="{{ asset('img/te2.png') }}" height="63" width="63">
					</div>

					<div class="bar-title">
						<h1><span>Termopláticos</span> </h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Termopláticos Barras</div>
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
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Termopláticos Barras </div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="container">
		<div class="row">
						
			<div class="col-xs-3" >
				<div class="row" >

					@include('termoplasticos.sideBarTermo')
												
				</div>
			</div>
			
			<div class="col-xs-9">
				<div class="row" style="padding: 1em;padding-top: 0;padding-right: 0;">
					
					<div id="itemTermo" class="col-xs-12" style="background-color: #fff; padding: 0;">	

						<div style="padding-left: 15px; padding-right: 15px;">
							<h2>Barras</h2>
							
							<div class="media" style="margin-top: 20px;margin-bottom: 7px;" >
								<div class="media-left media-middle">
									<img src="{{ asset('img/termoplasticos/menu/simona.png') }}" class=" media-object" style="height: 32px;">
							  	</div>
								<div class="media-body media-middle">
									<!-- <h4 class="media-heading">Media heading</h4> -->
								   <p style="line-height: 14px;font-size: 13px;"> 
								   	SIMONA AG es un fabricante de materiales termoplásticos que posee instalaciones de producción y distribución por todo el mundo. El programa de productos comprende tanto productos semielaborados, como tuberías y accesorios, además de elementos prefabricados. Entre los semielaborados figuran las planchas, barras, perfiles y varillas para soldar, los cuales se usan sobre todo en la construcción de aparatos e instalaciones químicas debido a su gran resistencia frente a los agentes químicos agresivos.
								   </p>
								</div>
							</div>					
						</div>

						<!-- columna 1 -->
						<div class="col-sm-12 " style="background-color: #fff;"> 

							<div class="row" style="padding: 1em;">
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/barras.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p style="font-size: 13px;">
												Los plásticos semielaborados SIMONA se utilizan ampliamente en el campo de la publicidad y la edificación. El PVC, en particular, ha demostrado ser una opción de gran éxito para aplicaciones en techos, paredes y puertas, además de utilizarse en el área de las ferias y la construcción de pantallas. De hecho, las planchas de PVC son tan versátiles que se pueden usar para casi cualquier aplicación, como en las pistas de hielo cológicas.
											</p>
													
									</div>								
								</div>	
							</div>
							
								
						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- columna 2 -->
						<!-- <div class="col-sm-12 col-md-6" style="background-color: #fff">

							<div class="row" style="padding: 1em;">
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/valvulas/foto.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	Caracteristicas </p>
													
									</div>								
								</div>	
							</div>


						</div> -->

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