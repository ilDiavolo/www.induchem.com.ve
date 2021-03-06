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
	
	<div class="container" style="margin-top: 15px;">
		
		<div class="row">

			<div class="col-xs-4" >
				<div class="row">
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
					

					<div class="col-xs-12" style="padding: 0px; overflow: hidden; height: 327px;">
						<img src="{{asset('img/mvv.png')}}" class="img-responsive" width="100%">
					</div>
				
				</div>
				 
				 <!--  -->

			</div>

			<div class="col-xs-8">
				<div class="col-md-12" style="background-color: whitesmoke; padding: 0px; ">

					<img class="img-responsive" src="{{ asset('img/empleados.jpg') }}" alt="trabajadores" >

				</div>
				
				<div class="col-md-6" >
					
					<div style="background-color: whitesmoke; padding: 0px">
						<h3 style="background-color: darkgrey; padding: 2px; color: brown;padding-top: 5px;padding-right: 25px;padding-left: 25px;padding-bottom: 5px;" >Misión</h3>

						<p class="text-justify">
							Fabricar y comercializar productos químicos de uso industrial, prestar servicios de transporte y almacenamiento de productos corrosivos líquidos, construir tanques y equipos termoplásticos, así como distribuir accesorios y máquinas de soldadura termoplástica, brindando un servicio personalizado que se adapte a las necesidades de cada cliente.
						</p>						
					</div>

					<div style="background-color: whitesmoke; padding: 0px">
						<h3 style="background-color: darkgrey; padding: 2px; color: brown;padding-top: 5px;padding-right: 25px;padding-left: 25px;padding-bottom: 5px;" >Visión</h3>

						<p class="text-justify">
							Ser una empresa reconocida en Venezuela y el Caribe por la calidad de sus productos y servicios que ofrece a sus clientes.
						</p>						
					</div>

					<div style="font-size: 12px;background-color: whitesmoke; padding: 0px; padding-bottom: 5px;">
						<h3 style="background-color: darkgrey; padding: 2px; color: brown;padding-top: 5px;padding-right: 25px;padding-left: 25px;padding-bottom: 5px;" >Valores</h3>

						
							<ul>
								<li>Ética</li>
								<li>Responsablidad</li>
								<li>Sentido de Pertenencia</li>
								<li>Respeto</li>
							</ul>
												
					</div>
					
					
				</div>
				<div class="col-md-6">

					<div style="background-color: whitesmoke; padding: 0px">


						<h3 style="background-color: darkgrey; padding: 2px; color: brown;padding-top: 5px;padding-right: 25px;padding-left: 25px;padding-bottom: 5px;" >Política Integrada</h3>

						<p class="text-justify">						
							INDUCHEM C.A enfatiza su gestión en la fabricación, comercialización y representación de productos químicos de uso industrial; así como la prestación de servicio de transporte y almacenamiento, además de la fabricación y comercialización de tanques, equipos y accesorios para el manejo de productos corrosivos. Cuenta con un sistema de gestión integrado de la calidad, BPM y Seguridad, que mejora continuamente sus procesos, cumple con las normas de BPM y la política de seguridad y salud ocupacional, dando respuesta oportuna y apoyo técnico a nuestros clientes para mejorar la satisfacción de sus necesidades y expectativas, custodiando nuestra cadena de suministros nacional para garantizar la entrega de productos, con personal competente, comprometido con nuestros valores y así lograr el éxito sostenido de la organización.
						</p>

					</div>
				</div>

			</div>
			
		</div>

	</div>		
	
	<br>
	<hr><br>

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
</style>