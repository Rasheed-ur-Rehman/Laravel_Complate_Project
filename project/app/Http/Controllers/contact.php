<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

function viewdata($name1){

// return view('help',['name'=>$name]);

// $name1=$new $name('Rasheed');


}  

}