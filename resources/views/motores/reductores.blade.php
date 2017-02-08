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
						<h1><span>Reductores</span> </h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Reductores</div>
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
					
					<h1 style="margin-bottom: 0;margin-top: 0;"><span>Reductores</span> </h1>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Reductores </div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="container">
		<div class="row">
						
			<div class="col-xs-3" >
				<div class="row" >

					<div class="col-xs-12" style="background-color: #fff; padding:2em;padding-top: 1em; padding-left: 1em; padding-right: 0; border: 1px solid;box-shadow: 1px 1px 1px;">
					
						<h4 style="display: inline-block; margin-left: 15px; line-height: 24px;text-shadow: 2px 2px 1px #ddd; font-size: 20px;" > Reductores </h4> 
						<img src="{{ asset('img/motive/motive.png') }}" class="" style="vertical-align: sub; height: 24px; margin-left: 10px; width: 124px; display: inline-block;">  
						<div style="padding-left: 1em; padding-right: 1em;"> <hr style="margin-top: 0px;margin-bottom: 12px;" > </div>
						<ul class="list-unstyled" style="padding-left: 1em; margin-top: 7px;">
							<li style="margin-bottom: 4px;" > <a id="fotoSideTermo" style="color: #000;font-size: 16px;" href="{{ url('motores') }}">Motores</a> </li>
							<li style="margin-bottom: 4px;" > <a id="fotoSideTermo" style="color: #000;font-size: 16px;" href="{{ url('inversores') }}">Inversores</a> </li>
							<li> <a id="fotoSideTermo" style="color: #000;font-size: 16px;" href="{{ url('reductores') }}">Reductores</a> </li>
						</ul>
						<div style="padding-left: 1em; padding-right: 1em;"> <hr style="margin-top: 0px;margin-bottom: 12px;" > </div>
					</div>

					<div class="col-xs-12">
						<br>
					</div>
									
			
						
				</div>

			</div>
			
			<div class="col-xs-9">
				<div class="row" style="padding: 1em;padding-top: 0;padding-right: 0;">
					
					<div id="itemTermo" class="col-xs-12" style="background-color: #fff; padding: 0;">	

						<div style="padding-left: 15px; padding-right: 15px;">
							<h2> Reductores </h2>
							
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
								<h3>Coaxial ROBUS-25-60</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/motive/reductores/prodotti-robus25-60.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	ROBUS es la nueva gama de motive de reductores coaxiales de hierro fundido, con una capacidad de hasta 4300Nm. </p>		
									</div>								
								</div>	
							</div>		


							<div class="row" style="padding: 1em;">
								<h3>Reductor Ortogonal ENDURO</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/motive/reductores/prodotti-enduro.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	ENDURO es el nuevo reductor de engranajes ortogonales de hierro  endurofundido. Tres tamaños con una capacidad de hasta 600Nm. </p>
									</div>								
								</div>	
							</div>

							<div class="row" style="padding: 1em;">
								<h3>Reductor Pendular STON</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/motive/reductores/prodotti-ston.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	STON es el nuevo reductor de ejes paralelos y pendulares de hierro fundido. Tres tamaños con una capacidad de hasta 700Nm. </p>		
									</div>								
								</div>	
							</div>
											
								
						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- columna 2 -->
						<div class="col-sm-12 col-md-6" style="background-color: #fff">

							<div class="row" style="padding: 1em;">
								<h3>Sinfin Corona Serie BOX</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/motive/reductores/prodotti-box.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	La nueva serie patentada BOX de reductores sinfín corona está realizada con carcasas boxdefundición de aluminio en los tamaños 25 a 90 y en fundición desde el tamaño 150. </p>
											<p> Todos los BOX se pueden instalar en cualquier posición sin especificar nada en el pedido. </p>

									</div>								
								</div>	
							</div>

							<div class="row" style="padding: 1em;">
								<h3> Sinfin Corona Serie BOX </h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/motive/reductores/prodotti-stadio.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-mdLa fabricación de STADIO es modular y por lo tanto puede ser entregada como un grupo separado para montar en cualquier tipo de motoreductor predispuesto (PAM). -6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	La fabricación de STADIO es modular y por lo tanto puede ser entregada como un grupo separado para montar en cualquier tipo de motoreductor predispuesto (PAM).  </p>
											<p> No es necesario el pre-montaje de un piñón en el árbol motor.  </p>
											<p> Entregados con lubrificante sintético. No se requiere ningún mantenimiento. </p>
											<p> STADIO no se puede utilizar sola, sino acoplada con otro reductor. </p>	
											<p> los engranajes son de acero 20MnCr5 (UNI7846) cementados, templados (HRC59-63) y adecuadamente rectificados en el evolvente. </p>		
									</div>								
								</div>	
							</div>	

							<div class="row" style="padding: 1em;">
								<h3>Reductores VARIO</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/motive/reductores/prodotti-vario.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	Los nuevos variadores mecánicos planetarios patentados de la serie VARIO se han realizado con una carcasa moldeada a presión de aluminio de 3 tamaños, small, medium y large, respectivamente para motores IEC63, 71 y 80. </p>

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