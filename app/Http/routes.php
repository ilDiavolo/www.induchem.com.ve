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


//--------------------------------------------------------------------------------------------------------

//-----------------------		RUTAS CONTROLER 	----------------------------

route::resource('mail','MailController');	

/////////////////////************ RUTAS BASICAS ************/////////////////////

route::get('home', function(){			// Pagina de Inicio
	return view('home.home');
});

route::get('nosotros', function(){		// Pagina de Nosotros
	return view('home.nosotros');
});

// ---------------------------- Productos quimicos y materias primas ----------------------------
route::get('quimicos', function(){		// Pagina de los Productos
	return view('quimicos.quimicos');
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

route::get('Limpiadorporcelana', function(){		// Pagina de los Productos
	return view('quimicos.lineas.Limpiadorporcelana');
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


//--------------------------------------------------------
route::get('materiasPrimas', function(){		// Pagina de las MAterias PRimas
	return view('quimicos.materiasPrimas');
});

route::get('testQuimicos', function(){		// Pagina de prueba de los Productos
	return view('quimicos.testQuimicos');
});


// ---------------------------- /Productos quimicos y materias primas ----------------------------


route::get('contacto', function(){		// Pagina de Contacto
	return view('contacto.contacto');
});



