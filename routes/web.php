<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\RentaController;
use App\Http\Controllers\MembresiaController;
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
    return view('Netflix');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('/Peliculas',PeliculaController::class);
    Route::resource('/Rentas',RentaController::class);
    Route::resource('/Membresias',MembresiaController::class);
    Route::get('/dashboard',function(){
        return view('dashboard');
    })->name('dashboard');
});