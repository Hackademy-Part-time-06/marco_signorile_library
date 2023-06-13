<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;

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


Route::get('/libri', [BookController::class, 'index'])->name('index');
Route::get('/libri/crea', [BookController::class, 'create'])->name('create');
Route::post('/libri/salva', [BookController::class, 'store'])->name('store');
Route::get('/libri/{book}/dettagli', [BookController::class, 'show'])->name('show');
Route::get('/libri/{book}/modifica', [BookController::class, 'edit'])->name('edit');
Route::put('/libri/{book}', [BookController::class, 'update'])->name('update');
Route::delete('/libri/{book}', [BookController::class, 'destroy'])->name('destroy');

Route::get('/mylibrary', [BookController::class, 'my_index'])->name('my_index');

Route::get('/category', [CategoryController::class, 'category_index'])->name('category_index');
Route::get('/category/crea', [CategoryController::class, 'category_create'])->name('category_create');
Route::post('/category/salva', [CategoryController::class, 'category_store'])->name('category_store');
Route::get('/category/{category}/dettagli', [CategoryController::class, 'category_show'])->name('category_show');
Route::get('/category/{category}/modifica', [CategoryController::class, 'category_edit'])->name('category_edit');
Route::put('/category/{category}', [CategoryController::class, 'category_update'])->name('category_update');
Route::delete('/category/{category}', [CategoryController::class, 'category_destroy'])->name('category_destroy');

Route::get('/author', [AuthorController::class, 'author_index'])->name('author_index');
Route::get('/author/crea', [AuthorController::class, 'author_create'])->name('author_create');
Route::post('/author/salva', [AuthorController::class, 'author_store'])->name('author_store');
Route::get('/author/{author}/dettagli', [AuthorController::class, 'author_show'])->name('author_show');
Route::get('/author/{author}/modifica', [AuthorController::class, 'author_edit'])->name('author_edit');
Route::put('/author/{author}', [AuthorController::class, 'author_update'])->name('author_update');
Route::delete('/author/{author}', [AuthorController::class, 'author_destroy'])->name('author_destroy');

