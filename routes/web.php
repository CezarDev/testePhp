<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index.inicio');


Route::get('pessoas','PessoaController@index')->name('lista.cadastro');
Route::get('pessoas/novo', 'PessoaController@create')->name('form.novo');
Route::post('pessoas/salvar', 'PessoaController@store')->name('pessoa.salvar');
Route::post('pessoas/atualizar/{id?}', 'PessoaController@update', $id = '')->name('pessoa.update');
Route::get('pessoas/editar/{pessoa}', 'PessoaController@edit')->name('form.edit');
Route::get('pessoas/{id}', 'PessoaController@destroy')->name('deletar');
    

Route::get('dependentes/novo/{id?}', 'DependenteController@create')->name('dependentes.novo');
Route::post('dependentes/salvar/{pessoaId?}', 'DependenteController@store', $pessoaId = '')->name('dependentes.salvar');