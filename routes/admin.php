<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\OrdenController;
use App\Http\Controllers\Admin\MenuController;

Route::get('', [HomeController::class, 'index']);
#Categorias
Route::resource('categoria', CategoriaController::class)->names('admin.categoria');
#Ordenes
Route::resource('ordenes', OrdenController::class)->names('admin.ordenes');
#Menus
Route::resource('menus', MenuController::class)->names('admin.menus');
