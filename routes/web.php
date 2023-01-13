<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

route::group(['middleware'=>'auth'],function(){
    Route::get('/', [ProductController::class, 'index'])->middleware('auth');
    Route::get('/create',[ProductController::class,'create']);
    Route::post('/store', [ProductController::class,'store']);
    Route::get('/show/{id}',[ProductController::class,'show']);
    Route::get('/edit/{id}',[ProductController::class, 'edit']);
    Route::post('/update/{id}',[ProductController::class, 'update']);
    Route::post('/destroy/{id}', [ProductController::class, 'destroy']);
});
//rota de autenticação

route::get('/login', [UserController::Class, 'login'])->name('login');
route::post('/signin',[UserController::class, 'signin']);
route::get('/register',[UserController::class, 'register']);
route::post('/signup',[UserController::class,"signup"]);
route::get('/logout',[UserController::class,'logout']);