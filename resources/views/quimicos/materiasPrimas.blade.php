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
						<h1><span>Materias</span> Primas </h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Materias Primas</div>
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
					
					<h1 style="margin-bottom: 0;margin-top: 0;"><span>Materias</span> Primas</h1>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Materias Primas</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="container">
		<div class="row">
						
			<div class="col-xs-4" >
				<div class="row">
					<div class="col-xs-12" id="sidebar" style="padding-left: 0;padding-right: 0;">

						<div class="panel-group" id="accordion">

							<div class="panel panel-default" style="box-shadow: 1px 1px 2px 0px #080808;border: 1px solid #ddd;">

									<div class="panel-heading">
										<h4 class="panel-title" style="text-shadow: 2px 2px 1px #dff0d8;">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="lead">Lineas de Productos</a>
										</h4>
									</div>

								<div id="collapse1" class="panel-collapse collapse">
									<div class="panel-body" style="padding: 0; padding-right: 25px;padding-left: 10px;border-top: 0;">
										<ul class="list-unstyled" style="padding-left: 20px;">
											<li><a href="{{ url('AbrillantadoresDesoxidante') }}">Abrillantadores Desoxidante</a><span class="pull-right badge">1</span></li>

											<li> <a href="{{ url('Bactericidas') }}">Bactericidas</a> <span class="pull-right badge"> 1 </span> </li>

											<li><a href="{{ url('BactericidaAmonio') }}">Bactericida amonio cuaternario</a><span class="pull-right badge">2</span></li>

											<li><a href="{{ url('BactericidasClorados') }}">Bactericidas clorados</a><span class="pull-right badge">1</span></li>

											<li><a href="{{ url('BactericidasOxigeno') }}">Bactericidas de oxígeno activo</a><span class="pull-right badge">1</span></li>

											<li><a href="{{ url('Desengrasantes') }}">Desengrasantes</a><span class="pull-right badge">2</span></li>

											<li><a href="{{ url('DesengrasantesAlcalinos') }}">Desengrasantes Alcalinos</a><span class="pull-right badge">2</span></li>

											<li><a href="{{ url('Desengrasantescocinas') }}">Desengrasantes de cocinas y hornos </a><span class="pull-right badge">1</span></li>

											<li><a href="{{ url('DesincrustanteLimpiadorporcelana') }}">Desincrustante y Limpiador de porcelana</a><span class="pull-right badge">3</span></li>

											<li><a href="{{ url('Desinfectantes') }}">Desinfectantes</a><span class="pull-right badge">4</span></li>

											<li><a href="{{ url('Detergentes') }}">Detergentes alcalinos clorados</a><span class="pull-right badge">3</span></li>

											<li><a href="{{ url('Detergentesenpolvo') }}">Detergentes en polvo</a><span class="pull-right badge">6</span></li>

											<li><a href="{{ url('Jabonesliquidos') }}">Jabones líquidos</a><span class="pull-right badge">3</span></li>

											<li><a href="{{ url('Lavanderia') }}">Lavandería</a><span class="pull-right badge">5</span></li>

											<li><a href="{{ url('Limpiadoresacidos') }}">Limpiadores de Ácidos</a><span class="pull-right badge">5</span></li>

											<li><a href="{{ url('Limpiadorescausticos') }}">Limpiadores Cáusticos</a><span class="pull-right badge">3</span></li>

											<li><a href="{{ url('Lubricantes') }}">Lubricantes para Cadenas</a><span class="pull-right badge">2</span></li>

											<li><a href="{{ url('Solventes') }}">Solventes Dieléctricos</a><span class="pull-right badge">3</span></li>							
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default" style="box-shadow: 1px 1px 2px 0px #080808;border: 1px solid #ddd;">
								<div class="panel-heading" style="border-radius: 16px;">
									<h4 class="panel-title" style="text-shadow: 2px 2px 1px #dff0d8;">
										<a href="{{ url('materiasPrimas') }}" class="lead">Materias Primas</a>
									</h4>
								</div>

								<!-- <div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body" style="padding: 0; padding-right: 25px;padding-left: 10px;border-top: 0;">
										<ul class="list-unstyled" style="padding-left: 20px;">
											<li><a href="">Ácido Clorhidrico al 30%</a></li>
											<li><a href="">Ácido Clorhidrico al 30%</a></li>
											<li><a href="#">Ácido Nítrico al 56%</a></li>              
											<li><a href="#">Ácido Sulfónico al 98% </a></li>
											<li><a href="#">Ácido Clorhídrico al 30% </a></li>
											<li><a href="#">Cloro al 5% </a></li>                        
											<li><a href="#">Peróxido de Hidrógeno 50% </a></li>
											<li><a href="#">Hidróxido de Sodio </a></li>
											<li><a href="#">Urea </a></li>
											<li><a href="#">Soda Cáustica en Escamas </a></li>
											<li><a href="#">Butil Oxitol  </a></li>
											<li><a href="#">Etanol (Alcohol F1) </a></li>
										</ul>
									</div>
								</div> -->
							</div>

						</div>
						
					</div>
												
				</div>
			</div>
			
			<div class="col-xs-8">
				<div class="row">

					<div class="col-xs-12" id="contenidoPrincipal">
												
						<div id="" class="col-xs-12" style="padding: 1em; background-color: #fff;">

							<!-- <h3 style="margin-top: 0; margin-bottom: 10px; padding-left: 10px; box-shadow: 4px 4px 7px #013777; line-height: 50px; background-color: #0167bc; color: aliceblue; border-radius: 10px;text-shadow: 2px 2px 1px #080808;">Listado de Materias Primas</h3> -->

							<h2>Listado de Materias Primas</h2>

							<div class="list-group" style="margin-bottom: 0;">
							  <a href="#" class="list-group-item ">
							    <h4 class="list-group-item-heading">Ácido Clorhídrico al 30%</h4>							    
							  </a>
							</div>  
							  <div class="list-group" style="margin-bottom: 0;">
							  <a href="#" class="list-group-item ">
							    <h4 class="list-group-item-heading">Ácido Nítrico al 56%</h4>
							    
							  </a>
							</div> 

							  <div class="list-group" style="margin-bottom: 0;">
							  <a href="#" class="list-group-item ">
							    <h4 class="list-group-item-heading">Ácido Sulfónico al 97% </h4>
							   
							  </a>
							</div>

							<!-- <div class="list-group" style="margin-bottom: 0;">
							  <a href="#" class="list-group-item ">
							    <h4 class="list-group-item-heading">Ácido Clorhídrico al 30% </h4>
							   
							  </a>
							</div> -->

							<div class="list-group" style="margin-bottom: 0;">
							  <a href="#" class="list-group-item ">
							    <h4 class="list-group-item-heading">Cloro al 5%  </h4>
							   
							  </a>
							</div>

							<div class="list-group" style="margin-bottom: 0;">
							  <a href="#" class="list-group-item ">
							    <h4 class="list-group-item-heading">Peróxido de Hidrógeno 50%  </h4>
							   
							  </a>
							</div>

							<div class="list-group" style="margin-bottom: 0;">
							  <a href="#" class="list-group-item ">
							    <h4 class="list-group-item-heading">Hidróxido de Sodio  </h4>
							   
							  </a>
							</div>

							<div class="list-group" style="margin-bottom: 0;">
							  <a href="#" class="list-group-item ">
							    <h4 class="list-group-item-heading">Urea  </h4>
							   
							  </a>
							</div>

							<div class="list-group" style="margin-bottom: 0;">
							  <a href="#" class="list-group-item ">
							    <h4 class="list-group-item-heading">Soda Cáustica en Escama  </h4>
							   
							  </a>
							</div>
							
							<div class="list-group" style="margin-bottom: 0;">
							  <a href="#" class="list-group-item ">
							    <h4 class="list-group-item-heading">Butil Oxitol</h4>
							   
							  </a>
							</div>

							<div class="list-group" style="margin-bottom: 0;">
							  <a href="#" class="list-group-item ">
							    <h4 class="list-group-item-heading">Etanol (Alcohol F1)   </h4>
							   
							  </a>
							</div>


					

							<!-- <ul class="list-unstyled" style="padding-left: 20px;">

								<li><a href="">Ácido Clorhidrico al 30%</a> </li>		
								<li><a href="#">Ácido Nítrico al 56%</a></li>              
		                        <li><a href="#">Ácido Sulfónico al 98% </a></li>
		                        <li><a href="#">Ácido Clorhídrico al 30% </a></li>
		                        <li><a href="#">Cloro al 5% </a></li>                        
		                        <li><a href="#">Peróxido de Hidrógeno 50% </a></li>
		                        <li><a href="#">Hidróxido de Sodio </a></li>
		                        <li><a href="#">Urea </a></li>
		                        <li><a href="#">Soda Cáustica en Escamas </a></li>
		                        <li><a href="#">Butil Oxitol  </a></li>
		                        <li><a href="#">Etanol (Alcohol F1) </a></li>
							</ul>	 -->

						</div>

					</div>

				</div>
			</div>
			
			<div class="col-xs-12"> <br><hr><br></div>

		</div>
	</div>
	
</body>
<footer>
	@include('layout.footer')
</footer>
</html>

<style type="text/css">

	#navPrincipal{
		margin-bottom: 0px;
	}

	#sidebar{
		margin-top: 10px;	    
	}

	#sidebar ul li a{
		/*content: ">";*/
		/*margin-right: 3px;*/
		text-decoration: none;
		/*color: #000;*/
		color: #01478f;
	}

	#sidebar ul li{
		height: 30px;
	    border-top: 1px solid #eeeeee;
	    padding-top: 4px;
	    padding-bottom: 3px;    
	}

	#sidebar ul li:first-child{
		padding-top: 16px;
    	height: 42px;
	}


	#sidebar ul li a:hover{		
		color: #000;
		/*font-size: 16px;*/
	}

	#sidebar ul li a:hover:before{
		
		content:url('{{ asset('img/flecha.png') }}');
		margin-right: 3px;
		width: 20px;
		height: 10px;
		overflow: hidden;
		/*text-decoration: none;*/
		/*color: red;*/
		/*font-size: 13px;*/
	}

/*---------------------------------------------------------------*/
	#cabecera{
		background: url('{{ asset('img/headerQuimicos/3.jpg') }}');
		/*background-size: cover;*/
		background-repeat: no-repeat;
	    clear: both;
	    /*background-position-y: -250px;*/		
	    /*padding: 0px; */
	    /*overflow: hidden;*/
	}

/*---------------------------------------------------------------*/
	#contenidoPrincipal{
		margin-top: 10px;		
	}
/*---------------------------------------------------------------*/
	body{
		background-color: rgba(221, 221, 221, 0.5);
	}

	#contenidoPrincipal div h2{
		margin-bottom: 16px;
	    padding-bottom: 3px;
	    border-bottom: 2px solid #005fb3;
	    margin-top: 0px;
	    font-size: 24px;
	    letter-spacing: 2px;
	    text-shadow: 0px 0px 0px #555;
	}
	
	#itemQuimico{
		background-color: #fff;
    	padding: 1em;
	}

	#itemQuimico h2{
		background-color: brown;
	    color: whitesmoke;
	    padding: 10px;
	    border-radius: 43px;
	    margin-top: 0px;
	}

	#itemQuimico dl{
		border-left: 5px solid #eee;
	}

	#itemQuimico dl dt{
		width: 85px;
	}

	/*#itemQuimico dl dd{
		margin-left: 105px;
	}
*/
	#itemQuimico dl dd p{
		font-family: Arial, Helvetica, sans-serif;
	    font-size: 13px;
	    line-height: 13px;
	    padding-top: 5px;
	}


	#itemQuimico dl dd div a:first-child{
		text-decoration: none;
		/*color: brown;*/
		margin-right: 20px;
	}
	#itemQuimico dl dd div a{
		text-decoration-style: double;
		/*color: brown;*/
		margin-right: 20px;
	}

</style>