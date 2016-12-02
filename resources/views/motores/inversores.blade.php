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
						<h1><span>Inversores</span> </h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Inversores</div>
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
					
					<h1 style="margin-bottom: 0;margin-top: 0;"><span>Inversores</span> </h1>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Inversores </div>
				</div>
			</div>
		</div>
	</div>
 -->
	<div class="container">
		<div class="row">
						
			<div class="col-xs-3" >
				<div class="row" >


					<div class="col-xs-12" style="background-color: #fff; padding:2em;padding-top: 1em; padding-left: 1em; padding-right: 0; border: 1px solid;box-shadow: 1px 1px 1px;">
					
						<h4 style="display: inline-block; margin-left: 15px; line-height: 24px; text-shadow: 2px 2px 1px #ddd;font-size: 20px;" > Inversores </h4> 
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
				<div class="row" style="padding: 1em;   padding-top: 0;   padding-right: 0;">
					
					<div id="itemTermo" class="col-xs-12" style="background-color: #fff; padding: 0;">	

						<div style="padding-left: 15px; padding-right: 15px;">
							<h2> Inversores </h2>
							
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
								<h3>NEO WIFI</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									 
									<div class="col-xs-12 col-md-6 flex-child">

										<img src="{{ asset('img/motive/prodotti-neowifi.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	NEO-WiFi es un sistema patentado, fácil de usar, con IP65, mando extraíble y con control remoto inalámbrico, alimentado por inducción cuando se encuentra en su compartimento en el motor o por baterías de litio recargables.  </p>

											<!-- <p>	Se considera un sistema competitivo e intuitivo integrado llave en mano, para cualquier pieza, motor, inverter y mandos diseñados para el uso en exteriores, y con control remoto de serie. De esta forma los fabricantes de bombas, ventiladores y otras máquinas pueden ofrecer un producto acabado “plug-in”, sin delegar a sus clientes operaciones de instalación riesgosas y costosas. Sus clientes solo tendrán que conectar el enchufe, donde quiera que se instale, y decidir si quieren llevar consigo el teclado.</p> -->
											
													
									</div>								
								</div>	
							</div>		

							<div class="row" style="padding: 1em;">
								<h3>NEO PUMP</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									 
									<div class="col-xs-12 col-md-6 flex-child">

										<img src="{{ asset('img/motive/prodotti-neopump.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	Evolución del famoso sistema de control remoto patentado “NEO-WiFi” el NEO-PUMP está diseñado para el control automático de sistemas de presión hidráulicos. </p>								
											 
											<!-- <p>
												Motive enumera 7 razones principales que llevaron a la creación de NEO-PUMP. 
												Motive 1: menos equipamiento Con NEO-PUMP no es necesaria la instalación de:
												• grifos / válvulas
												• Armarios o cuadros estancos de control• Contactores de potencia
												• Protección con interruptores automáticos de sobrecarga en el motor
												• Relés de control para el motor

												Motive 2: Ahorro de energía Con los sistemas tradicionales, el consumo energético es la suma de las potencias nominales del total de las bombas instaladas, sin importar cuál es el consumo de caudal necesario o utilizado instantáneamente. Con NEO-PUMP, la potencia consumida es proporcional a la cantidad de agua necesaria en cada momento.

												Motive 3: Arranque suave Los sistemas tradicionales trabajan con el arranque a plena potencia, provocando una sobrecorriente. NEO-PUMP cuenta con arranque suave

												Motive 4: Para el correcto funcionamiento de las bombas, los sistemas de control tradicionales requieren un sofisticado sistema de parametrización y ajustes de valores iniciales.NEO-PUMP es mucho más sencillo, se instala automáticamente mediante un autotuning, analizando la curva de trabajo y parámetros específicos de la bomba en 90 segundos, sin necesidad de ningún cálculo ni ajustes manuales.

												Motive 5: Trabajo de cada una de las bombas alternado para maximizar la vida útil de cada equipo.

												Motive 6: control e interface via wifi keypad, via PC, via PLC e incluso via smartphone.

												Motive 7: NEO-PUMP ajusta automáticamente el sistema de presión hidráulica sin necesidad de
											</p> -->
									</div>								
								</div>	
							</div>	
												
								
						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- columna 2 -->
						<div class="col-sm-12 col-md-6" style="background-color: #fff">

							<div class="row" style="padding: 1em;">
								<h3>NEO Solar</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									 
									<div class="col-xs-12 col-md-6 flex-child">

										<img src="{{ asset('img/motive/prodotti-neosolar.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >			

											<p>	NEO-SOLAR es un nuevo sistema inverter patentado para el control, mando y regulación de velocidad de motores asíncronos y bombas trifásicas. </p>
										<!-- 	<p>	Las carcasas son de aleación de aluminio inyectado. </p> -->

											<p>	Puede ser alimentado directamente por los paneles solares: no pide la instalaciòn de estabilizadores de voltaje y baterías Puede integrarse directamente al motor de CA trifásico o montarse en la pared, sin necesidad de construir cuadros eléctricos de protección ya que la protección natural es IP65. </p>

										<!-- 	<p>	Puede funcionar en dos modos:

											1. tipo isla: sin conexión a la red. 

											2. híbrido panel/red: gracias al dispositivo opcional POWER-BOX, NEO-SOLAR-3 utilizará automática y proporcionalmente la energía fotovoltaica disponible, compensando la energía restante con la proveniente de la red o del generador.

											Unas ventajas de NEO-SOLAR con respecto a las bombas CC clásicas:

											Puede trabajar con una amplia gama de motores ya instalados, ya que generalmente estos son motores de CA asíncronos, por lo tanto no es necesario sustituirlos. De hecho, el motor asíncrono es el más utilizado y económico y puede alcanzar eficiencias notables (IE3) especialmente en dimensiones medio-grandes.

											La instalación y el mantenimiento del sistema son accesibles y conocidos por los técnicos de todo el mundo.

											Con respecto a las bombas con motor de corriente continua los amperajes son inferiores, la sección de los cables es inferior y tienen menos pérdidas de tensión en el cable.

											NEO-SOLAR se puede conectar simultáneamente a paneles solares y a la red eléctrica y/o a un generador, para compensar una eventual irradiación solar insuficiente o durante la noche.

											Potencia máxima más elevada, hasta 11kW</p> -->
													
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