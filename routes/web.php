<?php

use App\Http\Controllers\TestController;
#use Illuminate\Support\Facades\Route;
#use App\Pizza;
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
    #$pizzas=Pizza::all();
    return view('pizzas.welcome');
});

#either i can apply ->middleware('auth') to to every line or i can create a  constructor in pizza controller
Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index')->name('pizzas.index')->middleware('auth');
#Route::get('/pizzas',[PizzaController::class, 'index']);
Route::get('/pizzas/create', 'App\Http\Controllers\PizzaController@create')->name('pizzas.create')->middleware('auth');
#Route::get('/pizzas/create',[PizzaController::class, 'create']);
Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show')->name('pizzas.show') ;
##->middleware('auth')-- used to prevent the unauthorized users(who have not logged in) cannot access the page
Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store')->name('pizzas.store')->middleware('auth');
Route::post('/pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy')->name('pizzas.destroy') ;


//this was put in by laravel when we have used ui package to scaffold the auth stuff and this contains all the routes like '/register','/login' etc 
Auth::routes([
    //To disable any route hee we have disabled the register route
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
