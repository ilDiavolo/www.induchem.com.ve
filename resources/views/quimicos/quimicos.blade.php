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
		<div class="row">
			
			<div class="col-xs-12">
				
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
							
							<blockquote>
								
								<dl class="dl-horizontal">
									<dt>Nombre</dt> 
										<dd>CHEM BRILLINOX</dd>
								

									<dt>Descripcion</dt> 
										<dd>
											<p class="text-justify"> Detergente limpiador y abrillantador de acero inoxidable, ha sido diseñado para limpiar y abrillantar el acero inoxidable de manera excelente, eliminando sustancias abrasivas que dañan la superficie. Rinde y es económico, ya que es concentrado. El tiempo de contacto con la superficie es reducido, por lo que lleva a cabo una limpieza rápida, eliminando las manchas y dejando las superficies limpias y brillantes.</p>
										</dd>
				
					                <dt>Descargar</dt>
					                	<dd>
					                		<div class="text-right" style="padding-top: 7px;" > 
							                	<a href="#"> <i class="ion-document-text" aria-hidden="true"></i> Rasda</a> 
							                	<a href="#"> <i class="ion-document" aria-hidden="true"></i> Ficha Técnica </a>
						                	</div>
						                </dd>
						        </dl>

				                 
				                
				                
				            </blockquote>
								<hr>
				            <blockquote>
								
								<dl class="dl-horizontal">
									<dt>Nombre</dt> 
										<dd>CHEM BRILLINOX</dd>
								

									<dt>Descripcion</dt> 
										<dd>
											<p class="text-justify"> Detergente limpiador y abrillantador de acero inoxidable, ha sido diseñado para limpiar y abrillantar el acero inoxidable de manera excelente, eliminando sustancias abrasivas que dañan la superficie. Rinde y es económico, ya que es concentrado. El tiempo de contacto con la superficie es reducido, por lo que lleva a cabo una limpieza rápida, eliminando las manchas y dejando las superficies limpias y brillantes.</p>
										</dd>
				
					                <dt>Descargar</dt>
					                	<dd>
					                		<div class="text-right" style="padding-top: 7px;" > 
							                	<a href="#"> <i class="ion-document-text" aria-hidden="true"></i> Rasda</a> 
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
	
	#sidebar{
		background-color: whitesmoke;
	    border-radius: 10px;	    
	}

	#contenidoPrincipal{
		background-color: whitesmoke;
	    border-radius: 10px;
	}

	#itemQuimico blockquote{ 
		border-left: 5px solid brown;
	}

	#itemQuimico blockquote dl dd p{
		font-family: Arial, Helvetica, sans-serif;
	    font-size: 13px;
	    line-height: 13px;
	    padding-top: 7px;
	}

	#itemQuimico blockquote dl dd div a:first-child{
		text-decoration: none;
		color: brown;
		margin-right: 20px;
	}
	#itemQuimico blockquote dl dd div a{
		text-decoration-style: double;
		color: brown;
		margin-right: 20px;
	}

</style>