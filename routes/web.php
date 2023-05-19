<?php

use App\Http\Controllers\CategoriaController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
#Ruta de Pos
Route::get('pos', [App\Http\Controllers\PosController::class, 'pos']);
#Ruta de Ordenes
#Route::get('ordenes', [App\Http\Controllers\OrdenesController::class, 'ordenes']);
#Ruta de Cocina
Route::get('cocina', [App\Http\Controllers\CocinaController::class, 'cocina']);
#Ruta de Categoria
#Route::get('categorias', [App\Http\Controllers\Admin\CategoriaController::class, 'categorias']);
#Ruta de Menu
#Route::get('menu', [App\Http\Controllers\MenuController::class, 'menu']);
#Ruta de Reportes
Route::get('reportes', [App\Http\Controllers\ReportesController::class, 'reportes']);
#Ruta de Usuarios
Route::get('usuarios', [App\Http\Controllers\UsuariosController::class, 'usuarios']);
#Ruta de InfoSystem
Route::get('infosystem', [App\Http\Controllers\InfoSystemController::class, 'infosystem']);
