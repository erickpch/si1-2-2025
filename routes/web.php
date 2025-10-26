<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/',[AuthController::class,'inicio'])->name('inicio');
Route::get('/login',[AuthController::class,'inicio'])->name('login2');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


Route::prefix('/rol')->middleware(['auth:administrador'])->group(function (){
    Route::get('/',[RolController::class,'index'])->name('i.rol');
    Route::post('/',[RolController::class,'store'])->name('s.rol');
    Route::put('/',[RolController::class,'update'])->name('u.rol');
    Route::get('/{id}',[RolController::class,'show'])->name('s.rol');
    Route::delete('/',[RolController::class,'destroy'])->name('d.rol');
});


Route::prefix('/producto')->middleware(['auth:encargado'])->group(function (){
    Route::get('/',[ProductoController::class,'index'])->name('i.producto');
    Route::post('/',[ProductoController::class,'store'])->name('s.producto');
    Route::put('/',[ProductoController::class,'update'])->name('u.producto');
    Route::get('/{id}',[ProductoController::class,'show'])->name('s.producto');
    Route::delete('/',[ProductoController::class,'destroy'])->name('d.producto');
});

Route::prefix('/categoria')->group(function (){
    Route::get('/',[CategoriaController::class,'index'])->name('i.categoria');
    Route::post('/',[CategoriaController::class,'store'])->name('s.categoria');
    Route::put('/',[CategoriaController::class,'update'])->name('u.categoria');
    Route::get('/{id}',[CategoriaController::class,'show'])->name('s.categoria');
    Route::delete('/',[CategoriaController::class,'destroy'])->name('d.categoria');
});

Route::prefix('/user')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('i.user');
    Route::post('/',[UserController::class,'store'])->name('s.user');
    Route::put('/',[UserController::class,'update'])->name('u.user');
    Route::get('/{id}',[UserController::class,'show'])->name('s.user');
    Route::delete('/',[UserController::class,'destroy'])->name('d.user');
});




//Get se usa para traer informacion
//post se usa para ingresar informacion
//put se usa para modificar informacion
//delete se usa para eliminar informacion
