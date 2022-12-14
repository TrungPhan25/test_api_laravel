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

Route::get('/', function ()
{ return view('pages.main',['title'=>'Trang chủ']);
});

Route::get('/detail',function (){
   return view('pages.detail',['title'=>'bai viet']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\LoginController::class, 'index'])->name('home');
