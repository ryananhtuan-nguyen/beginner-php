<?php
  $fruits = ['apple', 'orange', 'pear'];

  //get length
  // echo count($fruits);

  // Search array (same like js .includes())
  // var_dump(in_array('apple', $fruits));

  //Add to array
  //Normal add
  $fruits[] = 'grape';
  // push to the end
  array_push($fruits, 'blueberry', 'strawberry');
  //push to the beginning
  array_unshift($fruits, 'mango');

  //-------remove from array
  //-------from the end
  array_pop($fruits);
  //-------from the beginning
  array_shift($fruits);
  //-------specific element
  // unset($fruits[2]);

  //----------split into 2 chunks
  // $chunked_array = array_chunk($fruits, 2);
  // print_r($chunked_array);
  // print_r($fruits);


  $arr1 = [1,2,3];
  $arr2 = [4,5,6];

  //---------merge
  $arr3 = array_merge($arr1, $arr2);
  //---------spread operator like js
  $arr4 =[...$arr1, ...$arr2];


  // print_r($arr4)

  $a = ['green', 'red', 'yellow'];
  $b = ['avocado', 'apple', 'banana'];
  //combine: make object from 2 arrays
  $c = array_combine($a, $b);
  // print_r($c);

  $keys=array_keys($c);

  // print_r($keys);

  //---------flipping keys & values
  $flipped = array_flip($c);

  // print_r($flipped);



  $numbers = range(1,20);

  // print_r($numbers);


  //array.map in js 
  $newNumbers = array_map(function($number){
    return "Number {$number}";
  },$numbers);

  // print_r($newNumbers);


  $lessThan10 = array_filter($numbers, fn($number)=>$number<=10);

  // print_r($lessThan10);

  //------REDUCE

  $sum = array_reduce($numbers, fn($a, $b)=> $a+$b,0);

  // var_dump($sum)




   

?>