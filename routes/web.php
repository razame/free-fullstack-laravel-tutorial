<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//  parameter (argument) means the values provided by the user
//  the url words written inside curly brackets is the user defined values and can be
//  called as arguments or parameters
Route::get(
    //jug or a container or balti
    '/sum-of-two-numbers/{n1}/{n2}',
    function ($number1, $number2) {
        // Function is like a module of an engine which either does some
        // functionality independently or receives some input from the user to do special task

        // dot means joining two strings (string means a group of characters)
        // --------- --------
        // I have added this line to demonstrate how to pull the code
        return "This is the sum of two numbers provided here: ".$number1 + $number2;
    }
);
