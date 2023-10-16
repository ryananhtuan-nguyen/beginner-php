<?php

/* -----------------FOR loop------------*/


/*
**For loop syntax

  for(initialize; condition; increment){
    code
  }

*/

// for($x = 5; $x <=10; $x++){
//   echo 'Number ' . $x . '<br>';
// }


/*
**While loop Syntax
  while(condition){
    //code to be executed
  }
*/


// $x = 1;
// while($x<=15){
//   echo 'Number '. $x . '<br>';
//   $x++;
// }




/*--------------------Do while loop-------------*/

/*

** Do while syntax
  do{
    //code to be executed
  }while (condition);

do...while loop will always execute the block of code once, even if the condition is false.


*/

// $x = 6;

// do{
//   echo 'Number '. $x . '<br>';
//   $x++;

// }while($x<=5)




/*------------Foreach Loop ---------*/
/*
** Foreach loop syntax
  foreach($array as $value){
    //code to be executed
  }

*/

$posts = ['First Post', 'Second Post', 'Third Post'];

// for($x=0; $x< count($posts); $x++){
//   echo $posts[$x] . '<br>';
// }

// foreach($posts as $post){
//   echo $post . '<br>';
// }

// foreach($posts as $index => $post){
//   echo $index + 1 . '-'. $post . '<br>';
// }

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com'
];

foreach($person as $key=>$value){
  echo "$key - $value<br>";
}
?>