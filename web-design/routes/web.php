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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',App\Http\Controllers\FirstController::class.'@index');

Route::post('/envoyer',App\Http\Controllers\FirstController::class.'@getdata');
Route::get('/list_ecommerce',App\Http\Controllers\FirstController::class.'@list_ecommerce');

Route::get('/connexion',App\Http\Controllers\FirstController::class.'@redirect_login')->name('connexion');
Route::post('/login',App\Http\Controllers\FirstController::class.'@login');
Route::post('/ajoutcontenu',App\Http\Controllers\FirstController::class.'@insertcontenuIA');
Route::get('/FrontOffice',App\Http\Controllers\FirstController::class.'@frontoffice');
Route::get('/Search',App\Http\Controllers\FirstController::class.'@search');
Route::get('/Detail/{id}',App\Http\Controllers\FirstController::class.'@fichedetail')->name('detail');
