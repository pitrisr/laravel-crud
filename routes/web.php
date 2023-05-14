<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DinamisController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


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

/*Route::get('/', function () {
return view('welcome');
});*/


Route::get('/dosen', [DosenController::class, 'index']);

Route::get('web/home', [DinamisController::class, 'home']);
Route::get('web/profile', [DinamisController::class, 'profile']);
Route::get('web/contact', [DinamisController::class, 'contact']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/dosen/create', [DosenController::class, 'create']);
Route::post('/dosen/store', [DosenController::class, 'store']);