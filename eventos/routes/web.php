<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\Navi;

Route::get('/',[Navi::class,'index']);
Route::get('/events',[Navi::class,'events']);
Route::post('/events/add',[Navi::class,'store'])->middleware('auth');
Route::get('/events/{id}',[Navi::class,'show']);
Route::delete('/events/{id}',[Navi::class,'destroy'])->middleware('auth');
Route::put('/events/update/{id}',[Navi::class,'update'])->middleware('auth');
Route::get('/dashboard',[Navi::class,'dashboard'])->middleware('auth');
Route::post('/join/{id}',[Navi::class,'joinEvent'])->middleware('auth');
