<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Carts;

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
// Route::view('/demo','hello');
// Route::get('/hello/{name}',function ($maa){
//    return view('hello',['name'=>$maa]);
// });
Route::get('/demo',[Carts::class,'cart']); 
