<?php

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

if(isset($_POST['submit'])) {

      // htmlspecialchars() - Convert special characters to HTML entities
  // $name = htmlspecialchars($_POST['name']);
  // $email = htmlspecialchars($_POST['email']);


   // filter_input() - Sanitize inputs
//    $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS) ; 
//    $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_SPECIAL_CHARS);
//    echo $name;

 // filter_var() - Sanitize data
$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 $email = filter_var($_POST['age'],  FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 echo $name;


 
  // FILTER_SANITIZE_STRING - Convert string to string with only alphanumeric, whitespace, and the following characters - _.:/
  // FILTER_SANITIZE_EMAIL - Convert string to a valid email address
  // FILTER_SANITIZE_URL - Convert string to a valid URL
  // FILTER_SANITIZE_NUMBER_INT - Convert string to an integer
  // FILTER_SANITIZE_NUMBER_FLOAT - Convert string to a float
  // FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most other characters
}
?>



<!-- When hitting submit, value from input will change in php -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">
             Name:
        </label>
        <input type="text" name="name">
              <label for="age">
             Age:
        </label>
        <input type="text" name="age">
        <input type="submit" value="Submit" name="submit">
    </div>
</form>