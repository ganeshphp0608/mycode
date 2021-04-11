<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
    return view('loginpage');
});
Route::get('/homepage',[LoginController::class,'homepage']);
Route::post('/login',[LoginController::class,'login']);
Route::get('register',function(){
    return view('register');
});
Route::post('/submit_reg',[LoginController::class,'submit_reg']);
Route::get('/logout',[LoginController::class,'logout']);
Route::post('/uploadimage',[LoginController::class,'uploadimage'])->name('uploadimage');
Route::post('/search',[LoginController::class,'search'])->name('search');





