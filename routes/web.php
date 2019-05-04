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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

    Route::get('/reportes', "AdminReportesController@index")->name('reportes.index');

    Route::get('/usuarios', "AdminUsersController@index")->name('usuarios.index');
    Route::post('/usuarios/{user_id}', "AdminUsersController@encuestaStore")->name('encuesta.store');
    Route::get('/usuarios/{user_id}/evaluar', "AdminUsersController@evaluar")->name('usuarios.evaluar');

});
