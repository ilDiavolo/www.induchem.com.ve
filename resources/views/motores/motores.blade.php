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
						<img src="{{ asset('img/termo.png') }}" height="63" width="63">
					</div>

					<div class="bar-title">
						<h1><span>Motores</span> </h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Motores</div>
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
					
					<h1 style="margin-bottom: 0;margin-top: 0;"><span>Motores</span> </h1>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Motores </div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="container">
		<div class="row">
						
			<div class="col-xs-3" >
				<div class="row">


					<div class="col-xs-12" style="background-color: #fff; padding:2em;padding-top: 1em; padding-left: 1em; padding-right: 0; border: 1px solid;box-shadow: 1px 1px 1px;">
					
						<h4 style="display: inline-block; margin-left: 15px; line-height: 24px;text-shadow: 2px 2px 1px #ddd; font-size: 20px;" > Motores </h4> 
						<img src="{{ asset('img/motive/motive.png') }}" class="" style="vertical-align: sub; height: 24px; margin-left: 10px; width: 124px; display: inline-block;">  

						<div style="padding-left: 1em; padding-right: 1em;"> <hr style="margin-top: 0px;margin-bottom: 12px;" > </div>
						
						<ul class="list-unstyled" style="padding-left: 1em; margin-top: 7px;">
							<li style="margin-bottom: 4px;" > <a id="fotoSideTermo" style="color: #000;font-size: 16px;" href="{{ url('motores') }}">Motores</a> </li>
							<li style="margin-bottom: 4px;" > <a id="fotoSideTermo" style="color: #000;font-size: 16px;" href="{{ url('inversores') }}">Inversores</a> </li>
							<li> <a id="fotoSideTermo" style="color: #000;font-size: 16px;" href="{{ url('reductores') }}">Reductores</a> </li>
						</ul>
						<div style="padding-left: 1em; padding-right: 1em;"> <hr style="margin-top: 0px;margin-bottom: 12px;" > </div>
					</div>
					
						
					
						
				</div>


			</div>
			
			<div class="col-xs-9">
				<div class="row" style="padding: 1em; padding-top: 0; padding-right: 0;">
					
					<div id="itemTermo" class="col-xs-12" style="background-color: #fff; padding: 0;">	

						<div style="padding-left: 15px; padding-right: 15px;">
							<h2> Motores </h2>
							
							<div class="media" style="margin-top: 20px;margin-bottom: 7px;" >
								<div class="media-left media-middle">
									<img src="{{ asset('img/motive/motive.png') }}" class=" media-object">
							  	</div>
								<div class="media-body media-middle">
									<!-- <h4 class="media-heading">Media heading</h4> -->
								    <p style="line-height: 14px;font-size: 13px;"> Motive nace en el año 2000 del grupo RIB, uno de los líderes mundiales en el sector de los sistemas de apertura automáticos, con el propósito de transferir la tecnología y el Know How madurados en 35 años de experiencia en el mercado de los motores eléctricos y reductores de uso industrial.</p>
								</div>
							</div>					
						</div>

						<!-- columna 1 -->
						<div class="col-sm-12 col-md-6" style="background-color: #fff;"> 

							<div class="row" style="padding: 1em;">
								<h3>Motores Trifàsicos Serie DELPHI</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									 
									<div class="col-xs-12 col-md-6 flex-child">

										<img src="{{ asset('img/motive/prodotti-delphi.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	Los motores motive estàn construidos segùn as normas internacionales de unificaciòn; Cada medida de cada forma constructiva, ha sido deducida teniendo comoreferencia los cu adros relativos a la norma IEC 72-1. </p>

											<p>	Características: </p>
											<p>	- Multitensiòn 230/400V o 400/690V </p>
											<p>	- Multifrecuencia 50/60Hz clase de aislamiento F </p>
											<p>	- Servicio continuo S1 </p>
											<p>	- Clase de eficiencia 1 ò 2 tropicalizados </p>
											
													
									</div>								
								</div>	
							</div>		

							<div class="row" style="padding: 1em;">
								<h3>Motores Autofrenantes DELPHI AT</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									 
									<div class="col-xs-12 col-md-6 flex-child">

										<img src="{{ asset('img/motive/prodotti-autofrenanti.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	Los motores autofrenantes serie Delphi ATDC, AT24, ATTD y ATTD24 prevén el empleo de frenos a presión de resortes alimentados con corriente continua, sólidamente fijos en un escudo de hierro fundido en la parte posterior del motor. En ellos se montan de serie distintos dispositivos, que generalmente se consideran opcionales en otras marcas. </p>								
											<!-- <p>
											- La palanca de desbloqueo manual, que consiente el desbloqueo del freno y la posibilidad de maniobra en ausencia de alimentación.
											- Termoprotectores bimetálicos PTO sumergidos en el bobinado de los motores hasta la talla 132 y termistores PTC desde la talla 160 en adelante.
											- La fácil alimentación separada del freno en el caso que el motor esté alimentado por inverter. 
											- Los rectificadores de los motores ATDC y ATTD están provistos, en efecto, de caja de bornes para esta finalidad, mientras que los AT24 y ATTD24 están dotados de frenos a 24V a fin de que las salidas 24V separadas puedan alimentarlos; la mayor parte de los inverter están dotados de estas salidas.
												A pedido, es posible silenciar los frenos para utilizarlos en ambientes particulares, como los teatros. 
											DESCRIPCIÓN DEL FRENO
											Los motores de la serie Delphi ATDC, están dotados de un freno electromagnéticocon funcionamiento negativo, su acción frenante se ejerce en ausencia de alimentación. La clase de aislamiento de estos frenos es la clase F. El empaque de di fricción (ferodo) no posee asbesto, según las más recientes Directivas Comunitarias en materia de Igiene y Seguridad del Trabajo. El enderezador es de tipo en Mosfet, con varistores de protección que entran y salen. Todos los cuerpos de freno están protegidos contra agresiones atmosférica através de barnices e/o galvanización. Las partes más expuestas a desgaste están tratadas en atmó sferas especiales que donan propiedades resaltantes de resistencia al desgaste de las mismas.</p> -->
									</div>								
								</div>	
							</div>	
												
								
						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- columna 2 -->
						<div class="col-sm-12 col-md-6" style="background-color: #fff">

							<div class="row" style="padding: 1em;">
								<h3>Motores Monofásicos serie MONO</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									 
									<div class="col-xs-12 col-md-6 flex-child">

										<img src="{{ asset('img/motive/prodotti-mono.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	Los motores motive están construidos según las normas internacionales de unificación; Cada medida de cada forma constructiva, ha sido deducida teniendo como referencia los cuadros relativos a la norma IEC 72-1. </p>
										<!-- 	<p>	Las carcasas son de aleación de aluminio inyectado. </p> -->

											<p>	Todos los motores MONO son: monofásica 230V 50Hz. A petición 60Hz y voltajes especiales clase de aislamiento F, (H a pedido) servicio continuo S1, protección IP55, (IP56, 66 y 67 a pedido) a petición condensador extra para  </p>
													
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