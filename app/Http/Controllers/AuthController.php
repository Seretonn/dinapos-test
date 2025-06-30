<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister () 
    {
        return view("auth.register");
    }
    
    public function showLogin ()
    {
        return view("auth.login");
    }

    public function register (Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users",
            "password" => "required|string|min:8|confirmed"
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect()->route("tasks.index");
        // ->with("success", "Post updated successfully");
    }
    
    public function login (Request $request) 
    {
        //
    }
}
