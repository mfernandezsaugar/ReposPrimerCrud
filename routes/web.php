<?php

use App\Http\Controllers\PersonasController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', [PersonasController::class, 'index'])->name('personas.index');
    Route::get('/create', [PersonasController::class, 'create'])->name('personas.create');
    Route::post('/store', [PersonasController::class, 'store'])->name('personas.store');
    Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');
    Route::put('/update/{id}', [PersonasController::class, 'update'])->name('personas.update');
    Route::get('/show/{id}', [PersonasController::class, 'show'])->name('personas.show');
    Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');

    Route::resource('tasks', \App\Http\Controllers\TaskController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
