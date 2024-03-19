<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\TasksController;

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


//route for tasks
Route::get('/',[TasksController::class,'Showdisplay'])->name('show.display');
Route::post('/store_data',[TasksController::class,'StoreData'])->name('store.data');
Route::get('/Show_edit_task/{id}',[TasksController::class,'showEditForm'])->name('show.form');
Route::put('/task-update/{id}',[TasksController::class,'actuallyUpdate'])->name('update.task');
Route::get('/delete_task/{id}',[TasksController::class,'Remove'])->name('delete.task');

//route for tags

//Route::post('/store_tags', [TagsController::class,'StoreTags'])->name('store.tags');
Route::resource('tags', TagsController::class);

