<!DOCTYPE html>
<html>
<head>
	@include('layout.head')
	<title></title>
</head>
<body>
	
	<header>	
		@include('home.navbar-op5')
	</header>
	

	<div class="container-fluid" id="bg">
	<div class="container" style="padding-top: 3em; padding-bottom: 5em;">
		
		<div class="row">			

			<div class="col-xs-8" id="vv">
				<div class="row">

				<div class="col-xs-12">
				
					<div style="background-color: rgba(245, 245, 245, 0.90); padding-top: 15px;padding-bottom: 15px;margin-top: 24px;margin-bottom:10px;">

						<h3 style="border-bottom: 1px solid #ccc;color: brown; margin-left: 24px; margin-right: 25px;    margin-top: 10px; margin-bottom: 13px;padding-bottom: 3px;" >Política Integrada</h3>

						<p class="text-justify">						
							INDUCHEM C.A enfatiza su gestión en la fabricación, comercialización y representación de productos químicos de uso industrial; así como la prestación de servicio de transporte y almacenamiento, además de la fabricación y comercialización de tanques, equipos y accesorios para el manejo de productos corrosivos. Cuenta con un sistema de gestión integrado de la calidad, BPM y Seguridad, que mejora continuamente sus procesos, cumple con las normas de BPM y la política de seguridad y salud ocupacional, dando respuesta oportuna y apoyo técnico a nuestros clientes para mejorar la satisfacción de sus necesidades y expectativas, custodiando nuestra cadena de suministros nacional para garantizar la entrega de productos, con personal competente, comprometido con nuestros valores y así lograr el éxito sostenido de la organización.
						</p>

					</div>
					</div>
			
				</div>				
				
			</div>

			<div class="col-xs-4" >
				
				<div class="row" style="margin-top: 14px;">
					
					<div class="col-sm-12 text-center" style="padding: 0;  padding-top: 1em;   margin-left: 1em;">
						<h2 style="margin-top: 0;border-bottom: 1px solid #ccc; padding-bottom: 17px;">Nosotros</h2>
						<ul class="list-unstyled" style="margin-top: 27px;">
							<li><a href="{{ url('quienes') }}" class="active"><h4>Quiénes Somos?</h4></a></li>
							
							<li> <a href="{{ url('vision') }}"> <h4>Misión, Visión y Valores</h4> </a></li>
						
							<li><a href="{{ url('politica') }}" style="margin-bottom: 2px;"><h4>Política Integrada</h4></a></li>		

							<li> <a href="{{ url('home') }}"> <i class="ion-ios-home-outline" style="font-size: 32px;"></i> </a> </li>			   
						    
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
	
	#vv{
		background: url('{{ asset('img/h1.png') }}');
	    background-size: cover;
	}

	#bg{
		background: url('{{ asset('img/vbb.jpg') }}');
	    background-size: cover;
	}

	p{
		padding-right: 25px;
	    padding-left: 25px;
	    padding-bottom: 5px;
		font-size: 13px;

	}
</style>