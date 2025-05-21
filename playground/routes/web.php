<?php

//<<<<<<< HEAD
//use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

$firstName = "John";
$age = 30;
$hobbies = ["reading","traveling","coding",30,true]; //single dimension array
$cars = [["honda"],["isuze"],["mazda"]]; //multiple dimension
// php artisan tinker
// copy code to terminal

//$profile [
//'firstName' => 'John',
//'lastName' => 'Doe'
//]; //associative (dictionary)-- uses key instead of index

$profile = (object) [
'firstName' => 'John',
'lastName' => 'Doe'
]; 

//Route::get



//=======
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    // logic here...
    //return view('welcome');
//});
// shortcut...
// Route::view('/', 'welcome');

//Route::get('/hello', function () {
    //return '<script> alert("hello world"); </script>';
//});

//Route::prefix('/users/admin/settings')
    //->name('admin.settings.')
    //->group(function () {
  //      Route::get('/profile/update')->name('profile.update');
        //Route::get('/account/update')->name('account.update');
        //Route::get('/portfolio/update')->name('portfolio.update');
    //});

//Route::fallback(function () {
    // return view();
    //return "<h1> Page Not Found </h1>";
//});

//Route::get('/users/show/{id?}', [UserController::class, 'show']);

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
// $cars = [
//     [
//         'honda'
//     ],
//     [
//         'toyota'
//     ]
// ];
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
//>>>>>>> 47bd091b24c8d8100b726bdf373977f19bbb3d17
;