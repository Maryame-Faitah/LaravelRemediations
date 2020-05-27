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

// blade principale = welcome vu qu'il fallait inventer une route et
// je savais pas quoi faire d'autre
Route::get('/', function () {
    return view('welcome');
});

// Renvoyer une donnée via une variable
Route::get('/test1', function() {
    $variable1 = 'ma variable';
    return("Renvoie d'une donnée via une variable = ".$variable1);
});

// Renvoyer une view avec une route
Route::get('/test2', function(){
    return view('hello');
});

// Passer variables d'une route à un fichier web (sans controller)
Route::get('/test3', function(){
    $variable2 = 'une seconde variable';
    $variable3 = 'une troisième variable';
    $variable4 = 'une quatrième variable';
    return view('test3', ['variable2'=>'une seconde variable',
    'variable3'=>'une troisième variable','variable4'=>'une quatrième variable']);
}); 

// Créer plusieurs routes avec view différentes
Route::get('/view1', function(){
    return view('view1');
});
Route::get('/view2', function(){
    return view('view2');
});
Route::get('/view3', function(){
    return view('view3');
});
