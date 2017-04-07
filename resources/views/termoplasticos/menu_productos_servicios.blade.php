
<style type="text/css">
	
	/*fuente: releway 700*/
	@import url('https://fonts.googleapis.com/css?family=Raleway:700');

/*-------------------------- menu_productos_servicios de Multinivel ----------------------------------*/
	*{
		list-style: none;		
		padding: 0;	
		box-sizing: border-box;
	}

	#menu_productos_servicios{
		font-family: 'Raleway', sans-serif;
		background-color: #eeeeee;
		float: left;
		box-shadow: -3px 2px 11px 1px rgba(0, 0, 0, 0.39);
		width: 100%;
		/*min-width: 172px;*/
	}

	#menu_productos_servicios > li {
				
		border-top: 1px solid rgba(97, 97, 97, 0.94);
		
		/*esta es la clave*/
		position: relative;	
	}

	#menu_productos_servicios a{
		padding: 0 20px;
		background-color: #757575;
		color: #f5f5f5;
		line-height: 45px;		
		display: block;		
		overflow: hidden;
    	text-overflow: ellipsis; /* corta el texto en puntos */
    	white-space: nowrap; /* hace q el texto sigo corrido para q el valor de arriba haga efecto */
    	font-size: 1.5rem;
    	text-decoration: none;
	}
	
	#menu_productos_servicios a:hover{
		background-color: #9E9E9E;
		color: brown;
		text-decoration: none;
	}

	#menu_productos_servicios > li:hover > a{
		/*background-color: #9E9E9E;
		color: white;*/
		box-shadow: inset 2px 0 0 brown;
	}

	#menu_productos_servicios a:active{
		color: red;
	}
	
	/* Desaparecer Sub-menu_productos_servicios */
	#menu_productos_servicios > li > ul {
		box-shadow: 3px 1px 8px 0px rgba(0, 0, 0, 0.2);		

		position: absolute;

		transition: all 0.3s;
		opacity: 0;
		visibility: hidden;	

		left: 100%;
		top: 0;

		z-index: 1000;	
	}

	#menu_productos_servicios > li > ul > li {
		border-top: 1px solid #797979;
	}

	

	/*Aparecer Sub-menu_productos_servicios*/
	#menu_productos_servicios > li:hover > ul {
		opacity: 1;
		visibility: visible;
	}

	/* Desactivando la primero lista ya no seran enlaces*/
	#menu_productos_servicios > li > a:active{
		pointer-events: none;
		color: brown;		
	}	

	#menu_productos_servicios > li > a:before{
		content: '';
	    position: absolute;
	    top: 50%;
	    margin-top: -1px;
	    display: inline-block;
	    height: 2px;
	    width: 10px;
	   
	    background: #9E9E9E;   

	    backface-visibility: hidden;
	    transform-origin: 9px 50%;
	    transform: rotate(45deg);
	    transform-origin: 9px 50%;
	    box-sizing: border-box;
	    right: 20px;
	}

	#menu_productos_servicios > li:hover > a:before{
		 background: brown;   
	}

	#menu_productos_servicios > li > a:after{
		content: '';
	    position: absolute;
	    top: 50%;
	    margin-top: -1px;
	    display: inline-block;
	    height: 2px;
	    width: 10px;   
	    background: #9E9E9E;   

	    -webkit-backface-visibility: hidden;
	    backface-visibility: hidden;

	    transform-origin: 9px 50%;
	    transform: rotate(-45deg);
	    transform-origin: 9px 50%;

	    box-sizing: border-box;
	    right: 20px;
	}

	#menu_productos_servicios > li:hover > a:after{
		 background: brown;   
	}
/*--------------------------/ menu_productos_servicios de Multinivel ----------------------------------*/
</style>

<ul id="menu_productos_servicios">

	<li style=" margin-top: 5em; border-top: 0;"></li>

	<li>
		<a href="{{ url('quimicos') }}" style="pointer-events: auto;" >Químicos</a>   		
	</li>

	<li>
		<a href="{{ url('materiasPrimas') }}" style="pointer-events: auto;" >Materias Primas</a> 		
	</li>

	<li>
		<a href="#">Termoplásticos </a>
		<ul>
			<li><a href="{{ url('valvulas') }}">Válvulas</a></li>
			<li><a href="{{ url('bombas') }}">Bombas </a></li>  
	        <li><a href="{{ url('tuberias') }}">Tuberías y Accesorios </a></li>	                        
	        <!-- <li><a href="{{ url('barras') }}">Barras </a></li> -->
	        <li><a href="{{ url('soldarTuberias') }}">Máquinas de Soldar Tuberías </a></li>
	        <li><a href="{{ url('extrusoras') }}">Máquinas Extrusoras </a></li>
		</ul>
	</li>

	<li>
		<a href="#">Motores </a>
		<ul>
			<li><a href="{{ url('motores') }}">Motores</a></li>
            <li><a href="{{ url('inversores') }}">Inversores</a></li>
            <li><a href="{{ url('reductores') }}">Reductores</a></li>				
		</ul>
	</li>

	<li>
		<a href="#">Actuadores</a>
		<ul>
			<li><a href="actuadoresElectrico">Eléctricos</a></li>
        	<li><a href="{{ url('actuadoresNeumatico') }}">Neumáticos</a></li>   		
		</ul>						
	</li>

	<li>
		<a href="{{ url('servicios')}}">Servicios</a>
		<ul>
			<li><a href="{{ url('servicios')}}">Transporte</a></li>
			<li><a href="{{ url('servicios')}}">Alamacemiento</a></li>
			<li><a href="{{ url('servicios')}}">Montaje de Tanques</a></li>			
		</ul>
	</li>

</ul>		