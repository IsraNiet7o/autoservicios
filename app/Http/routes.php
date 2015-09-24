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

Route::get('/Home',['as'=>'admin.index','uses'=>'AdminController@index']);

Route::get('/Procedimientos',['as'=>'procedures.index','uses'=>'ProceduresController@index']);

Route::get('/Servicios',['as'=>'services.index','uses'=>'ServicesController@index']);

/*Articulos*/
Route::get('/Articulos/admin',['as'=>'articles.index','uses'=>'ArticlesController@index']);
Route::get('/Articulos/create',['as'=>'articles.create','uses'=>'ArticlesController@create']);
Route::get('/Articulos/{id}/edit',['as'=>'articles.edit','uses'=>'ArticlesController@edit']);
Route::get('/Articulos/{id}/show',['as'=>'articles.show','uses'	=>'ArticlesController@show']);
/*End Articulos*/

/*Technical*/
Route::get('/Personal-tecnico',['as'=>'technical.index','uses'=>'TechnicalController@index']);
Route::get('/Personal-tecnico/admin',['as'=>'technical.admin', 'uses'=>'TechnicalController@admin']);
Route::get('/Personal-tecnico/create',['as'=>'technical.create', 'uses'=>'TechnicalController@create']);
Route::get('/Personal-tecnico/{id}/edit',['as'=>'technical.edit', 'uses'=>'TechnicalController@edit']);
/*End Technical*/

/*Equipment*/
Route::get('/Equipo',['as'=>'equipment.index','uses'=>'EquipmentController@index']);
Route::get('/Equipo/admin',['as'=>'equipment.admin', 'uses'=>'EquipmentController@admin']);
Route::get('/Equipo/create',['as'=>'equipment.create', 'uses'=>'EquipmentController@create']);
Route::get('/Equipo/{id}/edit',['as'=>'equipment.edit', 'uses'=>'EquipmentController@edit']);
/*End Equipment*/

/*End Brand*/
Route::get('/Marcas-de-Equipos',['as'=>'brand.index','uses'=>'BrandController@index']);
/*Brand*/

/*End Model*/
Route::get('/Modelos-de-Equipos',['as'=>'model.index','uses'=>'ModelEquipmentController@index']);
/*Model*/

Route::resource('/Categorias', 'CategoryController');
Route::resource('/Subcategorias', 'SubcategoryController');







Route::get('/',['as'=>'frontend.index','uses'=>'IndexController@index']);

Route::get('/in', function () {
    return view('layout.index');
});
