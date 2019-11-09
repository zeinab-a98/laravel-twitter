<?php

namespace App\Http\Controllers\Api;
use App\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
       $validatedData= $request-> validate([
            'name'=>'required|max:55',
            'email'=>'email|required|unique:users',
            'password'=>'required|confirmed'

        ]);

        $validatedData['password']=bcrypt($request->password);

        $user= user::create($validatedData);
        $accessToken=$user->createToken('authToken')->accessToken;
        return response (['users'=>$user,'access_token'=> $accessToken]);
       
    }
    public function login(Request $request){
        $loginData= $request-> validate([
           
            'email'=>'email|required',
            'password'=>'required'

        ]);
        if(!auth()->attempt($loginData)){
                return response(['message'=>'Invalid credentials']);
        }

        $accessToken=auth()->user()->createToken('authToken')->accessToken;
        return response (['user'=>auth()->user(),'access_token'=> $accessToken]);
    }
}
