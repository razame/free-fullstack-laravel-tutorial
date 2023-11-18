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


Route::get(
    '/programming-constructs',
    function () {
        // functions

        // variables (integer, double, string, array, objects)
        // constants
        // loops (for, foreach, while, do-while)
        // return statements (echo, var_dump, dd, print, print_r)
        // exception handles
        // conditionals (if, else-if, else)


        $name = 'Syed Raza Mehdi Naqvi';                  // string
        echo $name;
        $numberOfStepsYouWalkEveryday = 1000;             // integer
        echo $numberOfStepsYouWalkEveryday;
        $petrolPrice = 280.84;                            // double/float
        $peopleToMeet = ['Raza Mehdi', 'Sajjad Askari'];  // array
        $person = '{
            "first_name": "Raza",
            "last_name": "Mehdi"
        }';   // object



//        echo $to.'<br>';
//        $address = '342, Ravi Block AI Town, Lahore';
//        echo $address.'<br>';
//        $first_name = 'Sajjad';
//        $first_prime_number = 2;
//        $firstPrimeNumber = 2;
//        const $PI = 3.14;

        // 2 x 1 = 2
        // 2 x 2 = 4
        // 2 x 3 = 6
        // 2 x 4 = 8
        // 2 x 5 = 10
        // ...
        // 2 x 10 = 20



        // 100 x 1 = 100
        // 100 x 2 = 200
        // 100 x 3 = 300
        // 100 x 4 = 400
        // 100 x 5 = 500
        // ...
        // 100 x 10 = 1000

        // =       assignment operator ()
        // ==
        // ===

        // number ki balti <- 1 liter
        for (
            $number = 1;      // Your first number will be 1
            $number <= 10;    // repeat the process until the $number exceeds 10
            $number++
            // Whenever the operation inside the body of loop
            // happens after that this operation should be done
        ) {
            echo '<br>'."$number x 100 = ".($number * 100);  // 8   Loop's body
        }





    }
);
