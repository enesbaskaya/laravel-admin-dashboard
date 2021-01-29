<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReferencesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

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

Route::get('/', [MainController::class, 'index']);

Route::resource('references',ReferencesController::class);
Route::get('references/delete/{id}',[ReferencesController::class,'destroy'])->name('references.destroy');

Route::resource('services',ServicesController::class);
Route::get('services/delete/{id}',[ServicesController::class,'destroy'])->name('services.destroy');

Route::resource('teams',TeamController::class);
Route::get('team/delete/{id}',[TeamController::class,'destroy'])->name('teams.destroy');

Route::resource('contact',ContactController::class);
Route::get('contact/delete/{id}',[ContactController::class,'destroy'])->name('contact.destroy');

Route::resource('about',AboutController::class);
Route::get('about/delete/{id}',[ContactController::class,'destroy'])->name('about.destroy');

