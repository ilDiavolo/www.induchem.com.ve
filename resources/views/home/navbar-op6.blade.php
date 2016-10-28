<style type="text/css">

/*.navbar-nav > li:hover > .dropdown-menu {
    display: block;
	background: ghostwhite; /* remove background to make transparent*/
	/*box-shadow:none;*/ /*get rid of shadow to make transparent*/
	/*margin-top:0px;*/ /*to adjust padding of dropdown in respect to navbar bottom */
/*}*/

.dropdown-large {
	position: static !important;
}
.dropdown-menu-large {
  margin-left: 16px;
  margin-right: 16px;
  padding: 20px 0px;
  width:100%;
}
.dropdown-menu-large > li > ul {
  padding: 0;
  margin: 0;
}
.dropdown-menu-large > li > ul > li {
  list-style: none;
}
.dropdown-menu-large > li > ul > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.428571429;
  color: #333333;
  white-space: normal;
}
.dropdown-menu-large > li ul > li > a:hover,
.dropdown-menu-large > li ul > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu-large .disabled > a,
.dropdown-menu-large .disabled > a:hover,
.dropdown-menu-large .disabled > a:focus {
  color: #999999;
}
.dropdown-menu-large .disabled > a:hover,
.dropdown-menu-large .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.dropdown-menu-large .dropdown-header {
  color: #428bca;
  font-size: 18px;
}
@media (max-width: 768px) {
  .dropdown-menu-large {
    margin-left: 0 ;
    margin-right: 0 ;
  }
  .dropdown-menu-large > li {
    margin-bottom: 30px;
  }
  .dropdown-menu-large > li:last-child {
    margin-bottom: 0;
  }
  .dropdown-menu-large .dropdown-header {
    padding: 3px 15px !important;
  }
}
</style>

<style type="text/css">
	
	#login-dp{
	    min-width: 250px;
	    padding: 14px 14px 0;
	    overflow:hidden;
	    background-color:rgba(255,255,255,.8);
	}
	#login-dp .help-block{
	    font-size:12px    
	}
	#login-dp .bottom{
	    background-color:rgba(255,255,255,.8);
	    border-top:1px solid #ddd;
	    clear:both;
	    padding:14px;
	}
	#login-dp .social-buttons{
	    margin:12px 0    
	}
	#login-dp .social-buttons a{
	    width: 49%;
	}
	#login-dp .form-group {
	    margin-bottom: 10px;
	}
	.btn-fb{
	    color: #fff;
	    background-color:#3b5998;
	}
	.btn-fb:hover{
	    color: #fff;
	    background-color:#496ebc 
	}
	.btn-tw{
	    color: #fff;
	    background-color:#55acee;
	}
	.btn-tw:hover{
	    color: #fff;
	    background-color:#59b5fa;
	}
	@media(max-width:768px){
	    #login-dp{
	        background-color: inherit;
	        color: #fff;
	    }
	    #login-dp .bottom{
	        background-color: inherit;
	        border-top:0 none;
	    }
	}
</style>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container" >

		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>	

			</button>

			<a class="navbar-brand" href="{{ url('home') }}"><img class="img-responsive" width="163" src="{{ asset('img/nav-logo.png') }}"></a>

		</div>


		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse js-navbar-collapse" id="bs-example-navbar-collapse-1">
			
			<ul class="nav navbar-nav navbar-right">

				<li><a href="#">Nosotros</a></li>

				<li class="dropdown dropdown-large">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mercados <b class="caret"></b></a>
										
					<ul class="dropdown-menu dropdown-menu-large row">
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header"><a href="#">Alimentos</a></li>
								<li class="divider"></li>
								<li class="dropdown-header"><a href="#">Servicios</a></li>
								<li class="dropdown-header"><a href="#">Institucional</a></li>
								
								<li class="divider"></li>

								<li class="dropdown-header"><a href="#">Embotelladora</a></li>
								<li class="dropdown-header"><a href="#">Tratamineto de Agua</a></li>
								
							</ul>
						</li>

						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header"><a href="#">Cervecería y Refresco</a></li>
								<!-- <li class="divider"></li> -->
								<li class="dropdown-header"><a href="#">Vidrio y Plástico</a></li>
								<li class="dropdown-header"><a href="#">Textil</a></li>

								<li class="divider"></li>

								<li class="dropdown-header"><a href="#">Azucarero</a></li>			
								<li class="dropdown-header"><a href="#">Aceite</a></li>		

							</ul>
						</li>

						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header"><a href="#">Químicos</a></li>
								<li class="dropdown-header"><a href="#">Petroleo</a></li>

								<li class="divider"></li>	
								
								<li class="dropdown-header"><a href="#">Automotríz</a></li>
								<li class="dropdown-header"><a href="#">Metalmecánica</a></li>
								<li class="divider"></li>
								<li class="dropdown-header"><a href="{{ url('quimicos') }}">Todos</a></li>
															
							</ul>
						</li>

						<li class="col-sm-3">
							<ul>								
								<li class="dropdown-header text-center" style="color:#d40b0b;">Materias Primas</li>

								<li class="divider"></li>
							
								<li><a href="#">ACIDO CLORHIDRICO AL 30% </a></li>
								<li><a href="#">ACIDO NITRICO AL 56% </a></li>							
								<li><a href="#">ACIDO SULFURICO AL 98% </a></li>
								<li><a href="#">ACIDO SULFONICO AL 97% </a></li>
								<li><a href="#">CLORO AL 5% </a></li>
								<li><a href="#">UREA </a></li>
								
							
								<li><a href="#">PEROXIDO DE HIDROGENO 50% </a></li>										
								<li><a href="#">HIDROXIDO DE SODIO </a></li>							
								<li><a href="#">SODA CAUISTICA EN ESCAMAS </a></li>
								<li><a href="#">BUTIL OXITOL O CELLOSOLVE  </a></li>
								<li><a href="#">ETANOL (ALCOHOL F1)  </a></li>
								

								<!-- <li class="dropdown-header" style="color:red;">Materias Primas</li>
								<li><a href="#">Acido Clorhidrico al 30% </a></li>
								<li><a href="#">Acido Nitrico al 56% </a></li>
								<li><a href="#">Acido Sulfonico al 98% </a></li>
								<li><a href="#">Cloro al 5% </a></li>
								<li><a href="#">Peroxido de Hidrogeno 50% </a></li>
								<li><a href="#">Hidroxido de Sodio </a></li>
								<li><a href="#">Soda Caustica en Escama </a></li>
								<li><a href="#">Butil Oxitol </a></li>
								<li><a href="#">Etanol (Alcohol F1)  </a></li> -->
								
							</ul>
						</li>
					</ul>				
				</li>

				<li class="dropdown">

					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>

					<ul class="dropdown-menu">
						<li><a href="#">Químicos</a></li>
						<li><a href="#">Termoplásticos</a></li>
						<li><a href="#">Motores</a></li>
						<!-- <li role="separator" class="divider"></li> -->
						<li><a href="#">actuadores</a></li>
					</ul>

				</li>

				<li><a href="#">Servicios</a></li>

				<li><a href="#">Contacto</a></li>


			<!-- Login con panel -->				
			
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
					<ul id="login-dp" class="dropdown-menu">
						<li>
							<div class="row">
								<div class="col-md-12">
									
									<form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											<label class="" for="exampleInputEmail2">Usuario:</label>
											<input type="email" class="form-control" id="exampleInputEmail2" placeholder="" required>
										</div>
										<div class="form-group">
											<label class="" for="exampleInputPassword2">Contraseña:</label>
											<input type="password" class="form-control" id="exampleInputPassword2" placeholder="" required>
											<div class="help-block text-right"><a href="">Olvido su Contraseña ?</a></div>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-block">Entrar</button>
										</div>
										
									</form>
								</div>
								<div class="bottom text-center">
									Eres Nuevo ? <a href="#"><b>Registrate</b></a>
								</div>
							</div>
						</li>
					</ul>
				</li>
			
			<!-- /Login con panel -->

			
			</ul>

		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>


<style type="text/css">
	
	.navbar{
		background-color: #144b67;
		border-color: rgba(20,75,103,0.45);
	}

	.navbar-default .navbar-nav > li > a {
	  color: #cacaca;
	}
	.navbar-default .navbar-nav > li > a:hover,
	.navbar-default .navbar-nav > li > a:focus {
	  color: ghostwhite;
	  background-color: transparent;
	}	

	.navbar-brand {
	  padding: 5px 0px 10px 15px;
	}

	.navbar-brand > img{
		height: 100%;
	}

</style>