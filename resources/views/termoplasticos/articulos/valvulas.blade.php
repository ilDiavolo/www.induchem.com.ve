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
						<img src="{{ asset('img/v1.png') }}" height="63" width="63">
					</div>

					<div class="bar-title">
						<h1><span>Termoplásticos</span> </h1>
					</div>
					<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Termoplásticos Válvulas</div>
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
					<h2 style="text-align: center;">Vávulas Termopláticas Asahi</h2>
					
					<div class="media" style="margin-top: 20px;margin-bottom: 7px;" >
						<div class="media-left media-middle">
							<img src="{{ asset('img/PRODUCTOS/termoplasticos/menu/asahi.png') }}" class=" media-object">
					  	</div>
						<div class="media-body media-middle">									
						   <p style="line-height: 14px;font-size: 13px;"> Los productos de válvula y actuación de Asahi/America se han utilizado en el campo durante más de cuatro décadas. Además, los actuadores tanto neumáticos como los eléctricos están disponibles para ser montados en fábrica a nuestras válvulas o por separado para su montaje en campo.</p>
						</div>
					</div>					
				</div>

				<div class="row col-sm-12 col-md-6" style="background-color: #fff;margin-right: 0;margin-left: 0;">

					
						<h3>Válvula de Retención Wafer</h3> 
						<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd; margin-bottom: 2em;">
							<div class="col-xs-12 col-md-6 flex-child" style="max-width: 180px;">
								<img src="{{ asset('img/PRODUCTOS/termoplasticos/valvulas/Valvula de Retencian de Wafer.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
							</div>
							<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
									<p>	Tamaños: 4” - 12” </p>
									<p> Cuerpos: PVC </p>
									<p> Asientos: EPDM, FKM </p>
									<p> Opciones: Resorte SWP- 8 (SS) recubierto con E-CTFE </p>		
							</div>								
						</div>	
					

					
						<h3>Válvula de Diafragma Tipo 14</h3>
						<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
							<div class="col-xs-12 col-md-6 flex-child" style="max-width: 180px;">
								<img src="{{ asset('img/PRODUCTOS/termoplasticos/valvulas/Valvulas de Diafragma Tipo-14.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
							</div>
							<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
									<p>	Tamaños: 1/2” - 2”- Unión Americana </p>
									<p> Cuerpos: PVC, CPVC, PP y PVDF </p>
									<p> Diafragmas: EPDM, 3-Layer de PTFE, Nitrilo y FKM </p>
									<p> Conectores: PVC, CPVC, IPS Socket o Rosca PP Socket IPS y Métrico (DIN), Rosca, Fusión a tope, Flange/ Brida </p>
							</div>								
						</div>	
				

					
						<h3>Válvula de Mariposa Tipo 57</h3>
						<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
							<div class="col-xs-12 col-md-6 flex-child" style="max-width: 180px;">
								<img src="{{ asset('img/PRODUCTOS/termoplasticos/valvulas/Valvulas de Mariposa Tipo-57.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
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
					

					
						<h3>Válvula de Retención de Bola</h3>
						<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
							<div class="col-xs-12 col-md-6 flex-child" style="max-width: 180px;">
								<img src="{{ asset('img/PRODUCTOS/termoplasticos/valvulas/Valvulas de Retencion de Bola.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
							</div>
							<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
									<p>	Tamaños: 1/2” - 2”- Unión Americana </p>
									<p> Cuerpos: PVC, CPVC, PP y PVDF </p>
									<p> Diafragmas: EPDM, 3-Layer de PTFE, Nitrilo y FKM </p>
									<p> Conectores: PVC, CPVC, IPS Socket o Rosca PP Socket IPS y Métrico (DIN), Rosca, Fusión a tope, Flange/ Brida </p>
							</div>								
						</div>		
																						
				</div>					
				
					
				<!-- lllllllllllllllllllllll -->

				<div class="row col-sm-12 col-md-6" style="background-color: #fff;margin-right: 0;margin-left: 0;">

					
						<h3>Válvula de Bola Tipo 21/21a</h3>
						<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
							<div class="col-xs-12 col-md-6 flex-child" style="max-width: 180px;">
								<img src="{{ asset('img/PRODUCTOS/termoplasticos/valvulas/Valvulas de Bola Tipo-21 21a.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
							</div>
							<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
									<p>	Tamaños: 1/2” - 6” </p>
									<p> Modelos: PPVC/CPVC/PP/PVDF </p>
									<p> Cuerpos: PVC, CPVC, PP y PVDF </p>
									<p> Asiento: PTFE respaldado con EPDM o FKM </p>
									<p> Sellos: EPDM, FKM o AFLAS </p>

							</div>								
						</div>	
					

					
						<h3>Válvula de Compuerta</h3>
						<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">				
							<div class="col-xs-12 col-md-6 flex-child" style="max-width: 180px;">

								<img src="{{ asset('img/PRODUCTOS/termoplasticos/valvulas/Valvulas de Compuerta.png') }}" class="img-responsive" style="border-right: 1px solid #9d9d9d;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">

							</div>
							<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
									<p>	Tamaños: 1-1/2” - 14” </p>
									<p> Modelos: Flange/ Brida (ANSI) </p>
									<p> Cuerpos: HI-PVC	</p>
									<p> Tipos/Tamaños: (Vástago Fijo) 1-1/2”-8”	</p>
									<p> Sellos: EPDM y FKM (opcional) </p>								
							</div>
						</div>
											

					
						<h3>Válvula de Retención de Columpio</h3>
						<div class="col-xs-12 flex-parent" style="background-color: #fff;border: 1px solid #ddd;margin-bottom: 2em;">
							<div class="col-xs-12 col-md-6 flex-child" style="max-width: 180px;">
								<img src="{{ asset('img/PRODUCTOS/termoplasticos/valvulas/Valvula de Retencion de Columpio.png') }}" class="img-responsive" style="border-right: 1px solid #ddd;margin-top: 20px; margin-bottom: 20px;padding-right: 1em;">
							</div>
							<div class="col-xs-12 col-md-6 flex-child" style="margin-top: 20px; margin-bottom: 20px; padding: 0;" >											
									<p>	Tamaños: ¾” - 8”4. </p>
									<p> Modelos: Flange / Brida (ANSI). </p>
									<p> Cuerpos: HI PVC, PP y PVDF. </p>
									<p> Asiento: EPDM, FKM, PTFE. </p>
									<p> Opciones: Palanca y Contrapeso / Resorte de Acero Inoxidable. </p>
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
/*-----------------------------------------------------------------*/

.flex-parent{
  display: -ms-flex;
  display: -webkit-flex;
  display: flex;
  height: 230px;
}

.flex-child{
  display: -ms-flex;
  display: -webkit-flex;
  display: flex;
  justify-content: center;
  flex-direction: column;
}

</style>