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
            <p>This is Task 4.</p>


<?php

/**
 * @param string $value
 *
 * @return string
 */

    echo "<br />Task 4A and 4B <br />";

    class myHouse{
	    // private properties
	    private $type; // detached, semi-detached, townhouse
	    private $size; // m2
	    private $color; // yellow grey

	    // constructor
	    public function __construct($Type, $Size, $Color){
		    $this->type = $Type;
		    $this->size = $Size;
		    $this->color = $Color;
	    }

	    // getter and setter functions for private fields
	    public function getTheType(){
		    return $this->type;
	    }

	    public function setTheType($value){
		    $this->type = $value;
	    }

	    public function getTheSize(){
		    return $this->size;
	    }

	    public function setTheSize($value){
		    $this->size = $value;
	    }

	    public function getTheColor(){
		    return $this->color;
	    }

	    public function setTheColor($value){
		    $this->color = $value;
	    }

	    // method
	    public function showOutput(){
		    return "I live in a " . $this->size . " square meter " . $this->color . " " . $this->type . ".";
	    }
    }

//////////////Task 4A//////////////////

    $home = new myHouse("townhouse", "250", "grey"); // an object
    echo $home->showOutput();

    echo "<br />";

/////////////////////Task4B////////////////

    $myHome = new myHouse("townhouse", "250", "grey");
    echo $myHome->showOutput();


//////////////////////////Task 4C///////////////////

    echo "<br />Task 4C<br />";

// set the properties for the house

    $myHome->setTheSize("155");
    $myHome->getTheSize();

    $myHome->setTheColor("yellow");
    $myHome->getTheColor();

    $myHome->setTheType("semi-detached");
    $myHome->getTheType();

    echo $myHome->showOutput();




?>



        </div>
    <footer>
        <p>N Sheik</p>
    </footer>
    </body>
</html>