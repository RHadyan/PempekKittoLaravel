<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('index');
});

Route::get('/admin',[ProductController::class, 'admin']) -> name('admin.index');
Route::get('/admin/pempek',[ProductController::class, 'pempek']) -> name('admin.pempek');

