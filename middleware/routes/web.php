<?php

use Illuminate\Support\Facades\Route;

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
});
Route::get('/home/{role}',function ($role){
   return "<h1>اهلا بك فى الطريق العام</h1>";
})->middleware('policeman');
Route::get('/user',function (){
    return "<h1>لا تمتلك الشروط بالدخول</h1>";
})->name('user');
Route::get('/admin',function(){
   return "<h1> تمتلك الشروط بالدخول</h1>";
})->name('admin');
