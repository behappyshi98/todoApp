<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Models\Todo;

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




Route::get('/ok', function () {
    return view('todo.edit');
});



Route::get('/',[TodoController::class,'index'])->name('todo.index');
Route::get('/task/create',[TodoController::class,'create'])->name('todo.create');
Route::post('/',[TodoController::class,'store'])->name('todo.store');

Route::get('/task/{task}', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/task/{task}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/task/{task}',[TodoController::class,'destroy'])->name('todo.destroy');
Route::post('/task/{task}/complete',[TodoController::class,'complete'])->name('todo.complete');

Route::get('/taskshow',[TodoController::class,'showCompleted'])->name('taskshow');
