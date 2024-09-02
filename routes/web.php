<?php
/*
use App\Models\Tarea;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TareaController@getHome');
Route::post('/store', [TareaController::class, 'store'])->name('myStore');
Route::get('/tarea/show/{id}', [TareaController::class, 'show'])->name('myShow');
Route::delete('tarea/delete/{id}', [TareaController::class, 'destroy'])->name('myDestroy');
Route::get('/tarea/edit/{id}', [TareaController::class, 'edit'])->name('myEdit');
Route::put('/tarea/update/{id}', [TareaController::class, 'update'])->name('myUpdate');
*/


use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;


//Route::get('/', 'App\Http\Controllers\TareaController@getHome');

Route::get('/', [TareaController::class, 'index'])->name('home');

// Rutas para las operaciones CRUD de tareas
Route::get('/tareas', [TareaController::class, 'index'])->name('tareas.index');
Route::post('/tareas', [TareaController::class, 'store'])->name('tareas.store');
Route::get('/tareas/{tarea}', [TareaController::class, 'show'])->name('tareas.show');
Route::delete('/tareas/{tarea}', [TareaController::class, 'destroy'])->name('tareas.destroy');
Route::get('/tareas/{tarea}/edit', [TareaController::class, 'edit'])->name('tareas.edit');
Route::put('/tareas/{tarea}', [TareaController::class, 'update'])->name('tareas.update');
// JOHAN SERRATO ACOSTA

// Nueva ruta para cambiar el estado de completado
Route::put('/tareas/{tarea}/toggle-completado', [TareaController::class, 'toggleCompletado'])->name('tareas.toggleCompletado');
