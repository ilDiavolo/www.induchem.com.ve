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

			<div class="col-xs-8" >
				<div class="row">

					<div class="col-md-12" style="background-color: whitesmoke; padding: 0px; ">

						<img class="img-responsive" src="{{ asset('img/img248.jpg') }}" alt="trabajadores" >

					</div>


					<div class="col-xs-12" style="background-color: whitesmoke; padding: 0px">
						<h3 style="background-color: darkgrey; padding: 2px; color: brown;padding-top: 5px;padding-right: 25px;padding-left: 25px;padding-bottom: 5px; margin-top: 0px;" >Quiénes Somos ?</h3>

						<p class="text-justify">
							INDUCHEM C.A., es una empresa de capital netamente Nacional, fundada en el año 1995. Desde sus inicios enfatizó su gestión a la fabricación y comercialización de productos de uso industrial para la limpieza y desinfección, estando siempre comprometidos con el mejoramiento continuo de nuestros procesos, garantizando la satisfacción de las necesidades y requerimientos de nuestros clientes, lo que nos llevó a ampliar el negocio a diversas líneas como la distribución de blanqueadores ópticos, fluidificantes, aditivos para detergentes, productos para la potabilización de aguas y el tratamiento de efluentes. 
						</p>

						<p class="text-justify">
							En los últimos años, partiendo de necesidades internas surgieron nuevos negocios como el servicio de transporte y almacenamiento de productos corrosivos líquidos y la construcción de tanques y equipos plásticos, así como la comercialización de válvulas, tuberías, bombas y máquinas de soldadura bajo norma DVS, brindando un servicio personalizado que se adapta a las necesidades de cada cliente.
						</p>
		
						<p class="text-justify">
							Para ello contamos con nuestros aliados comerciales nacionales Pequiven, Cavim, Ácidos y Minerales, Hessa Chemical y Eka Chemical. Y somos representantes exclusivos para Venezuela y el Caribe de 3V Sigma, Disproquin, Ashai America, Simona, Affetti, Pompe Cuchi, Widos, Munsch y Plast-o-Matic.
						</p>
					</div>
					

					<div class="col-xs-12" style="padding: 0px;  ">
						<img src="{{asset('img/Imagen8.png')}}" class="img-responsive" >
					</div>
				
				</div>				
				
			</div>

			<div class="col-xs-4" >
				
				<div class="row" style="margin-top: 32px;">
					
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
	p{
		padding-right: 25px;
	    padding-left: 25px;
	    padding-bottom: 5px;
		font-size: 13px;

	}
	#bg{
		background: url('{{ asset('img/vbb.jpg') }}');
	    background-size: cover;
	}
</style>