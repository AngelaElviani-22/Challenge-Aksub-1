<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
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

Route::get('/', [BookController::class, 'index']);
Route::post('/book', [BookController::class, 'store'])->name('book.create');
Route::get('/book', [BookController::class, 'listBook'])->name('book.list');
Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::patch('/book/{id}', [BookController::class, 'update'])->name('book.update');
Route::delete('/book/{id}', [BookController::class, 'delete'])->name('book.delete');
Route::get('/author', [AuthorController::class, 'index'])->name('author.list');
Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
Route::post('/author', [AuthorController::class, 'store'])->name('author.store');
Route::get('/author/{id}', [AuthorController::class, 'detail'])->name('author.detail');