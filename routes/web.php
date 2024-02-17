<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\notasController;

Route::get('/', [notasController::class,'index'])->name('notas.index');
Route::get('/crear', [notasController::class,'create'])->name('notas.create');
Route::post('/store', [notasController::class,'store'])->name('notas.store');

Route::get('/edita/{id}', [notasController::class,'edit'])->name('notas.edit');
Route::put('/update/{id}', [notasController::class,'update'])->name('notas.update');

Route::get('/eliminar/{id}', [notasController::class,'show'])->name('notas.show');
Route::delete('/destroy/{id}', [notasController::class,'destroy'])->name('notas.destroy');

