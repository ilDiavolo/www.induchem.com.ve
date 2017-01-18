<!DOCTYPE html>
<html>
<head>
	@include('layout.head')
	<title></title>
</head>


<style type="text/css">	


	#navPrincipal{
		margin-bottom: 0px;
	}

	/* tamaño de la imagen que en la cabecera*/
	.bar-icon { 
	    width: 4em;
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
</style>

<body>
	
	<header>	
		@include('home.navbar-op5')
	</header>
	
	
	<div class="container-fluid" style="height: 89px;">

		<div class="row welcome_bar">
			<div class="container">
				<div class="col-sm-7 col-xs-12 bar">
					<div class="bar-icon">
						<i class="ion-ios-people-outline" style="font-size: 55px;float: left;line-height: 5px; width: 44px;padding-right: 5px;"></i>		
						<!-- <img src="{{ asset('img/icon_contact.png') }}" height="63" width="63"> -->
					</div>

					<div class="bar-title">
						<h1><span>Nosotros</span> </h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Misión, Visión y Valores</div>
				</div>

				<div class="col-sm-5 col-xs-12 bar">
					<!-- <div>
						<i class="ion-ios-telephone-outline" style="font-size: 55px;float: left;line-height: 5px; width: 44px;padding-right: 5px;"></i>					
					</div>

					<div class="bar-title">
						<h4 style="margin-top: 5px; margin-bottom: 0px;">Telf. Master: +58 (245) 564 88 98</h4>
						<h4 style="margin-top: 2px;">Fax: +58 (245) 565 03 54</h4>
						
					</div>	 -->			
				</div>

			</div>
		</div>

	</div>

	<div class="container-fluid" id="bg">
		<div class="container" style="padding-top: 3em; padding-bottom: 3em;">

		<div class="row" style="padding: 20px 30px; background-color: rgba(245, 245, 245, 0.78);  margin-top: 108px; border: 1px solid #f5f5f5;">			
			<div class="col-xs-9" id="vv">
				<div class="row">

					<div class="col-xs-12" style="padding-right: 0">
						
						<div style="margin-top: 24px;padding: 1em; padding-right: 0;">
							<h1 style="border-bottom: 1px solid #ccc;color: brown; margin-left: 24px; margin-right: 25px;    margin-top: 10px; margin-bottom: 3px;padding-bottom: 3px;" >Misión</h1>

							<p class="text-justify" style="padding-top: 15px; padding-bottom: 15px;">	
								Fabricar y comercializar productos químicos de uso industrial, prestar servicios de transporte y almacenamiento de productos corrosivos líquidos, construir tanques y equipos termoplásticos, así como distribuir accesorios y máquinas de soldadura termoplástica, brindando un servicio personalizado que se adapte a las necesidades de cada cliente.
							</p>						
						<!-- </div>

						<div style="background-color: rgba(245, 245, 245, 0.90); padding-top: 15px;padding-bottom: 10px;margin-bottom:10px;"> -->
							

							<h1 style="border-bottom: 1px solid #ccc;color: brown; margin-left: 24px; margin-right: 25px;    margin-top: 10px; margin-bottom: 3px;padding-bottom: 3px;" >Visión</h1>

							<p class="text-justify" style="padding-bottom: 15px; padding-top: 5px;">
								Ser una empresa reconocida en Venezuela y el Caribe por la calidad de sus productos y servicios que ofrece a sus clientes.
							</p>						
						<!-- </div>

						<div style="background-color: rgba(245, 245, 245, 0.90); padding-top: 15px;padding-bottom: 15px;margin-bottom:10px;"> -->
				
							<h1 style="border-bottom: 1px solid #ccc;color: brown; margin-left: 24px; margin-right: 25px;    margin-top: 10px; margin-bottom: 3px;padding-bottom: 3px;" >Valores</h1>

							
								<ul style="padding-bottom: 15px; padding-top: 5px;padding-left: 35px;">
									<li>Ética</li>
									<li>Responsablidad</li>
									<li>Sentido de Pertenencia</li>
									<li>Respeto</li>
								</ul>
													
						</div>

					</div>
										
				</div>				
				
			</div>

			<div class="col-xs-3" >
				
				<div class="row" >
					
						<div class="col-sm-12" style="padding: 0;  padding-top: 2em;padding-right: 1em;margin-top: 18px;">
						<h3 style="margin-bottom: 0;font-size: 26px;">Nosotros</h3>
						<ul class="list-unstyled ua" style="margin-top: 20px;">
							<li><a href="{{ url('quienes') }}" class="active"><h4 class="sideh4" >Quienes Somos</h4></a></li>
							
							<li> <a href="{{ url('vision') }}"> <h4 class="sideh4">Misión, Visión y Valores</h4> </a></li>
						
							<li><a href="{{ url('politica') }}" style="margin-bottom: 2px;"><h4 class="sideh4">Política Integrada</h4></a></li>		

							<li class="text-center" style="margin-top: 5px"> <a href="{{ url('home') }}"> <i class="ion-ios-home-outline" style="font-size: 32px;"></i> </a> </li>			   
						    
						</ul>
						
					</div>

				</div>

			</div>

		</div>
		</div>

	</div>		
	
	<br>
	
</body>

<footer>
	@include('layout.footer')
</footer>

</html>

<style type="text/css">
	
	.sideh4{
		border-bottom: 1px solid #ccc;
    	padding-bottom: 3px;
	}
	
	.ua li a:hover{
		text-decoration: none;
	}

	#bg{
		background: url('{{ asset('img/ffv31.png') }}');
	    background-size: 100% auto;
	    background-repeat: no-repeat;
	}

	p{
		padding-right: 25px;
	    padding-left: 35px;
	    padding-bottom: 5px;
		font-size: 13px;
	}
	
</style>