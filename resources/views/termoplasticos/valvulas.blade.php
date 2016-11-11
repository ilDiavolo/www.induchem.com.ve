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
					
					<h1 style="margin-bottom: 0;margin-top: 0;"><span>Materias</span> Primas</h1>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Termopláticos Válvulas</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
						
			<div class="col-xs-3" >
				<div class="row">
					<div class="col-xs-12" id="sidebar" style="padding-left: 0;padding-right: 0;background-color: #fff;">

						<h2>sidebar termoplasticos</h2>
					</div>
												
				</div>
			</div>
			
			<div class="col-xs-9">
				<div class="row" style="padding: 1em;">
					
					<div class="col-xs-12" style="background-color: #fff; padding: 0;">
							
						<div class="col-sm-12 col-md-6" style="background-color: #fff;">

							<div class="row" style="padding: 1em;">

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

							<div class="row" style="padding: 1em;padding-top: 0;">
								<div class="col-xs-12 flex-parent" style="background-color: #fff;">
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


							<div class="row" style="padding: 1em;padding-top: 0;">
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/valvulas/Valvulas de Mariposa Tipo-57.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	Tamaños: Palanca 1-1/2” - 8“ </p>
											<p> Modelos: Wafer </p>
											<p> Operación: Palanca y Volante </p>
											<p> Cuerpos: PVC, PP y PVDF </p>
											<p> Discos: PVC, CPVC, PP Y PVDF </p>
											<p> Vástagos: Acero inoxidable 403 y 306, Titanio, Hastelloy® </p>
									</div>								
								</div>	
							</div>

							<div class="row" style="padding: 1em;padding-top: 0;">
								<div class="col-xs-12 flex-parent" style="background-color: #fff;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/valvulas/Valvulas de Retencion de Bola.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
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

						<div class="col-sm-12 col-md-6" style="background-color: #fff">

							<div class="row" style="padding: 1em;padding-top: 0;">
								<div class="col-xs-12 flex-parent" style="background-color: #fff;">
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
								<div class="col-xs-12 flex-parent" style="background-color: #eee;">
									<div class="col-xs-12 col-md-6 flex-child">
										<img src="{{ asset('img/termoplasticos/valvulas/valvulas/Valvula de Retencian de Wafer.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
									</div>
									<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
											<p>	Tamaños: 4” - 12” </p>
											<p> Cuerpos: PVC </p>
											<p> Asientos: EPDM, FKM </p>
											<p> Opciones: Resorte SWP- 8 (SS) recubierto con E-CTFE </p>		
									</div>								
								</div>	
							</div>

							

							<div style="padding: 1em;">
								<div style="background-color: #fff;padding: 1em;">
									<img src="{{ asset('img/termoplasticos/valvulas/Valvula de Retencion de Columpio.png') }}" class="img-responsive">									
								</div>	
							</div>

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

body{
		background-color: rgba(221, 221, 221, 0.5);
	}
p{ 
	margin-bottom: 2px;
	font-size: 12px;
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
}S
/*---------------------------------------------------------------*/

	
/*---------------------------------------------------------------*/
	

</style>