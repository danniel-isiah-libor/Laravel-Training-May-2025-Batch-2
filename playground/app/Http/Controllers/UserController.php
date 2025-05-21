<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function show($id = null)
    {
        // perform query.....
        return "User ID: $id";
    }

    public function register(Request $request)
    {
        // dump();
        // dd($request->name);
        // dd($request->date('birthdate'));

        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function profile()
    {
        return view('profile');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'max:255',
                'email',
                // 'unique:users,email'
            ],
            'password' => [
                'required',
                'string',
                'confirmed',
                Password::min(8)
                // ->max(12)
                // ->mixedCase()
                // ->numbers()
                // ->letters()
                // ->symbols()
                // ->uncompromised()
            ],
        ]);

        dd($request->email);

        // saving...
    }
}
