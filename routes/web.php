<?php

use App\Http\Controllers\JovenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// RUTAS DE INICIO
Route::get('/', function () {
    return view('home.index');
});

Route::get('/index', [HomeController::class, 'index']);

// RUTAS DE REGISTRO
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

// RUTAS DE LOGIN
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

// RUTAS DE LOGOUT
Route::get('/logout', [LogoutController::class, 'logout']);

// RUTAS PROTEGIDAS
// Route::view('/register', 'auth.register')->middleware('auth');

// VISTA DE ACCESO DENEGADO
Route::view('/accessdenied', 'auth.accessdenied')->name('accessdenied');
