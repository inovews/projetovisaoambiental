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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

/*
|------------------------------------------
| Website
|------------------------------------------
*/
Route::redirect('/home', '/');
Route::group(['namespace' => 'Website'], function () {
	Route::get('/', 'WebsiteController@index');

	Route::get('/noticias', 'NoticiasController@index');
	Route::get('/noticias/{id}', ['uses'  => 'NoticiasController@show', 'as' => 'website.noticias.show']);

	Route::get('/publicacoes', 'PublicacoesController@index');
	Route::get('/publicacao/{id}', ['uses'  => 'PublicacoesController@show', 'as' => 'website.publicacao.show']);

	Route::get('/colaboradores', 'ColaboradoresController@index');

	Route::get('/eventos', 'EventosController@index');
	Route::get('/eventos/{id}', ['uses'  => 'EventosController@show', 'as' => 'website.eventos.show']);

	Route::get('/parceiros', 'ParceirosController@index');

	Route::get('/oprojeto', 'OProjetoController@index');

});

/*// blog / articles
Route::get('/noticias', 'BlogController@index');
Route::get('/noticias/{noticiasSlug}', 'BlogController@show');*/
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


// BLACK ADMIN
Route::group(['prefix' => 'portal', 'as' => 'portal.'], function()
{
	Route::get('/', ['as' => 'index', 'uses' => 'Portal\HomeController@index']);
	Route::get('home', ['as' => 'home', 'uses' => 'Portal\HomeController@index']);
});