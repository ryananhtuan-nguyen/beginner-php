<?php
// echo- Output strings, numbers, html, etc

echo 123, 'Hello', 10.5;

//print - Works like echo, but can only take in a single argument
print 123;


//print_r() - Print single values and arrays
print_r([1,2,3]);

//var_dump() - Returns more info like data type and length
var_dump('Hello');
var_dump(true);

//var_export() - Similar. Outputs a string representation of a variable
var_export('Hello')


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?= 'Post one' ?></h1>
</body>
</html>