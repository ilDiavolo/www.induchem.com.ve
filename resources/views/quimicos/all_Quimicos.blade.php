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

	<div class="container">
		
		<div class="container" id="productos">

			<div class="row">
						
				<div class="col-xs-12">
					<br>

					@if(session('success'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							{{ session('success') }}
						</div>
					@endif

					<br>
					<br>
					<h1 class="text-center">Lineas de Productos</h1>
					<hr>
				</div>		
				
				<div class="col-md-4">
					
					<h2>Abrillantadores Desoxidante</h2>
					<a href="">CHEM BRILLINOX</a>

					<h2>Bactericidas</h2>
					<a href="">CHEM GEL SANITIZER</a>

					<h2>Bactericida amonio cuaternario</h2>
					<a href="">CHEM ALGICIDA AMONIO CUATERNARIO</a>
					<a href="">CHEM QUAT</a>

					<h2>Bactericidas clorados</h2>
					<a href="">CHEM CLORO DESINFECTANTE CLORADO</a>

					<h2>Bactericidas de oxígeno activo</h2>
					<a href="">CHEM OXAN</a>
					<a href="">CHEM </a>

					<h2>Desengrasantes</h2>
					<a href="">CHEM DESGRASOL 2006</a>
					<a href="">CHEM MOTORCLEAN</a>

					<h2>Desengrasantes Alcalinos</h2>
					<a href="">CHEM HALSO 2005</a>
					<a href="">CHEM ULTRASOL</a>

					<h2>Desengrasantes de cocinas y hornos </h2>
					<a href="">CHEM DESGRASADOR</a>
				

				</div>

				<div class="col-md-4">
					
					<h2>Desincrustante y Limpiador de porcelana</h2>
					<a href=""> CHEM PORCELANA </a><br>
					<a href=""> LIQUID PLUMBER</a><br>
					<a href=""> TETRASAN</a>

					<h2>Desinfectantes</h2>
					<a href=""> CHEM LEMOPHENE</a><br>
					<a href=""> DESINFECTANTE DE CEREZA</a> <br>
					<a href=""> DESINFECTANTE DE LAVANDA</a><br>
					<a href=""> DESINFECTANTE DE TUTTY FRUTY</a>

					<h2>Detergentes alcalinos clorados</h2>
					<a href=""> CHEM CLOR-L</a><br>
					<a href=""> CLEAR CLOR-P</a><br>
					<a href=""> CLORO ROSADO</a>

					<h2>Detergentes en polvo</h2> 
					<a href=""> AJSEN</a><br>
					<a href=""> CHEM BAN BAN-A </a><br>
					<a href=""> CHEM BASKETT-SF </a><br>
					<a href=""> CLEAR P BANTAX</a><br>
					<a href=""> CLEAR P DETER POLVO</a><br>
					<a href=""> CLEAR P MAVES</a><br>
					<a href=""> EXIT</a><br>
					<a href=""> EXTRA FUERTE</a>

					
				</div>

				<div class="col-md-4">
					
					<h2>Jabones líquidos</h2>
					<a href=""> CHEM FOAM (ESPUMA)</a><br>
					<a href=""> CLEAR RENDIDOR</a><br>
					<a href=""> CLEAR 66</a>

					<h2>Lavandería</h2>
					<a href=""> CHEM ADX</a><br>
					<a href=""> CHEM F-600-L</a><br>
					<a href=""> CHEM F-600-P 160</a>

					<h2>Limpiadores Ácidos</h2>
					<a href=""> CHEM FOAM ACID</a><br>
					<a href=""> P-ACID 1095-N (GRANEL)</a><br>
					<a href=""> P-ACID 61-N-F</a><br>
					<a href=""> P-ACID 68-C</a>

					<h2>Limpiadores Cáusticos</h2>
					<a href=""> CHEM D-PLASTIC</a><br>
					<a href=""> CHEM P-CAUST-L-V-IV </a><br>
					<a href=""> CHEM P-CAUST-LV </a>

					<h2>Lubricantes para Cadenas</h2>
					<a href=""> CHEM LUB LUBRICANTE</a><br>
					<a href=""> CHEM LUB-HH</a>

					<h2>Solventes Dieléctricos</h2> 
					<a href=""> ELECTRO CHEM-300</a><br>
					<a href=""> ELECTRO CHEM-400</a><br>
					<a href=""> ELECTRO CHEM-600</a>

				</div>
			</div>	
		</div>

		<br>
		<br>

		<div class="container">
			
			<div class="row">
				
				<div class="col-md-6">
					
					<form action="{{ url('rc') }}" method="POST" role="form">
						<legend>Formulario CRUD</legend>
						
						{{csrf_field()}}

						<div class="form-group">
							<label for="">Nombre</label>
							<input type="text" class="form-control" name="nombre" id="" placeholder="Input field">
						</div>
						
						<div class="form-group">
							<label for="">Detalle</label>
							<input type="text" class="form-control" name="detalle" id="" placeholder="Input field">
						</div>

						<div class="form-group">
							<label for="">Precio</label>
							<input type="text" class="form-control" name="precio" id="" placeholder="Input field">
						</div>

						<div class="form-group">
							<label for="">Cantidad</label>
							<input type="text" class="form-control" name="cantidad" id="" placeholder="Input field">
						</div>
						

						<button type="submit" class="btn btn-primary">Enviar</button>
					</form>

				</div>
			</div>
		</div>

	</div>

</body>

<footer>
	@include('layout.footer')
</footer>

</html>

