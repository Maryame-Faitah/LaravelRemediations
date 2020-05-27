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
Route::get('/donnee', function() {
    $variable = 'ma variable';
    return("Renvoie d'une donnée via une variable = ".$variable);
});
