<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/blog', [UserController::class, 'blog'])->name('blog');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'login'])->name('login');


Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/editprofile', [UserController::class, 'editprofile'])->name('editprofile');
Route::get('/daftar1', [UserController::class, 'daftar1'])->name('daftar1');
Route::get('/daftar2', [UserController::class, 'daftar2'])->name('daftar2');
Route::get('/daftar3', [UserController::class, 'daftar3'])->name('daftar3');
Route::get('/daftar4', [UserController::class, 'daftar4'])->name('daftar4');
Route::get('/siswa', [UserController::class, 'siswa'])->name('siswa');
