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
	    float: left;
	}
	
	.welcome_bar {
	    background: url('{{ asset('img/fondoHeaderContacto.png') }}') 0 0;
	    clear: both;	   
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

	<div class="container-fluid">

		<div class="row welcome_bar">
			<div class="container">
				<div class="col-sm-7 col-xs-12 bar">
					<div class="bar-icon">
						<img src="{{ asset('img/m.png') }}" height="63" width="63">
					</div>
					<div class="bar-title">
						<h1><span>Termoplásticos</span> </h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a>Termoplásticos Máquinas Extrusoras</div>
				</div>

			</div>
		</div>

	</div>

	<div class="container-fluid">
		<div class="row">
						
			<div class="col-xs-3" style="padding: 0; z-index: 100">				
					@include('termoplasticos.menu_productos_servicios')
			</div>
			
			<div class="col-xs-9" style="background-color: white; z-index: 90;box-shadow: 3px 2px 13px 1px rgba(51, 51, 51, 0.43);">

						<div style="padding-left: 15px; padding-right: 15px; margin-top: 3em;">
							<h2 style="text-align: center;">Máquinas Extrusoras</h2>							
							
							<div class="media" style="margin-top: 20px;margin-bottom: 7px;" >
								<div class="media-left media-middle">
									<img src="{{ asset('img/PRODUCTOS/termoplasticos/menu/munsch.png') }}" class=" media-object" style="max-width: 200px;">
							  	</div>
								<div class="media-body media-middle">
									<!-- <h4 class="media-heading">Media heading</h4> -->
								   <p style="line-height: 14px;font-size: 13px;">
								   		El número uno del mundo en Tecnología Extrusora Hand Held!. Con muchos años de experiencia en tecnología de soldadura de plástico, ofrecen apoyo sin precedentes en todas sus aplicaciones de soldadura de plástico. La invención de la máquina de extrusión de mano para aplicaciones de soldadura de termoplásticos en 1973 por Erich Munsch lanzó un innovador, el primero de su línea de productos. En 1991, MUNSCH Kunststoff-Schweißtechnik GmbH se convirtió en un negocio independiente y se llegó a la decisión sobre esta medida en base a la alta aceptación en el mercado y las tasas de crecimiento de alto nivel sostenidas.
								   </p>
								</div>
							</div>					
						</div>
						<br>

						<!-- columna 1 -->
						<div class="col-xs-12" style="padding-left:4em;padding-right:4em;padding-bottom:15px;margin-top:15px;z-index:200;">		
							<h2 style="margin-bottom: 0; text-align: center;border: 0;">Máquinas para Construcción de Tanques - MUNSCH</h2>
							<hr style="margin-top: 3px;">
						</div>

						<div class="row col-sm-12 col-md-6" style="background-color: #fff;margin-right: 0;margin-left: 0;"> 

							
								<h3 style="margin-top: 10px;">Munsch Mini</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/munch/mini.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p> Peso: 3,4 kg </p>
											<p> Largo: 450 mm </p>
											<p> Material de soldadura: PP, PE, PVDF, PVC </p>
											<p> Relleno: 3 mm </p>		
											<p> Aplicación: 2 a 10 mm </p>		
											<p> Voltaje: 120 o 230 Volt </p>		
									</div>								
								</div>	
							
							
								
						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- columna 2 -->
						
						<div class="row col-sm-12 col-md-6" style="background-color: #fff;margin-right: 0;margin-left: 0;">
							
								<h3 style="margin-top: 10px;">Mak 18 -SB</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/munch/mak18.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p> Peso: 4,8 kg </p>
											<p> Largo: 455 mm </p>
											<p> Material de soldadura: PP, PE, <br> PVDF </p>
											<p> Relleno: 4,33 mm </p>		
											<p> Aplicación: 4 a 15 mm </p>		
											<p> Voltaje: 120 o 230 Volt </p>		
									</div>								
								</div>	
							
						</div>
							
						<div class="col-xs-12" style="padding-left: 4em; padding-right: 4em;padding-bottom:15px;margin-top: 15px;z-index: 200;">
						<br>		
							<h2 style="margin-bottom: 0; text-align: center;border: 0;">Máquinas para Construcción de Vertederos - MUNSCH</h2>
							<hr style="margin-top: 3px;">
						</div>
						
						<div class="row col-sm-12 col-md-6" style="background-color: #fff;margin-right: 0;margin-left: 0;"> 
							
								<h3 style="margin-top: 10px;">Wedge-It-Multi</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/munch/Wedge-It-Multi.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p> Peso: 19 kg </p>
											<p> Largo: 450 mm </p>
											<p> Velocidad de soldadura: 0 - 4,3 m / min </p>
											<p> Poder: 2000 w </p>		
											<p> Para soldar: PE-HD / PE-C / PP / PE-LD / PVC-P </p>		
											<p> Voltaje: 230 Volt </p>		
									</div>								
								</div>	
							
						</div>

						
						<div class="row col-sm-12 col-md-6" style="background-color: #fff;margin-right: 0;margin-left: 0;">
							
								<h3 style="margin-top: 10px;">Mak 58 - D</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/munch/Mak58.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p> Peso: 310,2 kg </p>
											<p> Largo: 700 mm </p>
											<p> Material de soldadura: PP, PE, PVDF </p>
											<p> Relleno: 5,4 mm </p>		
											<p> Aplicación: 10 a 40 mm </p>		
											<p> Voltaje: 230 Volt </p>		
									</div>								
								</div>	
						
							
								
						</div>

					
				</div>
			
			
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

h2{	
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

  height: 200px;
}

.flex-child{
  display: -ms-flex;
  display: -webkit-flex;
  display: flex;
  justify-content: center;
  flex-direction: column;
}

</style>