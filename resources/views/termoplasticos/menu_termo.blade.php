<style type="text/css">
	
	/*fuente: releway 700*/
	@import url('https://fonts.googleapis.com/css?family=Raleway:700');
	
/*-------------------------- menu_termo de Multinivel ----------------------------------*/
	*{
		list-style: none;		
		padding: 0;	
		box-sizing: border-box;
	}

	#menu_termo{
		font-family: 'Raleway', sans-serif;
		background-color: white;
		float: left;
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
		width: 100%;
		min-width: 224px;
	}

	#menu_termo > li {
				
		border-top: 1px solid #ebebeb;
		
		/*esta es la clave*/
		position: relative;	
	}

	#menu_termo a{
		padding: 0 20px;
		background-color: white;
		color: rgba(95, 95, 95, 0.85);
		line-height: 45px;		
		display: block;		
		overflow: hidden;
    	text-overflow: ellipsis; /* corta el texto en puntos */
    	white-space: nowrap; /* hace q el texto sigo corrido para q el valor de arriba haga efecto */
    	font-size: 1.5rem;
    	text-decoration: none;
	}
	
	#menu_termo a:hover{
		/*background-color: #9E9E9E;*/
		color: brown;
		text-decoration: none;
	}

	#menu_termo > li:hover > a{
		/*background-color: #9E9E9E;
		color: white;*/
		box-shadow: inset 2px 0 0 brown;
	}

	#menu_termo a:active{
		color: red;
	}
	
	/* Desaparecer Sub-menu_termo */
	#menu_termo > li > ul {
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);		

		position: absolute;

		transition: all 0.3s;
		opacity: 0;
		visibility: hidden;	

		left: 100%;
		top: 0;

		z-index: 1000;	
	}

	/*Aparecer Sub-menu_termo*/
	#menu_termo > li:hover > ul {
		opacity: 1;
		visibility: visible;
	}

	/* Desactivando la primero lista ya no seran enlaces*/
	#menu_termo > li > a:active{
		pointer-events: none;
		color: brown;		
	}	

	/*#menu_termo > li > a:before{	}*/

	#menu_termo > li:hover > a:before{
		 background: brown;   
	}

	#menu_termo > li > a:after{
		content: '•';
		font-size: 44px;
		color: #9E9E9E;
	    position: absolute;
	    /*top: 50%;*/
	    margin-top: -1px;
	    display: inline-block;
	    height: 2px;
	    width: 10px;   
	    /*background: #9E9E9E;   */

	    -webkit-backface-visibility: hidden;
	    backface-visibility: hidden;

	  /*  transform-origin: 9px 50%;
	    transform: rotate(-90deg);
	    transform-origin: 9px 50%;*/

	    box-sizing: border-box;
	    right: 30px;
	}

	#menu_termo > li:hover > a:after{
		 /*background: brown;   */
		 color: brown;
	}
/*--------------------------/ menu_termo de Multinivel ----------------------------------*/
</style>


<ul id="menu_termo">
	<li style=" margin-top: 5em; border-top: 0;"></li>

	<li>
		<a href="#" >Vávulas Termoplásticos</a> 					
	</li>

	<li>
		<a href="#">Tuberías y Accesorios</a> 					
	</li>

	<li>
		<a href="#">Bombas </a>
	</li>

	<li>
		<a href="#">Máquinas de Soldar Tuberías </a>
	</li>

	<li>
		<a href="#">Máquinas Extrusoras</a>
	</li>

</ul>	