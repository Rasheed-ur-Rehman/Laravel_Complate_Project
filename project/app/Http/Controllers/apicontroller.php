<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apimodel;

class apicontroller extends Controller
{
    function getdata()
    {
    	return apimodel::all(); 
    }


    function insertdata(Request $req){
   
     $apimodel=new apimodel;
     $apimodel->name=$req->name;
     $apimodel->email=$req->email;
     $apimodel->address=$req->address;
   $result= $apimodel->save();

   if ($result) {
   	return "Successed";
   }else{
   	return "Failed"; 
   }


    }
}
