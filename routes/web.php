<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [NotesController::class, 'index']);
Route::post('/notes/add', [NotesController::class, 'store'])->name('notes.index.store');
Route::put('/notes/update/{id}', [NotesController::class, 'update'])->name('notes.index.update');
Route::delete('/notes/delete/{id}', [NotesController::class, 'destroy'])->name('notes.index.destroy');
