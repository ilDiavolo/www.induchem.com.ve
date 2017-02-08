<!DOCTYPE html>
<html>
<head>
	@include('layout.head')
	<title></title>
</head>

<style type="text/css">
	/* Extra Small */
	@media(max-width:767px){

		.f{ background-color: red; }
		.f h1{ font-size: 19px; }
		.f p{ font-size: 3mm; line-height: 11px; }
	}

	/* Small */
	@media(min-width:768px) and (max-width:991px){

		.f{ background-color: yellow; }
		.f h1{ font-size: 24px; }
		.f p{ font-size: 11px; line-height: 14px;  }
	}

	/* Medium */
	@media(min-width:992px) {
		.f{ background-color: green; }
	}

</style>
	

<body>
	<header>
		@include('home.navbar-op5')
	</header>

	<div class="container-fluid">
		<div class="container">

			<div class="row">

				<br>
				
				<div class="visible-xs col-xs-12" style="border: 1px solid">
					cambio sidebar a menu
				</div>

			<!-- 	<div class="col-sm-4 hidden-xs" style="border: 1px solid">
					sidebar
				</div> -->

				<div class="col-sm-6 col-xs-6 f" style="border: 1px solid; ">				
					<h1>h1. Bootstrap heading</h1>	
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>				
				</div>
				<div class="col-sm-6 col-xs-6" style="border: 1px solid; ">				
					<h1>h1. Bootstrap heading</h1>	
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>				
				</div>

				<div class="col-xs-12"><br></div>


			</div>
		</div>

	</div>



</body>


<footer>
	@include('layout.footer')
</footer>
</html>