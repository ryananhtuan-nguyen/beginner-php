<?php
$y = 12;
function registerUser($email){
  // global $y;
  echo $email . ' registered';

}

// registerUser('Brad');


function sum($n1, $n2){
  return $n1+$n2;
}

echo sum(3,5);


echo '<h1> Hello World </h1>';

$response = file_get_contents('https://jsonplaceholder.typicode.com/posts/1');
var_dump($response);
$response = json_decode($response);

foreach($response as $index => $content){
  if($index == 'body') echo "<h2>$index</h2><br>" . $content;
  else{
  echo 
  "<h2>$index</h2>$content<br>";
  }
}

?>