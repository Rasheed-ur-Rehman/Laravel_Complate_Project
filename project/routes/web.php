<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\contact;	
use App\Http\Controllers\test;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\crudc;




Route::get('/home/{id}', function($id)
{
   return view('welcome ',['id'=>$id]);
});


 // Route::get('index',[home::class,'index']);


 Route::get('contact/{id}',[contact::class,'contact']);

 Route::get('abc/{id}',[home::class,'index']);

 Route::get('help',function(){

 	return view('help');
 });

Route::get('create/{id}', [home::class,'create']);

Route::get('user',[contact::class,'loadview']);
Route::get('test',[test::class,'index']);

Route::post('users',[usercontroller::class,'getdata']);
Route::view('login','user');

Route::view('home','home');
Route::view('user','user')->middleware('protectedpage');
Route::view('noaccess','noaccess');

Route::get('dbconnect',[usercontroller::class,'index']);

Route::get('about',[usercontroller::class,'about']);


Route::get('index1',[usercontroller::class,'index1']);

Route::get('insert',[crudc::class,'insert']);

// Route::group(['middleware'=>['protectpage']],function(){

// 	Route::view('user','user');
// });















