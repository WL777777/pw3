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




// Route::get('/contato', function () {
//     return view('contato');
// });




Route::get('/QuemSomos', function () {
    return view('QuemSomos');
});

Route::get('/reclamacao', function () {
    return view('reclamacao');
});

Route::get('/', function () {
    return view('Principal');
});

Route::get('/contato', function () {
    return view('contato');
});

// Route::get('/laboratorio', function () {
//     return view('laboratorio');
// });

//laboratorio
Route::get('/laboratorio', "LaboratorioController@index" );

//reclamacao
Route::get('/reclamacao', "ReclamacaoController@index" );
Route::post('/reclamacao','ReclamacaoController@store');
Route::get('/reclamacao/excluir/{idRec}','ReclamacaoController@destroy');

//contato
Route::get('/contato','ContatoController@index');
Route::post('/contato','ContatoController@store');
Route::get('/contato/excluir/{idContato}','ContatoController@destroy');

// Route::get('/contato','ContatoController@destroy');


?>
