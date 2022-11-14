<?php
//Simple Array
$numbers = [1,44,55,22];
$fruit = array('apple', 'orange', 'pear');

// var_dump($numbers);
// echo $fruit[1];


// Associate Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

//echo $colors[1];

$hex = [
    'red' => '#f00', // key => value
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'Thu',
    'last_name' => 'Giang',
    'email' => 'thu@someemail.com'

];

// echo $person['first_name'];

$people = [
   [
    'first_name' => 'Thu',
    'last_name' => 'Giang',
    'email' => 'thu@someemail.com'

   ],
   [
    'first_name' => 'Jon',
    'last_name' => 'White',
    'email' => 'john@someemail.com'

   ],
   [
    'first_name' => 'Nick',
    'last_name' => 'White',
    'email' => 'Nick@someemail.com'

]

   ];

// echo $people[1]['email']; // john@someemail.com
// var_dump($people); // telling type of variable
