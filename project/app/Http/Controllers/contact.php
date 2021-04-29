<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contact extends Controller
{

    // function contact($id)
    // {
    // 	return view('contact',['id'=>$id]);
    // }

function loadview(){

	$data=["Rasheed","Rehman","Fahad"];

	return view("help",['users'=>$data]);     

}

function viewdata(){


return DB::table('user')
->join('people','people.id','=','user.id')
->select('people.*')
->get();

}  

}