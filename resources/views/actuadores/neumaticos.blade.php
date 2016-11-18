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
	    /*background: url('{{ asset('img/fondoHeaderContacto.png') }}') 0 0;*/
	    clear: both;
	    margin-bottom: 44px;
	    position: relative;
	    z-index: 10;
	}

	.bar {
	    /*background: url('{{ asset('img/title_bar_shadow.gif') }}') 0 106px no-repeat;*/
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

	<div class="container" >
		<div class="row" style="padding-top: 10px; margin-bottom: 10px;">

			<div class="col-xs-12" id="cabecera" >
				<div style="display: inline-block;" >
					
					<img src="{{ asset('img/te.png') }}" height="63" width="63" class="img-responsive">
				</div>
				<div style="padding-left: 5px; display: inline-block;">
					
					<h1 style="margin-bottom: 0;margin-top: 0;"><span>Actuadores</span> </h1>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Actuadores Neumáticos </div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
						
			<div class="col-xs-3" >
				<div class="row" style="padding: 1em;">

					<div class="col-xs-12" style="background-color: #fff; padding:2em;padding-top: 1em; padding-left: 0; padding-right: 0; border: 1px solid;box-shadow: 1px 1px 1px;">
					
						<h4 style="display: inline-block; margin-left: 15px; line-height: 24px;text-shadow: 3px 3px 1px #ddd; font-size: 20px;" >Actuadores </h4> 
						<img src="{{ asset('img/termoplasticos/menu/asahi.png') }}" class="" style="vertical-align: sub; height: 40px; margin-left: 10px;"> 

						<ul class="list-unstyled" style="padding-left: 2em; margin-top: 7px;">
							<li style="margin-bottom: 4px;" > <a id="fotoSideTermo" style="color: #000;font-size: 16px;" href="{{ url('actuadoresElectrico') }}">Actuador Eléctrico</a> </li>
							<li> <a id="fotoSideTermo" style="color: #000;font-size: 16px;" href="{{ url('actuadoresNeumatico') }}">Actuador Neumático</a> </li>							
						</ul>
						
					</div>	

					<div class="col-xs-12">
						<br>
					</div>
									
					<!-- <div class="col-xs-12" id="sidebar" style="background-color: #fff; padding:2em;padding-top: 1em; padding-left: 0; padding-right: 0; border: 1px solid;box-shadow: 1px 1px 1px;">
												
						<div id="akira" style="padding-left: 15px;">

							<h4> Actuador Eléctrico </h4>							

							<div class="media" style="margin-top: 10px;margin-left: 15px;" >
								<div class="media-left media-middle">
									<a id="fotoSideTermo" href="{{ url('actuadoresElectrico') }}"><img src="{{ asset('img/termoplasticos/menu/asahi.png') }}" class="" style="height: 40px;"></a>
							  	</div>								
							</div>	

						</div>

						<div style="padding-right: 1em;padding-left: 1em;" class="col-xs-12"> <hr> </div>		

						<div id="akira" style="padding-left: 15px;">

							<h4> Actuador Neumático </h4>							

							<div class="media" style="margin-top: 10px;margin-left: 15px;" >
								<div class="media-left media-middle">
									<a id="fotoSideTermo" href="{{ url('actuadoresNeumatico') }}"><img src="{{ asset('img/termoplasticos/menu/asahi.png') }}" class="" style="height: 40px;"></a>
							  	</div>								
							</div>	

						</div>

						<div style="padding-right: 1em;padding-left: 1em;" class="col-xs-12"> <hr> </div>		
						
					</div> -->
						
				</div>

			</div>
			
			<div class="col-xs-9">
				<div class="row" style="padding: 1em;">
					
					<div id="itemTermo" class="col-xs-12" style="background-color: #fff; padding: 0;">	

						<div style="padding-left: 15px; padding-right: 15px;">
							<h2>Actuadores Neumático</h2>
							
							<div class="media" style="margin-top: 20px;margin-bottom: 7px;" >
								<div class="media-left media-middle">
									<img src="{{ asset('img/termoplasticos/menu/asahi.png') }}" class=" media-object">
							  	</div>
								<div class="media-body media-middle">
									<!-- <h4 class="media-heading">Media heading</h4> -->
								    <p style="line-height: 14px;font-size: 13px;"> Los productos de válvula y actuación de Asahi/America se han utilizado en el campo durante más de cuatro décadas. Además, los actuadores tanto neumáticos como los eléctricos están disponibles para ser montados en fábrica a nuestras válvulas o por separado para su montaje en campo.</p>
								</div>
							</div>					
						</div>

						<!-- columna 1 -->
						<div class="col-sm-12 col-md-6" style="background-color: #fff;"> 

							<div class="row" style="padding: 1em;">
								<h3>Actuador Neumático Tipo-14</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									 
									<div class="col-xs-12 col-md-6 flex-child">

										<img src="{{ asset('img/actuadores/tipo14.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	Diámetros: ½” - 2”. </p>
											<p>	Modelos: Aire-Aire, Aire-Resorte. </p>
											<p>	Indicador: Indicador visual superior de posición de la válvula. </p>
											<p>	Topes de Carrera: Topes de carrera ajustables previenen el sobre-apriete del diafragma. </p>
											<p> Cuerpos: PVC, CPVC,PP y PVDF. </p>
											<p> PPG. </p>
											
													
									</div>								
								</div>	
							</div>		
												
								
						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- columna 2 -->
						<div class="col-sm-12 col-md-6" style="background-color: #fff">

							<div class="row" style="padding: 1em;">
								<h3>Actuador Neumático serie 79</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									 
									<div class="col-xs-12 col-md-6 flex-child">

										<img src="{{ asset('img/actuadores/serie79.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	Diámetros: ½” - 2”. </p>
											<p>	Modelos: Aire-Aire, Aire-Resorte. </p>
											<p>	Cuerpos: Poliamida reforzada con vidrio, Aluminio, Acero Inoxidable 316.</p>
											<p> Construcción: Doble pistón, doble cremallera/piñón.</p>
											<p> Indicador: Indicador visual de posición. </p>
											<p> Opciones: Posicionadores, Solenoides, Interruptores de Límites, Caja de engranajes para anulación manual desembragable, topes de carrera. </p>
													
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