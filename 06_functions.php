<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope
/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
$y =12;
  function registerUser($email) {
    global $y; // reference to y out of this function scope
    echo $email . ' User registered' ;
    
  }


//   registerUser('Brad');

function sum($n1 = 4, $n2 = 5) { // 4,5 default value
    return $n1 + $n2;
}

// echo sum(2,4);
$number = sum();
// echo $number;


$subtract = function($n1 , $n2) {
    return $n1 - $n2;
};
// echo $subtract(10, 5);

$multiply = fn($n1, $n2) =>  $n1 * $n2; // shorter way


echo $multiply(9,9);
