<?php

/*------------Exceptions----------- */

/*

  PHP has an exception model similar to that of other programming languagues.
  An exception can be thrown, and caught ("catch") within PHP. Code 
  may be surrounded in a try block, to facilitate the catching of 
  potential exceptions. Each try must have at least one coressponding
  catch or finally block.

*/


function inverse($x){
  if(!$x){
    throw new Exception("Division by zero");
  }
  return 1/$x;
}

try{
  echo inverse(5);
  echo inverse(0);
}catch(Exception $e){
  echo 'Caught Exception', $e->getMessage(), ' ';
}finally{
  echo 'First Finally';
}

try{
  echo inverse(0);
}catch(Exception $e){
  echo 'Caught Exception', $e->getMessage(), ' ';
}finally{
  echo 'Second Finally';
}


?>