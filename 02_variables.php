<?php

/*------------PHP Data Types ------------*/
/*
-String     Series of characters surrounded by quotes
-Integer    Whole numbers
-Float      Decimal numbers
-Boolean    true/false
-Array      Special variable, which can hold more than one value
-Object     A class
-NULL       Empty variable
-Resource   Special variable that holds a resource
*/

/*------------- Variable Rules------------- */
/*
-Variables must be prefixed with $
-Variables must start with a letter or the undersocre character
-Variables can't start with a number
-Variables can only contain alpha-numeric characters and underscores (A-z, 0-9 and _)
-Variables are case-sensitive ($name and $NAME are two different variables)

*/

$name = 'Brad'; //String
$age = 40; //Int
$hasKids = true; //boolean
$cash_on_hand = 20.75; //Float


// echo $hasKids;
// var_dump($hasKids);

// echo $name . ' is ' . $age . ' years old';

// echo "${name} is ${age} years old"

$x =  '5' + '5';
var_dump($x);




define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
?>