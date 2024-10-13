<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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


Route::post('/user/store', function (Request $request) {
    
    $nama = $request->input('nama');
    $npm = $request->input('npm');
    $kelas = $request->input('kelas');

    
    return "Nama: $nama, NPM: $npm, Kelas: $kelas";
})->name('user.store');