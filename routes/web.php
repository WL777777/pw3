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




Route::get('/Contato', function () {
    return view('Contato');
});

Route::get('/QuemSomos', function () {
    return view('QuemSomos');
});

Route::get('/Reclamacao', function () {
    return view('Reclamacao');
});

Route::get('/', function () {
    return view('Principal');
});

Route::get('/laboratorio', "LaboratorioController@index" );

Route::get('/reclamacao', "ReclamacaoController@index" );

?>
