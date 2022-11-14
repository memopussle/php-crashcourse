<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for($x = 5; $x < 10; $x++) {
//     echo 'Number' . $x . '<br>';
// }



/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
// $x =1;

// while($x <=15) {
//     echo 'Number' . $x . '<br>';
//     $x = $x +1; // need to increment or its gonna keep looping
//}



/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 1;
 
//  do {
//      echo 'Number' . $x . '<br>';
//     $x++;
//  } while($x <=5); 



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$posts = ['1st post', '2nd post', '3rd post'];

// count($posts): length of $posts
// for($x = 0; $x < count($posts); $x++) {
//   echo $posts[$x];
// }

// foreach
// foreach($posts as $post) {
//     echo $post;
// }

// foreach($posts as $index => $posts) {
//     echo $index . '-' . $posts . '<br>';
// }


// $person = [
//     'first_name' => 'Brad',
//     'last_name' => 'Transversy',
//     'email' => 'brad@gmail.com'
// ];

// foreach($person as $key => $value) {
//     echo "$key - $value<br>";
// }