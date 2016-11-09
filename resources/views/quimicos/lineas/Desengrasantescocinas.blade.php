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
	    /*background: url('{{ asset('img/fondoHeaderContacto.png') }}') 0 0;*/
	    clear: both;
	    margin-bottom: 44px;
	    position: relative;
	    z-index: 10;
	}

	.bar {
	    /*background: url('{{ asset('img/title_bar_shadow.gif') }}') 0 106px no-repeat;*/
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

	<div class="container" >
		<div class="row" style="padding-top: 10px; margin-bottom: 10px;">

			<div class="col-xs-12" id="cabecera" >
				<div style="display: inline-block;" >
					
					<img src="{{ asset('img/te.png') }}" height="63" width="63" class="img-responsive">
				</div>
				<div style="padding-left: 5px; display: inline-block;">
					
					<h1 style="margin-bottom: 0;margin-top: 0;"><span>Productos</span> Químicos</h1>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Químicos</div>
				</div>
				</div>

		</div>

	</div>

	<div class="container">
		<div class="row">
						
			<div class="col-xs-4" >
				<div class="row">
					<div class="col-xs-12" id="sidebar" style="padding-left: 0;padding-right: 0;">
						@include('quimicos.sideBarQuimicos')
					</div>
												
				</div>
			</div>
			
			<div class="col-xs-8">
				<div class="row">

					<div class="col-xs-12" id="contenidoPrincipal">
												
						<div id="itemQuimico" class="col-xs-12">

							<h2>Desengrasantes de Cocinas y Hornos </h2>
							
							<hr>
							
							<dl class="dl-horizontal">
								<dt>Nombre</dt> 
									<dd style="color: #a94442;" >CHEM DESGRASADOR </dd>

								<dt>Descripcion</dt> 
									<dd>
										<p class="text-justify"> Es un desengrasante líquido usado ampliamente para disolver rápidamente las incrustaciones de sucios y grasas endurecidas, acarameladas o carbonizadas en las superficies de los equipos procesadores de alimentos. Se utiliza para limpiar hornos, campanas de cocina, parrillas de asadores, freidoras, pisos o cualquier superficie grasosa; excepto aquellos que estén pintadas.</p>
									</dd>
								
								<dt>Permisología</dt> <dd><p> <strong>Rasda, Resquim, Daex</strong> </p></dd>

				                <dt>Descargar</dt>
				                	<dd>
				                		<div class="" style="padding-top: 0px;" > 
						                	<a href="#"> <i class="ion-document-text" aria-hidden="true"></i> Hoja de Seguridad</a> 
						                	<a href="#"> <i class="ion-document" aria-hidden="true"></i> Ficha Técnica </a>
					                	</div>
					                </dd>
					        </dl>	

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

	#itemQuimico h2{
		background-color: brown;
	    color: whitesmoke;
	    padding: 10px;
	    padding-left: 15px;
	    border-radius: 20px;
	    margin-top: 0px;
	}

	#itemQuimico dl{
		border-left: 5px solid #eee;
	}

	#itemQuimico dl dt{
		width: 85px;
	}

	#itemQuimico dl dd{
		margin-left: 105px;
	}

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