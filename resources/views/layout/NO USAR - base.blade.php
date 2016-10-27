<!DOCTYPE html>
<html>
	
	<head>
		@yield('head', 'Aqui van todos los enlaces requeridos y toda la informacion de la cabecera')
	</head>

	<body>
		
		<header>
			@yield('nav', 'barra de navegacion')
		</header>
		
		@yield('body','esto es el contenido del cuerpo')

	</body>

	<footer>
		@yield('footer','esto es el footer ps')
	</footer>

 	

</html>