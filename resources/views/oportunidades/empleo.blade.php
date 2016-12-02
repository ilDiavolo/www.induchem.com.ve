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
	<header> @include('home.navbar-op5') </header>

	<div class="container-fluid" style="height: 89px;">

		<div class="row welcome_bar">
			<div class="container">
				<div class="col-sm-7 col-xs-12 bar">
					<div class="bar-icon">
						<i class="ion-ios-people-outline" style="font-size: 55px;float: left;line-height: 5px; width: 44px;padding-right: 5px;"></i>		
						<!-- <img src="{{ asset('img/icon_contact.png') }}" height="63" width="63"> -->
					</div>

					<div class="bar-title">
						<h1><span>Oportunidades</span> de Empleo</h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Oportunidades de Empleo</div>
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


	<div class="container-fluid" id="Oportunidad_empleo_fondo">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="text-shadow: 1px 1px 1px black;color: cadetblue;">
					
					<h1 class="text-center" >Forma Parte de Nuestro Equipo de Trabajo</h1>
					<h5 class="text-center" style="letter-spacing: 1px;">Disponemos de políticas de integración con beneficios y servicios para nuestra gente orientados a lograr un <br> equilibrio entre la vida personal y profesional.  </h5>

				</div>
			</div>

			<div class="row" style="background-color: rgba(255,255,255,0.67); margin-top: 2em;text-shadow: 1px 0px 1px whitesmoke;padding: 4em; padding-top: 0; margin-bottom: 2em;">
				<br><br>
				
				
				<div class="col-md-12"> 
				<h4 class="">Valoramos y reconocemos las iniciativas que contribuyen al desarrollo de nuestra empresa.</h4>
				<br>
				<h4>Oportunidades de Empleo:</h4>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<h3 class="tittleH4" style="margin-top: 0;">Vacantes</h3>
					
					<ul>
						<li>Lincenciado o TSU en Mercadeo</li>					
						<li>Pasantías Compras Nacionales (TSU)</li>
						<li>Pasantías Ventas o Atención al Cliente (TSU o Lic.) (TSU)</li>						
						<li>Pasantías de Laboratorio de Calidad (TSU o Lic.)</li>
						<!-- <li>Pasantías de Ingeniería (Mantenimiento Industrial y Mecánico)</li> -->
						<li>Pasantías de Producción (TSU o Lic.)</li>
						
					</ul>
				</div>
				
				
				<!-- <div class="col-md-3 col-sm-6 col-xs-12">
					<h4 class="tittleH4">Almacén</h4>
					<ul>
						<li>Analista de Alamacen</li>						
						<li>Operadores de Almacén (Certificado en Montacarga)</li>						
					</ul>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<h4 class="tittleH4">Mantenimiento</h4>
					<ul>
						<li>Electromecánico</li>						
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12"> 
					<h4 class="tittleH4">Producción</h4>
					<ul>
						<li>Operador de Producción</li>						
					</ul>
				</div> -->
				<div class="col-md-8 col-xs-12" style="margin-top: 10px;">
				<p style="font-size: 17px;"> Puedes postularte envíandonos un correo indicando la vacante de interes junto a tu curriculum vitae a la siguiente direccioón de correo: </p>

				<i class="ion-paper-airplane" style="font-size: 17px; margin-right: 8px;"></i> <a href="mailto:recursoshumanos@induchem.com.ve" style="color: brown;font-size: 17px;">recursoshumanos@induchem.com.ve</a> 

				<br>
				<blockquote class="blockquote-reverse">
					<p style="font-size: 16px;"> “Los logros de una organización son los resultados del esfuerzo combinado de cada individuo.”  </p>
					<footer><cite title="Source Title" style="color: #555; text-shadow: 1px 1px 1px ghostwhite;" >Vince Lombardi.</cite></footer>
				</blockquote>
					
					
				</div>
				
				<!-- <div class="col-md-12"><br><br><br></div> -->


			</div>
			<!-- <div class="row" style="background-color: rgba(255,255,255,0.4); text-shadow: 1px 0px 1px whitesmoke;">
				<br>
							
			</div> -->

			<!-- <div class="row" style="background-color: rgba(255,255,255,0.4); margin-bottom: 4em;text-shadow: 1px 0px 1px whitesmoke;">
				
				<div class="col-md-12">
				<p> Puedes postularte y enviarnos tu curriculum vitae indicandonos el departamento y vacante de interes a los siguientes correos </p>

				<p>rr@induche.com.ve</p>

				<blockquote>
					<p> “Los logros de una organización son los resultados del esfuerzo combinado de cada individuo.”  </p>
					<footer><cite title="Source Title">Vince Lombardi.</cite></footer>
				</blockquote>
					
					
				</div>
				
				<div class="col-md-12"><br><br><br></div>

			</div> -->


		</div>
	</div>


</body>
<footer>
	@include('layout.footer')
</footer>
</html>


<style type="text/css">
	
	.tittleH4{
		/*box-shadow: 0px 1px 1px black;*/
    	border-bottom: 1px solid brown;
   	 	padding: 10px;
   		padding-bottom: 5px;


	}

	#Oportunidad_empleo_fondo {
	    background: url('{{ asset('img/empleo2.jpg') }}');
	    background-size: cover;



	}

</style>