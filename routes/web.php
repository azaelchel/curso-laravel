<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CursoController::class, 'getNames'])->name('home');

Route::get('/suma/{a}/{b}', [CursoController::class, 'suma'])->name('suma');
Route::get('/resta/{a}/{b}', [CursoController::class, 'resta'])->name('resta');
Route::get('/multiplicacion/{a}/{b}', [CursoController::class, 'multiplicacion'])->name('multiplicacion');
Route::get('/division/{a}/{b}', [CursoController::class, 'division'])->name('division');

