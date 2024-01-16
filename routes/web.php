<?php

use App\Http\Controllers\JovenController;
use App\Http\Controllers\LoginController;
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

// CRUD DE JOVENES
Route::get('/jovenes/view', [JovenController::class, 'view'])->name('jovenes.view');
Route::post('/jovenes/create', [JovenController::class, 'create'])->name('jovenes.create');
Route::post('/jovenes/update', [JovenController::class, 'update'])->name('jovenes.update');
Route::get('/jovenes/delete/{id}', [JovenController::class, 'delete'])->name('jovenes.delete');

Route::get('/', function () {
    return view('welcome');
});

// RUTAS DE REGISTRO
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

// RUTAS DE LOGIN
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

// RUTA A HOME
Route::get('/home', [HomeController::class, 'index']);
