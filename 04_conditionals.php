<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// $age = 20;
// if($age >= 18) {
//     echo 'You are old enough to vote';
// } else {
//     echo 'Sorry, you are not old enough to vote';
// }


 $t = date("H");

// echo $t;

// if($t < 12) {
//     echo 'Good morning';
// } else if($t < 17){
//     echo 'Good Afternoon';
// } else {
//     echo 'Good Evening';
// }

 $posts = ['First Post'];
// // check if $post not empty
// if(!empty($posts)) {
//     echo 123;
// } else {
//     echo 'No Posts';
// }

//Ternary operator 
// $firstPosts =  !empty($posts) ? $posts[0] : 'No Post';
// $firstPosts = $posts[0] ?? null;

//  echo $firstPosts;

// Switch statements
$favcolor = 'red';

switch($favcolor) {
    case 'red':
         echo 'Your fav color is red';
         break;
   case 'blue':
        echo 'Your fav color is blue';
        break;
  default:
       echo 'Your fav color is not green or red';
}