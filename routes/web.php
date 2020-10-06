<?php


/* -------------------------------------------------------------------------- */
/*                        Rutas de la pagina principal                        */
/* -------------------------------------------------------------------------- */

Route::get('/', function () {
    return view('index');
})->name('inicio');
 
Route::get('planes', function () {
    return view('pricing');
})->name('planes');

Route::get('programa', function () {
    return view('program');
})->name('programa');

/* ------------------- Crear pagos y que el cliente pague ------------------- */

Route::get('create-payment', 'PaymentController@create')->name('crear-pago');

Route::get('execute-payment', 'PaymentController@execute')->name('hacer-pago');





/* --------- Crear subscripcion y que el cliente haga el primer pago -------- */
 
Route::get('create-subscription', 'PaymentController@subscription')->name('crear-subscripcion');


/* ----------------- si cancela rederigir a pagina de planes ---------------- */

// Route::get('cancel-payment', function () {
//     return redirect()->route('planes');
// })->name('cancelar-pago');

// Enviar correo despues de que el cliente haga el pago
Route::get('sendmail', 'EmailController@send')->name('enviar-email');



/* -------------------------------------------------------------------------- */
/*                      variables de la pagina de ofertas                     */
/* -------------------------------------------------------------------------- */


//pagina de ofertas
Route::get('CyberMonday', function () {
    $deal_name = 'Cyber Monday';
    return view('deals.index', ['deal_name' => $deal_name]);
})->name('deal');



/* ------------------ todo lo demas vaya a pagina principal ----------------- */

// Route::any('{query}', function () {
//     return redirect()->route('deal');
// })->where('query', '.*');


/* -------------------------------------------------------------------------- */
/*                           Rutas de autenticacion                           */
/* -------------------------------------------------------------------------- */

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


/* -------------------------------------------------------------------------- */
/*                       Rutas de la pagina de miembros                       */
/* -------------------------------------------------------------------------- */



Route::prefix('miembros')->group(function () {
    
    Route::get('/','MembersController@form' )->name('login-form');
    
   
    Route::post('login', 'MembersController@login')->name('login');


    Route::get('inicio', 'MembersController@index')->name('miembros-home');

    Route::get('logout', 'MembersController@logout')->name('logout');

    Route::get('modulo/{id}','MembersController@show')->name('modulo');

//Registo normal
    Route::get('registrarse', 'MembersController@normal')->name('registro-normal');
    Route::post('registrarse/save', 'MembersController@new')->name('registrar-normal-nuevo');

// Registro email
    Route::get('registrarse/{token}', 'MembersController@registrar')->name('registro');
    Route::post('registrarse/new', 'MembersController@save')->name('registrar-nuevo');

//  descargar pdf
    Route::get('descargar/{pdf}', 'MembersController@pdf')->name('descargar-pdf');

// Comentarios

    Route::post('comment', 'CommentController@create')->name('comentar');

});


/* ------------------------------- Otras rutas ------------------------------ */



//co-creando
Route::get('/co-creando', function () {
    return view('singles.creando');
})->name('co-creando');


Route::get('create-payment', 'PaymentController@coCreate')->name('co-creando-pagar');
Route::get('execute-payment', 'PaymentController@coExecute')->name('co-creando-hacer');
Route::get('sendmail', 'EmailController@cosend')->name('co-creando-email');




/* ---------------------------------- Admin --------------------------------- */

Route::prefix('admin')->group(function () {  

    //formulario para iniciar sesion
    Route::get('/','AdminController@form')->name('admin-login-form');  
    Route::post('/login', 'AdminController@login')->name('admin-login');
    //home
    Route::get('/inicio','AdminController@index')->name('admin-home');  
    // cerrar sesion
    Route::get('logout', 'AdminController@logout')->name('admin-logout');

    // miembros
    Route::get('miembros', 'AdminController@members')->name('admin-members');
    Route::put('miembros','AdminController@membersUpdate' )->name('admin-members-update');

    // modulos
    Route::get('modulos', 'AdminController@modules')->name('admin-modules');
    Route::post('modulos/save', 'AdminController@modulesInsert')->name('admin-modules-insert');
    Route::put('modulos','AdminController@modulesUpdate' )->name('admin-modules-update');
    Route::get('modulos/get', 'AdminController@modulesGet')->name('admin-modules-get');

    Route::put('modulos/save', 'AdminController@sortable');


     // temas
     Route::get('temas/{module_id}', 'AdminController@topics')->name('admin-topics');
     Route::post('temas/save', 'AdminController@topicsInsert')->name('admin-topics-insert');
     Route::put('temas','AdminController@topicsUpdate' )->name('admin-topics-update');

     Route::post('temas/get', 'AdminController@topicsGet')->name('admin-topics-get');
 
     Route::put('temas/save', 'AdminController@sortable2');

     Route::get('/temas/delete/{id}', 'AdminController@topicsDelete');


  


});

