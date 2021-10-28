<?php

use Illuminate\Support\Facades\Route;
use App\Models\Horse;
use App\Models\Sessie;
use App\Models\Dog;
use App\Models\Consult;

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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// HORSES
Route::get('horses.index', [App\Http\Controllers\HorseController::class, 'index'])->name('horse.index');
Route::get('horses.create', [App\Http\Controllers\HorseController::class, 'create'])->name('horse.create');
Route::get('horses/{id}', [App\Http\Controllers\HorseController::class, 'show'])->name('horse.show');
Route::post('horses.store', [App\Http\Controllers\HorseController::class, 'store'])->name('horse.store');
Route::post('horses/{id}/update', [App\Http\Controllers\HorseController::class, 'update'])->name('horses.update');
Route::get('horses.delete{id}', [App\Http\Controllers\HorseController::class, 'destroy'])->name('horses.delete');

// SESSIES
Route::post('horses/{horse}/sessies', [App\Http\Controllers\SessieController::class, 'store'])->name('sessies.store');
Route::get('sessies/{id}', [App\Http\Controllers\SessieController::class, 'show'])->name('sessie.show');
Route::get('sessies/rapport/{id}', [App\Http\Controllers\SessieController::class, 'rapport'])->name('sessie.rapport');
Route::get('sessies.delete{id}', [App\Http\Controllers\SessieController::class, 'destroy'])->name('sessies.delete');
Route::post('/sessies/{id}', [App\Http\Controllers\SessieController::class, 'update'])->name('sessies.update');


// DOGS


Route::get('dogs.index', [App\Http\Controllers\DogController::class, 'index'])->name('dog.index');
Route::get('dogs.create', [App\Http\Controllers\DogController::class, 'create'])->name('dog.create');
Route::get('dogs/{id}', [App\Http\Controllers\DogController::class, 'show'])->name('dog.show');
Route::post('dogs.store', [App\Http\Controllers\DogController::class, 'store'])->name('dog.store');
Route::post('dogs/{id}/update', [App\Http\Controllers\DogController::class, 'update'])->name('dog.update');
Route::get('dogs.delete{id}', [App\Http\Controllers\DogController::class, 'destroy'])->name('dogs.delete');

// CONSULT
Route::post('dogs/{dog}/consults', [App\Http\Controllers\ConsultController::class, 'store'])->name('consults.store');
Route::get('consults/{id}', [App\Http\Controllers\ConsultController::class, 'show'])->name('consult.show');
Route::get('consults/rapport/{id}', [App\Http\Controllers\ConsultController::class, 'rapport'])->name('consult.rapport');
Route::get('consults.delete{id}', [App\Http\Controllers\ConsultController::class, 'destroy'])->name('consult.delete');
Route::post('/consults/{id}', [App\Http\Controllers\ConsultController::class, 'update'])->name('consults.update');
