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
Route::post('/events/add',[Navi::class,'store']);
Route::get('/events/{id}',[Navi::class,'show']);