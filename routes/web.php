<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "HomeController");



Route::get('pruebaLayouts', function () {
    return view('pruebaLayouts');
});



Route::get('home', function () {
    return view('home');
});

Route::get('inversiones', "inversionesController@index");

Route::get('servicios', "servicesController@index" );

Route::post('serviciosForm', function () {
    return view('serviciosForm.php');
});

Route::get('balance', "BalanceController@index");


Route::get('claseObjetos', function () {
    return view('claseObjetos');
});


Route::get('/servicio', function () {
    return response()->json(array(
        "status"=>"success",
        "1"=>"Agua",
        "2"=>"Luz",
        "3"=>"Gas",
        "4"=>"Seguro"
    ));
});

Route::get('/servicio/{id}', function () {
    return "Obtengo un servicio";
});

Route::post('/servicio', function () {
    return "Creo un nuevo servicio a pagar";
});

Route::put('/servicio', function () {
    return "Modifico un servicio";
});

Route::delete('/servicio', function () {
    return "Elimino un servicio";
});

Route::get('services', "servicesController@index");

Route::post('/services/pay', 'ServicesController@serviciosForm')->name('serviciosForm');

