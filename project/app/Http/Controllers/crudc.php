<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\member;

class crudc extends Controller
{
    function insert(Request $req)
    {
    	$member=new member();
    	$member->name=$req->name;
    	$member->email=$req->email;
    	$member->address=$req->address;
    	$member->save();


    	return redirect('user');
    }

    function show()
    {
    	$data=member::all();
    	return view('crud',['show'=>$data]);

    }

   function delete($id)
   {
   	$data=member::find($id);
   	$data->delete();
   	return redirect('show');
   } 

   function ShowData($id){
   	$data=member::find($id);
   	return view('update',['updatedata'=>$data]);
   }

   function update1(Request $req)
   {
      $data=member::find($req->id);
      $data->name=$req->name;
      $data->email=$req->email;
      $data->address=$req->address;
      $data->save();
      return redirect('show');

    

      
        }
}
