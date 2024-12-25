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
Route::post('/store', [AuthController::class, 'store'])->name('store');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/informasi', [UserController::class, 'informasi'])->name('informasi');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
<<<<<<< HEAD
Route::get('/edit', [UserController::class, 'edit'])->name('edit');
Route::post('/update', [UserController::class, 'update'])->name('update');

=======
Route::get('/editprofile', [UserController::class, 'editprofile'])->name('editprofile');
>>>>>>> 48e8a678e2303bcfae6a64f5950a9a49c768f074
Route::get('/daftar1', [UserController::class, 'daftar1'])->name('daftar1');
Route::get('/daftar2', [UserController::class, 'daftar2'])->name('daftar2');
Route::get('/daftar3', [UserController::class, 'daftar3'])->name('daftar3');
Route::get('/daftar4', [UserController::class, 'daftar4'])->name('daftar4');
Route::get('/siswa', [UserController::class, 'siswa'])->name('siswa');
