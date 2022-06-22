<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);
Route::get('/contacto', [App\Http\Controllers\FrontController::class, 'contacto']);
Route::get('/nosotros', [App\Http\Controllers\FrontController::class, 'nosotros']);
Route::get('/proyectosV', [App\Http\Controllers\FrontController::class, 'proyectosV']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('minutas', \App\Http\Controllers\MinutaController::class);
    Route::resource('proyectos', \App\Http\Controllers\ProyectoController::class);
    Route::resource('carrusel', \App\Http\Controllers\CarruselController::class);
    Route::resource('latex', \App\Http\Controllers\LatexController::class);
    Route::get('download-pdf/{id}', [App\Http\Controllers\MinutaController::class, 'downloadPdf'])->name('download-pdf');
});

