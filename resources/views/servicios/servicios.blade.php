<!DOCTYPE html>
<html>
<head>
	@include('layout.head')
	<title></title>
</head>

<style type="text/css">	
	
	/* tamaño de la imagen que en la cabecera*/
	.bar-icon { 
	    width: 80px;
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

	.bar .breadcrumbs {
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
						<img src="{{ asset('img/icono-servicios.png') }}" height="63" width="63">
					</div>

					<div class="bar-title">
						<h1><span>Servicios</span> </h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Servicios</div>
				</div>

				<div class="col-sm-5 col-xs-12 bar">
					<!-- <div>
						<i class="ion-ios-telephone-outline" style="font-size: 55px;float: left;line-height: 5px; width: 44px;padding-right: 5px;"></i>
						
					</div>

					<div class="bar-title">
						<h4 style="margin-top: 5px; margin-bottom: 0px;">Telf. Master: +58 (245) 564 88 98</h4>
						<h4 style="margin-top: 2px;">Fax: +58 (245) 565 03 54</h4>
						
					</div> -->
					
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
					
					<h1 style="margin-bottom: 0;margin-top: 0;"><span>Servicios</span> </h1>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Servicios </div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="container">
		<div class="row">
					
			<div class="col-xs-12">
				<div class="row">
					
					<div id="itemTermo" class="col-xs-12" style="background-color: #fff; padding: 0;">	

						<div style="padding-left: 30px; padding-right: 30px;">
						<br>
							<h2 style="text-align: center; font-family: Arial, Helvetica, sans-serif;margin-bottom: 20px;font-weight: 700;letter-spacing: 0px;" >Servicios y soluciones para la Industria hechos a tus necesidades </h2>	
								
							<!-- <div class="media" style="margin-top: 20px;margin-bottom: 7px;" >
								<div class="media-left media-middle">
									<img src="{{ asset('img/termoplasticos/menu/asahi.png') }}" class=" media-object">
							  	</div>
								<div class="media-body media-middle">
									
								    <p style="line-height: 14px;font-size: 13px;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div> -->					
						</div>

						<!-- servicio 1 -->
						<div class="col-sm-12 col-md-4" style="background-color: #fff;"> 

							<div class="row" style="padding: 1em;">
							
								<div class="col-sm-12">
								    <div class="thumbnail">
									    <img src="{{ asset('img/servicios/servicio01.png') }}" alt="...">
									    <div class="caption">
											<h3>Transporte</h3>
											<p>Ofrecemos Servicios de Transporte de Materiales Peligrosos y Controlados tales como:</p>
											<ul class="list-unstyled">
												<li>
												<i class="ion-ios-arrow-right" style="font-size: 17px; margin-right: 8px;"></i>Ácido Clorhídrico
												</li>

												<li>
												<i class="ion-ios-arrow-right" style="font-size: 17px; margin-right: 8px;"></i>Ácido Sulfúrico
												</li>

												<li>
												<i class="ion-ios-arrow-right" style="font-size: 17px; margin-right: 8px;"></i>Gas Cloro
												</li>

												<li>
												<i class="ion-ios-arrow-right" style="font-size: 17px; margin-right: 8px;"></i>Hidróxido de Sodio
												</li>
											</ul>
											<!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
										</div>
									</div>																		
								</div>	

							</div>

						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- servicio 2 -->
						<div class="col-sm-12 col-md-4" style="background-color: #fff">

							<div class="row" style="padding: 1em;">

								<div class="col-sm-12">
								    <div class="thumbnail">
									    <img src="{{ asset('img/servicios/servicio02.png') }}" alt="...">
									    <div class="caption">
											<h3> Almacenamiento </h3>
											<p>Para nuestros clientes que necesitan más capacidad de Almacenamiento de Productos a Granel Líquidos, ofrecemos almacenamiento de sus productos en nuestros tanques que tenemos a disposición en nuestra nueva sede, ubicada también en Guacara, donde el cliente podrá tener control del inventario de su producto en el momento que lo desee.</p>
											<!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
										</div>
									</div>																		
								</div>

							</div>
						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- servicio 3 -->
						<div class="col-sm-12 col-md-4" style="background-color: #fff">

							<div class="row" style="padding: 1em;">

								<div class="col-sm-12">
								    <div class="thumbnail">
									    <img src="{{ asset('img/servicios/servicio03.png') }}" alt="...">
									    <div class="caption">
											<h3> Montaje de Taques </h3>
											<p>Induchem ofrece diferentes soluciones en el área de termoplásticos, tales como:</p>
											<ul class="list-unstyled">
												<li>
												<i class="ion-ios-arrow-right" style="font-size: 17px; margin-right: 8px;"></i>Fabricación y Comercialización de Tanques.
												</li>

												<li>
												<i class="ion-ios-arrow-right" style="font-size: 17px; margin-right: 8px;"></i> Equipos y accesorios para productos corrosivos.
												</li>

												<li>
												<i class="ion-ios-arrow-right" style="font-size: 17px; margin-right: 8px;"></i> Revestimiento de Tanques, Fosas y Cisternas.
												</li>

												<li>
												<i class="ion-ios-arrow-right" style="font-size: 17px; margin-right: 8px;"></i> Instalación de Tuberías, Válvulas, Bombas, etc.
												</li>
											</ul>
											<!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
										</div>
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