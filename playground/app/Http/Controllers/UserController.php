<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

<<<<<<< HEAD
public function login(Request $request)
    {
        // dump();
        // dd($request->name);
        // dd($request->date('birthdate'));

        return view('login');
    }

=======
    public function login()
    {
        return view('login');
    }

    public function profile()
    {
        return view('profile');
    }
>>>>>>> 528f3cea34a75fe82971cdf97167c42b22c59127
}
