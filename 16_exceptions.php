<?php
/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. 
  An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block,
   to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

function inverse($x) {
    if(!$x){
        throw new Exception('Divide by zero');
    }
    return 1/$x;

}

// if inverse(0) is called  outside the try catch block, the error message is not helpful, everything stops working
try {
    echo inverse(0);//Uncaught Exception: Divide by zero -> still works after -> echo 'hello world';
echo inverse(0);
} catch(Exception $e) {
echo 'Caught Exception', $e->getMessage(), ' ';
} finally {
    echo 'First Finally';
}

try {
    echo inverse(0);
} catch(Exception $e) {
echo 'Caught Exception', $e->getMessage(), ' ';
} finally {
    echo 'Second Finally';
}

echo 'hello world';