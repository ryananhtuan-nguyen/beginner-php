<?php

/* --------OPERATORS --------*/
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



/* ----------IF Statements ----------*/

/*

** If statement Syntax
if(condition) {
  //code to be executed
}

*/


$age =17;

// if($age>=18){
//   echo 'You are old enough to vote';
// }else {
//   echo 'Sorry You are not old enough to vote';
// }

$t = date("H");
// echo $t;
// if($t <12){
//   echo "Good morning";
// }elseif($t<17){
//   echo "Good afternoon";
// }else{
//   echo "Good night";
// }

$posts = ['First Post'];

// if(!empty($posts)){
//   echo $posts[0];
// }else{
//   echo 'No posts';
// }



// $firstPost = !empty($posts) ? $posts[0] : 'No posts';

// $firstPost = $posts[0] ?? null;
// echo $firstPost;


$favcolor = 'red';

switch($favcolor){
  case 'red':
    echo "Your favorite color is red";
    break;
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  case 'green':
    echo 'Your favorite color is green';
    break;
  default:
    echo 'Your favorite color is not red, green or blue';
}