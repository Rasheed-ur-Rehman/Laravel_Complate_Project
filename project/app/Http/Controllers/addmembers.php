<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class addmembers extends Controller
{
   function AddMimber(Request $req){
     
     $member=new member;
     $member->name=$req->name;
     $member->email=$req->email;
     $member->address=$req->address;
     $member->save();

     return redirect('insert');
        }
}
