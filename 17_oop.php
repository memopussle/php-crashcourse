<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way.
   OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  // Properties are just variables that belong to a class.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes

    public $name;
    public $email;
    public $password;

    // A contructor is a method that runs wen an object is created
    public function __construct($name, $email, $password){
        $this->name=$name;
        $this->email=$email;
        $this->password = $password;
       // echo 'constructor ran'; // ran twice bc constructor is called twice ($user1, $user2)
    }

      // Methods are functions that belong to a class.
      function set_name($name) {
        $this->name = $name; // this: current object 
      }

      function get_name(){
        return $this->name;
      }
}

// Instantiate a user object;
$user1= new User('Brad', 'brad@gmail', '3355');
$user2 = new User('John','gmail', 'password');

echo $user1->email;
echo $user2->name;


// $user1->set_name('Brad');
// $user2->set_name('John');

//  var_dump($user2);
// echo $user1->name;

// echo $user1->get_name();
// echo $user2->get_name();


/* ----------- Inheritence ---------- */
/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

class employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password); // use those properties fromparent
        $this->title= $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '4324','manager');

echo $employee1->get_title();