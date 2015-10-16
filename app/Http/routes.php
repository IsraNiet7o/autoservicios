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

Route::get('/home',['as'=>'admin.index','uses'=>'AdminController@index']);

Route::get('/procedimientos',['as'=>'procedures.index','uses'=>'ProceduresController@index']);

Route::get('/servicios',['as'=>'services.index','uses'=>'ServicesController@index']);

/*Articulos*/
Route::post('/articulos/admin',['as'=>'articles.store','uses'=>'ArticlesController@store']);
Route::get('/articulos/admin',['as'=>'articles.index','uses'=>'ArticlesController@index']);
Route::get('/articulos/create',['as'=>'articles.create','uses'=>'ArticlesController@create']);
Route::get('/articulos/{id}/edit',['as'=>'articles.edit','uses'=>'ArticlesController@edit']);
Route::put('/articulos/{id}/update',['as'=>'articles.update','uses'=>'ArticlesController@update']);
Route::get('/articulos/{slug}/show',['as'=>'articles.show','uses'	=>'ArticlesController@show']);
Route::delete('/articulos/{id}/delete',['as'=>'articles.destroy','uses'	=>'ArticlesController@destroy']);
/*End Articulos*/

/*Technical*/
Route::get('/personal-tecnico',['as'=>'technical.index','uses'=>'TechnicalController@index']);
Route::get('/personal-tecnico/admin',['as'=>'technical.admin', 'uses'=>'TechnicalController@admin']);
Route::get('/personal-tecnico/create',['as'=>'technical.create', 'uses'=>'TechnicalController@create']);
Route::get('/personal-tecnico/{id}/edit',['as'=>'technical.edit', 'uses'=>'TechnicalController@edit']);
/*End Technical*/

/*Equipment*/
Route::get('/equipo',['as'=>'equipment.index','uses'=>'EquipmentController@index']);
Route::get('/equipo/admin',['as'=>'equipment.admin', 'uses'=>'EquipmentController@admin']);
Route::get('/equipo/create',['as'=>'equipment.create', 'uses'=>'EquipmentController@create']);
Route::get('/equipo/{id}/edit',['as'=>'equipment.edit', 'uses'=>'EquipmentController@edit']);
/*End Equipment*/

/*Brand*/
Route::get('/marcas-de-Equipos',['as'=>'brand.index','uses'=>'BrandController@index']);
/*End Brand*/

/*Model*/
Route::get('/modelos-de-Equipos',['as'=>'model.index','uses'=>'ModelEquipmentController@index']);
/*End Model*/

Route::get('/categorias',['as'=>'categorias.index','uses'=>'CategoryController@index']);
Route::delete('/categorias/{id}',['as'=>'categorias.destroy','uses'=>'CategoryController@destroy']);
Route::get('/category/{id}/edit', 'CategoryController@edit');
Route::get('/category/{id}/show', 'CategoryController@show');
Route::put('/category/{id}', 'CategoryController@update');
Route::get('/category', 'CategoryController@listing');
Route::post('/category', 'CategoryController@store');

Route::get('/subcategorias',['as'=>'subcategorias.index','uses'=>'SubcategoryController@index']);
Route::delete('/subcategorias/{id}',['as'=>'subcategorias.destroy','uses'=>'SubcategoryController@destroy']);
Route::get('/subcategory/{id}/edit', 'SubcategoryController@edit');
Route::get('/subcategory/{id}/show', 'SubcategoryController@show');
Route::put('/subcategory/{id}', 'SubcategoryController@update');
Route::get('/subcategory','SubcategoryController@listing');
Route::post('/subcategory','SubcategoryController@store');
Route::get('/subcategory/{id}/category', 'SubcategoryController@SelectSubcat');


Route::get('/',['as'=>'frontend.index','uses'=>'IndexController@index']);

Route::get('/in', function () {
    return view('layout.index');
});
