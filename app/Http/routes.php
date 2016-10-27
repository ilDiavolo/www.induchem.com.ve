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


route::get('boot', function(){  /// Pagina de Pruena de BOOSTRASP
	return view('layout.main');
});


route::get('slider', function(){
	return view('quimicos.slider');
});

route::get('home', function(){  /// Pagina de Pruena de BOOSTRASP
	return view('home.home');
});

/////////////////////************ RUTAS BASICAS ************/////////////////////


route::get('ini', function(){			/// Pagina de INICIO o HOME
	return view('home.inicio');
});

route::get('quimicos', function(){		// Pagina de Productos de la Empresa
	return view('quimicos.quimicos');
});



////////////////// Resource //////////////////////////77

Route::resource('rc','crud');
// Route::controller('rc','crud');