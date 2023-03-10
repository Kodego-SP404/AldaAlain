<?php 

/* ---- Conditionals & Operators ---- */
/* ------------ Operators ----------- */
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to (asssignment operator)
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

/* age = 20, let check if eligible to vote */
// $age = 17;

// if ($age >= 18) {
//    echo "You are eligible to vote!";
// } else {
//    echo "Sorry, you are too young to vote!";
// }

//1-12 - morning, 13-17 afternoon; 18 evening
// $t = date('H');
// $t = 15;
// echo $t;

// if ($t <= 12) {
//    echo "Good Morning!";
// } elseif ($t <= 17) {
//    echo "Good Afternoon";
// } else {
//    echo "Good Evening";
// }

$posts = ['Ayos'];

// if (!empty($posts)) {
//    echo $posts[0];
// } else {
//    echo "There are no posts!";
// }

/* Ternary Operator is a shorthand if statement */
// Ternary syntax

// $firstPost = !empty($posts) ? $posts[0] : 'No Post';
// echo $firstPost;

//Switch Statements
$favcolor = 'pink';

switch ($favcolor) {
   case 'red' :
      echo 'Your favorite color is red!';
      break;
   case 'green' :
      echo 'Your favorite color is green!';
      break;
   case 'blue' :
      echo 'Your favorite color is blue!';
      break;
   default:
      echo 'Your favorite color is neither red, green, nor blue!';
}




