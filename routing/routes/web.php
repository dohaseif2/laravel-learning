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
    return '<form action="/delete/item" method="post">
<input type="hidden" name="_token" value="'. csrf_token().'">
<input type="hidden" name="_method" value="delete" >
<input type="submit" value="ok">
</form>';
});
Route::post('/post', function () {
    return "<h2>hello post</h2>";
});
Route::put('/put', function () {
    return "<h2>hello put</h2>";
});
Route::patch('my/patch', function () {
    return "<h2>hello patch</h2>";
});
Route::delete('/delete/item', function () {
    return "<h2>hello delete</h2>";
});
Route::any('my/any/route', function () {
    return "<h2>hello route</h2>";
});

Route::match(['post', 'get'],'my/match', function () {
    return "<h2>hello my match</h2>";
});
Route::get('edit/{id?}/{name?}', function ($id = null,$name=null) {
    return "hello id = ". $id ."name = ".$name;
})->where(['id'=>'[0-9]+','name'=>'[a-z]+']);

Route::get('include/{id}', function ($id ) {
    return "in includes".$id;
})->whereIn('name',['c','php','python']);

// to provide pattern
// app -> provider -> routeServiceProvider
// Route::pattern('id','[0-9]+');


Route::prefix('prodect')->group(function(){
    Route::get('create',fn()=>'create prodect');
    Route::get('edit',fn()=>'edite');
});
Route::group(['prefix'=>'prodects'],function(){
    Route::get('create',fn()=>'create prodect');
    Route::get('edit',fn()=>'edite');
});

Route::fallback(function(){
    return redirect('/');
});
