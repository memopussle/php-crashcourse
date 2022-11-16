<?php

/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/


$fruits = ['apple', 'orange','pear'];

// Get length
//echo count($fruits);

// Search array
// var_dump(in_array('apple', $fruits));

//  Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');


//remove from array
array_pop($fruits);
array_shift($fruits);
// unset($fruits[2]); // remove that item at that index


// Split into 2 chunks
// $chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);


// print_r($fruits); 

$arr1 = [1,2,3];
$arr2 = [4,5,6];

// merge array
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1,...$arr2]; // spread operator

// print_r($arr4); 


$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

//combine first array: key.2nd array: value
$c = array_combine($a, $b);

//  print_r($c);


$keys = array_keys($c);
// print_r($keys);

// flip 
// $flip = array_flip($c);
// print_r($flip);

// range number from 1-> 20. 0:1, 1:2,
$numbers = range(1,20);

// print_r($numbers);

// mao through the numbers array
$newNumbers = array_map(function($number) {
    return "Number ${number}";
}, $numbers);

// print_r($newNumbers);

// filter array
$lessThan10 = array_filter($numbers, fn($number) => $number <=10);

// print_r($lessThan10);

// reduce. $carry starts from 0->20.
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);