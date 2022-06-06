<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
public function login (Request $request){
        $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        $user= $request->only('email','password');

    if (Auth::attempt($user))
    {
        $user = $request->user();

        return response()->json([
            'token'=>$user->createToken('Auth Token')->accessToken,
            'user'=>$user,
        ]);
    }
    else
    {
        return "Fail";
    }
}
}
