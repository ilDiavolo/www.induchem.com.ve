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

	#cabecera{
		background: url('{{ asset('img/headerQuimicos/3.jpg') }}');		
		background-repeat: no-repeat;
	    clear: both;	   
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
					
					<h1 style="margin-bottom: 0;margin-top: 0;"><span>Termopláticos</span> </h1>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a>Termopláticos Bombas </div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
						
			<div class="col-xs-3" >
				<div class="row" style="padding: 1em;">

					@include('termoplasticos.sideBarTermo')
												
				</div>
			</div>
			
			<div class="col-xs-9">
				<div class="row" style="padding: 1em;">
					
					<div id="itemTermo" class="col-xs-12" style="background-color: #fff; padding: 0;">	

						<div style="padding-left: 15px; padding-right: 15px;">
							<h2>Bombas</h2>
							
							<div class="media" style="margin-top: 20px;margin-bottom: 7px;" >
								<div class="media-left media-middle">
									<img src="{{ asset('img/termoplasticos/menu/affetti.png') }}" class=" media-object" style="height: 50px;">
							  	</div>
								<div class="media-body media-middle">
									<!-- <h4 class="media-heading">Media heading</h4> -->
								   <p style="line-height: 14px;font-size: 13px;"> 
								   		entornos corrosivos. Ácidos y bases concentrados, soluciones alcalinas o ligeramente ácidas, agua de mar, solventes, son algunos de los líquidos bombeados más a menudo. Entre los principales sectores de utilización se destacan el químico, el galvánico, el siderúrgico, el farmacéutico, el energético, los acuarios marinos, la curtición, la depuración de aguas y de aire, la ingeniería, la acuicultura, los fertilizantes y pesticidas, las plantas desalinizadoras, el tratamiento de metales preciados, el automovilístico, el aeronáutico, entre otros.
								   </p>
								</div>
							</div>					
						</div>

						<!-- columna 1 -->
						<div class="col-xs-12" style="padding-left: 4em; padding-right: 4em; margin-top: 15px;">		
							<h2 style="margin-bottom: 0; text-align: center;border: 0;">Bombas Centrífugas con Transmisión Magnética</h2>
							<hr style="margin-top: 3px;">
						</div>

						<div class="col-sm-12 col-md-6" style="background-color: #fff;"> 

							<div class="row" style="padding: 1em;">
								<h3>MMB-N</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/bombas/MMB-N.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >		

											<p>	Capacidades: 5 mc/h-70 mc/h (E) </p>
											<p> Cabezales: 6 mcl - 41 mcl (E) </p>
											<p>Potencia: 0.55 Kw - 15 Kw (E) </p>
											<p> Material: PP, PVDF </p>		
											<p> Temperatura en Operación: -10ª C + 100ª C </p>		
									</div>								
								</div>	
							</div>

							<div class="row" style="padding: 1em;padding-top: 0;">
								<h3>Válvula de Diafragma Tipo 14</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/valvulas/Valvulas de Diafragma Tipo-14.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	Tamaños: 1/2” - 2”- Unión Americana </p>
											<p> Cuerpos: PVC, CPVC, PP y PVDF </p>
											<p> Diafragmas: EPDM, 3-Layer de PTFE, Nitrilo y FKM </p>
											<p> Conectores: PVC, CPVC, IPS Socket o Rosca PP Socket IPS y Métrico (DIN), Rosca, Fusión a tope, Flange/ Brida </p>
									</div>								
								</div>	
							</div>



						
							
								
						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- columna 2 -->
						<div class="col-sm-12 col-md-6" style="background-color: #fff">

							<div class="row" style="padding: 1em;">
								<h3>Válvula de Bola Tipo 21/21a</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/valvulas/Valvulas de Bola Tipo-21 21a.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	Tamaños: 1/2” - 6” </p>
											<p> Modelos: PPVC/CPVC/PP/PVDF </p>
											<p> Cuerpos: PVC, CPVC, PP y PVDF </p>
											<p> Asiento: PTFE respaldado con EPDM o FKM </p>
											<p> Sellos: EPDM, FKM o AFLAS </p>

									</div>								
								</div>	
							</div>

							<div class="row" style="padding: 1em;padding-top: 0;">
								<h3>Válvula de Compuerta</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">				
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/valvulas/Valvulas de Compuerta.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	Tamaños: 1-1/2” - 14” </p>
											<p> Modelos: Flange/ Brida (ANSI) </p>
											<p> Cuerpos: HI-PVC	</p>
											<p> Tipos/Tamaños: (Vástago Fijo) 1-1/2”-8”	</p>
											<p> Sellos: EPDM y FKM (opcional) </p>								
									</div>
								</div>
							</div>							



						</div>


						<!-- dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd -->
						
						<div class="col-xs-12" style="padding-left: 4em; padding-right: 4em; margin-top: 15px;">		
							<h2 style="margin-bottom: 0; text-align: center;border: 0;">Bombas Centrífugas Horizontales</h2>
							<hr style="margin-top: 3px;">
						</div>



						<div class="col-sm-12 col-md-6" style="background-color: #fff;"> 

							<div class="row" style="padding: 1em;">
								<h3>CMO</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/bombas/MMB-N.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >		
											<h5>Bomba Centrífuga Horizontal</h5>									
											<p>	Capacidades: 5 mc/h - 250 mc/h </p>
											<p> Cabezales: 6 mcl - 100 mcl </p>
											<p> Potencia: 0.55 Kw - 55 Kw </p>
											<p> Material: PP, PVDF </p>		
											<p> Temperatura en Operación: -20ª C + 110ª C </p>		
									</div>								
								</div>	
							</div>

							<div class="row" style="padding: 1em;padding-top: 0;">
								<h3>Válvula de Diafragma Tipo 14</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/valvulas/Valvulas de Diafragma Tipo-14.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	Tamaños: 1/2” - 2”- Unión Americana </p>
											<p> Cuerpos: PVC, CPVC, PP y PVDF </p>
											<p> Diafragmas: EPDM, 3-Layer de PTFE, Nitrilo y FKM </p>
											<p> Conectores: PVC, CPVC, IPS Socket o Rosca PP Socket IPS y Métrico (DIN), Rosca, Fusión a tope, Flange/ Brida </p>
									</div>								
								</div>	
							</div>

							<div class="row" style="padding: 1em;">
								<h3>CMO</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/bombas/MMB-N.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >		
											<h5>Bomba Centrífuga Horizontal</h5>									
											<p>	Capacidades: 5 mc/h - 250 mc/h </p>
											<p> Cabezales: 6 mcl - 100 mcl </p>
											<p> Potencia: 0.55 Kw - 55 Kw </p>
											<p> Material: PP, PVDF </p>		
											<p> Temperatura en Operación: -20ª C + 110ª C </p>		
									</div>								
								</div>	
							</div>
							

						
							
								
						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- columna 2 -->
						<div class="col-sm-12 col-md-6" style="background-color: #fff">

							<div class="row" style="padding: 1em;">
								<h3>Válvula de Bola Tipo 21/21a</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/valvulas/Valvulas de Bola Tipo-21 21a.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	Tamaños: 1/2” - 6” </p>
											<p> Modelos: PPVC/CPVC/PP/PVDF </p>
											<p> Cuerpos: PVC, CPVC, PP y PVDF </p>
											<p> Asiento: PTFE respaldado con EPDM o FKM </p>
											<p> Sellos: EPDM, FKM o AFLAS </p>

									</div>								
								</div>	
							</div>

							<div class="row" style="padding: 1em;padding-top: 0;">
								<h3>Válvula de Compuerta</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">				
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/valvulas/Valvulas de Compuerta.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	Tamaños: 1-1/2” - 14” </p>
											<p> Modelos: Flange/ Brida (ANSI) </p>
											<p> Cuerpos: HI-PVC	</p>
											<p> Tipos/Tamaños: (Vástago Fijo) 1-1/2”-8”	</p>
											<p> Sellos: EPDM y FKM (opcional) </p>								
									</div>
								</div>
							</div>							

							<div class="row" style="padding: 1em;">
								<h3>Válvula de Bola Tipo 21/21a</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/valvulas/Valvulas de Bola Tipo-21 21a.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	Tamaños: 1/2” - 6” </p>
											<p> Modelos: PPVC/CPVC/PP/PVDF </p>
											<p> Cuerpos: PVC, CPVC, PP y PVDF </p>
											<p> Asiento: PTFE respaldado con EPDM o FKM </p>
											<p> Sellos: EPDM, FKM o AFLAS </p>

									</div>								
								</div>	
							</div>
						

						</div>



			








					</div>
				</div>
			
				<div class="col-xs-12"> <br><hr><br></div>

			</div>
		</div>
	</div>
	
</body>

<footer>
	@include('layout.footer')
</footer>
</html>

<style type="text/css">

body{
		background-color: rgba(221, 221, 221, 0.5);
	}
p{ 
	margin-bottom: 2px;
	font-size: 12px;
}

#itemTermo h2{
	
    padding-bottom: 3px;
   
    border-bottom: 2px solid #005fb3;
   
    font-size: 24px;
    letter-spacing: 2px;
    text-shadow: 0px 0px 0px #555;
  }
/*---------------------------------------------------------------*/

.flex-parent{
  display: -ms-flex;
  display: -webkit-flex;
  display: flex;
}

.flex-child{
  display: -ms-flex;
  display: -webkit-flex;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
/*---------------------------------------------------------------*/

#fotoSideTermo{
	width: 50px;
}

#fotoSideTermo:hover:before{
	content:url('{{ asset('img/flecha.png') }}');
	margin-right: 5px;
	margin-left: 5px;
	width: 30px;
	height: 10px;
	overflow: hidden;
}


</style>