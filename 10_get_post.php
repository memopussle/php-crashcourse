<?php
/* --- $_GET & $_POST Superglobals -- */

if(isset($_POST['submit'])) {
   echo $_POST['name'];
   echo $_POST['age'];
}

?>

<!-- bring to this current link-->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=30">Click</a> 


<!-- When hitting submit, value from input will change in php -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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