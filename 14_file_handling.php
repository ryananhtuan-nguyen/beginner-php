<?php

/*---------File Handling---------- */

/*

  File handling is the ability to read and write files 
  on the server.
  PHP has built in functions for reading and writing files.


*/
$file = 'extras/user.txt';

if(file_exists($file)) {
  // echo readfile($file);
  $handle = fopen($file,'r');
  $content = fread($handle, filesize($file));
  
  fclose($handle);

  echo $content;
}else{

  $handle = fopen($file,'w');
  $content = 'Brad' . PHP_EOL .'Sara'. PHP_EOL .'John'. PHP_EOL .'Mike';
  fwrite($handle, $content);

  fclose($handle);

}













  ?>