<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;

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

/*
Route::get('/peliculas', function () {
    return view('peliculas.index');
});
Route::get('peliculas/create',[PeliculaController::class,'create']);
*/

Route::resource('peliculas',PeliculaController::class);

