<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\SigninRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;



class AuthController extends Controller
{
    public function loginForm()
    {
       return view('loginform');
    }

    public function registerForm()
    {
       return view('register');
    }

    public function signup (SignupRequest $request){

       $data = $request->validated();
       $users = User::create($data);
       Auth::login($users);
       Alert::toast('Welcome '.auth()->user()->name, 'success');
       return redirect()->route('dashboard');
      //return redirect()->back();
        
    }
     public function signin (SigninRequest $request){
         $data = $request->validated();
         if(Auth::attempt($data)){
            $username= auth()->user()->name;
            Alert::toast('welcome '.$username, 'success');
              return redirect()->route('dashboard');

         }
         return back()->withErrors([
            "error_message"=> "Invalid credentials"
         ]);
     }

     public function logout(Request $request){
          Auth::logout();
          $request->session()->invalidate();
          $request->session()->regenerateToken();
          return redirect()->route('website');
     }
}
