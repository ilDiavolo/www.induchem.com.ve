<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {   /// Pagina de inicio de Laravel
    return view('welcome');
});


route::get('slider', function(){	/// Pagina de Prueba del Slider 
	return view('quimicos.slider');
});

route::get('boot', function(){	/// Pagina de Prueba del Slider 
	return view('layout.body');
});

////////////////// Prueba: Controladores //////////////////////////77
Route::resource('rc','crud'); 
// Route::controller('rc','crud');

////////////////// Prueba: Font Response //////////////////////////77
Route::get('font', function(){
	return view('home.font');
});
// Route::controller('rc','crud');

route::get('mega', function(){	/// Pagina de Prueba del mega menu vertical
	return view('layout.menuVertical');
});




//--------------------------------------------------------------------------------------------------------

//-----------------------		RUTAS CONTROLER 	----------------------------

route::resource('mail','MailController');	

/////////////////////************ RUTAS BASICAS ************/////////////////////

route::get('home', function(){			// Pagina de Inicio
	return view('home.home');
});

route::get('quienes', function(){		// Pagina de quienes somos
	return view('home.nosotros.quienes');
});

route::get('vision', function(){		// Pagina de mision, vision y valores
	return view('home.nosotros.vision');
});

route::get('politica', function(){		// Pagina de politica
	return view('home.nosotros.politica');
});

// ---------------------------- Productos quimicos y materias primas ----------------------------
route::get('AbrillantadoresDesoxidante', function(){		// Pagina de los Productos
	return view('quimicos.lineas.AbrillantadoresDesoxidante');
});

route::get('Bactericidas', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Bactericidas');
});

route::get('BactericidaAmonio', function(){		// Pagina de los Productos
	return view('quimicos.lineas.BactericidaAmonio');
});

route::get('BactericidasClorados', function(){		// Pagina de los Productos
	return view('quimicos.lineas.BactericidasClorados');
});

route::get('BactericidasOxigeno', function(){		// Pagina de los Productos
	return view('quimicos.lineas.BactericidasOxigeno');
});

route::get('Desengrasantes', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Desengrasantes');
});

route::get('DesengrasantesAlcalinos', function(){		// Pagina de los Productos
	return view('quimicos.lineas.DesengrasantesAlcalinos');
});

route::get('Desengrasantescocinas', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Desengrasantescocinas');
});

route::get('DesincrustanteLimpiadorporcelana', function(){		// Pagina de los Productos
	return view('quimicos.lineas.DesincrustanteLimpiadorporcelana');
});

route::get('Desinfectantes', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Desinfectantes');
});

route::get('Detergentes', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Detergentes');
});

route::get('Detergentesenpolvo', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Detergentesenpolvo');
});

route::get('Jabonesliquidos', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Jabonesliquidos');
});

route::get('Lavanderia', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Lavanderia');
});

route::get('Limpiadoresacidos', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Limpiadoresacidos');
});

route::get('Limpiadorescausticos', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Limpiadorescausticos');
});

route::get('Lubricantes', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Lubricantes');
});

route::get('Solventes', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Solventes');
});



//------------------------------------------------------------------
route::get('materiasPrimas', function(){		// Pagina de las MAterias PRimas
	return view('quimicos.materiasPrimas');
});

route::get('testQuimicos', function(){		// Pagina de prueba de los Productos
	return view('quimicos.testQuimicos');
});


// ---------------------------- /Productos quimicos y materias primas ----------------------------


// ------------------------------------ Termoplasticos -------------------------------------------

route::get('valvulas', function(){		// Pagina de prueba de los Productos
	return view('termoplasticos.articulos.valvulas');
});

route::get('tuberias', function(){		// Pagina de prueba de los Productos
	return view('termoplasticos.articulos.tuberias');
});

route::get('bombas', function(){		// Pagina de prueba de los Productos
	return view('termoplasticos.articulos.bombas');
});

route::get('barras', function(){		// Pagina de prueba de los Productos
	return view('termoplasticos.articulos.barras');
});

route::get('soldarTuberias', function(){		// Pagina de prueba de los Productos
	return view('termoplasticos.articulos.soldarTuberias');
});

route::get('extrusoras', function(){		// Pagina de prueba de los Productos
	return view('termoplasticos.articulos.extrusoras');
});

// ------------------------------------ /Termoplasticos ------------------------------------------

// ------------------------------------ Actudores ------------------------------------------------

route::get('actuadoresElectrico', function(){		// Pagina de 
	return view('actuadores.electricos');
});

route::get('actuadoresNeumatico', function(){		// 
	return view('actuadores.neumaticos');
});


// ------------------------------------ /Actudores -----------------------------------------------

// --------------------------- Motores, Reductres e Inverores  -----------------------------------

route::get('motores', function(){		// 
	return view('motores.motores');
});

route::get('inversores', function(){		// 
	return view('motores.inversores');
});

route::get('reductores', function(){		// 
	return view('motores.reductores');
});


// --------------------------- /Motores, Reductres e Inverores  ----------------------------------

// ---------------------------  Oportuinidades de Empleo  ----------------------------------
route::get('oportunidades', function(){		
	return view('oportunidades.empleo');
});

// ---------------------------  Pagina de Contacto  ----------------------------------

route::get('contacto', function(){		
	return view('contacto.contacto');
});

// ---------------------------  Pagina de Servicios  ----------------------------------

route::get('servicios', function(){		
	return view('servicios.servicios');
});



