<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Route::get('book',[HomeController::class,'book']);
Route::post('book-add',[HomeController::class,'add']);
Route::get('customer-edit/{id}',[HomeController::class,'edit']);
Route::post('book-update',[HomeController::class,'update']);
Route::get('customer-delete/{id}',[HomeController::class,'delete']);
