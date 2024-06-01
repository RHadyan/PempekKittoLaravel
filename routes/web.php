<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;



Route::get('/', function () {
    return view('index');
});

Route::get('/admin',[MenuController::class, 'admin']) -> name('admin.index');
Route::get('/admin/pempek',[MenuController::class, 'pempek']) -> name('admin.pempek');
Route::post('/admin/addpempek',[MenuController::class, 'savepempek']) -> name('admin.savepempek');
Route::get('/admin/{menu}/editpempek', [MenuController::class, 'editpempek']) -> name('admin.editpempek');
Route::delete('/admin/{menu}/delete', [MenuController::class, 'deletepempek'])->name('admin.deletepempek');
