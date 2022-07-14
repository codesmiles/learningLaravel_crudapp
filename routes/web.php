<?php

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
 in the process if setting your laravel web app after installing composer and xampp
 then create new project by using composer create-project laravel/laravel myproject
 and setup your mysql database
 then on your terminal generate key with "php artisan key:generate" make sure your terminal is on the file directory
 then set up your database in your .env file
 then type "php artisan serve"
also remember that php must be present globaly un your local machine
*/

// routes
Route::get('/', function () {
    return view('listings', [
        'heading' => "latest listings",
        "listings" => [
            [
                "id" => 1,
                "title" => "listing 1",
                "description" => "lorem ipsum dolor sit amet",
            ],
            [
                "id" => 2,
                "title" => "listing 2",
                "description" => "lorem ipsum dolor sit amet 2",
            ]
        ]
    ]);
});




// PRACTICE
Route::get("/hello", function () {
    return response("<h1>welcome to laravel where absolute shit happens</h1>")
        ->header('content-type', "text/plain")
        ->header('foo', "bar");
});

Route::get("/post/{id}", function ($id) {
    ddd($id);
    return response("post id is " . $id);
})->where("id", "[0-9]+"); // id is referncing the wildcard or in express dynamic route

Route::get("/search", function (Request $request) { // receiving data from the parameter for use
    return $request->name . " " . $request->city; // if the parameters in the browser is being queried for name and city (?name=mike&city=lagos)
});// Question is whats the difference with this request anf wild card
