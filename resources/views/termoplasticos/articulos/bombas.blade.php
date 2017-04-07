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
	    float: left;
	}
	
	.welcome_bar {
	    background: url('{{ asset('img/fondoHeaderContacto.png') }}') 0 0;
	    clear: both;	   
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

	<div class="container-fluid">

		<div class="row welcome_bar">
			<div class="container">
				<div class="col-sm-7 col-xs-12 bar">
					<div class="bar-icon">
						<img src="{{ asset('img/bafe.png') }}" height="63" width="63">
					</div>
					<div class="bar-title">
						<h1><span>Termoplásticos</span> </h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Termoplásticos Bombas</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
						
			<div class="col-xs-3" style="padding: 0; z-index: 100">				
					@include('termoplasticos.menu_productos_servicios')
			</div>
			
			<div class="col-xs-9" style="background-color: white; z-index: 90;box-shadow: 3px 2px 13px 1px rgba(51, 51, 51, 0.43);">
				

					<div style="padding-left: 15px; padding-right: 15px; margin-top: 3em;">
						<h2 style="text-align: center;">Bombas</h2>							
							
						<div class="media" style="margin-top: 20px;margin-bottom: 7px;" >
							<div class="media-left media-middle">
								<img src="{{ asset('img/PRODUCTOS/termoplasticos/menu/affetti.png') }}" class=" media-object" style="height: 50px;">
							</div>
							<div class="media-body media-middle">
									<!-- <h4 class="media-heading">Media heading</h4> -->
								<p style="line-height: 14px;font-size: 13px;"> 
								   	Las bombas Affetti están proyectadas para soportar trabajos pesados en entornos corrosivos. Ácidos y bases concentrados, soluciones alcalinas o ligeramente ácidas, agua de mar, solventes, son algunos de los líquidos bombeados más a menudo. Entre los principales sectores de utilización se destacan el químico, el galvánico, el siderúrgico, el farmacéutico, el energético, los acuarios marinos, la curtición, la depuración de aguas y de aire, la ingeniería, la acuicultura, los fertilizantes y pesticidas, las plantas desalinizadoras, el tratamiento de metales preciados, el automovilístico, el aeronáutico, entre otros.
								</p>
							</div>
						</div>					
					</div>

						<!-- columna 1 -->
						<div class="col-xs-12" style="padding-left: 4em; padding-right: 4em;margin-top: 15px;z-index: 200;">		
							<h2 style="margin-bottom: 0; text-align: center;border: 0;">Bombas Centrífugas con Transmisión Magnética</h2>
							<hr style="margin-top: 3px;">
						</div>

						<div class="row col-sm-12 col-md-6" style="background-color: #fff;margin-right: 0;margin-left: 0;"> 
							
								<h3>MMB-N</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
									<div class="col-xs-12 col-md-6 flex-child" style="max-width: 190px;">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/bombas/MMB-N.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >		

											<p>	Capacidades: 5 mc/h-70 mc/h (E) </p>
											<p> Cabezales: 6 mcl - 41 mcl (E) </p>
											<p>Potencia: 0.55 Kw - 15 Kw (E) </p>
											<p> Material: PP, PVDF </p>		
											<p> Temperatura en Operación: -10ª C + 100ª C </p>		
									</div>								
								</div>	
						

							
								<h3>MMB-N</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
									<div class="col-xs-12 col-md-6 flex-child" style="max-width: 190px;">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/bombas/MMB-N2.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											
											<p>	Capacidades: 5 mc/h - 56 mc/h </p>
											<p> Cabezales: 10 mcl - 42 mcl </p>
											<p>Potencia: 1.1 Kw - 15 Kw </p>
											<p> Material: PP, PVDF </p>		
											<p> Temperatura en Operación: -10ª C + 100ª C </p>	
									</div>								
								</div>	
							
								
						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- columna 2 -->
						<div class="row col-sm-12 col-md-6" style="background-color: #fff;margin-right: 0;margin-left: 0;">
							
								<h3>MMB-E</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
									<div class="col-xs-12 col-md-6 flex-child" style="max-width: 190px;">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/bombas/MMB-E.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											
											<p>	Capacidades: 15 mc/h-120 mc/h (N) </p>
											<p> Cabezales: 15 mcl-41 mcl (N) </p>
											<p>Potencia: 1.5 Kw-18.5 Kw (N) </p>
											<p> Material: PP, PVDF </p>		
											<p> Temperatura en Operación: -10ª C + 100ª C </p>	
									</div>								
								</div>	
						

							
								<h3>MMB-E</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
									<div class="col-xs-12 col-md-6 flex-child" style="max-width: 190px;">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/bombas/MMB-E2.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >		

											<p>	Capacidades: 5 mc/h - 56 mc/h </p>
											<p> Cabezales: 10 mcl - 42 mcl </p>
											<p>Potencia: 1.1 Kw - 15 Kw </p>
											<p> Material: PP, PVDF </p>		
											<p> Temperatura en Operación: -10ª C + 100ª C </p>			
									</div>								
								</div>	
													

						</div>


						<!-- dddddddddddddddddddd  Bombas Centrífugas Horizontales  ddddddddddddddddddddddddddd -->
						
						<div class="col-xs-12" style="padding-left: 4em; padding-right:4em; margin-top: 15px;z-index: 200;">		
							<h2 style="margin-bottom: 0; text-align: center;border: 0;">Bombas Centrífugas Horizontales</h2>
							<hr style="margin-top: 3px;">
						</div>



						<div class="row col-sm-12 col-md-6" style="background-color: #fff;margin-right: 0;margin-left: 0;"> 

								<h3>CMO</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
									<div class="col-xs-12 col-md-6 flex-child" style="max-width: 190px;">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/bombas/CMO.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >		
																		
											<p>	Capacidades: 5 mc/h - 250 mc/h </p>
											<p> Cabezales: 6 mcl - 100 mcl </p>
											<p> Potencia: 0.55 Kw - 55 Kw </p>
											<p> Material: PP, PVDF </p>		
											<p> Temperatura en Operación: -20ª C + 110ª C </p>		
									</div>								
								</div>	
							

							
								<h3>CDM</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
									<div class="col-xs-12 col-md-6 flex-child" style="max-width: 190px;">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/bombas/CDM.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	Capacidades: 10 mc/h - 250 mc/h </p>
											<p> Cabezales: 6 mcl - 100 mcl </p>
											<p> Potencia: 2.2 Kw - 75 Kw </p>
											<p> Material: PP, PVDF, PEHD, PVC, PTFE </p>
											<p> Temperatura en Operación: -50ª C + 150ª C </p>
									</div>								
								</div>	
						

								<h3>CDM <small>Bombas Volumétricas Auto-Cebadas</small> </h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;height: 230px;">
									<div class="col-xs-12 col-md-6 flex-child" style="max-width: 210px;">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/bombas/CDM2.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >		
											<h5>Bomba Centrífuga Horizontal</h5>									
											<p>	Capacidades: 1.5 mc/h - 25 mc/h </p>
											<p> Cabezales: 1.5 mcl - 30 mcl </p>
											<p> Potencia: 0.25 Kw - 5.5 Kw </p>
											<p> Material:PP, PVC, PVDF </p>		
											<p> Temperatura en Operación: -10ª C + 100ª C </p>		
									</div>								
								</div>	
							
							

						</div>

						<!-- lllllllllllllllllllllll -->
						<!-- columna 2 -->
						<div class="row col-sm-12 col-md-6" style="background-color: #fff;margin-right: 0;margin-left: 0;">

							
								<h3>CGO</h3>
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
									<div class="col-xs-12 col-md-6 flex-child" style="max-width: 190px;">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/bombas/CGO.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	Capacidades: 5 mc/h - 120 mc/h </p>
											<p> Cabezales: 6 mcl - 40 mcl </p>
											<p> Potencia: 0.55 Kw - 18.5 Kw </p>
											<p> Material: PP, PVDF </p>
											<p> Temperatura en Operación: -20ª C + 110ª C </p>
									</div>								
								</div>	
							

							
								<h3>CGD</h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
									<div class="col-xs-12 col-md-6 flex-child" style="max-width: 190px;">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/bombas/CGD.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >		
																				
											<p>	Capacidades: 10 mc/h - 1000 mc/h </p>
											<p> Cabezales: 5 mcl - 120 mcl </p>
											<p> Potencia: 0.75 Kw - 110 Kw </p>
											<p> Material: PP, PVDF, PEHD, PVC, PTFE </p>		
											<p> Temperatura en Operación: -50ª C + 150ª C </p>		
									</div>								
								</div>	
									

							
								<h3>CLV <small>Bombas Centrífugas Verticales</small> </h3> 
								<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;height: 230px;">
									<div class="col-xs-12 col-md-6 flex-child" style="max-width: 210px;">
										<img src="{{ asset('img/PRODUCTOS/termoplasticos/bombas/CLV.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<h5>Bomba Centrífuga Verticales</h5>									
											<p>	Capacidades: 5 mc/h - 300 mc/h </p>
											<p> Cabezales: 6 mcl - 80 mcl </p>
											<p> Potencia: 0.55 Kw - 75 Kw </p>
											<p> Material:PP, PVC, PVDF </p>		
											<p> Temperatura en Operación: -10ª C + 100ª C </p>	
									</div>								
								</div>	
									

						</div>

					
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

body{
		background-color: rgba(221, 221, 221, 0.5);
	}
p{ 
	margin-bottom: 2px;
	font-size: 12px;
}

h2{	
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

  height: 160px;
}

.flex-child{
  display: -ms-flex;
  display: -webkit-flex;
  display: flex;
  justify-content: center;
  flex-direction: column;
}


</style>