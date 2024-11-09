<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\SigninRequest;
use Auth;


class AuthController extends Controller
{
    
public function users(){
    $users = User::all();
    return response()->json([$users]);

}

public function register(SignupRequest $request){
        
    $data = $request->validated();
    $users = User::create($data);
    return response()->json([$users],201);
    
}

public function login (SigninRequest $request){
   
    $data = $request->validated();
    if(Auth::attempt($data)){
        $token = auth()->user()->createToken('app_token')->plainTextToken;
        return response()->json([
            'message' => 'Login was successful!',
            'user'    => auth()->user(),
            'token' => $token
        ],200);
    }
    return response()->json([
         'error' => 'please check your inputs'
    ],401);

}

public function logout(){

    if(auth()->user()){
        auth()->user()->tokens()->delete();
        return response()->json([
            'message'=> 'Logout is successfull'
        ]);
    }
}

}
