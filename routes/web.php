<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;

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

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');

// Rotta per mostrare i miei film
Route::get('/movies/index',[MovieController::class, 'moviesIndex'])->name('moviesIndex');

// Rotta per mostrare il dettaglio dei miei film
Route::get('/movies/detail/{id}',[MovieController::class, 'moviesDetail'])->name('moviesDetail');

// Rotta per farci conttatare da un utente
Route::get('/contact-us',[PublicController::class, 'contact_us'])->name('contact_us');

// Rotta che mi definisce la logica del form di contatti
Route::post('/contact-us-submit',[PublicController::class, 'contact_us_submit'])->name('contact_us_submit');

// Rotta che mi definisce la pagina thank u page dopo che l'utente ha compilato il form
Route::get('/thank-you-page',[PublicController::class, 'thank_you'])->name('thank_you_page');