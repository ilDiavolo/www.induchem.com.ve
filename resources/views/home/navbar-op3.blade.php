<style type="text/css">
	/*
----------------------PANEL CUSTOM----------------------------------------
*/
/*
.panel-custom > .panel-heading {
  color: #ff0000;
  background-color: #000000;
}
.panel-custom > .panel-body {
  color: #9fa7b7;
  background-color: #5a6378;
  border:none;
}

.panel-body h3{
	color:#ffffff;
	font-weight:700;
    text-transform:uppercase;
	margin-bottom:4%;
}
.panel-custom > .panel-footer {
  color: #ffffff;
  background-color: #414859;
  border:none;
  max-height:100%;
  height:60px;
  margin-bottom:15%;
}
.panel-custom > .panel-heading .badge {
  color: #ff3300;
  background-color: #ffffff;
}

.panel-heading.post-heading1{
	background-image: url("http://soldierupdesigns.com/parallax/images/beach.jpg");
	background-size: 100% 100%;
	background-repeat: no-repeat;
	background-attachment: static;
	background-position: center;
	-webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
	max-width:100%;
	height:300px;
}*/

/*
----------------------SIDENAV----------------------------------------
*/
/*
#slideout-menu{
    height:100%;
    position: fixed;
    top: 0%;
}
.slideout-menu {
	left: -250px;
	width: 250px;
	height: auto;
	background: #2e2e2e;
	z-index: 200;
}

.slideout-menu h3 {
	position: relative;
	padding: 12px 10px;
	color: #fff;
	font-size: 1.2em;
	font-weight: 400;
	border-bottom: 4px solid #222;
	background:#101010;
}
.slideout-menu .slideout-menu-toggle {
	position: absolute;
	top: 12px;
	right: 10px;
	display: inline-block;
	padding: 6px 9px 5px;
	font-family: Arial, sans-serif;
	font-weight: bold;
	line-height: 1;
	background: #222;
	color: #999;
	text-decoration: none;
	vertical-align: top;
}

.slideout-menu .slideout-menu-toggle:hover {
	color: #fff;
}
.slideout-menu .slideout-menu-list {
	list-style: none;
	font-weight: 300;
	border-top: 1px solid #151515;
	border-bottom: 1px solid #454545;
}
.slideout-menu .slideout-menu-list li {
	border-top: 1px solid #454545;
	border-bottom: 1px solid #151515;
}
.slideout-menu .slideout-menu-list li a {
	position: relative;
	display: block;
	padding: 10px;
	color: #ffffff;
	text-decoration: none;
}
.slideout-menu .slideout-menu-list li a:hover {
	background: #000;
	color: #fff;
}
.slideout-menu .slideout-menu-list li a i {
	position: absolute;
	top: 15px;
	right: 10px;
	opacity: .5;
}

.navbar-header .slideout-menu-toggle {
	font-size: 1.2em;
	color: #999;
	text-decoration: none;
}
.navbar-header .slideout-menu-toggle:hover {
	color: #fff;
}
.navbar-header .slideout-menu-toggle i {
	vertical-align: top;
	margin: 5px 3px 0 0;
}*/

/* MEGA MENU STYLE
********************************/
/* To Dropdown navbar dropdown on hover */


.navbar-nav > li:hover > .dropdown-menu {
    display: block;
	background: ghostwhite; /* remove background to make transparent*/
	box-shadow:none; /*get rid of shadow to make transparent*/
	margin-top:0px; /*to adjust padding of dropdown in respect to navbar bottom */
}

.menu-large {
	position: static !important;
}
.megamenu{
	padding: 20px 0px;
	width:100%;
}
.megamenu> li > ul {
	padding: 0;
	margin: 0;
	background: ghostwhite;
}
.megamenu> li > ul > li {
	list-style: none;
}
.megamenu> li > ul > li > a {
	display: block;
	padding: 3px 20px;
	clear: both;
	font-weight: normal;
	line-height: 1.428571429;
	color: #000;
	white-space: normal;
}
.megamenu> li ul > li > a:hover,
.megamenu> li ul > li > a:focus {
	text-decoration: none;
	color: #fff;
	background-color: #f5f5f5;
	font-weight:700;
}
.megamenu.disabled > a,
.megamenu.disabled > a:hover,
.megamenu.disabled > a:focus {
	color: #fff;
}
.megamenu.disabled > a:hover,
.megamenu.disabled > a:focus {
	text-decoration: none;
	background-color: transparent;
	background-image: none;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
	cursor: not-allowed;
}
li.dropdown-header.megaheader {
	color: #ff3300;
	font-size: 100%;
	font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 700;
	letter-spacing: 1px;
	text-transform: uppercase;
}

@media (max-width: 768px) {
		
	.megamenu{
		margin-left:0;
		margin-right:0;
	}
	.megamenu> li {
		margin-bottom:30px;
	}
	.megamenu> li:last-child {
		margin-bottom: 0;
	}
	.megamenu.dropdown-header {
		padding: 3px 15px !important;

	}
	.navbar-nav .open .dropdown-menu .dropdown-header{
		color:#fff;
	}
}

</style>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid" >

		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>

			<a class="navbar-brand" href="#"><img class="img-responsive" width="163" src="{{ asset('img/nav-logo.png') }}"></a>

		</div>


		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
			<ul class="nav navbar-nav navbar-right">

				<li class="menu-large">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros</a>
					<ul class="dropdown-menu megamenu">
						<li>item 1</li>
						<li>item 2</li>
						<li>item 3</li>
					</ul>
				</li>

				<li class="dropdown menu-large">
					<a data-href="#" class="dropdown-toggle" data-toggle="dropdown" style="cursor:pointer;">Categories <b class="caret"></b></a>				
					<ul class="dropdown-menu megamenu row">
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header megaheader">Glyphicons</li>
								<li><a href="#">Available glyphs</a></li>
								<li class="disabled"><a href="#">How to use</a></li>
								<li><a href="#">Examples</a></li>
								<li class="divider"></li>
								<li class="dropdown-header megaheader">Dropdowns</li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Aligninment options</a></li>
								<li><a href="#">Headers</a></li>
								<li><a href="#">Disabled menu items</a></li>
							</ul>
						</li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header megaheader">Button groups</li>
								<li><a href="#">Basic example</a></li>
								<li><a href="#">Button toolbar</a></li>
								<li><a href="#">Sizing</a></li>
								<li><a href="#">Nesting</a></li>
								<li><a href="#">Vertical variation</a></li>
								<li class="divider"></li>
								<li class="dropdown-header megaheader">Button dropdowns</li>
								<li><a href="#">Single button dropdowns</a></li>
							</ul>
						</li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header megaheader">Input groups</li>
								<li><a href="#">Basic example</a></li>
								<li><a href="#">Sizing</a></li>
								<li><a href="#">Checkboxes and radio addons</a></li>
								<li class="divider"></li>
								<li class="dropdown-header megaheader">Navs</li>
								<li><a href="#">Tabs</a></li>
								<li><a href="#">Pills</a></li>
								<li><a href="#">Justified</a></li>
							</ul>
						</li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header megaheader">Navbar</li>
								<li><a href="#">Default navbar</a></li>
								<li><a href="#">Buttons</a></li>
								<li><a href="#">Text</a></li>
								<li><a href="#">Non-nav links</a></li>
								<li><a href="#">Component alignment</a></li>
								<li><a href="#">Fixed to top</a></li>
								<li><a href="#">Fixed to bottom</a></li>
								<li><a href="#">Static top</a></li>
								<li><a href="#">Inverted navbar</a></li>
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