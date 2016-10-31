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
	
	<div class="container">
		<div class="row welcome_bar">
			<div class="col-lg-12 bar">
				<div class="bar-icon">
					<img src="{{ asset('img/icon_contact.png') }}" height="63" width="63">
				</div>

				<div class="bar-title">
					<h1><span>Contacta</span> con nosotros!</h1>
				</div>
				<div class="breadcrumbs"><a href="{{ url('home') }}">Inicio</a> Contacto</div>
			</div>
		</div>
	</div>


</body>
<footer>
	@include('layout.footer')
</footer>
</html>