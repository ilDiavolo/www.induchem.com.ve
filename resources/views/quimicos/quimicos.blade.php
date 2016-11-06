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

	<div class="container" >
		<div class="row" style="padding-top: 10px">

			<div class=" col-xs-12 " >
				<div style="display: inline-block;" >
					
					<img src="{{ asset('img/te2.png') }}" height="63" width="63" class="img-responsive">
				</div>
				<div style="padding-left: 5px;    display: inline-block;">
					
					<h1 style="margin-top: 0px; margin-bottom: 0px;"><span>Contacta</span> con nosotros!</h1>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Químicos</div>
				</div>
				

		</div>

	</div>

	<div class="container">
		<div class="row">
						
			<div class="col-xs-3" >
				<div class="row" style="padding-right: 10px;" >
					<div class="col-xs-12" id="sidebar">
						<h1>SideBar</h1>
					</div>
												
				</div>
			</div>
			
			<div class="col-xs-9">
				<div class="row">
					<div class="col-xs-12" id="contenidoPrincipal">
												
						<div id="itemQuimico" class="col-xs-12">

							<h2 class="text-center">Abrillantadores Desoxidante</h2>
							
							<hr>
							<blockquote>
								
								<dl class="dl-horizontal">
									<dt>Nombre</dt> 
										<dd style="color: #a94442;" >CHEM BRILLINOX</dd>
								

									<dt>Descripcion</dt> 
										<dd>
											<p class="text-justify"> Detergente limpiador y abrillantador de acero inoxidable, ha sido diseñado para limpiar y abrillantar el acero inoxidable de manera excelente, eliminando sustancias abrasivas que dañan la superficie. Rinde y es económico, ya que es concentrado. El tiempo de contacto con la superficie es reducido, por lo que lleva a cabo una limpieza rápida, eliminando las manchas y dejando las superficies limpias y brillantes.</p>
										</dd>
									
									<dt>Permisología</dt> <dd><p> <strong>Rasda, Resquim, Daex</strong> </p></dd>

					                <dt>Descargar</dt>
					                	<dd>
					                		<div class="text-right" style="padding-top: 0px;" > 
							                	<a href="#"> <i class="ion-document-text" aria-hidden="true"></i> Hoja de Seguridad</a> 
							                	<a href="#"> <i class="ion-document" aria-hidden="true"></i> Ficha Técnica </a>
						                	</div>
						                </dd>
						        </dl>

				            </blockquote>

				            <hr>
							<blockquote>
								
								<dl class="dl-horizontal">
									<dt>Nombre</dt> 
										<dd style="color: #a94442;" >CHEM BRILLINOX</dd>
								

									<dt>Descripcion</dt> 
										<dd>
											<p class="text-justify"> Detergente limpiador y abrillantador de acero inoxidable, ha sido diseñado para limpiar y abrillantar el acero inoxidable de manera excelente, eliminando sustancias abrasivas que dañan la superficie. Rinde y es económico, ya que es concentrado. El tiempo de contacto con la superficie es reducido, por lo que lleva a cabo una limpieza rápida, eliminando las manchas y dejando las superficies limpias y brillantes.</p>
										</dd>
									
									<dt>Permisología</dt> <dd><p> <strong>Rasda, Resquim, Daex</strong> </p></dd>

					                <dt>Descargar</dt>
					                	<dd>
					                		<div class="text-right" style="padding-top: 0px;" > 
							                	<a href="#"> <i class="ion-document-text" aria-hidden="true"></i> Hoja de Seguridad</a> 
							                	<a href="#"> <i class="ion-document" aria-hidden="true"></i> Ficha Técnica </a>
						                	</div>
						                </dd>
						        </dl>

				            </blockquote>


						</div>

						<div class="col-xs-12"><br><br></div>


						<div id="itemQuimico" class="col-xs-12">

							<h2 class="text-center">Abrillantadores Desoxidante</h2>
							
							<hr>
							<blockquote>
								
								<dl class="dl-horizontal">
									<dt>Nombre</dt> 
										<dd style="color: #a94442;" >CHEM BRILLINOX</dd>
								

									<dt>Descripcion</dt> 
										<dd>
											<p class="text-justify"> Detergente limpiador y abrillantador de acero inoxidable, ha sido diseñado para limpiar y abrillantar el acero inoxidable de manera excelente, eliminando sustancias abrasivas que dañan la superficie. Rinde y es económico, ya que es concentrado. El tiempo de contacto con la superficie es reducido, por lo que lleva a cabo una limpieza rápida, eliminando las manchas y dejando las superficies limpias y brillantes.</p>
										</dd>
									
									<dt>Permisología</dt> <dd><p> <strong>Rasda, Resquim, Daex</strong> </p></dd>

					                <dt>Descargar</dt>
					                	<dd>
					                		<div class="text-right" style="padding-top: 0px;" > 
							                	<a href="#"> <i class="ion-document-text" aria-hidden="true"></i> Hoja de Seguridad</a> 
							                	<a href="#"> <i class="ion-document" aria-hidden="true"></i> Ficha Técnica </a>
						                	</div>
						                </dd>
						        </dl>

				            </blockquote>

				            <hr>
							<blockquote>
								
								<dl class="dl-horizontal">
									<dt>Nombre</dt> 
										<dd style="color: #a94442;" >CHEM BRILLINOX</dd>
								

									<dt>Descripcion</dt> 
										<dd>
											<p class="text-justify"> Detergente limpiador y abrillantador de acero inoxidable, ha sido diseñado para limpiar y abrillantar el acero inoxidable de manera excelente, eliminando sustancias abrasivas que dañan la superficie. Rinde y es económico, ya que es concentrado. El tiempo de contacto con la superficie es reducido, por lo que lleva a cabo una limpieza rápida, eliminando las manchas y dejando las superficies limpias y brillantes.</p>
										</dd>
									
									<dt>Permisología</dt> <dd><p> <strong>Rasda, Resquim, Daex</strong> </p></dd>

					                <dt>Descargar</dt>
					                	<dd>
					                		<div class="text-right" style="padding-top: 0px;" > 
							                	<a href="#"> <i class="ion-document-text" aria-hidden="true"></i> Hoja de Seguridad</a> 
							                	<a href="#"> <i class="ion-document" aria-hidden="true"></i> Ficha Técnica </a>
						                	</div>
						                </dd>
						        </dl>

				            </blockquote>


						</div>

					</div>
				</div>

				<div class="col-xs-12"><br><hr><br></div>

			</div>

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
		background-color: whitesmoke;
	    border-radius: 10px;	    
	}
/*---------------------------------------------------------------*/
	#cabecera{
		background: url('{{ asset('img/headerQuimicos/3.jpg') }}');
		background-size: cover;
		background-repeat: no-repeat;
	    clear: both;
	    background-position-y: -250px;

		
	    padding: 0px; 
	    overflow: hidden;
	}

	#imgCabecera{
		/*position: absolute;
    	top: -120px;*/
	}
/*---------------------------------------------------------------*/
	#contenidoPrincipal{
		/*background-color: whitesmoke;
	    border-radius: 10px;*/
	}
/*---------------------------------------------------------------*/
	#itemQuimico h2{
		background-color: brown;
	    color: whitesmoke;
	    padding: 10px;
	    border-radius: 43px;
	    margin-top: 0px;
	}

	#itemQuimico blockquote{ 
		border-left: 5px solid brown;
	}

	#itemQuimico blockquote dl dd p{
		font-family: Arial, Helvetica, sans-serif;
	    font-size: 13px;
	    line-height: 13px;
	    padding-top: 5px;
	}

	#itemQuimico blockquote dl dd div a:first-child{
		text-decoration: none;
		/*color: brown;*/
		margin-right: 20px;
	}
	#itemQuimico blockquote dl dd div a{
		text-decoration-style: double;
		/*color: brown;*/
		margin-right: 20px;
	}

</style>