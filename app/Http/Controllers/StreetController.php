<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use App\Http\Requests\UpdateUserRequest;

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
         $findusers= User::withTrashed()->where('deleted_at','>',Carbon::now()->subWeek())->get();
         $title = 'Delete User!';
         $text = "Are you sure you want to delete?";
         confirmDelete($title, $text);
         return view('dashboard',compact("user","allusers","findusers"));
    }

    public function edituser($id, Request $request){
        $user = auth()->user();
        $getuserinfo = User::where('id','=',$id)->first();
        return view('edituser',compact('user','getuserinfo'));
    }

    public function deleteuser($id){
        $finduser= User::where('id','=',$id)->first();
        $finduser->delete();
        return redirect()->back();
    }

    public function restore_user($id){
        $finduser= User::withTrashed()->find($id);
        $finduser->restore();
        return redirect()->back();
    }

    public function updateuser($id,UpdateUserRequest $request){
        $data = $request->validated();
        $finduser= User::where('id','=',$id)->first();
        $finduser->update($data);
        return redirect()->back();
        
    }

    
}
