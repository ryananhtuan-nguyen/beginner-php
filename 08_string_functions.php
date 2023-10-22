<?php

$string = 'hello world';

//Get length
echo strlen($string );

//Find the first position
echo strpos($string,'o');

//Find the last position
echo strrpos($string,'o');

//Reverse()

echo strrev($string);

// to LowerCase()

echo strtolower($string);

//to UpperCase()

echo strtoupper($string); 

//upper case first character of each word

echo ucwords($string);

//Replace

echo str_replace('world','everyone', $string);

//substring

//offset and length
echo substr($string,0,5);

//just length (start from index)

echo substr($string,5);

//ends with - true/false

if(str_ends_with($string,'ld')){
  echo 'YES';
}

//starts with - true/false

if(str_starts_with($string,'he')){
  echo 'YES';
}

$string2 = '<h1>Hello</h1>';
//remove the html tag 
//for security if someone trying to pass a script tag in
echo htmlspecialchars($string2);

//%s represent string.
//print out Brad likes to code.
printf('%s likes to %s', 'Brad', 'code');

//%d for digits - numbers, %f for float
printf('1+1=%d', 1+1)



?>