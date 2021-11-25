<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/notes',[NoteController::class,'index'])->name('note.list');
Route::get('/notes/{id}/detail',[NoteController::class,'getById'])->name('note.detail');
Route::get('/create',[NoteController::class,'showCreateForm'])->name("note.showCreateForm");
Route::post('/create',[NoteController::class,'store'])->name("note.store");
Route::get('/edit/{id}',[NoteController::class,'showFormEdit'])->name("note.showFormEdit");
Route::post('/edit/{id}',[NoteController::class,'update'])->name("note.update");
Route::get('/delete/{id}',[NoteController::class,'delete'])->name("note.delete");

route::prefix('users')->group(function (){
    Route::get('/',[UserController::class,"index"])->name('users.index');
});


