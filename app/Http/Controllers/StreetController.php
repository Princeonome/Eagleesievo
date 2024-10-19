<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StreetController extends Controller
{
    public function getstreet(){
        return view('welcome');
    }
    
    public function geteventiva(){
        return view('eventiva');
    }

    public function dashboard(){
         $user = auth()->user();
         $allusers = User::where('id','!=',$user->id)->latest()->get();
         return view('dashboard',compact("user","allusers"));
    }

    public function edituser($id, Request $request){
        $user = auth()->user();
        $getuserinfo = User::where('id','=',$id)->first();
        return view('edituser',compact('user','getuserinfo'));
    }
}
