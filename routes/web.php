<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessieController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HorseController::class, 'welcome'])->name('welcome');


Route::get('/horses/index', [App\Http\Controllers\HorseController::class, 'index'])->name('horses/index');
Route::get('/horses/create', [App\Http\Controllers\HorseController::class, 'create'])->name('horses.create');
Route::post('/horses/store', [App\Http\Controllers\HorseController::class, 'store'])->name('horses.store');
Route::get('/horses/{id}/edit', [App\Http\Controllers\HorseController::class, 'edit'])->name('horses.edit');
Route::get('/horses/{id}/update', [App\Http\Controllers\HorseController::class, 'update'])->name('horses.update');
Route::get('/horses/{id}', [App\Http\Controllers\HorseController::class, 'show'])->name('horses.show');

// Route::post('/sessies/store', [App\Http\Controllers\SessieController::class, 'store'])->name('sessies.store');
Route::post('/horses/sessie/{id}', [App\Http\Controllers\HorseController::class, 'sessie'])->name('horses.sessie');

Route::get('/sessies/{id}/edit', [App\Http\Controllers\SessieController::class, 'edit'])->name('sessies.edit');

Route::get('/sessies/{id}/update', [App\Http\Controllers\SessieController::class, 'update'])->name('sessies.update');

Route::get('/sessies/{id}', [App\Http\Controllers\SessieController::class, 'show'])->name('sessies.show');




// Route::resource('sessies', SessieController::class);
