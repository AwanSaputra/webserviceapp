<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $user = User::where('username',$request->username)->first();

        if(!$user){
            return response()->json([
                "code" => "400",
                "message" => "Bad Credentials",
               
            ],400);
        }

        if(Hash::check($request->password,$user->password)){
            return response()->json([
                "code" => "200",
                "message" => "Login Success",
                "data" => [
                    "api-key" => $user->api_key
                ]
            ]);
        }

        return response()->json([
                "code" => "400",
                "message" => "Bad Credentials",
                
        ],400);
    }
}