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
	    width: 80px;
	    height: 88px;
	    float: left;
	}
	
	.welcome_bar {
	    background: url('{{ asset('img/title_bar_bg.gif') }}') 0 0 repeat-x;
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
	<header>
		@include('home.navbar-op5')
	</header>
	
	<div class="container" style="height: 110px;">
		<div class="row welcome_bar">
			<div class="col-sm-7 bar">
				<div class="bar-icon">
					<img src="{{ asset('img/icon_contact.png') }}" height="63" width="63">
				</div>

				<div class="bar-title">
					<h1><span>Contacta</span> con nosotros!</h1>
				</div>
				<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Contacto</div>
			</div>

			<div class="col-sm-5 bar">
				<div>
					<i class="ion-ios-telephone-outline" style="font-size: 55px;float: left;line-height: 5px; width: 44px;padding-right: 5px;"></i>
					<!-- <img src="{{ asset('img/icon_contact.png') }}" height="63" width="63"> -->
				</div>

				<div class="bar-title">
					<h4 style="margin-top: 5px; margin-bottom: 0px;">Telf. Master: +58 (245) 564 88 98</h4>
					<h4 style="margin-top: 2px;">Fax: +58 (245) 565 03 54</h4>
					<!-- <h1><span>Contacta</span> con nosotros!</h1> -->
				</div>
				
			</div>

		</div>

	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				
				<div>
				  	<h3>Planta Loma Linda</h3>
				  	<p>
				  		Calle Rio Caura, Parcela No. CI-14-A, Zona Industrial Loma Linda, Mpio. Guacara, Edo. Carabobo, Venezuela,  Z.P. 2015.
				  	</p>
				</div>
				<hr>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.358312789344!2d-67.86835048520378!3d10.232657892691877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7dac6e086e5497df!2sInduchem%2C+C.A.!5e0!3m2!1ses!2sus!4v1478009044824" width="555" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<br>
				<br>

				<div>
				  	<h3>Planta Pruinca</h3>
				  	<p>
				  		Zona Industrial Pruinca, Mpio. Guacara, Edo. Carabobo, Venezuela.
				  	</p>
				</div>
				<hr>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11105.263553663644!2d-67.85285604262296!3d10.237081199930453!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54343e2b6d737b74!2sInduchem%2C+C.A.!5e0!3m2!1ses!2sve!4v1478023335217" width="555" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>
			
			<div class="col-md-6" >
				
				<div style="background-color: whitesmoke; border-radius: 10px; padding: 10px; padding-left: 30px;">
				  	<h4>Contacta con nosotros a traves de nuestros correos:</h4>
				  	<ul class="list-unstyled" style="font-size: 15px;">
				  		<li>
				  			<i class="ion-paper-airplane" style="font-size: 17px; margin-right: 8px;"></i> <a href="mailto:induchem@induchem.com.ve">induchem@induchem.com.ve</a> 
				  		</li>

				  		<li>
				  			<i class="ion-paper-airplane" style="font-size: 17px; margin-right: 8px;"></i> <a href="mailto:induchem@induchem.com.ve">ventas@induchem.com.ve</a> 
				  		</li>

				  		<li>
				  			<i class="ion-paper-airplane" style="font-size: 17px; margin-right: 8px;"></i> <a href="mailto:induchem@induchem.com.ve">compras@induchem.com.ve</a> 
				  		</li>

				  	</ul>
					
					<hr>

					<h4>Siguenos en nuestras redes sociales:</h4>
					<a href="http://www.facebook.com/induchemve/" target="_blank"><img alt="siguenos en Twitter" height="32" src="{{ asset('img/redes/facebook.png') }}" title="siguenos en Induchem_ve" width="32"></a>

					<a href="http://www.instagram.com/induchem_ve" target="_blank"><img alt="siguenos en facebook" height="32" src="{{ asset('img/redes/instagram.png') }}" title="siguenos en facebook" width="32"></a>

					<a href="https://www.linkedin.com/company/induchem-c-a-" target="_blank"><img alt="sígueme en Instagram" height="32" src="{{ asset('img/redes/linkedIn.png') }}" title="sígueme en Instagram" width="32"></a>

					<a href="https://twitter.com/Induchem_ve" target="_blank"><img alt="Sígueme en Likedin" height="32" src="{{ asset('img/redes/twitter.png') }}" title="Sígueme en Likedin" width="32" /></a>


				</div>
			  	<br>

			  	<div style="background-color: whitesmoke; border-radius: 10px; padding: 25px;">
			  		<legend class="text-center">Formulario de Contacto</legend> 		  		
			  						  		
		  			<form action="" method="POST" role="form" class="form-horizontal" >
					
					<div class="form-group">
					    <label class="control-label col-sm-2" for="pwd">* Nombre :</label>
					    <div class="col-sm-10"> 
					      <input type="password" class="form-control" id="nombre" placeholder="Ingrese su nombre">
					    </div>
					</div>
	
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="email">* Email :</label>
					    <div class="col-sm-10">
					      <input type="email" class="form-control" id="email" placeholder="Ingrese su correo">
					    </div>				    
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-2" for="pwd">Asunto :</label>
					    <div class="col-sm-10"> 
					      <input type="password" class="form-control" id="nombre" placeholder="Asunto">
					    </div>
					</div>

					<div class="form-group">
					    <label class="control-label col-sm-2" for="pwd">Empresa :</label>
					    <div class="col-sm-10"> 
					      <input type="password" class="form-control" id="nombre" placeholder="Empresa">
					    </div>
					</div>					  

				  	  <div class="form-group">
					    <label class="control-label col-sm-2" for="solicitud">Solicitud :</label>
					    <div class="col-sm-10"> 
					  	  <textarea class="form-control" rows="5" id="solicitud" name="solicitud"></textarea>
					    </div>
					  </div>

					  <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default pull-right">Enviar</button>
					    </div>
					  </div>

					</form>

			  		
			  	</div>
				
			</div>


		</div>
		<br>
	</div>	


</body>
<footer>
	@include('layout.footer')
</footer>
</html>