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



<<<<<<< HEAD
route::get('nosotros', function(){  /// Pagina de Pruena de BOOSTRASP
	return view('home.nosotros');
});
=======
//-----------------------		RUTAS CONTROLER 	----------------------------

route::resource('mail','MailController');
>>>>>>> 2bd944a6d66c333d5ba624737a6d66ce0f7e09ec

/////////////////////************ RUTAS BASICAS ************/////////////////////

route::get('home', function(){			// Pagina de Inicio
	return view('home.home');
});

route::get('nosotros', function(){			// Pagina de Inicio
	return view('home.nosotros');
});

route::get('quimicos', function(){		// Pagina de los Productos
	return view('quimicos.quimicos');
});

route::get('contacto', function(){		// Pagina de Contacto
	return view('contacto.contacto');
});



////////////////// Resource //////////////////////////77

Route::resource('rc','crud');
// Route::controller('rc','crud');