<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
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
Route::get('/user/profile', [UserController::class, 'profile']); 


Route::get('/user/create', [UserController::class, 'create']);
Route::get('/profile/{nama}/{kelas}/{npm}', [ProfileController::class, 'profile']);

Route::get('/', function () {
    return view('welcome');
});

Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

Route::get('/users', [UserController::class, 'index'])->name('user.index');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
