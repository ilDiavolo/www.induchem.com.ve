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
	return view('layout.menu3');
});

route::get('mega2', function(){	/// Pagina de Prueba del mega menu vertical
	return view('layout.menu2');
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



// ---------------------------- Productos quimicos ----------------------------

route::get('quimicos', function(){		// Pagina de los Productos
	return view('quimicos.productos.quimicos');
});


// ---------------- ABRILLANTADORES -----------------------
route::get('Chem_Brillinox', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Brillinox');
});

// ---------------- BACTERICIDAS  -----------------------
route::get('Chem_Gel_Sanitizer', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Gel_Sanitizer');
});

route::get('Chem_Algicida_Amonio_Cuaternario', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Algicida_Amonio_Cuaternario');
});

route::get('Chem_Quat', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Quat');
});

route::get('Chem_Cloro', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Cloro');
});

route::get('Chem_Oxan', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Oxan');
});

route::get('Chem_P_Hidrogeno', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_P_Hidrogeno');
});
// ---------------- DESENGRASANTES -----------------------
route::get('Chem_Desgrasol_2006', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Desgrasol_2006');
});

route::get('Chem_Motorclean', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Motorclean');
});

route::get('Chem_Halso_2005', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Halso_2005');
});

route::get('Chem_Ultrasol', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Ultrasol');
});

route::get('Chem_Desgrasador', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Desgrasador');
});

// ---------------- Desincrustantes  -----------------------

route::get('Chem_Porcelana', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Porcelana');
});

route::get('Tetrasan', function(){		// Pagina de los Productos
	return view('quimicos.productos.Tetrasan');
});


// ---------------- Desinfectantes   -----------------------

route::get('Chem_Lemophene', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Lemophene');
});

route::get('Desinfectante_Tutty_Fruty', function(){		// Pagina de los Productos
	return view('quimicos.productos.Desinfectante_Tutty_Fruty');
});

route::get('Desinfectante_Lavanda', function(){		// Pagina de los Productos
	return view('quimicos.productos.Desinfectante_Lavanda');
});

route::get('Desinfectante_Cereza', function(){		// Pagina de los Productos
	return view('quimicos.productos.Desinfectante_Cereza');
});


//--------------   Detergentes en polvo  -------------------------------

route::get('Clear_Clor_P', function(){		// Pagina de los Productos
	return view('quimicos.productos.Clear_Clor_P');
});
route::get('Cloro Rosado', function(){		// Pagina de los Productos
	return view('quimicos.productos.Cloro Rosado');
});
route::get('Ajsen', function(){		// Pagina de los Productos
	return view('quimicos.productos.Ajsen');
});
route::get('Clear_P_Bantax', function(){		// Pagina de los Productos
	return view('quimicos.productos.Clear_P_Bantax');
});
route::get('Clear_P_Deter_Polvo', function(){		// Pagina de los Productos
	return view('quimicos.productos.Clear_P_Deter_Polvo');
});
route::get('Clear_P_Mavesa', function(){		// Pagina de los Productos
	return view('quimicos.productos.Clear_P_Mavesa');
});
route::get('Exit', function(){		// Pagina de los Productos
	return view('quimicos.productos.Exit');
});
route::get('Chem_F_600_P', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_F_600_P');
});


//----------------------   Detergentes líquidos   --------------------------------
route::get('Chem_Clor_L', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Clor_L');
});
route::get('Chem_Foam_Espuma', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Foam_Espuma');
});
route::get('Clear_Rendidor', function(){		// Pagina de los Productos
	return view('quimicos.productos.Clear_Rendidor');
});
route::get('Clear_66', function(){		// Pagina de los Productos
	return view('quimicos.productos.Clear_66');
});
route::get('Chem_F_600_L', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_F_600_L');
});


//----------------------    Limpiadores  -----------------------------------------

route::get('Che_Foam_Acid', function(){		// Pagina de los Productos
	return view('quimicos.productos.Che_Foam_Acid');
});
route::get('P_Acid_1095_N', function(){		// Pagina de los Productos
	return view('quimicos.productos.P_Acid_1095_N');
});
route::get('P_Acid_61_N_F', function(){		// Pagina de los Productos
	return view('quimicos.productos.P_Acid_61_N_F');
});
route::get('P_Acid_68_C', function(){		// Pagina de los Productos
	return view('quimicos.productos.P_Acid_68_C');
});
route::get('Chem_D_Plastic', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_D_Plastic');
});
route::get('Chem_P_Caust_L_V_IV', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_P_Caust_L_V_IV');
});
//------------------------  Lubricantes  -----------------------------------------
route::get('Chem_P_Caust_Chem_Lub_LubricanteL_V_IV', function(){		// Pagina de los Productos
	return view('quimicos.productos.Chem_Lub_Lubricante');
});
//------------------------  Solventes dieléctricos  ------------------------------
route::get('Eletro_Chem_300', function(){		// Pagina de los Productos
	return view('quimicos.productos.Eletro_Chem_300');
});
route::get('Eletro_Chem_400', function(){		// Pagina de los Productos
	return view('quimicos.productos.Eletro_Chem_400');
});
route::get('Eletro_Chem_600', function(){		// Pagina de los Productos
	return view('quimicos.productos.Eletro_Chem_600');
});

//------------------------  / Productos  ------------------------------



// ---------------------------- materias primas ----------------------------
route::get('materiasPrimas', function(){		// Pagina de las MAterias PRimas
	return view('quimicos.materiasPrimas');
});

route::get('all_Quimicos', function(){		// Pagina de prueba de los Productos
	return view('quimicos.all_Quimicos');
});

// ---------------------------- /materias primas ----------------------------






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

route::get('actuadoresNeumatico', function(){		
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



