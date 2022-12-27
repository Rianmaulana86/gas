<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;


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

Route::get('/', function () {
    return view('auth/login');
});


Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/log', [AuthController::class, 'log']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/store', [AuthController::class, 'store']);


Route::get('/home', [MainController::class, 'home']);




Route::controller(CategoryController::class)->group(function() {
    Route::get('/category', 'index');
    Route::get('/category/create', 'create');
    Route::post('/category/store', 'store');
    Route::get('/category/show/{category:name}', 'show');
    Route::get('/updatecategory/{category:slug}', 'edit')->middleware('auth');
    Route::post('/deletecategory/{category:slug}', 'destroy');

});