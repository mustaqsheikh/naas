<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My great web site</title>
        <meta name="description" content="Just a test website for learning html, css and php">
    </head>
    <body>
    <?php include 'menu.inc'; ?> 
        <header>

        </header>
        <div id="main-contents">
            <p>This is Task 3</p>

<?php

	/**
	 * @param string $value
	 *
	 * @return string
	 */


/////////////////////////Task3A//////////////////////

    echo "<br />Task 3A<br />";

    class Animal {
	    // private property
	    private $name;

	    // constructor
	    public function __construct($Name){
		    $this->name = $Name; // initialize property in a constructor
	    }

	    // getter and setter
	    public function getName(){
		    return $this->name;
	    }
	    public function setName($value){
		    $this->name = $value;
	    }

	    // method
	    public function Greet(){
		    return "Hello, I'm some sort of Animal and my name is " . $this->name;
	    }
    }

    // create an object

    $anAnimal = new Animal("Jock"); // an object
    echo $anAnimal->Greet();
    echo "<br />";

//////////////////////////Task 3B///////////////////////

    echo "<br />Task 3B<br />";
    class Dog extends Animal{
	    // private property
	    private $dogName;

	    // constructor
	    public function __construct($Name, $DogName){

		    $this->name = $Name; // initialize this name // from parent class
		    $this->dogName = $DogName;

		    // call the parent constructor
		    parent::__construct($Name);
	    }

	    // getter and setter for the dog Name
	    public function getDogName(){
		    return $this->dogName;
	    }
	    public function setDogName($value){
		    $this->dogName = $value;
	    }


	    // method overriding
	    public function Greet(){
		    return "Hello, I'm a " . $this->dogName . " and my name is " . $this->name;
	    }
    }

    $aDog = new Dog("Jock", "dog");
    echo $aDog->Greet();



?>



</div>
<footer>
    <p>N Sheik</p>
</footer>
</body>
</html>