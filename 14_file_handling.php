<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/user.txt';

if(file_exists($file)){
    // echo readfile($file);
    $handle = fopen($file, 'r'); // open fil for reading
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else{
      $handle = fopen($file, 'w');
  // PHP_EOL is a constant that represents the end of line character.
  $contents = 'Brad' .  PHP_EOL . 'Sara' .  PHP_EOL . 'Mike' .  PHP_EOL . 'John';
  // fwrite() writes the contents to the file and returns the number of bytes written on success, or FALSE on failure.
  fwrite($handle, $contents); 
  fclose($handle);
}