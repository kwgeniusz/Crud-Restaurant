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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('client','ClientController');

Route::resource('food','FoodController');

//-------production routes
Route::get('/production', 'ProductionController@index')->name('production.index');

Route::get('/productionCreate', 'ProductionController@create')->name('production.create');

Route::post('/productionProcess', 'ProductionController@process')->name('production.process');

//-------recipe routes

Route::get('/recipe', 'RecipeController@index')->name('recipe');

Route::post('/recipeCreate', 'RecipeController@create')->name('recipe.create');

//-------kitchen routes

Route::get('/kitchen', 'KitchenController@index')->name('kitchen');

Route::post('/kitchenCreate', 'KitchenController@create');

Route::get('/getRecipeDetails/{id}', 'KitchenController@getRecipeDetails')->name('getRecipeDetails');

//-------complement-------
  //route Food weight
  Route::get('/getWeight/{id}', 'FoodController@getWeight')->name('getWeight');
  //route Production weight
  Route::get('/getWeightProduction/{id}', 'ProductionController@getWeight')->name('getWeightProduction');

  //