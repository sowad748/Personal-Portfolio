<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $things = $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|string'
        ]);
        $user= User::create([
            'name'=>$things['name'],
            'email'=>$things['email'],
            'password'=>bcrypt($things['password'])
        ]);

        $token = $user->createToken('mytoken')->plainTextToken;
        $response =[
            'user'=>$user,
            'token'=>$token
        ];
        return response($response, 201);
    }
    public function login(Request $request){
        $things = $request->validate([

            'email'=>'required|string',
            'password'=>'required|string'
        ]);
        $user = User::where('email', $things['email'])->first();


        $token = $user->createToken('mytoken')->plainTextToken;

        return response([
                "token: {$token}"


        ]);
    }
    public function logout(){
        auth()->user()->tokens()->delete();
        return response(["Logged out"]);
    }
}
