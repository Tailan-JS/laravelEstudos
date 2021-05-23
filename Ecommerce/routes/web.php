<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Navi;

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


Route::get('/',[Navi::class,'index']);
Route::get('/products',[Navi::class,'products']);
Route::get('/dashboard',[Navi::class,'dashboard'])->middleware('auth');
Route::post('/products/add',[Navi::class,'store'])->middleware('auth');
Route::get('/details/{id}',[Navi::class,'details']);

