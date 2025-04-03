<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', [CursoController::class, 'getNames'])->name('home');



Route::get('/suma/{a}/{b}', [CursoController::class, 'suma'])->name('suma');
Route::get('/resta/{a}/{b}', [CursoController::class, 'resta'])->name('resta');
Route::get('/multiplicacion/{a}/{b}', [CursoController::class, 'multiplicacion'])->name('multiplicacion');
Route::get('/division/{a}/{b}', [CursoController::class, 'division'])->name('division');

//Route::

Route::get('suscribed', function () {
    return 'Estas suscrito';
})->middleware('suscribed');


Route::view('ejemplo','example',['name' => 'Azael'])->name('example');

Route::get('/ejemplo2',[CursoController::class, 'index'])->name('index');


Route::controller(PostController::class)->group(function (){
    Route::get('posts', 'index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('/posts/store', 'store')->name('posts.store');
});

