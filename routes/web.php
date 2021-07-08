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

Route::post('/login',[\App\Http\Controllers\UserController::class, 'login']);
Route::get('/login',[\App\Http\Controllers\UserController::class, 'showLoginForm']);

Route::get('/get-state',[\App\Http\Controllers\StateController::class, 'fetchstate']);
Route::get('/get-lga/{id}',[\App\Http\Controllers\LgaController::class, 'showDropdown']);
Route::get('/get-ward/{id}',[\App\Http\Controllers\WardController::class, 'showDropdown']);

$router->group(['prefix' => 'user'], function () use ($router) {
Route::post('/register',[\App\Http\Controllers\UserController::class, 'showLoginForm']);
});


$router->group(['prefix' => 'citizen'], function () use ($router) {
    Route::post('/register',[\App\Http\Controllers\CitizenController::class, 'register']);
    Route::get('/register',[\App\Http\Controllers\CitizenController::class, 'showform']);
    Route::get('/record',[\App\Http\Controllers\CitizenController::class, 'getrecords']);
    });

   
    