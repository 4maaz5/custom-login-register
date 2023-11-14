<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\App;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/add',function(){
    return view('add');
})->name('add');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginpost'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerpost'])->name('registerpost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [AuthController::class, 'display'])->name('dashboard');
Route::post('/add', [AuthController::class, 'insert'])->name('insert');
Route::get('/edit/{id}', [AuthController::class, 'edit'])->name('edit');
Route::PUT('/update/{id}', [AuthController::class, 'update'])->name('update');
Route::get('/delete/{id}', [AuthController::class, 'delete'])->name('delete');
Route::get('/user/{id}',[AuthController::class, 'user'])->missing(function(){
    return view('user.notfound');
});
Route::get('home',function(){
    return view('home');
});
Route::get('homee',function(){
    return view('home');
})->name('home');
Route::get('hometwo',function(){
    return view('hometwo');
})->name('hometwo');
