<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\contact;	
use App\Http\Controllers\test;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\crudc;
use App\Http\Controllers\userouth;
use App\Http\Controllers\addmembers;
use App\Http\Controllers\crud;




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

Route::post('profile',[userouth::class,'userlogin']);
Route::view('login','login');
Route::view('profile','profile');



Route::get('/login', function(){
	if (session()->has('user')) {
		return redirect('profile');
	}
	return view('login');
});



Route::get('/logout', function(){
	if (session()->has('user')) {
		session()->pull('user');
	}
	return view('login');
});


Route::get('langauge.{lang}', function($lang){
    App::setlocale($lang);
    return view('langauge');

});

Route::view('insert','addmember');
Route::post('insert',[addmembers::class,'AddMimber']);


Route::view('crud','user');
Route::post('users',[crudc::class,'insert']);

Route::get('show',[crudc::class,'show']);


Route::get('delete/{id}',[crudc::class,'delete']);

Route::get('update/{id}',[crudc::class,'ShowData']);

Route::post('update',[crudc::class,'update1']);

Route::get('display',[crud::class,'display']);
Route::get('insertdata',[crud::class,'insert']);
Route::get('updatedata',[crud::class,'update']);
Route::get('deletedata',[crud::class,'delete']);


Route::get('viewalldata',[contact::class,'viewdata']);













