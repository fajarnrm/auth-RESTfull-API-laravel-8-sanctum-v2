<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        //Cek email
        $user = User::where('email',$data['email'])->first();
        //cek password
        if(!$user||!Hash::check($data['password'],$user->password)){
            return Response([
                'message' => 'Password Atau Email Salah'
            ],401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return[
            'message' => 'logged out'
        ];
    }
}
