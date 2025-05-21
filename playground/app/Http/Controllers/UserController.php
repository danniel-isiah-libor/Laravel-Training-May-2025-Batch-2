<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< Updated upstream
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
=======
    //
>>>>>>> Stashed changes
}
