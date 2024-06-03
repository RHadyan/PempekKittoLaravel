<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard',[UserController::class, 'index'])->name('admin.edit');
Route::get('dashboard',[UserController::class, 'index'])->name('admin.edit');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::get('/admin',[MenuController::class, 'admin']) -> name('admin.index');
    Route::get('/admin/pempek',[MenuController::class, 'pempek']) -> name('admin.pempek');
    Route::get('/admin/tekwan',[MenuController::class, 'tekwan']) -> name('admin.tekwan');
    Route::get('/admin/Mie',[MenuController::class, 'mie']) -> name('admin.mie');

    Route::post('/admin/addpempek',[MenuController::class, 'savepempek']) -> name('admin.savepempek');
    // Route::get('/admin/{menu}/editpempek', [MenuController::class, 'editpempek']) -> name('admin.editpempek');
    Route::put('/admin/{menu}/update', [MenuController::class, 'updatepempek']) -> name('admin.update');
    Route::delete('/admin/{menu}/delete', [MenuController::class, 'deletepempek'])->name('admin.deletepempek');
    
});
Route::get('/',[MenuController::class, 'halamanUser'])->name('index');

Route::get('/product/{kategori}',[MenuController::class, 'showProduct']) -> name('product');



require __DIR__.'/auth.php';