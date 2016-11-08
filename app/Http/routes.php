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



