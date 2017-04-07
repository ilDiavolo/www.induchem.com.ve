<style type="text/css">
	/*-------------------------- Menu de Multinivel ----------------------------------*/
	
	#menu{
		font-family: 'Raleway', sans-serif;
		background-color: #FAFAFA;
		float: left;
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
		width: 100%;
		/*min-width: 172px;*/
	}

	#menu > li {
				
		border-top: 1px solid #ebebeb;
		
		/*esta es la clave*/
		position: relative;	
	}

	#menu a{
		padding: 0 20px;
		background-color: #F5F5F5;
		color: rgba(95, 95, 95, 0.85);
		line-height: 45px;		
		display: block;		
		overflow: hidden;
    	text-overflow: ellipsis; /* corta el texto en puntos */
    	white-space: nowrap; /* hace q el texto sigo corrido para q el valor de arriba haga efecto */
    	font-size: 1.5rem;
    	text-decoration: none;
	}
	
	#menu a:hover{
		background-color: #c5c5c5;
		color: brown;
		text-decoration: none;
	}

	#menu > li:hover > a{
		/*background-color: #9E9E9E;
		color: white;*/
		box-shadow: inset 2px 0 0 brown;
	}

	#menu a:active{
		color: red;
	}
	
	/* Desaparecer Sub-Menu */
	#menu > li > ul {
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);		

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

	/* Desactivando la primero lista ya no seran enlaces*/
	#menu > li > a:active{
		pointer-events: none;
		color: brown;		
	}	

	#menu > li > a:before{
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

	#menu > li:hover > a:before{
		 background: brown;   
	}

	#menu > li > a:after{
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

	#menu > li:hover > a:after{
		 background: brown;   
	}
/*--------------------------/ Menu de Multinivel ----------------------------------*/
</style>


<ul id="menu">

	<li style=" margin-top: 5em; border-top: 0;"></li>

	<li>
		<a href="{{ url('quimicos') }}" >Abrillantadores</a>   
		<ul>
			<li> <a href="{{ url('Chem_Brillinox') }}"> Chem-Brillinox</a> </li>
		</ul>
	</li>

	<li>
		<a href="{{ url('Chem_Gel_Sanitizer') }}">Bactericidas</a> 
		<ul>
			<li><a href="{{ url('Chem_Gel_Sanitizer') }}">Chem Gel Sanitizer</a> </li>
			<li><a href="#">Chem-Algicida Amonio Cuaternario</a> </li>
			<li><a href="#">Chem-Quat</a> </li>
			<li><a href="#">Chem-Cloro</a> </li>
			<li><a href="#">Chem-Oxan</a> </li>
			<li><a href="#"> Chem-P-Hidrógeno al 35%</a> </li>						
		</ul>
	</li>

	<li>
		<a href="{{ url('Desengrasantes') }}">Desengrasantes </a>
		<ul>
			<li><a href="#">Chem-Desgrasol 2006</a>  </li>
			<li><a href="#">Chem Motorclean </a> </li>
			<li><a href="#">Chem-Halso 2005</a> </li>
			<li><a href="#">Chem-Ultrasol</a> </li>
			<li><a href="#">Chem-Desgrasador</a> </li>
		</ul>
	</li>

	<li>
		<a href="{{ url('DesincrustanteLimpiadorporcelana') }}">Desincrustantes </a>
		<ul>
			<li><a href="#">Chem-Porcelana</a></li>
			<li><a href="#">Tetrasan</a></li>							
		</ul>
	</li>

	<li>
		<a href="{{ url('Desinfectantes') }}">Desinfectantes</a>
		<ul>
			<li><a href="#">Chem-Lemophene</a></li>
			<li><a href="#">Desinfectante Tutty Fruty</a></li>
			<li><a href="#">Desinfectante Lavanda</a></li>
			<li><a href="#">Desinfectante TCereza</a></li>
		</ul>						
	</li>

	<li>
		<a href="{{ url('Detergentesenpolvo') }}">Detergentes en polvo</a>
		<ul>
			<li><a href="#">Clear-Clor-P</a></li>
			<li><a href="#">Cloro Rosado</a></li>
			<li><a href="#">Ajsen</a></li>
			<li><a href="#">Clear-P-Bantax</a></li>
			<li><a href="#">Clear-P-Deter-Polvo</a></li>
			<li><a href="#">Clear-P-Mavesa</a></li>
			<li><a href="#">Exit</a></li>
			<li><a href="#">Chem-F-600-P</a></li>
		</ul>
	</li>

	<li>
		<a href="{{ url('Jabonesliquidos') }}">Detergentes líquidos</a>
		<ul>
			<li><a href="#">Chem-Clor-L</a></li>
			<li><a href="#">Chem Foam Espuma</a></li>
			<li><a href="#">Clear Rendidor</a></li>
			<li><a href="#">Clear-66</a></li>
			<li><a href="#">Chem-F-600-L</a></li>							
		</ul>
	</li>

	<li>
		<a href="#">Limpiadores</a>
		<ul>						
			<li><a href="#">Che-Foam-Acid</a></li>
			<li><a href="#">P-Acid-1095-N</a></li>
			<li><a href="#">P-Acid-61-N-F</a></li>
			<li><a href="#">P-Acid-68-C</a></li>
			<li><a href="#">Chem-D-Plastic</a></li>
			<li><a href="#">Chem-P-Caust-L-V-IV</a></li>	
		</ul>
							
	</li>

	<li>
		<a href="#">Lubricantes </a>
		<ul>
			<li><a href="#">Chem-Lub-Lubricante</a></li>
		</ul>
	</li>
	<li>
		<a href="#">Solventes dieléctricos</a>
		<ul>
			<li><a href="#">Eletro-Chem-300</a></li>
			<li><a href="#">Eletro-Chem-400</a></li>
			<li><a href="#">Eletro-Chem-600</a></li>
		</ul>
	</li>
</ul>		