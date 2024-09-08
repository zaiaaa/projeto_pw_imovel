<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//essa é a pagina de cadastro
Route::get('/imovels/novo', 'App\Http\Controllers\ImovelController@create');

//esse é o processamento do envio do formulário de cadastro
Route::post('/imovels/novo', 'App\Http\Controllers\ImovelController@store')->name('registrar_imovel');

//pega todos os registros
Route::get('imovels/ver', 'App\Http\Controllers\ImovelController@showAll');

//pega só um
Route::get('imovel/ver/{id}', 'App\Http\Controllers\ImovelController@show');


//pagina de edição
Route::get('imovel/editar/{id}', 'App\Http\Controllers\ImovelController@edit');
//processamento da edição
Route::post('imovel/editar/{id}', 'App\Http\Controllers\ImovelController@update')->name('alterar_imovel');

//processamento de exclusão
Route::post('imovel/excluir/{id}','App\Http\Controllers\ImovelController@destroy')->name('deletar_produto');


//form exemplo de exclusao
Route::get('produto/excluir/{id}','App\Http\Controllers\ProdutosController@delete');