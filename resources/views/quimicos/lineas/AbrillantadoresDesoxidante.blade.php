<!DOCTYPE html>
<html>
<head>
	@include('layout.head')
	<title></title>
</head>



<style type="text/css">

	@import url('https://fonts.googleapis.com/css?family=Raleway:700');

	body{		
		background-color: #f5f5f5;
	}

/*-------------------------- Menu de Multinivel ----------------------------------*/
	*{
		list-style: none;		
		padding: 0;	
		box-sizing: border-box;
	}

	#menu{
		font-family: 'Raleway', sans-serif;
		background-color: white;
		float: left;
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
		width: 100%;
		/*min-width: 172px;*/
	}

	#menu > li {
				
		border-top: 1px solid #ebebeb;
		
		/*esta es la clave*/
		position: relative;	
	}

	#menu a{
		padding: 0 20px;
		background-color: white;
		color: rgba(95, 95, 95, 0.85);
		line-height: 45px;		
		display: block;		
		overflow: hidden;
    	text-overflow: ellipsis; /* corta el texto en puntos */
    	white-space: nowrap; /* hace q el texto sigo corrido para q el valor de arriba haga efecto */
    	font-size: 1.5rem;
    	text-decoration: none;
	}
	
	#menu a:hover{
		/*background-color: #9E9E9E;*/
		color: brown;
		text-decoration: none;
	}

	#menu > li:hover > a{
		/*background-color: #9E9E9E;
		color: white;*/
		box-shadow: inset 2px 0 0 brown;
	}

	#menu a:active{
		color: red;
	}

	
	/* Desaparecer Sub-Menu */
	#menu > li > ul {
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);		

		position: absolute;

		transition: all 0.3s;
		opacity: 0;
		visibility: hidden;	

		left: 100%;
		top: 0;

		z-index: 1000;	
	}

	/*Aparecer Sub-Menu*/
	#menu > li:hover > ul {
		opacity: 1;
		visibility: visible;
	}

	/* Desactivando la primero lista ya no seran enlaces*/
	#menu > li > a:active{
		pointer-events: none;
		color: brown;		
	}
	

	#menu > li > a:before{
		content: '';
	    position: absolute;
	    top: 50%;
	    margin-top: -1px;
	    display: inline-block;
	    height: 2px;
	    width: 10px;
	   
	    background: #9E9E9E;   

	    backface-visibility: hidden;
	    transform-origin: 9px 50%;
	    transform: rotate(45deg);
	    transform-origin: 9px 50%;
	    box-sizing: border-box;
	    right: 20px;
	}

	#menu > li:hover > a:before{
		 background: brown;   
	}

	#menu > li > a:after{
		content: '';
	    position: absolute;
	    top: 50%;
	    margin-top: -1px;
	    display: inline-block;
	    height: 2px;
	    width: 10px;   
	    background: #9E9E9E;   

	    -webkit-backface-visibility: hidden;
	    backface-visibility: hidden;

	    transform-origin: 9px 50%;
	    transform: rotate(-45deg);
	    transform-origin: 9px 50%;

	    box-sizing: border-box;
	    right: 20px;
	}

	#menu > li:hover > a:after{
		 background: brown;   
	}
	



</style>
<!-- -llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll -->
<style type="text/css">	

	/* tamaño de la imagen que en la cabecera*/
	.bar-icon { 
	    width: 76px;	    
	    float: left;
	}
	
	.welcome_bar {
	    background: url('{{ asset('img/fondoHeaderContacto.png') }}') 0 0;
	    clear: both;
	    /*margin-bottom: 44px;*/
	    /*position: relative;*/
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
	
	<div class="container-fluid">

		<div class="row welcome_bar">
			<div class="container">
				<div class="col-sm-7 col-xs-12 bar">
					<div class="bar-icon">
						<img src="{{ asset('img/iq2.png') }}" height="63" width="63">
					</div>

					<div class="bar-title">
						<h1><span>Químicos</span> </h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Químicos</div>
				</div>
			</div>
		</div>

	</div>


<div class="container">
	<div class="row">
						
		<div class="col-xs-3" style="padding: 0;">				
				
			<ul id="menu">

				<li style=" margin-top: 5em; border-top: 0;"></li>

				<li>
					<a href="#" >Abrillantadores</a>   
					<ul>
						<li> <a href="#"> Chem-Brillinox</a> </li>

					</ul>
				</li>

				<li>
					<a href="#">Bactericidas</a> 
					<ul>
						<li><a href="#">Chem Gel Sanitizer</a> </li>
						<li><a href="#">Chem-Algicida Amonio Cuaternario</a> </li>
						<li><a href="#">Chem-Quat</a> </li>
						<li><a href="#">Chem-Cloro</a> </li>
						<li><a href="#">Chem-Oxan</a> </li>
						<li><a href="#"> Chem-P-Hidrógeno al 35%</a> </li>

						
					</ul>
				</li>

				<li>
					<a href="#">Desengrasantes </a>
					<ul>
						<li><a href="#">Chem-Desgrasol 2006</a>  </li>
						<li><a href="#">Chem Motorclean </a> </li>
						<li><a href="#">Chem-Halso 2005</a> </li>
						<li><a href="#">Chem-Ultrasol</a> </li>
						<li><a href="#">Chem-Desgrasador</a> </li>

					</ul>
				</li>

				<li>
					<a href="#">Desincrustantes </a>
					<ul>
						<li><a href="#">Chem-Porcelana</a></li>
						<li><a href="#">Tetrasan</a></li>							
					</ul>
				</li>

				<li>
					<a href="#">Desinfectantes</a>
					<ul>
						<li><a href="#">Chem-Lemophene</a></li>
						<li><a href="#">Desinfectante Tutty Fruty</a></li>
						<li><a href="#">Desinfectante Lavanda</a></li>
						<li><a href="#">Desinfectante TCereza</a></li>
					</ul>						
				</li>

				<li>
					<a href="#">Detergentes en polvo</a>
					<ul>
						<li><a href="#">Clear-Clor-P</a></li>
						<li><a href="#">Cloro Rosado</a></li>
						<li><a href="#">Ajsen</a></li>
						<li><a href="#">Clear-P-Bantax</a></li>
						<li><a href="#">Clear-P-Deter-Polvo</a></li>
						<li><a href="#">Clear-P-Mavesa</a></li>
						<li><a href="#">Exit</a></li>
						<li><a href="#">Chem-F-600-P</a></li>
					</ul>
				</li>

				<li>
					<a href="#">Detergentes líquidos</a>
					<ul>
						<li><a href="#">Chem-Clor-L</a></li>
						<li><a href="#">Chem Foam Espuma</a></li>
						<li><a href="#">Clear Rendidor</a></li>
						<li><a href="#">Clear-66</a></li>
						<li><a href="#">Chem-F-600-L</a></li>							
					</ul>
				</li>

				<li>
					<a href="#">Limpiadores</a>
					<ul>						
						<li><a href="#">Che-Foam-Acid</a></li>
						<li><a href="#">P-Acid-1095-N</a></li>
						<li><a href="#">P-Acid-61-N-F</a></li>
						<li><a href="#">P-Acid-68-C</a></li>
						<li><a href="#">Chem-D-Plastic</a></li>
						<li><a href="#">Chem-P-Caust-L-V-IV</a></li>	
					</ul>
										
				</li>

				<li>
					<a href="#">Lubricantes </a>
					<ul>
						<li><a href="#">Chem-Lub-Lubricante</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Solventes dieléctricos</a>
					<ul>
						<li><a href="#">Eletro-Chem-300</a></li>
						<li><a href="#">Eletro-Chem-400</a></li>
						<li><a href="#">Eletro-Chem-600</a></li>
					</ul>
				</li>
			</ul>				
						
		</div>

		<div class="col-xs-9">
		
			<div id="itemQuimico">

				<h2>Abrillantadores Desoxidante</h2>				
					
					<dl class="dl-horizontal">
						<dt>Nombre</dt> 
							<dd style="color: #a94442;" >CHEM BRILLINOX</dd>

						<dt>Descripción</dt> 
							<dd>
								<p class="text-justify"> Detergente limpiador y abrillantador de acero inoxidable, ha sido diseñado para limpiar y abrillantar el acero inoxidable de manera excelente, eliminando sustancias abrasivas que dañan la superficie. Rinde y es económico, ya que es concentrado. El tiempo de contacto con la superficie es reducido, por lo que lleva a cabo una limpieza rápida, eliminando las manchas y dejando las superficies limpias y brillantes.</p>
							</dd>
						
						<dt>Permisología</dt> <dd><p> <strong>Racda, Resquimc, Daex</strong> </p></dd>

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
				
	

	
</body>
<footer>
	@include('layout.footer')
</footer>
</html>

<style type="text/css">

	#navPrincipal{
		margin-bottom: 0px;
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
		margin-bottom: 16px;
	    padding-bottom: 3px;
	    border-bottom: 2px solid #005fb3;
	    margin-top: 0px;
	    font-size: 24px;
	    letter-spacing: 2px;
	    text-shadow: 0px 0px 0px #555;
	}

	#itemQuimico dl{
		background-color: rgba(176, 232, 249, 0.23);
		border-left: 5px solid rgba(176, 232, 249, 0.36);
	    padding: 1em;
		}

	#itemQuimico dl dt{
		width: 85px;
	}


	#itemQuimico dl dd p{
		font-family: Arial, Helvetica, sans-serif;
	    font-size: 13px;
	    line-height: 13px;
	    padding-top: 5px;
	}


	#itemQuimico dl dd div a:first-child{
		text-decoration: none;		
		margin-right: 20px;
	}
	#itemQuimico dl dd div a{
		text-decoration-style: double;		
		margin-right: 20px;
	}
	


	
</style>



