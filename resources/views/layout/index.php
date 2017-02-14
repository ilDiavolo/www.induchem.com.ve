<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	


	*{
		list-style: none;
		text-decoration: none;
		padding: 0;	
		box-sizing: border-box;
	}

	#menu{
		/*outline: 1px solid black;			*/
		width: 150px;
		/*padding: 5px;*/
		float: left;
		box-shadow: 1px 0 10px 0px #9e9e9e;	

	}

	#menu > li {
				
		border-top: 1px solid;	
		/*esta es la clave*/
		position: relative;	
	}

	#menu a{
		padding: .5em;
		background-color: white;
		color: #9E9E9E;
		
		display: block;		
	}
	
	#menu a:hover{
		background-color: #9E9E9E;
		color: white;
	}

	#menu a:active{
		color: red;
	}

	
	/* Desaparecer Sub-Menu */
	#menu > li > ul {
		box-shadow: 1px 0 10px 0px #9e9e9e;
		width: 150px;

		position: absolute;

		transition: all 0.3s;
		opacity: 0;
		visibility: hidden;	

		left: 100%;
		top: 0;

		z-index: 1000;	
	}

	/*Aparecer Sub-Menu*/
	#menu > li:hover > ul {
		opacity: 1;
		visibility: visible;
	}


</style>

<body>

<ul id="menu">
	<li>
		<a href="">Italia</a>
		<ul>
			<li><a href="#">Milan</a></li>
			<li><a href="#"> Juventus </a></li>
			<li><a href="#"> Inter </a></li>
			<li><a href="#"> Roma</a></li>
		</ul>
	</li>
	<li>
		<a href="#">España</a>
		<ul>
			<li><a href="#">Real Madrid</a></li>
			<li><a href="#">Barcelona</a></li>
		</ul>
	</li>
	<li>
		<a href="#">Inglaterra</a></a>
		<ul>
			<li><a href="#">Manchester United</a></li>
			<li><a href="#">Arsenal</a></li>
			<li><a href="#">Liverpool</a></li>
		</ul>
	</li>
</ul>

</body>
</html>