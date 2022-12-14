<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class, 'index']);

Route::post('/save-todo', [TodoController::class, 'saveTodo'])->name('saveTodo');
Route::get('delete/{id}', [TodoController::class,'destroy']);
Route::get('edit/{id}', [TodoController::class,'edit']);
Route::post('/edit', [TodoController::class, 'updateTodo'])->name('updateTodo');