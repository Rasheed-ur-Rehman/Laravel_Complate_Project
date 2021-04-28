<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\member;

class crud extends Controller
{
   function display()
   {
      $data = DB::table('users')->get();
      return view('help',['data'=>$data]);
   }

   function insert()
   {
   	$data =DB::table('users')
   	->insert([
   'name'=>'Farhan',
   'email'=>'farhan@gmail.com',
   'address'=>'karachi Pakistan'
   	]);

   }

   function update()
   {
   	return DB::table('users')
   	->where('id',3)
   	->update([
     'name'=>'Munir',
     'email'=>'munir@gmail.com',
     'address'=>'sanik G chashma'
   	]);
   }

   function delete()
   {
   	return DB::table('users')
   	->where('id',1)->delete();
   }
}
