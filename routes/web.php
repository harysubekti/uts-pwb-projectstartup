<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPertama;
use App\Http\Controllers\StartupController;

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
Route::get("/startup", [ControllerPertama::class, "first"]);
Route::get("/penggerak", [ControllerPertama::class, "second"]);
Route::get("/edukasi", [ControllerPertama::class, "third"]);
Route::get('/input', 'App\Http\Controllers\StartupController@input');
Route::post('/proses', 'App\Http\Controllers\StartupController@proses');
Route::get("/about", [ControllerPertama::class, "about"]);