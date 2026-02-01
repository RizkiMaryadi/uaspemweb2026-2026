<?php

namespace App\Http\Controllers;

abstract class Controller
{
    class AuthController extends Controller {

    public function register(Request $r) {
        $user = User::create([
            'name'=>$r->name,
            'email'=>$r->email,
            'password'=>bcrypt($r->password)
        ]);
        return response()->json($user);
    }

    public function login(Request $r) {
        if(!Auth::attempt($r->only('email','password')))
            return response()->json(['message'=>'Invalid'],401);

        $token = $r->user()->createToken('api-token')->plainTextToken;
        return response()->json(['token'=>$token]);
    }

    public function logout(Request $r) {
        $r->user()->tokens()->delete();
        return response()->json(['message'=>'Logged out']);
    }
}

}
