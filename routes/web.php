<?php

use App\Http\Controllers\horseController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/horses/index', [App\Http\Controllers\HorseController::class, 'index'])->name('horses/index');

Route::get('/horses/twitter', [App\Http\Controllers\HorseController::class, 'twitter'])->name('horses/twitter');


Route::get('/animals/index', [App\Http\Controllers\AnimalController::class, 'index'])->name('animals/index');


Route::get('/horses/create', [App\Http\Controllers\HorseController::class, 'create'])->name('horses/create');


Route::post('/horses/store', [App\Http\Controllers\HorseController::class, 'store'])->name('horses.store');


Route::get('/horses/{id}/edit', [App\Http\Controllers\HorseController::class, 'edit'])->name('horses.edit');


Route::get('/horses/{id}/update', [App\Http\Controllers\HorseController::class, 'update'])->name('horses.update');


Route::get('/horses/{id}', [App\Http\Controllers\HorseController::class, 'show'])->name('horses.show');





// Route::resource('horses', 'HorseController');

