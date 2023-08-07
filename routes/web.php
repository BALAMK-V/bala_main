<?php

use App\Http\Controllers\Auth\LoginConroller;
use App\Http\Controllers\CrudController;
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
Route::view('/','home');
Route::view('register', 'auth.register');
Route::post('store', [LoginConroller::class,'store']);
Route::view('login', 'auth.login')->name('login');
Route::get('logout',[LoginConroller::class,'logout']);
Route::get('/authenticate', [LoginConroller::class,'authenticate'])->name('udata.index');

// Route::get('/udata',[CrudController::class,'create'])->name('udata.create');
// Route::post('/udata/store', [CrudController::class, 'store'])->name('udata.store');
// Route::get('/udata/{udata}',[CrudController::class,'show'])->name('udata.show');
// Route::get('/udata/{udata}/edit',[CrudController::class,'edit'])->name('udata.edit');
// Route::put('/udata/{udata}',[CrudController::class,'update'])->name('udata.update');
// Route::delete('/udata/{udata}',[CrudController::class,'destroy'])->name('udata.destroy');

//Resource Route
Route::resource('udata',CrudController::class);