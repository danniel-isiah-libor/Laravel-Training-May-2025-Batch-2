<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // logic here...
    return view('welcome');
});
<<<<<<< Updated upstream
// shortcut...
// Route::view('/', 'welcome');

Route::get('/hello', function () {
    return '<script> alert("hello world"); </script>';
});

Route::prefix('/users/admin/settings')
    ->name('admin.settings.')
    ->group(function () {
        Route::get('/profile/update')->name('profile.update');
        Route::get('/account/update')->name('account.update');
        Route::get('/portfolio/update')->name('portfolio.update');
    });

Route::fallback(function () {
    // return view();
    return "<h1> Page Not Found </h1>";
});

Route::get('/users/show/{id?}', [UserController::class, 'show']);

Route::get('/register', [UserController::class, 'register']);

/**
 * PascalCase: Used for class names
 * camelCase: Used for variable names and function names
 * snake_case: Used for database columns and table names
 * kebab-case: Used for URLs
 */

// $firstName = "John"; // string
// $age = 30; // integer
// $height = 5.9; // float
// $isEmployed = true; // boolean

// $hobbies = ["reading", "traveling", "coding", 30, true]; // array
=======


Route::get('/hello', function () {
 return 'Hello Wordl!';
});


// $firstName = "John"; //String
// $age = 30; //integer
// $height = 5.9; //float
// $isEmployed = true; //boolean
// $hobbies = ["reading", "traveling", "coding", 30,true]; //array
>>>>>>> Stashed changes
// $cars = [
//     [
//         'honda'
//     ],
//     [
//         'toyota'
//     ]
// ];
<<<<<<< Updated upstream
// $profile = [
//     'firstName' => 'John',
//     'lastName' => 'Doe',
//     0 => 123,
// ];
// $profile = (object) [
//     'firstName' => 'John',
//     'lastName' => 'Doe',
// ];

// $address = null;
// $address = ''; // string but empty

// $address = null;
// $address = [];

// class Actions
// {
//     private function save()
//     {
//         //
//     }
// }

// class User extends Actions
// {
//     public function register()
//     {
//         (new Actions())->save();
//     }
// }
=======

// $profile = [
//     'firstName' => 'John',
//     'lastName' => 'Doe'
// ];

// $profile = (object) [
//     'firstName' => 'John',
//     'lastname' => 'Doe'
// ];

// $address = null;
// $address = ''; //string but empty

// $address = null;
// $address = [];
>>>>>>> Stashed changes
