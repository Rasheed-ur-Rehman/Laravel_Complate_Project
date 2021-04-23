<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\about;
use App\Http\Controllers\home;

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

Route::get('about/{id}',function($id)
{
return view('about',['key'=>$id]);
});

   
   Route::get('home',[home::class,'index']);

   // Route::get('about/{name}',[about::class,'index']);

   

