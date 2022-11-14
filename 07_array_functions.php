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

print_r($arr3);
