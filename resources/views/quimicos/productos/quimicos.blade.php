<!DOCTYPE html>
<html>
<head>
	@include('layout.head')
	<title></title>
</head>


<style type="text/css">
	
	/*fuente: releway 700*/
	@import url('https://fonts.googleapis.com/css?family=Raleway:700');

	body{ 
		background-color: #f5f5f5;
	}

	*{
		list-style: none;		
		padding: 0;	
		box-sizing: border-box;
	}

</style>


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


<div class="container-fluid">
	<div class="row">
						
		<div class="col-xs-3" style="padding: 0;">				
				
			@include('quimicos.menu_quimicos')		
						
		</div>

		<div class="col-xs-9" id="contenidoPrincipal">
		
			<div id="itemQuimico">

				<h2>PRODUCTOS QUIMICOS</h2>				
					
					<p class="text-justify" style="color: white"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

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
		background-image: url('{{ asset('img/test/qbg1.jpg') }}');
		background-size: cover;
		height: 650px;
		z-index: 90;
		box-shadow: 3px 2px 13px 1px rgba(51, 51, 51, 0.43);
	}
/*---------------------------------------------------------------*/
	#itemQuimico {
		margin-top: 10em;
	    padding: 3em;
	    border: 1px solid;
	    background-color: rgba(0, 0, 0, 0.76);
	}

	#itemQuimico h2{
		color: white;
		margin-bottom: 16px;
	    padding-bottom: 3px;
	    border-bottom: 2px solid #005fb3;
	    margin-top: 0px;
	    font-size: 24px;
	    text-align: center;
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
		text-decoration-style: none;		
		margin-right: 20px;
	}
	


	
</style>



