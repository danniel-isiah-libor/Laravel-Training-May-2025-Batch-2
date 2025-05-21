<?php

namespace App\Http\Controllers;

use App\Models\Profile;
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

        Profile::create([
            'user_id' => 1,
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'is_active' => fake()->boolean(),
        ]);

        Profile::where('id', '=', 1)->update([
            'address' => fake()->address(),
        ]);

        Profile::where('id', '=', 1)->delete();

        Profile::where('id', '=', 1)->first();

        return redirect()->route('login');

        // Profile::insert([
        //     [
        //         'user_id' => 1,
        //         'address' => $request->address,
        //         'phone' => $request->phone,
        //         'is_active' => $request->is_active,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'user_id' => 2,
        //         'address' => $request->address,
        //         'phone' => $request->phone,
        //         'is_active' => $request->is_active,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ]);

        // $profile = new Profile();
        // $profile->user_id = 1;
        // $profile->address = $request->address;
        // $profile->phone = $request->phone;
        // $profile->is_active = $request->is_active;
        // $profile->save();
    }
}
