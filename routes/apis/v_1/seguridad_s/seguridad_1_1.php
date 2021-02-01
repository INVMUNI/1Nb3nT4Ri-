<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//rutas para AuthController
Route::name('me')->get('auth/me', 'Usuario\AuthController@me');
Route::name('login')->post('auth/login', 'Usuario\AuthController@login');
Route::name('logout')->get('auth/logout', 'Usuario\AuthController@logout');